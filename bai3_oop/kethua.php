<?php
class ConNguoi {
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    public function setChan($chan) {
        $this->chan = $chan;
    }
    public function an() {
        echo "ăn bằng mồm";
    }
}
class NguoiLon extends ConNguoi { // phải kế thưa mới sử dụng được thuộc tiính và phương thức

    public $longNach;

    public function di() {
        echo "Đi bằng".$this->chan."Đi bằng". $this->tay;
    }

    public function noi() {

    }
}
class TreCon {
    public function bo() {

    }
}

// khởi tạo 1 tk người lớn
$nl = new NguoiLon();
$nl->setChan(2);
$nl->di();
//khởi tạo 1 tk trẻ con và xây dựng phương thức
//bo () -> hien thị trẻ con bò bằng 2 tay 2 chân

