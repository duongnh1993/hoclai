<?php
$arrNumber = [9,3,6,5,1,7,3,8,4];
$asortNumber = asort($arrNumber);
print_r($arrNumber); /// sắp xếp tăng dần, key giữ nguyên
echo "<br>";

$arrNumber2 = [5,2,6,1,8,4];
$sortNumber = sort($arrNumber2);
print_r($arrNumber2);//sắp xếp mảng tăng dần. key cũng gán lại từ 0 đến n.


$arrData = [
   'student' => [
              'name' => 'duong',
              'address' => 'hanoi'
                ],
    'teacher'  => [
                'name' => 'phuoc',
                'address' => 'daclak'
                    ],
     'phuhuynh' => [
                  'name' => 'hung',
                  'address' => 'hanoi'
                    ]
];

ksort($arrData); //sắp xếp mảng dựa vào key theo alpha B
echo "<pre>";
print_r($arrData);

$arrData2 = [
    'hocsinh' => [
        'name' => 'duong',
        'address' => 'hanoi'
    ],
    'giaovien'  => [
        'name' => 'phuoc',
        'address' => 'daclak'
    ],
    'truong' => [
        'name' => 'hung',
        'address' => 'hanoi'
    ]
];
krsort($arrData2);//sắp xếp mảng theo key giảm dần
print_r($arrData2);

$arrNumberS= [19,3,16,5,1,7,3,8,14,2,1,5];
function sapxepMang($arrNumberSort){
    foreach ($arrNumberSort as $k => $v){
        foreach ($arrNumberSort as $kk => $giatri) {
            if ($arrNumberSort[$kk] > $arrNumberSort[$k]) {
                $trunggian = $arrNumberSort[$k];
                $arrNumberSort[$k] = $arrNumberSort[$kk];
                $arrNumberSort[$kk]= $trunggian;
            }
        }
    }
    return $arrNumberSort;
}
$sx = sapxepMang($arrNumberS);
print_r($sx);


    if (in_array('19',$arrNumberS)){
        echo 'co';
    }else{
        echo 'khong';
    }
echo "<br>";

function timKiemPhanTuTrongMang($a, $arr){
   foreach ($arr as $i => $j){
       if ($j==$a) {
           return true;
       }
   }
   return false;

}
if (timKiemPhanTuTrongMang(4, $arrNumberS)){
    echo "co";
}else{
    echo "khong";
}

$link = "https://vnexpress.net/cua-ngo-ha-noi-tp-hcm-un-tac-ngay-cuoi-nghi-le-4507101.html";
function getID($url)
{
    $chuyenChuoiVeMang = explode('-', $url);
    $strStringId = end($chuyenChuoiVeMang);
    $id = intval($strStringId);//lấy số khỏi chuỗi
    return $id;
}

$timId = getID($link);
echo "id cua bai viết là: {$timId}";