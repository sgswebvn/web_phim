<?php 

$arr = ['addr' => 'HTML', 'addr2' => 'C++', 'addr3' => 'java'];
$arr2 = ['HTML', 'CSS', 'JS'];

$arrEmpty = [];
//Thêm mảng vào phần tử

$arr['addr4'] = 'Nodejs';
$arr[] = 'ReactJs';
$arr[] = 'ReactJs1';

array_push($arr2, 'C++', 'JSON');
//In mảng
echo '<pre>';
print_r($arr);
echo '</pre>';
//Đọc mảng
// $hieu = $arr['addr'];
// echo $hieu;

//Vòng lặp for để duyệt mảng

if(!empty($arr2)){
    for($i = 0; $i < count($arr); $i++){
        echo $arr[$i] .' <br>';
    }
}

