<?php

class Product extends Controller
{
    public function __construct()
    {
        $this->shopModel = $this->model('Shop');

    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (isset($_FILES['image_url'])) {
                $img_name = $_FILES['image_url']['name'];
                $img_size = $_FILES['image_url']['size'];
                $tmp_name = $_FILES['image_url']['tmp_name'];
                $error = $_FILES['image_url']['error'];
                $folder = $img_name;
                move_uploaded_file($tmp_name, $folder);
            }

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'Categories' => $this->shopModel->getCategories(),
                'name' => trim($_POST['name']),
                'price' => trim($_POST['price']),
                'description' => trim($_POST['description']),
                'quantity' => trim($_POST['quantity']),
                'image_url' => $folder,
                'category_id' => trim($_POST['category']),
                'name_err' => '',
                'price_err' => '',
                'description-err' => '',
                'quantity_err' => '',
            ];

            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter name';
            }
            if (empty($data['price'])) {
                $data['price_err'] = 'Please enter price';
            }
            if (empty($data['description'])) {
                $data['description_err'] = 'Please enter description text';
            }
            if (empty($data['quantity'])) {
                $data['quantity_err'] = 'Please enter quantity';
            }
// make sure not error
            if (empty($data['name_err']) && empty($data['price_err']) && empty($data['quantity_err']) && empty($data['description_err'])) {
                if ($this->shopModel->addproduct($data)) {
                    flash('Product_message', 'product Added');
                    header('Location: ' . URLROOT . '/pages/shop');
                } else {
                    die("something went wrong");

                }
            } else {
                // load views with error
                $this->view('product/add', $data);
            }
        } else {
            $data = [
                'Categories' => $this->shopModel->getCategories(),
                'name' => '',
                'price' => '',
                'description' => '',
                'quantity' => '',
                'image_url' => '',
                'category' => ''
            ];
            $this->view('product/add', $data);
        }
    }

    public function edit($id)

    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Fetch the existing product details
            $product = $this->shopModel->getProductById($id); // Add this method to fetch product details
            $folder = $product->image_url;

            // Handle image upload
            if (isset($_FILES['image_url']) && $_FILES['image_url']['error'] === UPLOAD_ERR_OK) {
                $img_name = $_FILES['image_url']['name'];
                $img_size = $_FILES['image_url']['size'];
                $tmp_name = $_FILES['image_url']['tmp_name'];
                $error = $_FILES['image_url']['error'];

                // Define the upload folder (make sure this directory exists and is writable)
                $folder = 'uploads/' . basename($img_name);

                // Move the uploaded file to the specified directory
                if (move_uploaded_file($tmp_name, $folder)) {
                    // If file uploaded successfully, $folder will contain the new image path
                } else {
                    // Handle error if needed
                    die("Failed to upload image");
                }
            }
            $data = [
                'id' => $id,
                'Categories' => $this->shopModel->getCategories(),
                'name' => trim($_POST['name']),
                'price' => trim($_POST['price']),
                'description' => trim($_POST['description']),
                'quantity' => trim($_POST['quantity']),
                'image_url' => $folder,
                'category_id' => trim($_POST['category']),
                'name_err' => '',
                'price_err' => '',
                'description_err' => '',
                'quantity_err' => '',
            ];

            // Validation
            if (empty($data['name'])) $data['name_err'] = 'Please enter name';
            if (empty($data['price'])) $data['price_err'] = 'Please enter price';
            if (empty($data['description'])) $data['description_err'] = 'Please enter description text';
            if (empty($data['quantity'])) $data['quantity_err'] = 'Please enter quantity';

            // Check for errors
            if (empty($data['name_err']) && empty($data['price_err']) && empty($data['quantity_err']) && empty($data['description_err'])) {
                if ($this->shopModel->updateProduct($data)) {
                    flash('Product_message', 'Product Updated');
                    redirect('pages/myProfile');
                } else {
                    die("Something went wrong");
                }
            } else {
                $this->view('product/edit', $data);
            }
        } else {
            // Fetch the existing product details
            $product = $this->shopModel->getProductById($id);

            $data = [
                'id' => $id,
                'Categories' => $this->shopModel->getCategories(),
                'name' => $product->name,
                'price' => $product->price,
                'description' => $product->description,
                'quantity' => $product->quantity,
                'image_url' => $product->image_url,
                'category_id' => $product->category_id
            ];
            $this->view('product/edit', $data);
        }
    }
}

?>
