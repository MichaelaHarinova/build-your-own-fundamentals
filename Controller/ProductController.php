<?php
declare(strict_types = 1);

class ProductController
{
    private Connection $db;

    public function __construct()
    {
        $this->db = new Connection();
    }
    public function showProducts(): void
    {
        $products = ProductLoader::getAllProducts($this->db);
        require 'View/infoProducts.php';
    }

}
