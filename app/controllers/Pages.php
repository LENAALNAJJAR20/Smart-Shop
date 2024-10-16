<?php

class Pages extends Controller
{

    public function __construct()
    {

        if (!isloggedin()) {
            redirect('users/login');
        }
        $this->shopModel = $this->model('Shop');
        $this->userModel = $this->model('User');
    }

    public function index()
    {
        $banners = $this->shopModel->getBanners();
        $Categories = $this->shopModel->getCategories();

        $data = [
            'Categories' => $Categories,
            'banners' => $banners,
        ];

        $this->view('pages/index', $data);
    }

    public function about()
    {
        $comments = $this->shopModel->getComments();
        $admin = $this->userModel->getTeamAdmin();
        $data = [
            'admin' => $admin,
            'comments' => $comments,
        ];

        $this->view('pages/about', $data);
    }

    public function contact()
    {
        // Fetch categories to display on the contact page
        $Categories = $this->shopModel->getCategories();

        // Initialize data array
        $data = [
            'Categories' => $Categories,
            'full_name' => '',
            'email' => '',
            'subject' => '',
            'message' => '',
            'full_name_err' => '',
            'email_err' => '',
            'subject_err' => '',
            'message_err' => ''
        ];

        // Check if form was submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize and validate POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Assign POST data to the data array
            $data['full_name'] = trim($_POST['full_name']);
            $data['email'] = trim($_POST['email']);
            $data['subject'] = trim($_POST['subject']);
            $data['message'] = trim($_POST['message']);

            // Validate form data
            if (empty($data['full_name'])) {
                $data['full_name_err'] = 'Please enter your full name';
            }
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter your email';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['email_err'] = 'Please enter a valid email address';
            }
            if (empty($data['subject'])) {
                $data['subject_err'] = 'Please enter the subject';
            }
            if (empty($data['message'])) {
                $data['message_err'] = 'Please enter the message';
            }

            // If there are no errors, process the form
            if (empty($data['full_name_err']) && empty($data['email_err']) &&
                empty($data['subject_err']) && empty($data['message_err'])) {
                $userModel = $this->model('ContactUs');
                $userModel->contactInfo($data);
                flash('contact_message', 'We will contact you soon');
                redirect('pages/contact');
            } else {
                // Load the contact form with errors
                $this->view('pages/contact', $data);
            }
        } else {
            // Load the contact form with categories (GET request)
            $this->view('pages/contact', $data);
        }
    }


    public function blog(){
        $bloge= $this->shopModel->getbloges();
        $Categories = $this->shopModel->getCategories();
        $data = [
            'bloges'=> $bloge,
            'Categories' => $Categories
        ];

        $this->view('pages/blog', $data);
    }
///
    public function details(){
        $data = [];

        $this->view('pages/details', $data);
    }

    public function shop()
    {
        // is used to retrieve the current page number from the URL query string
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $rows_per_page = 6;
        $start = ($currentPage - 1) * $rows_per_page;

        $category_id = isset($_GET['category_id']) ? (int)$_GET['category_id'] : null;
        $totalProducts = $this->shopModel->getTotalProducts();
        $totalPages = ceil($totalProducts / $rows_per_page);
        //(7/3)=2.3 //ceil(2.3)=3

        $Categories = $this->shopModel->getCategories();
        $shops = $this->shopModel->getproduct($start, $rows_per_page);

        if ($category_id) {
            $shops = $this->shopModel->getProductsByCategory($category_id);
        } else {
            $shops = $this->shopModel->getproduct($start, $rows_per_page);
        }
        $data = [
            'Categories' => $Categories,
            'shops' => $shops,
            'totalPages' => $totalPages,
            'currentPage' => $currentPage,
            'selectedCategory' => $category_id
        ];

        $this->view('pages/shop', $data);
    }

    public function cart()
    {
        $data = [];

        $this->view('pages/cart', $data);
    }

    public function checkout()
    {
        $data = [];

        $this->view('pages/checkout', $data);
    }


    public function wishlist()
    {
        $userId = $_SESSION['user_id'];

        $wishlist = $this->shopModel->getUserWishlist($userId);

        $data = [
            'wishlist' => $wishlist
        ];

        $this->view('pages/wishlist', $data);

    }

    public function addToWoWishlist()
    {
        $userId = $_SESSION['user_id'];
        $productId = $_POST['product_id'];
        $data = [
            'user_id' => $userId,
            'product_id' => $productId
        ];
        // Check if the product already exists in the wishlist
        if ($this->shopModel->productExistsInWishlist($data)) {
            flash('Product_message', ' Product delete from wishlist');
            header('Location: ' . URLROOT . '/pages/shop');

        } else {
            // Add the product to the wishlist


            if ($this->shopModel->addwishlist($data)) {
                // Redirect after successful addition
                header('Location: ' . URLROOT . '/pages/wishlist');
                flash('wishlist_message', ' Product add from wishlist');
                exit(); // Ensure that the script stops after redirection
            } else {
                echo 'Failed to add product to wishlist!';
            }
        }
    }

    public function deletewishlist()
    {
        if (isset($_SESSION['user_id']) && isset($_POST['product_id'])) {
            $userId = $_SESSION['user_id'];
            $productId = $_POST['product_id'];
            $this->shopModel->deleteFromWishlist($userId, $productId);
            flash('Product_message', ' delete done');
            header('Location: ' . URLROOT . '/pages/wishlist');

        }


    }

    public function myProfile()
    {
        $user_id = $_SESSION['user_id'];
        $posts = $this->shopModel->getProductByUserId($user_id);

        $data = [
            'posts' => $posts,
            'user_id' => $user_id
        ];

        $this->view('pages/myProfile', $data);

    }

    public function deletePost()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $userId = $_SESSION['user_id'];
        if (!$this->shopModel->deleteFromWishlist($userId, $id)) {
            return false; // If deletion from wishlist fails, return false
        }
        if ($this->shopModel->deleteProductById($id)) {
            flash('post_message', 'Post Removed');
            redirect('pages/myProfile');
        } else {
            die('Something went wrong');

        }
    }
    public function addComments()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'name' => trim($_POST['name']),
                'comment' => trim($_POST['comment']),
                'position'=> trim($_POST['position']),
                'name_err' => '',
                'comment_err' => '',
                'position_err' => '',
            ];

            // Validate name
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter your name.';
            }

            // Validate comment
            if (empty($data['comment'])) {
                $data['comment_err'] = 'Please enter a comment.';
            }

            if (empty($data['position'])) {
                $data['position_err'] = 'Please enter your position.';
            }
            // Check for errors
            if (empty($data['name_err']) && empty($data['comment_err']) && empty($data['position_err'])) {
                if ($this->shopModel->addComments($data)) {
                    redirect('pages/about'); // Adjust this if needed
                } else {
                    error_log('Failed to add comment to the database.');
                    redirect('pages/about'); // Adjust this if needed
                }
            } else {
                // Load view with errors
                $this->view('pages/index', $data);
            }
        } else {
            // Initialize data for GET request
            $data = [
                'name' => '',
                'comment' => '',
                'position' => '',
            ];
            $this->view('pages/index', $data);
        }
    }


}

