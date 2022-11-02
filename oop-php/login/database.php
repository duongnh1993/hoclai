<?php
//tạo class kết nối tới csdl
class Database
{
    protected $db;

    public function __construct()
    {
        //kết nối thành công tới db
        $this->db = true;
    }

    public function __destruct()
    {
        //đóng data
        $this->db = false;
    }
}
