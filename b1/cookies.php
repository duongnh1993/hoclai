<?php
echo "cookies in php";
//save dât to cookie
// lưu trữ dữ liệu trên client
setcookie('name', 'duong', time() + 24*3600);
// name là key, thoi han kết thuc
//time() la thoi diem hiện tại 24 là 1 ngày 3600 la số giay trong 1 giờ
if (isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}
//setcookie('name', '', time() - 24 * 3600);// xoa cookie


