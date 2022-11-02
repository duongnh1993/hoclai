<?php
//thuộc tính tĩnh và phương thức tĩnh
//thuộc tính tĩnh là biến được khai báo trong class thì phải kèm theo từ khóa static
// =>nó có phương thức tĩnh là hàm được khai báo trong class kem the từ khóa static

class Student
{
    static $name = 'dương';

    static  function getName()
    {
        return self::$name;
    }

}

//cách truy cập ngoài class thì là tên class::tenthuoctinh();
//cách truy cập phương thức ngoài class teenclass::teenphuowngthuc();

//truy cập bên trong class thì dùng từ khóa self
    //self::tenthuoctinh()
    //self::tenphuongthuc()
echo Student::$name;
echo "<br>";
echo Student::getName();

//ưu điểm của thuộc tính tĩnh static là truy cập nhanh giống như hằng số


