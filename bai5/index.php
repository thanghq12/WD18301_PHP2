<?php
//include_once "models/Customer.php";
//include_once "models/Product.php";
//include_once "controllers/CustomerController.php";
//include_once "controllers/ProductController.php";
require_once "vendor/autoload.php";
use App\Controllers\ProductController;
use App\Models\Product;

$productModel = new Product();
$productController = new ProductController();
