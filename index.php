<?php 
ob_start();
session_start();
include "./models/binhluan.php";
include "./models/danhmuc.php";
include "./models/donhang.php";
include "./models/khachang.php";
include "./models/binhluan.php";
include "./models/sanpham.php";
include "./models/cart.php";
include "./models/pdo.php";
include "global.php";
include "./views/index.php";
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
$dsdm = all_dm();
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'dangky':
            if (isset($_POST['submit']) && $_POST['username'] && $_POST['password'] && $_POST['email']) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                insert_user($username, $password, $email);
                $tb = "Đăng ký thành công";
            }
            include "./views/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['submit']) && $_POST['submit']) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $checkuser = check_user($username, $password);
                if (is_array($checkuser)) {
                    $_SESSION['username'] = $checkuser;
                    header('Location: index.php');
                    exit();
                } else {
                    echo '<script> alert("thất bại"); </script>';
                }
            }
            include "./views/dangnhap.php";
            break;
        case 'dangxuat':
            unset($_SESSION['username']);
            unset($_SESSION['mycart']);
            header('Location: http://localhost/MVC_WEB/index.php');
            exit();
        case 'capnhattaikhoan':
            include "./views/capnhattk.php";
            break;
        case 'sanpham':
            if (isset($_POST['kyw']) && $_POST['kyw'] > 0) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['category_id']) && $_GET['category_id'] > 0) {
                $category_id = $_GET['category_id'];
            } else {
                $category_id = 0;
            }
            $dssp = loadall_sanpham($kyw, $category_id);
            $tendm = load_ten_dm($category_id);
            include "./views/sanpham.php";
            break;
        case 'ctsp':
            if (isset($_GET['id_sp']) && $_GET['id_sp'] > 0) {
                $id = $_GET['id_sp'];
                $onesp = one_sp($id);
                extract($onesp);
                include "./views/ctsp.php";
            } else {
                include "./views/index.php";
            }
            break;
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $name_sp = $_POST['name_sp'];
                $img_path = $_POST['image'];
                $price = $_POST['price'];
                $amount = 1;
                $total_amount = $amount * $price;
                if (!isset($_SESSION['mycart'])) {
                    $_SESSION['mycart'] = [];
                }
                $existingProductKey = -1;
                foreach ($_SESSION['mycart'] as $key => $product) {
                    if ($product[0] == $name_sp) {
                        $existingProductKey = $key;
                        break;
                    }
                }
                if ($existingProductKey != -1) {
                    $_SESSION['mycart'][$existingProductKey][3] += $amount;
                    $_SESSION['mycart'][$existingProductKey][4] = $_SESSION['mycart'][$existingProductKey][3] * $price;
                } else {
                    $spadd = [$name_sp, $img_path, $price, $amount, $total_amount];
                    array_push($_SESSION['mycart'], $spadd);
                }
            }
            include "./views/cart.php";
            break;
        case 'viewcart':
            include "./views/cart.php";
            break;
        case 'delete_cart':
            if (isset($_GET['id_cart'])) {
                array_splice($_SESSION['mycart'], $_GET['id_cart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('location: index.php?act=addtocart');
            break;
        default:
            include "index.php";
            break;
    }
}
include "./views/footer.php";
