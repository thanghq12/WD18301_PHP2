<?php
$a = 5;//viết chương trình kiểm tra xem đây là số
$b = 6;
// chẵn hay lẻ
//Trường hợp không dùng hàm
//trường hợp dùng hàm
function ktChanLe($a) // tất cả những gì nằm
// /trong khe ngoặc được gọi là tham số
{
    if ($a % 2 == 0) {
        echo "Đây là số chẵn";
    } else {
        echo "Đây là số lẻ";
    }
}
//ktChanLe($a); //gọi và sử dụng hàm
//ktChanLe(6);

//viết 1 hàm tính chu vi hình chữ nhật với
// tham số truyền vào là chiều dài và chiều rộng
//viết 1 hàm tính diện tích hình chữ nhật với
// tham số truyền vào là chiều dài và chiều rộng
//Hàm là 1 đoạn code được viet gọn lại 1 chỗ
// với mục đích tái sử dụng  và quản lý code dễ hơn
//hàm không trả về
function tinhDienTich($chieudai,$chieurong) {
    echo $chieudai *$chieurong;
}
tinhDienTich(7,5) ;
function tinhDienTichCtv($chieudai,$chieurong)
{
    return $chieudai * $chieurong;
}
echo tinhDienTichCtv(8,6) + 10;

//hàm chia thành 2 loại:
//-có trả về (trong hàm có chữ return gọi là hàm có trả về)
//- ko trả về (Trong hàm không chữ return gọi là hàm ko trả về)
//viết 1 hàm tính diện tích  hình vuông có trả về;
function tinhDienTichHv($a) {
    return $a * $a;
}
echo tinhDienTichHv(5);
?>