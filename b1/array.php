<?php
/*$cars = ["toyota",
    "bwm",
    "mecerdes",
    "suzuki",
    "honda",
    "mazda",
    "huyndai",
    "kia",
    ];
$arrLength = count($cars);// dem so phan tu cua mang
for ($row = 0; $row < $arrLength; $row++){
    echo $cars[$row];
    echo "<br>";
}

$cakes = [
    "banh chung" => [2, "nhan thit"],
    "banh pia" => [5, "nhan sau rieng"],
    "banh dau xanh" => [10, "nhan dau xanh"]
];
foreach ($cakes as $key => $value){
    foreach ($cakes as $index => $gt){

        print_r($cakes[$key][$index]);
        echo "<pre>";
    }
}*/
function check_prime_number($n){
    if ($n<=1){
        return false;
    }
    for ($i=2; $i<=sqrt($n); $i++){
        if (sqrt($n)%$i==0){
            return false;
        }
    }
    return true;
}
$n=13;
if (check_prime_number($n)){
    echo 'la so nt';
}else{
    echo 'la hop so';
}
echo "<br>";
$fruits = ['apple', 'pineapple', 'orange', 'lemon'];
for ($i = 0; $i < count($fruits); $i++){
    echo "    $fruits[$i]    ";
}
foreach ($fruits as $index => $val){
    echo "$index - $val <br>";
}

$person = [
    'full_name' => 'jonny',
    'email' => 'jonny@gmail.com',
    'age' => 20
];
foreach ($person as $item => $value){
    echo "$item : $value <>";
}