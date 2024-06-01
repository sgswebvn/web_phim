<?php if(is_array($sp)){
  extract($sp);
}
?>
    <div class="container">
        <h4 class="text-center text-danger">Chào mừng bạn quay trở lại với trang ADMIN </h4>
        <hr>
        
        <br>
        <h5 class="text-center">SỬA SẢN PHẨM</h5>
      <form action="index.php?act=update_sp" method="post">
      <select name="category_id" class="form-control"> 

<?php
foreach ($list_dm as $dm1) {
    extract($dm1);
    $selected = ($id_dm == $dm['id_dm']) ? 'selected' : '';
    echo '<option value="' . $id_dm . '" ' . $selected . '>' . $category . '</option>';
}
?>


</select>
<br>
        <input type="text" placeholder="Nhập ID sản phẩm" name="id_sp" value="<?php if(isset($id_sp) && ($id_sp !="")) echo $id_sp; ?>" class="form-control" disabled> <br>
        <input type="text" placeholder="Nhập tên sản phẩm" name="name_sp" value="<?php if(isset($name_sp) && ($name_sp !="")) echo $name_sp; ?>" class="form-control"> <br>
        <input type="text" placeholder="Nhập giá sản phẩm" value="<?php if(isset($price) && ($price !="")) echo $price; ?>" name="price" class="form-control"> <br>
        <input type="number" placeholder="Số lượng sản phẩm"  name="quantity" value="<?php if(isset($quantity) && ($quantity !="")) echo $quantity; ?>" class="form-control"> <br>
        <input type="text" placeholder="Mô tả "  name="mota" value="<?php if(isset($mota) && ($mota !="")) echo $mota; ?>" class="form-control"> <br>
        <div class="form-group">
        <input type="file" name="image"  >
        </div>
         <br><br>
         <input type="hidden" name="id_sp" value="<?php if(isset($id_sp) && ($id_sp > 0)) echo $id_sp; ?>">

         <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary" >
        <a href="" type="reset" class="btn btn-primary">Hủy bỏ</a> <br><br>
        <a href="index.php?act=list_sp">Trở lại </a>
        <hr>
      </form>
        
    </div>
    </div>

    <?php 
var_dump($list_dm);
?>