<!-- Controller -->
<?php 

include "../models/binhluan.php";
include "../models/danhmuc.php";
include "../models/donhang.php";
include "../models/khachang.php";
include "../models/binhluan.php";
include "../models/cart.php";
include "../models/pdo.php";
include "../models/sanpham.php";

include "view/index.php";
include "../global.php";
           
if(isset($_GET['act'])){
    $act = $_GET['act'];

    switch($act) {
        case 'list_bl' :
            include "binhluan/binhluan.php";
            break;      
        //Danh mục         
        case 'list_dm' :
            $list_dm = all_dm();
            include "danhmuc/danhmuc.php";
            break;
        case 'add_dm':
            if(isset($_POST['submit']) && ($_POST['submit'])){
                $category = $_POST['category'];
                add_dm($category);
                header('location: index.php?act=list_dm');
            }
            include "danhmuc/add.php";
            break;
        case 'edit_dm':
            if(isset($_GET['id_dm']) && ($_GET['id_dm'] > 0)){
            $dm = one_dm($_GET['id_dm']);
            }
            include "danhmuc/edit.php";
            break; 
        case 'update_dm':
            if(isset($_POST['submit']) && ($_POST['submit'])){
                $category = $_POST['category'];
                $id_dm = $_POST['id_dm'];
                $sql = "update category set category='".$category."' where id_dm =" .$id_dm;
                pdo_execute($sql);
                $tb = "thành công" ;
            }    
            $sql = "select * from category order by id_dm desc";
            $list_dm = pdo_query($sql);
            include "danhmuc/danhmuc.php";
            break;
        case 'delete_dm':
            if(isset($_GET['id_dm'])){
                $id_dm = $_GET['id_dm'];
                delete_dm($id_dm);
            }
            $list_dm = all_dm();
            include "danhmuc/danhmuc.php";
            break;      
        //Đơn hàng
        case 'list_dh' :
            include "donhang/donhang.php";
            break;      
        case 'add_dh':
            include "donhang/add.php";
            break;
        case 'edit_dh':
            include "donhang/edit.php";
            break;        
        //Khách hàng    
        case 'list_kh' :
            $list_khachhang = all_user();
            include "khachhang/khachhang.php";
            break;
        case 'edit_kh' :
            include "khachhang/edit.php";
            break;
        case 'xoa_kh':
            if(isset($_GET['id_user'])){
                $id_user = $_GET['id_user'];
                delete_kh($id_user);
                header('location: index.php?act=list_kh');
            }
            
            include "khachhang/khachhang.php";
            break;
        //Sản phẩm      
      
        case 'list_sp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $category_id = $_POST['category_id'];
            } else {
                $kyw = '';
                $category_id = 0;
            }
            $list_dm = all_dm();
            $list_sp = loadall_sanpham($kyw, $category_id);
            include "sanpham/sanpham.php";
            break;
        case 'add_sp':
            if(isset($_POST['submit']) && ($_POST['submit'])){
                $category_id = $_POST['category_id'];
                $name_sp = $_POST['name_sp'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $quantity = $_POST['quantity'];
                $img = isset($_FILES['image']) ? $_FILES['image'] : null;
				$pathSaveDB = '';
				if ($img) { // Khi mà có upload ảnh lên thì mới xử lý upload

					$pathUpload = __DIR__ . '/../images/' . $img['name'];

					// Upload file lên để lưu trữ
					if (move_uploaded_file($img['tmp_name'], $pathUpload)) {
						$pathSaveDB = 'images/' . $img['name'];
					}
				}
               
                add_sp($category_id, $name_sp, $price, $pathSaveDB, $quantity, $mota);
                header('location: index.php?act=list_sp');
            }
            $list_dm = all_dm();    
            include "sanpham/addsp.php";
            break;
        case 'edit_sp':
            if(isset($_GET['id_sp'])&& ($_GET['id_sp']>0)){
                $sp = one_sp($_GET['id_sp']);
                $dm = one_dm($sp['category_id']); // Lấy thông tin danh mục
            }
            $list_dm = all_dm();
            include "sanpham/editsp.php";
            break;
        case 'update_sp':
            if(isset($_POST['submit']) && ($_POST['submit'])){
                $id_sp = $_POST['id_sp'];
                $category_id = $_POST['category_id'];
                $name_sp = $_POST['name_sp'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $quantity = $_POST['quantity'];
                $img = isset($_FILES['image']) ? $_FILES['image'] : null;
                $pathSaveDB = '';

                if ($img) { // Kiểm tra xem có tải lên hình ảnh mới không
                    $pathUpload = __DIR__ . '/../images/' . $img['name'];

                    // Di chuyển file tải lên đến thư mục lưu trữ
                    if (move_uploaded_file($img['tmp_name'], $pathUpload)) {
                        $pathSaveDB = 'images/' . $img['name'];
                    }
                }
                $sql = "UPDATE product SET category_id = '".$category_id."', name_sp = '".$name_sp."', price = '".$price."', image = '".$pathSaveDB."', quantity = '".$quantity."', mota = '".$mota."' WHERE id_sp =" .$id_sp;
                pdo_execute($sql);
            }
            $sql = "select * from product order by id_sp desc";
            $list_sp = pdo_query($sql);
            $list_dm = all_dm();
            include "sanpham/sanpham.php";
            break;

        case 'delete_sp':
            if(isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)){
                delete_sp($_GET['id_sp']);
            }    
            $list_dm = all_dm();
            $list_sp = loadall_sanpham("", 0);
            include "sanpham/sanpham.php";
            break;
            
        case 'list_dt':
            break;
        default :
            include "index.php";    
    }
}
