<?php
//mang tuan tu - mang liet ke mảng số
//mang không tuần tự -
// mang lien ket
  //



//mang tuan tu
$fruits = ['cam', 'quyt', 'mit', 'dua', 'oi'];
echo "<pre>";
print_r($fruits);
echo "<br>";

// mảng không tuần tự
$infoStudent = [
    'id' => 1,
    'name' => 'van teo',
    'age' => '20',
    'email' => 'vanteo@gmail.com'
];
print_r($infoStudent);
echo "<br>";

//mang da chieu
$infoStudents = [
    [
        'id' => 1,
        'name' => 'van teo',
        'age' => '20',
        'email' => 'vanteo@gmail.com',
        'class' =>[
            [
            'name_class' => 'php',
            'teacher' => 'A'
            ],
            [
                'name_class' => 'JS',
                'teacher' => 'B'
            ]
        ]
    ],
    [
        'id' => 2,
        'name' => 'van ty',
        'age' => '31',
        'email' => 'vanty@gmail.com',
        'class' =>[
            [
                'name_class' => 'php',
                'teacher' => 'A'
            ],
            [
                'name_class' => 'JS',
                'teacher' => 'B'
            ]
        ]
    ]
];
print_r($infoStudents);
// cach truy cap vao 1 phan tu trong mang
$acess = $fruits[3];
echo $acess;        // echo chỉ dành cho string không dùng cho mảng

$test = $infoStudents[0]['class'][0]['name_class'];
echo $test;
//duyệt qua tất cả phần từ của mảng

$arrNumber = [10,3,2,4,6,5,7,8,9];
foreach ($arrNumber as $key => $value){
    echo "index: {$key} - value: {$value}";
    echo "<br>";
}

$sport = ['money'=>1000];
// bo sung cac key: va vallue vao mang
$sport['name'] = ['tenis', 'football', 'chess'];
$sport['address'] = ['usa', 'england', 'china'];
print_r($sport);