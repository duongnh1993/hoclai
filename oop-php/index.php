<?php
//class trong php
class Students
{
    //dinh nghia hằng số trong class -không được dùng define
    const PI =3.14;

    //thuoc tinh
    public $name = 'duong';
    //co the sd ở bất kì nơi đâu = NÓ GIỐNG BIẾN, thể hiện thông tin và tính chất của đối tượng


    protected $sđt = '0988222888';
    //chi sd noi bọ trong class và những class kế thừa. giống như chỉ cho bạn bè xem mà k công khai

    private $luong = '111222333';
    //chi 1 mình mình biết


    //thuộc tính với từ khóa static
    public static $age = 30;

     /////khai báo phương thước(hanh dong cua class)
    public function goToSchool()
        //no giống như hàm - METHOD
    {

        //có thể dùng bất kì đâu, trong ngoài hàm để được
        return 'di hoc o truong ben tam' .$this->tienLuong(); //nó tương đương $svCK = new Students; chỗ đoạn khởi tạo đối tượng
    }


    //phuong thức chỉ sd nội bộ trong class và lớp kế thừa
    protected function tienLuong()
    {
        return '10000000000';
    }



    //phương thức chỉ 1 mình mình biết
    private function dangKyHocPhan()
    {
        //chi sd nội bộ trong class vì nó là private
        return 'hoc php';
    }





    //khai bao phương thức với từ khóa static
    public  static  function eating()//eating là static nên không phải là object(đối tượng) nên không thể dùng this. muốn dùng phải khởi tạo đối tượng $x=neww...
    {
        // $ob = new Students;
        return 'cake' . (new Students)->tienLuong(); //cach viết tắt
        //$ob->tienLuong();
        $aaa = new Students;
        $aaa-> tienLuong();

    }




    public function getAge()
    {
        //return Students::$age;

        return self::$age . self::PI; //truy cap vao age laf dung self(chinh la class Students<no chi sd duoc trong class> )
        //(1)
    }
}




//khoi tao đối tượng trong class (tạo ra đối tượng)
$svCK = new Students;
$svIT = new Students;






//truy cập vào thuộc tính hay phương thức
//truy cập vào phương thức tên
$nameST = $svIT->name;
echo 'truy cập vào thuộc tính(biến) public: ' .$nameST;
echo '<br>';





//truy cập vào phương thức public(function)
$school = $svCK->goToSchool();
echo 'truy cập vào phương thức public(function): ' .$school;
echo '<br>';




//truy cập vào từ khóa static. lấy thẳng tên class truy cập vào biến đó là xong
$ageSV = Students::$age;
echo 'truy cập vào thuộc tính(biến static): ' .$ageSV;
echo '<br>';




//truy cập vào public staticfunction
$eat = Students::eating();
echo 'truy cập vào phương thức(function): ' .$eat;
echo '<br>';

//(1)
echo $svIT->getAge();
echo '<br>';



/// khai niệm về class
/// 1 class có thể tạo ra n object và 1 object chỉ thuộc 1 class
///