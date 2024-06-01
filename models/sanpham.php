<?php



function loadall_sanpham($kyw="",$category_id=0){
    $sql="select * from product where 1";
    if($kyw!=""){
        $sql.=" and name_sp like '%".$kyw."%'";
    }
    if($category_id>0){
        $sql.=" and category_id ='".$category_id."'";
    }
    $sql.=" order by id_sp desc";
    $list_sp=pdo_query($sql);
    return $list_sp;
}

function add_sp($category_id, $name_sp, $price, $image, $quantity, $mota){
    $sql = "INSERT INTO product (category_id, name_sp, price, image, quantity, mota) VALUES ('$category_id', '$name_sp', '$price', '$image', '$quantity', '$mota')";
    pdo_execute($sql);
}
function delete_sp($id_sp){
    $sql = "DELETE FROM product WHERE id_sp =".$id_sp;
    pdo_delete($sql);
}
function one_sp($id_sp){
    $sql = "SELECT * FROM product WHERE id_sp=".$id_sp;
    $sp = pdo_query_one($sql);
    return $sp;
}

// function update_sp($id_sp, $category_id, $name_sp, $price, $pathSaveDB, $quantity, $mota){
//     $sql = "UPDATE product SET category_id = '".$category_id."', name_sp = '".$name_sp."', price = '".$price."', image = '".$pathSaveDB."', quantity = '".$quantity."', mota = '".$mota."' WHERE id_sp =" .$id_sp;
//     pdo_execute($sql);
// }

// function all_sp() {
//     $sql = "select * from product where 1";
//     $sp_home = pdo_query($sql);
//     return $sp_home;
// }

// function sp_home($kyw="",$category_id=0){
//     $sql="select * from product where 1";
//     if($kyw!=""){
//         $sql.=" and name_sp like '%".$kyw."%'";
//     }
//     if($category_id>0){
//         $sql.=" and category_id ='".$category_id."'";
//     }
//     $sql.=" order by id_sp desc";
//     $sp_home=pdo_query($sql);
//     return $sp_home;
// }
function sanpham_home() {
    $sql = "select * from product where 1 order by id_sp desc limit 0,10";
    $list_sp = pdo_query($sql);
    return $list_sp;
}

function load_ten_dm($category_id){
    if($category_id>0){
        $sql="select * from category where id_dm=".$category_id;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{  
        return "";
    }   
}