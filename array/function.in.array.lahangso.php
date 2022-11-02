<?php
$arr = [
    'name' => 'nguyen hai duong'
];

$arrayConvert = array_change_key_case($arr, 1);
print_r($arrayConvert);
$arrayNumbers = [1,1,2,3,41,1,5,3,3,6,7,8,9];
$count = array_count_values($arrayNumbers); //đếm số lượng giống nhau trong mảng ,trả về key và giá trị giống nhau
echo "<pre>";
print_r($count) ;

$arrPush = array_push($arrayNumbers, 100, 200,300,'DUONG'); //NHET CAC PHAN TU VAO CUOI MANG
print_r($arrayNumbers);

$arrPop = array_pop($arrayNumbers);//xoas phan tu cuoi mang
print_r($arrayNumbers);
echo $arrPop; //tra ve phan tu bi xoa

$arrUnshift = array_unshift($arrayNumbers,$arrPop);
print_r($arrayNumbers);//them phan tử vào đầu mảng

$arrShift = array_shift($arrayNumbers);
print_r($arrayNumbers);//xoa phần tử ở đầu mảng
print_r($arrShift);//trả về phần tử bị xóa

$arrChild = array_chunk($arrayNumbers, 4);
print_r($arrChild);//tách mảng, mỗi mảng có 4 phẩn tử

if(is_array($arrChild)){//kiem tra bien co phai la kieu mang hay khong
    echo "y";
}else{
    echo "n";
}
echo "<br>";
$fruits =['cam', 'tao', 'mit', 12,3,4,5];
if (in_array('cam', $fruits)){//kiem tra xem gia tri co nam trong mang hay khong
    echo 'co';
}else{
    echo 'khong';
}
echo "<br>";

$staff = [
    'id' => 1,
    'name' => 'nguyen hai duong',
    'address' => 'ha noi'
];
//kiem tra xem key(chi so phan tu) co nam trong mang hay khong?
if (array_key_exists('id',$staff)){
    echo 'co';
}else{
    echo 'khong';
}
echo "<br>";

$phantugiongnhau = [1,2,1,2,3,2,3,4,3,4,5,4,5];
//xoa cac phan tu giong nhau trong mang
$newKhongconphantugiongnhau = array_unique($phantugiongnhau);
print_r($newKhongconphantugiongnhau);

//chuyen key mang khong tuan tu về key dạng số
$chuyenkey = array_values($staff);
print_r($chuyenkey);

//tinh tong cua cac phan tu trong mag
$sum = array_sum($phantugiongnhau);
echo $sum;
echo "<br>";

$staffs = [
    [
        'id' => 1,
    'name' => 'nguyen hai duong',
    'address' => 'ha noi'
        ,
        'luong' => 33
    ],
    [
    'id' => 2,
    'name' => 'nguyen hai duong',
    'address' => 'ha noi',
        'luong' => 22
        ]
];
$tongluong =0;
foreach ($staffs as $key => $item){
    $tongluong += $item['luong'];
}
echo $tongluong;

$arrNumber3 = [12,3,4,5,7,8,9,1,3,2];
$child = array_slice($arrNumber3, 5,2,true);
print_r($child);//tách mảng từ vị trí số 5 từ đàu mảng trở đi, độ dài mảng 2, true = vị trí không bị đảo

$childs = array_slice($arrNumber3, 5);
print_r($childs);//tách mmảng lấy mảng từ vị trí thứ 5 trở đi

$arrReplace = array_splice($arrNumber3, 1,2,[100,200]);
print_r($arrNumber3);//thay thế các phần tử vào vị trí các phần tử cần thay thế

$endd = end($arrNumber3);
print_r($endd);//LẤY RA phần tử cuối cùng của mảng