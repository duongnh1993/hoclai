<?php
//nó được chay ngay sau khi có đối tượng được khỏi tạo từ class. nó chạy đầu tiên
//chay trước tất cả các methor của class
class Student
{
    private $name;

    public function __construct()
        //thường được ứng dụng  vào khởi tạo 1 công việc gì dó ví dụ như khởi tạo 1 section hay khởi tạo kết nối database
    {
        echo 'đã chạy vào phương thức construct';
    }

    public function setName($value)
    {
        $this->name=$value;
    }

    public function getName()
    {
        return $this->getName();
    }
    public function __destruct()
        //được chạy ngay sau khi có đối tượng được khởi tạo từ class. chạy sau tất cả cá phương thức trong class. chờ cho mọi thứ chạy xong nó mới chạy
        //thường đóng session đóng database hay đóng file
    {
        echo "<br>đã chạy vào phương thức destruct";
    }

    //construct có tham số truyền vào

}
echo "<br>";
$student = new Student;
class Students
{
    private $name;
    private $email;
    private $phone;
    public function  __construct($name, $email, $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function getInfor()
    {
        $infor = 'tên của bạn là: ' .$this->name;
        $infor .= '<br>emai cua ban la:' .$this->email;
        $infor .= 'số điện thoại của bạn là: ' .$this->phone;

        return $infor;
    }
}
$st = new Students('nguyen hai duong', 'duongnh@hotmail.com', '09888888888');
echo $st->getInfor();