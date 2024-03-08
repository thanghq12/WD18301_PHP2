<?php
$url = isset($_GET['url']) ? $_GET['url'] :"/";
include_once "controllers/ProductController.php";
switch ($url) {
    case "/":
      //viết các xử lý ở trong case này
        listProduct();
     break;
     //tạo các url add-product,edit-product;
    //bên ProductControler tạo 2 hàm:
    //- addProduct (echo đây là trag thêm sản phẩm)
    //- editProduct (echo đây là trang sửa sản phẩm)
}
?>