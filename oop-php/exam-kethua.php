<?php
class Person
{

    public $name = 'nguyễn hải dương';

    protected $phone = '0912321321';

    private $address = 'hai duong';

    public $age = '22';

    public function getAddress()
    {
        return $this->address;
    }
}
//kế thừa trong oop cho phép class con sử dụng lại toàn bộ các thuộc tính & phương thức của lớp cha. nhưng thuốc tính và phương thức đó phải mang cơ chế public hoặc phải là protected
// để kế thừa thì ta dùng từ khóa <extends>
class Student extends Person
{
    public function getAge(){
        return $this->age;
    }
    //phải dùng phương thức public function của thằng con thì mới truy cập thuộc tính từ bên ngoài của thằng cha được
    public function getPhone()
    {
        return $this->phone;
    }
    //không dùng được private của thằng cha ở lớp con. vì nó chỉ dùng đc ở trong class

}
$st1 = new Student;
echo $st1->name;
echo"<br>";
//chỉ thằng cha thuộc tính là public thì thằng con mí truy câp được từ bên ngoài
echo $st1->getPhone();

echo"<br>";
echo $st1->getAddress(); // muốn in đc thuộc tính address ra ngoài thì phải dùng phương thức public function getaddree rồi truy cập nó ngoài class là được, và nó k kế thừa cho thằng con đươc
echo"<br>";

echo $st1->getAge();
echo"<br>";