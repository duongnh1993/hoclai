<?php
//kiểm tra xem file có tồn tại hay không?
if(file_exists('test.txt')){
    echo "file có tồn tại";
}else{
    echo "file không tồn tại";
}
echo "<br>";

//kiểm tra xem file co dược cap quyen ghi hay khong?
if (is_writable('test.txt')){
    echo "file có quyền ghi";
}else{
    echo "file không có quyền ghi";
}

//ghi dữ liệu vào file mà k cần dùng fwrite, nó sẽ ghi đè, xóa dữ liệu cũ
//file_put_contents('test.txt','sắp được về ok?');
if (file_exists()){
    rename('newfile','test.txt');
}
//rename('newfile','test.txt');
//copy('test.txt','.lamviecvoifile/fileupload');

@unlink('fileupload');//xoafile
@copy('test.txt', '../fileupload/1.txt');//@khong hien thi warning
echo "<br>";

if (is_dir('./data')){
    echo 'ton tại thu mục';
}else{
    //khong có thì tạo thư mục
    mkdir('./data');
}