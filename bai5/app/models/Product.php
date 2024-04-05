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
    // viet function addProduct()
    public function addProduct($id,$tenSp,$gia) {
        $sql = "INSERT INTO $this->table VALUES (?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$tenSp,$gia]);
    }
    public function updateProduct($id,$tenSp,$gia) {
        $sql = "UPDATE $this->table SET name = ?,price = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$tenSp,$gia,$id]);
    }
    public  function getDetailProduct($id) {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function deleteProduct($id) {
        $sql= "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}