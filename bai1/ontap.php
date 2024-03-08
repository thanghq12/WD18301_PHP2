<?php
$a = 5;
$b = 5.5;
$c = "Fpoly";
//echo "helo ".$c;
$mang = [5,6,7,8];
//for($i = 0; $i < count($mang) ; $i ++) {
//    echo $mang[$i];
//}
//foreach ($mang as $key => $value) {
//    if($value % 2 == 0) {
//        echo $value . "<br>"; // ra những giá trị trong mảng
//    }
////    echo $key; //ra những vị trí trong mảng
//}
//mảng liên hợp là mảng  có key tự set được
$manglh = ["A"=>5,"B"=>6,"C"=>7,"D"=>8];
echo $manglh["B"]."<br>";
echo $manglh["D"];
// hiển thị các phần tử trong mảng là số chẵn sử dụng foreach
//tạo 1 mảng gồm 10 phần tử
//hiển thị tâất cả các phần tử trong mảng
//hiển thị tất cả các phần tử
// là số chẵn trong mảng
//đếm xem trong mảng có bao nhiêu phần tử
//là số chẵn
//tính tổng các phần tử trong mảng

//echo $mang[1];
//echo $mang[2];
//echo $mang[3];
$mangColor = ["red"=>"Màu đỏ","green"=>"Xanh dương","blue"=>"Xanh nước biển"];
// đổ mảng color ra bảng với cột trái hiển thị tên màu bằng tiếng
// anh cột phải hiển thị tên màu bằng tiếng việt
// mỗi dòng sẽ được tô màu tương ứng với key màu của dòng đó
?>
<table border="1">
    <tr>
        <td>Key</td>
        <td>Value</td>
    </tr>
    <?php foreach ($mangColor as $key => $value) { ?>
    <tr bgcolor="<?php echo $key; ?>">
        <td><?php echo $key ;?></td>
        <td><?php echo $value ;?></td>
    </tr>
    <?php } ?>
</table>

