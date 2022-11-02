<?php
require 'database.php';

class LoginModel extends Database
{
    public function __construct()
    {
        parent::__construct();
        //sử dụng được cả construct của thằng cha và con
    }

    public function checkConnection()
    {
        if ($this->db){
            return true;
        }
        return false;
    }
    public function checkUserLogin($user, $pass)
    {
        $info = [];
        if ($this->checkConnection()){ //thực sự kết nối data có thì mới kết nối
            if ($user ==='admin' && $pass === '123'){ //check data có giống k
                return $info = [
                    'id' => 1,
                    'username' => 'admin',
                    'email' => 'admin@gmail.com',
                ];
            }
        }
        return $info;
    }
}