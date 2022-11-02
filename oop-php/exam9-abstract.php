<?php
//class abstract có phương thức trừu tượng, những class khác kết thừa slass abstract đó sẽ phải định nghĩa lại những phương thứ absrac có trong class abstract đó
abstract class Xe
{
    abstract function banhXe();
    abstract function khungXe();
    abstract function phanhXe();

    protected function thanXe()
    {
        //code
    }
}
class XeMay extends Xe
{

    //tất cả đã được định nghĩa lại phía dưới này
    public function khungXe()
    {
        return __METHOD__;
    }

    public function banhXe()
    {
        return __METHOD__;
    }

    public function phanhXe()
    {
        return __METHOD__;
    }
}
// không thể khai báo hay koiwr tạo 1 abstract
$xemay = new XeMay;