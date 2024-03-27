<?php
include_once "nsp1.php";
include_once "nsp2.php";
$sv = new NSP1\SinhVien("Abc ",1996);
$sv2 = new NSP2\SinhVien("BCD",18);
$sv->hienThiThongTin();
$sv2->hienThiThongTin();
//namespace là không gian tên giúp phân biệt
// các class,function,bien ở các file khác nhau
// nhưng có tên giống nhau
// namespace luon luon được đặt ở đầu file php
