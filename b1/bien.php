<?php
$txt = "hello world";
$x = "5";
$y = 10.5;
echo $txt .' '. $x .' '. $y;
echo "<br>";


$txt = "helllo word";
echo $txt;
echo "<br>";
$x = '9.985';
var_dump($x);
echo "<br>";

$str = "count word in string";
echo strlen($str);
echo "<br>";
print_r(str_word_count($str, 2));//hàm đếm số từ trong chuỗi
echo "<br>";
echo(strrev($str));// hàm đảo ngược chuỗi
echo "<br>";
echo strpos($str,'ou');// tìm kếm 1 văn bản vụ thể trả về vị trí kí tự
echo "<br>";
echo str_replace("in", "on",$str);//thay thế ký tự bằng ký tự khác trong chuỗi
echo "<br>";

echo strlen("xin chào thế giới");//lấy độ dài của chuỗi.

$aa = 1234;
var_dump(is_int($aa));// kiểm tra xem số có phải lả kiểu số nguyên hay không.
var_dump(is_numeric($aa));//kiểm tra xem kiểu dữ liệu có phải là kiểu số hay không

echo "<br>";
$flt = 100.5234;
$chuyenveInt= (int)$flt;
echo $chuyenveInt;
echo "<br>";
$strNumber = "a123,123";
$chuyenveInt1= (int)$strNumber; //chuyển chuỗi về số nguyên
echo $chuyenveInt1;
echo "<br>";
//các hàm toán học
echo pi();

echo "<br>";
echo min(8,2,3,4,5,6,7) ;

echo "<br>";
echo max(8,2,3,4,5,6,7) ;
echo "<br>";
echo round($flt);//làm tròn số thập phân
echo "<br>";
echo rand(5,9999);
echo "<br>";

define('AN_TET','phai co banh chung');
echo AN_TET;
echo "<br>";
const square = 'has 4 right angles';
echo square;
echo "<br>";

define('myname','nguyen hai duong');
echo myname;
echo "<br>";

$test ="";
echo empty($test) ?? 1;

