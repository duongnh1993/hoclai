<?php
if (isset($_POST['btnLogin'])) {
    /*$num1 = $_POST['number1'] ?? 0;
    $num2 = $_POST['number2'] ?? 0;
    if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
        $title = $_POST['number1'] + $_POST['number2'];
        echo $title;
    } else {
        echo "dữ liệu nhập vào không phải là số";
    }*/

//hoac vie theo keiu nay
    $num1 = $_REQUEST['number1'] ?? 0;
    $num1 = is_numeric($num1) ? $num1 : '';
    $num2 = $_REQUEST['number2'] ?? 0;
    $num2 = is_numeric($num2) ? $num2 : '';
    //lay dữ liệu từ thẻ select option
    $gender = $_REQUEST['gender'] ?? '';
    echo $gender;
    $tichchon = $_REQUEST['agree'] ?? 'bạn chưa tích chọn';
    echo $tichchon;
    $radio = $_REQUEST['radioCheck'] ?? 'bạn phải tích radio';
    echo $radio;
    die();//dừng chương trình k chạy bên dưới
    if (empty($num1) || empty($num2)) {//empty chưa nhập dữ liệu
        echo "du lieu khong pha so";
    } else {
        $tong = $num1 + $num2;
        echo $tong;
    }
}
//không nên dung request vì nó chậm hơn get và post chỉ khi nào k biết rõ biến get và pót thì dùng
