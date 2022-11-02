<?php
//////////////////////////////////////
/// clone///////////////////////////
//tạo ra 1 đối tượng mới từ đối tượng cũ có sẵn, khi có thay đổi sẽ không làm ảnh hưởng tới đối tượng cũ

class Animal
{
    private $name;

    public function setName($value)
    {
        $this->name = $value;
    }
    public function getName()
    {
        return $this->name;

    }
}

$catA = new Animal;
$catA ->setName('con meo A');
echo $catA->getName();
echo "<br>";

$catB = clone $catA;
$catB->setName('meo b');
echo $catB->getName();
echo "<br>";

echo $catA->getName();