<?php
class SinhVien {
    //Đây là thuộc tính tức là biến trong class
    public $maSV; // ddaay là biến trong class (thuộc tính)
    public $tenSV;
    public $namSinh;
    //phương thức tức là hàm trong class
    public function setMaSV($maSV) { // đây là tham số của hàm
        $this->maSV = $maSV;
    }
    public  function hienThiThongTin() {
        //muốn sử dụng thuộc tính thì phải dùng $this->
        echo "Mã :".$this->maSV."Tên :".$this->tenSV."Năm sinh: ".$this->namSinh;
    }
    //tạo phương thức set giá trị

}
// tạo ra đối tượng sinh viên (có new là tạo  ra đối tượng)
$sv = new SinhVien();
$sv->setMaSV("PP12345");
//làm haàm set tên và set năm sinh
// gọi phương thức trong class
$sv->hienThiThongTin();
//tạo class GiangVien gồm thuộc tính ($maGV,$tenGV,$luong)
//tạo phương thức set cho các thuộc tính trên
//tạo phương thức hiển thị thông tin giống như SinhVien
//tạo ra đối tượng giảng viên và gọi các phương thức set và hiển thị thông tin như SinhVieen
?>