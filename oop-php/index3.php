<?php
class User
{
    public $fullName = 'Van Teo';//thuộc tính giống như biến

    public $userName;
    public $email;

    public function  __construct($user = '', $email = '')//phương thức giống như hàm
    {
        $this->userName = $user;
        $this->email = $email;
        //phương thức magic luôn có 2 dấu gạch dưới liền nhau đứng đằng trước tên ham- nó là phương thức khởi tạo và chạy đầu tiên trong class khi gọi class ra sử dụng(khởi tạo đối tượng cho class do)
        //__FUNCTION__; lấy ra phương thức đang làm việc
        echo "phương thức " . __FUNCTION__. ' vua chay';
        echo '<br>';

    }





    public function getName()
    {
        return $this->userName;//
    }


    public function __destruct()//ham hủy- luôn luôn tự động cạy cuối cùng trong class
    {
        echo '<br>';
        echo 'phuong thuc' .__FUNCTION__. ' vừa chạy';
        // TODO: Implement __destruct() method.
    }


    public function __call($req, $res)//hàm __call bắt buộc phải truyền vào 2 tham số
        //khi truy cập vào phương thức k tồn tại thì hàm call sẽ chạy
    {
        echo '<br>';
        print_r($req);
        echo '<br>';
        print_r($res);
        echo '<br>';
        echo 'ban vừa truy cập vào phương thức ko tồn tại trong class';
        echo '<br>';
    }

    public static function __callStatic($method, $params) //echo  User::getAddress('ha noiiiii');
        //khi truy cập vào phương thức k tồn tại thì hàm call sẽ chạy
    {
        // TODO: Implement __callStatic() method.
        echo '<br>';
        print_r($method);
        echo '<br>';
        print_r($params);
        echo '<br>';
        echo 'ban vừa truy cập vào phương thức static ko tồn tại trong class';
        echo '<br>';
    }

    public function __get($nameProperty)
    {
        echo '<br>';
        echo 'ban vua truy cap vao thuoc tinh' . $nameProperty . 'khong ton tại trong class';
        echo '<br>';
    }

    public function __set($name, $value)
    {
        echo "bạn vừa truy cập vào thuộc tính " . $name . "không tồn tại trong class và ban đã gán giá trị : ". $value . " cho thuộc tính đó";
        echo '<br>';
    }
}

//khởi tạo class
$user = new User('admin', 'admin@admin.com');
echo $user->getName();
echo $user->getEmail('aaa' , 11);
echo  User::getAddress('ha noiiiii');

echo $user->address = 'ha noi';//khi truy cập thuộc tính không tồn tại mà mình gán giá trị cho nó hàm set sẽ chạy.
