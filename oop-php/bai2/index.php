<?php
//chong ke thừa
final class A
{
    public function test()
        //class A k cho class khác kế thừa nó
    {
        return 'this is test';
    }
}

/*class B extends A
{

}
$b = new B;
echo $b->test();*/
//implements

//chống việc override

class Demo
{
    final public function  test()
    {
        return 'this is test';
    }
}

class Demo2 extends Demo
{
    // trong class này không được phép override phương thức test vì có final


    /*public function test()
    {
        return 'this is test demo2';
    }*/

    public function test2()
    {
        return $this->test();
    }
}
$d = new Demo2;
echo $d->test2();