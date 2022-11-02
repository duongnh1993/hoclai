<?php
//final trong php oop
//dùng để chống ghi đè dữ liệu và chống kế thừa


 final class Animal
{
    /* final*/
    public function sounding()
    {
        return 'quy dinh tiếng kêu';
    }
}
class Cat extends Animal
{
    public function sounding()
    {
        return 'meo meo';
    }
}
$cat = new Cat;
echo $cat->sounding();

