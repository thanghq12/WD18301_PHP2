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
    public function updateProduct($id) {
        if (isset($_POST['edit'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $product = new Product();
            $product->updateProduct($id,$name,$price);
            echo "sửa thành công";
        }
    }
    public function deleteProduct($id) {
        $product = new Product();
        $product->deleteProduct($id);
        echo "Xóa thành công";
    }

}

// bài ASS GD 2
// tạo CSDL QLKH gôồm các bảng sau
//Category(id,name ) // thực hiện chưức năng thêm sưửa xóa hiển thị danh sách
//Customer (id,name,email)// thực hiện chưức năng thêm sưửa xóa hiển thị danh sách
//Couse (id,name,price,category_id ) // thực hiện chức năng thêm sửa xóa
//yêu cầu xây dựng chức năng trên base đã học
// mỗi bảng sẽ có Model,Controller,View , và các route tương ứng