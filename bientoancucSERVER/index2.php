<?php
//require 'index.php'; //nhung file index.php sang file index2.php

//require_once 'index.php';//chỉ nạp 1 lần

include 'index.php';
$number2 = 200;
$total = $number +$number2;
echo $total;

//điều hướng trang về index.php
header('Loacation:index.php');