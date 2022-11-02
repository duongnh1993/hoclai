<?php
if (isset($_POST['checkbtn'])){
    $snt = $_POST['number'] ?? '';
    $snt = is_numeric($snt) ? $snt : '';

    if (empty($snt)){
        header("Location:../xuly/kiemtrasonguyento.php.php?state=empty&num=$snt");//dieu huong trang quay ve form check number
    }else{
        if (kiemtrasonguyento($snt)){
            header("Location:../xuly/kiemtrasonguyento.php?state=&num=$snt");
        }else{
            header("Location:../xuly/kiemtrasonguyento.php?state=&num=$snt");
        }
    }
}
function kiemtrasonguyento($snt){
    if ($snt <= 1){
        return false;
    }
    if ($snt == 2){
        return true;
    }
    for ($i = 2; $i <= sqrt($snt); $i++){
        if ($snt % $i ==0){
            return false;
        }
    }
    return true;
}
