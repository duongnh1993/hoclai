<?php
    //nhận dữ liệu từ phía client gửi lên
    $name = $_POST['nameSingle'] ?? '';
    $name = strip_tags($name);

    if (!empty($name)){
        //co du lieu gui len
        $fp =  fopen('data.txt', 'r');
        if ($fp){
            //doc du lieu tu file ra
            $data = fread($fp, filesize('data.txt'));
            fclose($fp);

            //lam thế nào để so dánh từ khóa người dùng gửi lên có nằm trong danh sách không
            $arrData = explode(',',$data);
            print_r($arrData);
        }
    }else{
        //khong co du lieu gui len
    }