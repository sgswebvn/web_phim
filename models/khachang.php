<?php


function all_user() {
    $sql = "SELECT * FROM user ";
    $list_khachhang = pdo_query($sql);
    return $list_khachhang;
}
function delete_kh($id_user){
    $sql = "DELETE FROM user WHERE id_user = '$id_user'";
    $arr = pdo_delete($sql);
    return $arr;
}
function insert_user($username, $password, $email){
    $sql="insert into user (username,password,email) values('$username','$password','$email')";
    pdo_execute($sql);
}
function check_user($username, $password){
    $sql = "SELECT * FROM user WHERE username = '".$username."'  AND password = '".$password."'  ";
    $kh = pdo_query_one($sql);
    return $kh;
}

