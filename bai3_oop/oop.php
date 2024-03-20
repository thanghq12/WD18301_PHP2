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
class GiangVien {
    //đây là thuộc tính // tức biến trong class
    public $maGV;
    public $tenGV;
    public $luong;
    public $soGioGiang;
    // tạo phương thưức tức là hàm trong class
    // phương thức khởi tạo (hàm tạo)
    // hàm tạo là 1 magic function trong class
    // khi khởi tạo đối tượng (Hàm tạo luôn được gọi)
    // hàm tạo bao goom 2 loại
    // hàm tạo có tham số (Khi khoi tao doi tuong se phai truyen gia tri luôn)
    public function __construct($maGV,$tenGV,$luong,$soGioGiang) // đây la hàm tạo
    {
        $this->maGV = $maGV;
        $this->tenGV = $tenGV;
        $this->luong = $luong;
        $this->soGioGiang = $soGioGiang;
    }

    public function setMaGV($maGV) {
        $this->maGV = $maGV;
    }
    public  function setTenGV($tenGV) {
        $this->tenGV = $tenGV;
    }
    public function setLuong($luong) {
        $this->luong = $luong;
    }
    public  function tongLuong() {
        return $this->luong * $this->soGioGiang;

    }
    public function hienThiThongTin() {
        echo "Mã GV: ". $this->maGV .
            "Tên GV: ".$this->tenGV.
            "Lương:".$this->luong.
            "Tổng lương".$this->tongLuong();
        ;
    }
}
$gv = new GiangVien("GV001","Nguyễn Văn A",100,7); // khởi tạo 1 ông giảng viên
// tạo ra 1 ông giảng viên mới
$gv->setMaGV("123");
//$gv->setTenGV("Nguyễn Văn A");
//$gv->setLuong(12312421);
//tính tổng lương GV (Thêm thuộc tính số giờ giảng )
//tổng lương GV = luong * so giờ giảng
$gv->hienThiThongTin();
// baitap (lấy điểm ASS GD1 + lab )
// tạo class NhanVien gồm các thuộc  tính
// $maNV,$tenNV,$namSinh,$luongCoBan,$soGioLam
// tạo phương thức khởi tạo có tham số
// tạo phương thức tính tuổi có return (năm hiện tại - năm sinh)
// tạo phươn thức tính tổng lương có return ($luongCoBan * $soGioLam)
// tạo phương thức hiển thị thông tin NhanVien
//maNV + tuổi + tên + tổng lương + cấp cán bộ
// lưu ý nếu  luong < 5000 -> cấp cán bộ 1
 //               luong >=5000 và luong < 10000 -> cấp 2
//              luong > 10000 -> cấp 3
?>