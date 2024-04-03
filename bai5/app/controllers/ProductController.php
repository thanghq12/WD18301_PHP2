<?php
namespace App\Controllers;
use App\Models\Product;
class ProductController extends BaseController {
    public function __construct()
    {
//        echo "Đây là product controller";
    }
    public function index() {
        $product = new Product(); // khởi tạo model
        $products = $product->getProduct(); // hứng data từ model trả về
        $title = "abc";

       return $this->render("product.index",
           compact('title','products'));
    }

}