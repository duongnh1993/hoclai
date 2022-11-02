<?php
//nhan du lieu tu get.php gui len
//vi ben phia get.php gui du lieu len bang me thod Get nen chung ta se se dung bien  toan cục kiểu mảng của php là $_GET
$id = $_GET['id'] ?? 0; //daaus ?? giong nhu ham isset kiem tra xem bien dos cos ton tai hay khong neu cos tra ve gia tri cua id, k tonf tai thif tra ve 0
$name = $_GET['name'] ?? '';
$age = $_GET['age'] ?? 0;
echo "id: {$id} - name: {$name} - age: {$age}";

//kiem tra xem thuc su co ton tai method get tu form gui len chua?(bam login chua)
if (isset($_GET['btnLogin'])){
    //lấy thông tin tư form gửi lên
    $user = $_GET['userName'] ?? '';
    $password = $_GET['passWord'] ?? '';
    echo $user . $password;
}