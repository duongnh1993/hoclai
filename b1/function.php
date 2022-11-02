<?php
    $y =2;
    function sayHello($name){
        global $y;
        echo $y;
        echo "hello $name ";
    }

    sayHello('duong');
    echo "<br>";

    $name = ['yone', 'tonny', 'mask'];
    echo count($name);
    array_push($name, 'jenny', 'tom', 'dollan');
    print_r($name);
    echo "<br>";

    array_unshift($name, 'rooney');//chen vào trước mảng
    print_r($name);

    echo "<br>";
   /* array_pop($name);// thu gọn mang di 1 phan tu cuoi cua mang
    print_r($name);
    echo "<br>";
    array_pop($name);
    print_r($name);
    echo "<br>";

    array_shift($name);// thu hon mang di 1 phan tu o dau mang
    print_r($name);
    echo "<br>";

    unset($name[2]);// bo di phan tu thu 2 cua mang
    print_r($name);*/
    echo "<br>";
    echo "***********";
    echo "<br>";

    $chunked_array = array_chunk($name,3);//chia mang thanh 3 mang nho
    echo "<pre>";
    print_r($chunked_array);
    echo "<br>";
    echo "***********";
    echo "<br>";

    $arrayOne = [1,3,5];
    $arrayTwo = [2,4,6];
    $mergedArray = array_merge($arrayOne,$arrayTwo);//tron cac mang lai voi nhau.
    echo "<pre>";
    print_r($mergedArray);
    echo "<br>";

    $arrayThere = [...$mergedArray];
    $mergedArray[0] = 111;
    print_r($mergedArray);
    print_r($arrayThere);// nhân bản thành 1 arr khác và nằm ở vùng nhớ khác.
    echo "<br>";
    echo "***********";
    echo "<br>";

    $arrayFour = [...$arrayOne, ...$arrayTwo];
    print_r($arrayFour);

echo "<br>"."*********** "."<br>";


    $a = ['name','email','age'];
    $b = ['terry', 'terry@gmail.com', 29];
    $c = array_combine($a, $b); // lay value cua $a lam key cua $b, do dai 2 mang phai bang nhau
    print_r($c);
    echo "<br>"."*********** "."<br>";
    print_r(array_keys($c));//lin ra key la kieu so stt va gia tri cua key
    echo "<br>"."*********** "."<br>";
    print_r(array_values($c));
    echo "<br>"."*********** "."<br>";
    $numbers = rand(1, 10);
    print_r($numbers);
    echo "<br>"."*********** "."<br>";

    //anh xa 1 mang

