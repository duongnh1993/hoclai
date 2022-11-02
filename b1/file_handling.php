<?php
$file_path = './fruits.txt';
if (file_exists($file_path)){
    echo readfile($file_path);
    $fileHandle = fopen($file_path, 'r');
    $fileContent = fread($fileHandle, filesize($file_path));
    fclose($fileHandle);
    echo $fileContent;
}else{
    $fileHandle = fopen($file_path, 'w');
    $fileContent = 'apple'.PHP_EOL.'chuoi';//bịa ra PHP_EOL
    fwrite($fileHandle, $fileContent);
    fclose($fileHandle);
}