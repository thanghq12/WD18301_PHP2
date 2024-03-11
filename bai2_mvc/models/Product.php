<?php
include_once "db.php";
function getProduct() {
    $sql = "SELECT * FROM product";
    return getData($sql);
}