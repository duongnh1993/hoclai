<?php
//ke thừa trong php
class Animals
{
    public $name = 'Tom';
    protected $color = 'black';



    public function  goToSleep()
    {
        return $this->name;
    }
}

//extends chỉ hỗ trợ kế thừa đơn không hỗ trờ đa kế thừa mà phải dùng từ trait
class Cats extends Animals
{
    public $name = 'tom2';
    public function getColor()
    {
        return $this->color;
    }

    public function goToSleep()
    {
        return $this->name;
    }
    public function wakeup()
    {
        //gọi phương thức lớp cha
        return parent::goToSleep();
    }
}
$tom = new Cats;
echo $tom->wakeup();
echo '<br>';




//PHƯƠNG THỨC MAGIC