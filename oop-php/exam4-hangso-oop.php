<?php
class Database
{
    const HOST_NAME = 'localhost';

    const USER_NAME = 'root';

    const PASSWORD = '111';

    const DB_NAME = 'php oop';

    //truy cập hằng bên trong class
    public function getHostName()
    {
        //k dùng $this mà dùng self::
        return self::HOST_NAME;
    }

}
//ĐỂ TRUY CÂP THÌ K CẦN KHỞI TẠO ĐỐI TƯỢNG. GỌI TÊN CLASS RỒI :: VÀ TÊN BIẾN
echo Database::USER_NAME;
echo "<br>";
echo Database::HOST_NAME;

echo "<br>";
//khởi tạo cho functione ở trên
$db = new Database;

//->dùng thằng
echo $db->getHostName();

echo "<br>";
echo Database::PASSWORD;
echo "<br>";
echo Database::DB_NAME;



