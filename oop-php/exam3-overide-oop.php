<?php
class Persons
{
    private $notice = 'chưa ghi đè dữ liệu';

    public function getMessage()
    {
        echo $this->notice . __METHOD__;
        echo "<br>";
    }

}
class Students extends Persons
{
    public $notice = 'thông báo từ lớp con đã ghi đè lớp cha';

    public function getMessage()
    {
        parent::getMessage(); //chống ghi đè dữ liệu tuyệt đối thì chúng ta dùng parent sau khi mà dùng từ khoa nay thì nó sẽ in luôn cả getMessage của thằng cha và thằng con từ echo $st1->getMessage();
        echo $this->notice . __METHOD__;

        echo "<br>";
    }

}
$st1 = new Students;
echo $st1->notice;
//giống như khai báo biến và ghi đè như biến
//vì bản chất thuộc tính là biến trong class
echo "<br>";
echo $st1->getMessage();
echo "<br>";
//chống ghi đè dữ liệu tuyệt đối thì chúng ta dùng parent

//hằng số