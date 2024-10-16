<?php
class Shop extends Controller{
    private $db;

    public function __construct() { // any thing come with Database.php

        $this->db = new Database; // call constructor with database.php
    }
    public function getCategories() {
        $this->db->query("SELECT * FROM categories");
        $result = $this->db->resultSet();
        return $result;
    }
    public function getBanners() {
        $this->db->query("SELECT * FROM banners");
        $result = $this->db->resultSet();
        return $result;
    }
    public function addproduct($data){
        $this->db->query("INSERT INTO products(name,price,description,quantity,image_url,category_id,user_id) VALUES(:name,:price,:description,:quantity,:image_url,:category_id,:user_id)");

// to conect data
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':quantity', $data['quantity']);
        $this->db->bind(':image_url', $data['image_url']);
        $this->db->bind(':category_id', $data['category_id']);
        $this->db->bind(':user_id', $_SESSION['user_id']);
        // to  enshure that Execute stmt in data base file
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function getproduct($start, $rows_per_page){
        $sql = "SELECT * FROM products LIMIT $start, $rows_per_page";
        $this->db->query($sql);
        $result = $this->db->resultSet();
        return $result;
    }
    public function getTotalProducts() {
        $sql = "SELECT COUNT(*) AS total FROM products";
        $this->db->query($sql);
        $result = $this->db->single();
        return $result->total;
    }
    public function getProductsByCategory($categoryId, $start = 0, $rows_per_page = 3) {
        $sql = "SELECT * FROM products WHERE category_id = :category_id LIMIT :start, :rows_per_page";
        $this->db->query($sql);
        $this->db->bind(':category_id', $categoryId, PDO::PARAM_INT);
        $this->db->bind(':start', $start, PDO::PARAM_INT);
        $this->db->bind(':rows_per_page', $rows_per_page, PDO::PARAM_INT);
        $result = $this->db->resultSet();
        return $result;
    }
    public function getUserWishlist($userId) {
        $this->db->query("SELECT p.* FROM products p JOIN wishlist w ON p.id = w.product_id WHERE w.user_id = $userId");
        $result = $this->db->resultSet();
       return $result;
    }

    public function addwishlist($data){
        $this->db->query("INSERT INTO wishlist(product_id,user_id) VALUES(:product_id,:user_id)");
        $this->db->bind(':user_id', $_SESSION['user_id']);
        $this->db->bind(':product_id', $_POST['product_id']);

        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function productExistsInWishlist($data) {
        $this->db->query("DELETE FROM wishlist WHERE user_id = :user_id AND product_id = :product_id");
        $this->db->bind(':user_id', $_SESSION['user_id']);
        $this->db->bind(':product_id', $_POST['product_id']);

        $row = $this->db->single();
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteFromWishlist($userId, $productId) {
        $this->db->query("DELETE FROM wishlist WHERE user_id = :user_id AND product_id = :product_id");
        $this->db->bind(':user_id', $userId);
        $this->db->bind(':product_id', $productId);

        return $this->db->execute();
    }

    public function getbloges() {
        $this->db->query("SELECT * FROM blogs");
        $result = $this->db->resultSet();
        return $result;
    }

    public function getProductById($id) {
        $this->db->query("SELECT * FROM products WHERE id = :id");
        $this->db->bind(':id', $id);
        $result = $this->db->single(); // Fetch single record

        return $result; // This should return an object or null
    }

    public function getProductByUserId($user_id) {
        $this->db->query("SELECT * FROM products WHERE user_id = :user_id");
        $this->db->bind(':user_id', $user_id);
        $rows = $this->db->resultSet();
        return $rows;
    }
    public function deleteProductById($id) {
        $this->db->query("DELETE FROM products WHERE id = :id");
        $this->db->bind(':id', $id);
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    public function updateProduct($data)
    {
        $this->db->query("UPDATE products SET name = :name, price = :price, description = :description, quantity = :quantity, category_id = :category_id, image_url = :image_url WHERE id = :id");
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':quantity', $data['quantity']);
        $this->db->bind(':category_id', $data['category_id']);
        $this->db->bind(':image_url', $data['image_url']);

        return $this->db->execute();
    }
    public function addComments($data)
    {
        // Prepare the query
        $this->db->query("INSERT INTO comments (name,position, comment) VALUES (:name,:position, :comment)");
        // Bind parameters
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':position', $data['position']);
        $this->db->bind(':comment', $data['comment']);

        // Execute and return the result
        return $this->db->execute();
    }
    public function getComments(){
        $this->db->query("SELECT * FROM comments");
        $result = $this->db->resultSet();
        return $result;
    }
}


