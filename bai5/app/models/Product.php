<?php
namespace App\Models;
class Product extends BaseModel {
    protected $table = "product";
    // tạo hàm lấy dữ liệu từ product
    public function getProduct() {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}