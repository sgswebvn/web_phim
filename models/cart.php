<?php

function viewcart($del){
    global $img_path;
    $sum = 0;
    $i = 0;
    foreach($_SESSION['mycart'] as $cart){
        $img = $img_path . $cart[1];
        $total_amount = $cart[3] * $cart[4];
        $sum += $total_amount;
        if($del ==  1) {
            $xoasp_th = '<th> Thao tác </th>';
            $xoasp_td = '<a href="index.php?act=delete_cart&&id_cart='.$i.'"> <input type="submit" class="btn btn-primary" value="Xóa"> </a>'; 
        }else{
            $xoasp_th = '';
            $xoasp_td = '';
        }
        echo '
        <tbody>
        <tr>
            <td> <img src="'.$cart[1].'" alt="" height="80px"> </td>
            <td> '.$cart[0].' </td>
            <td> '.$cart[3].' </td>
            <td>'.$cart[4].'</td>
            <td>'.$total_amount.'</td>
            <td>'.$xoasp_td.'</td>
        </tr>
    </tbody>';
   
    }
}

function insert_cart($id_user, $id_pro, $image, $name_sp, $price, $quantity, $total_amount, $id_bill){
    $sql = "insert into cart (id_user, id_pro, image, name_sp, price, quantity, total_amount, id_bill) values ('$id_user', '$id_pro', '$image', '$name_sp', '$price', '$quantity', '$total_amount', '$id_bill')";
    return pdo_execute($sql);
}
function all_cart($id_bill){
    $sql = "select * from cart where id_bill = " .$id_bill;
    $bill = pdo_query($sql);
    return $bill;
}

// function select_all($table){
//     $sql = "select * from $table";
//     return pdo_query($sql);
// }
// function select_one($table, $id){
//     $sql = "select * from $table where id = ?";
//     return pdo_query_one($sql, $id);
// }