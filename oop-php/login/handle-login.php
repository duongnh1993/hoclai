<?php
require "login-model.php";
class HandleLogin
{
    private $user; // khởi tạo đối tượng
    private $pass;
    private $loginModel;
    public function __construct() //  phương thức
    {
        $this->loginModel = new LoginModel();//sử dụng contruct khởi tạo đối tượng ngay ở đây
        ////tí nữa có thể truy cập đc vào trong model
    }
    public function login()
    {
        if (isset($_POST['login'])) {
            $this->user = $_POST['username'] ?? '';
            $this->pass = $_POST['password'] ?? '';
            $info = $this->loginModel->checkUserLogin($this->user, $this->pass);
            //LoginModel chính là khởi tạo đối tượng

            if (!empty($info)) {//login thành công chuyển đến trang...
                header('Location:home.php');
            } else {
                header('Location:index.php?state=error');
            }
        }
    }
}
$login = new  HandleLogin();//khởi tạo đối tượng (đặt tên biến = new + tên class)
$login->login();//gọi hàm để test