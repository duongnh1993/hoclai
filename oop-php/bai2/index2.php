<?php
class ConNguoi
{
    private $name = 'amonymouse';

    public function setName($a)
    {
        $this->name = $a;
    }

    public function getName()
    {
        return $this->name;
    }
}

//khởi tạo đối tượng con người
$chuBlog = new ConNguoi();
//set name cho đối tượng
$chuBlog->setName('Vũ Thanh Tài');
//in ra name của đối tượng
echo $chuBlog->getName();
//kết quả: Vũ Thanh Tài
//khởi tạo đối tượng Con người
$nguoixem = new ConNguoi();
//hiển thị ra tên người xem
echo $nguoixem->getName();
//Kết quả: amonymouse