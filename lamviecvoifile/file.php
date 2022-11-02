<?php
$fopen = fopen('test.txt', 'r+');//r là
if ($fopen) {
    //echo "mo file thanh cong";

    //doc du lieu trong file:
    //r:chi đọc
    //r+: đọc và ghi
    //w: chỉ ghi

    //$docdulieutrongfile = fread($fopen, filesize('test.txt'));

   //ghi du liệu vào file r+
    $input = 'ahihi';
    fwrite($fopen,$input);

    ///doc du lieu vừa ghi ra
    $fp = fopen('test.txt', 'r');
    $doc = fread($fp,  filesize('test.txt'));
    echo $doc;
    fclose($fp);
    fclose($fopen);
}else{
    echo "khong the mo file";
}

/////////////các hàm tiện ích làm việc với file