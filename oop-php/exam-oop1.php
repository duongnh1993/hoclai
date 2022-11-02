<?php
class Students
{
    //khai báo thuộc tính public
    public $name = 'nguyen hai duong';

    public $email = 'nguyenhaiduong@outlook.com';

    protected $firstName = 'nguyen';
    //khai báo thuộc tính protected cho phép truy cập trong class và class kế thừa thôi
    protected $email2 = 'abs@gamil.com';
    //nếu muốn truy cập thuộc tính protected thì phải tạo hàm(phương thức-public function)


    //khai báo hàm trong class đó là hàm trong class
    public function getfirstName()
    {
        //lấy name mang cơ chế là protected lấy thông qua object <echo $doituongsinhvien->name;> phải đi qua hàm trung gian để lấy ra cái name protected

        // từ hàm getName truy cập đến biến name, để truy cập tới thuộc tính hay phương thức trong class thì dùng từ khóa <$this>
        return $this->firstName. '  được lấy ra vào lúc     '.$this->getTime();
    }

    public function getemail()
    {
        return $this->email2;
    }



    //protected cho phương thức(hàm trong class)
    protected function getTime()
    {
        return date('y-m-d h:s', time());
    }

    private $address = "ha noi"; // chỉ cho phép truy cập trong class
    public function getAdress()
    {
        return $this->address;
    }
}

//tạo ra đối tượng để dùng nó  như tin ra màn hình
$doituongsinhvien = new Students;

//để truy cập vào thuộc tính(biến trong class ta làm như sau)
echo $doituongsinhvien->name;
echo "<br>";
echo $doituongsinhvien->email;
echo "<br>";
//public nó cho phep truy cập cả ngoài class


echo $doituongsinhvien->getfirstName();
echo "<br>";
echo $doituongsinhvien->getemail();
echo "<br>";

//muốn truy cập được thuộc tính private address ngoài class thì phải khai báo phương thức public cho nó rồi truy cập bên ngoài class
echo $doituongsinhvien->getAdress();

