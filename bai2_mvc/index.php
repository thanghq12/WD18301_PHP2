<?php
$url = isset($_GET['url']) ? $_GET['url'] :"/";
include_once "controllers/ProductController.php";
switch ($url) {
    case "/":
      //viết các xử lý ở trong case này
        listProduct();
     break;
    case "add-product":
        addProduct();
        break;
    case "edit-product" :
        editProduct();
        break;
        //tạo 1 file CustomerController
    //tạo ra các url list-customer,add-customer,edit-customer
    //làm y sì như product
     //tạo các url add-product,edit-product;
    //bên ProductControler tạo 2 hàm:
    //- addProduct (echo đây là trag thêm sản phẩm)
    //- editProduct (echo đây là trang sửa sản phẩm)
}
?>