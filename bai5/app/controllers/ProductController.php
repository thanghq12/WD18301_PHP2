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
    public function addProduct() {
        return $this->render("product.add");
    }
    public function postProduct() {
            if(isset($_POST["add"])) {
                $name = $_POST["name"];
                $price = $_POST["price"];
                $product = new Product();
                $product->addProduct(NULL,$name,$price);
                echo "Thêm thành công";
            }
        // khi người dùng ấn nút add thì form sẽ action sang hàm này để xử lý

    }
    public function detail($id) {
        $product = new Product();
        $pro = $product->getDetailProduct($id);
        return $this->render("product.edit",compact('pro'));
    }

}