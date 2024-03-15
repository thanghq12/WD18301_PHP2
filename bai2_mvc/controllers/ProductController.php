<?php
include_once "models/Product.php";
function listProduct() {
//    echo "Đây là danh sách sản phẩm";
    $products = getProduct();
    // sử dụng product ở bên view bình thường
    include_once "views/product/index.php";
}
function addProduct() {
    echo "đây là hàm add sản phẩm";
}

function editProduct()
{
    echo "Đây là hàm sưửa sản phẩm";
}