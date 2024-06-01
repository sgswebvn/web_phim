
    <div class="container">
    <form action="index.php?act=list_sp" method="post" class="row">
      <div class="col-10">
        <input type="text " name="kyw" class="form-control" placeholder="Tìm kiếm">
      </div>  
        <div class="col-2 ">
        <input type="submit" name="listok" value="Tìm kiếm" class="btn btn-primary">
      </div>
     
      
      <div class="form-group">
        <select name="category_id" >
          <option value="0" selected>Chọn tất cả </option>
          <?php foreach($list_dm as $dm1){
            extract($dm1);
            echo '<option value=" '.$id_dm.' ">' .$category. '</option>';
          }
          ?>
        </select>
      </div>

      
    </form>
        <br>
        <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th>ID sản phẩm</th>
                <th>Danh mục </th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Hình sản phẩm</th>
                <th>Số lượng</th>
                <th>Mô tả </th>
                <th>Chức năng</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($list_sp as $sp) { ?>
              <tr>
                <th><?= $sp['id_sp'] ?></th>
                <th><?= $sp['category_id'] ?></th>
                <td><?= $sp['name_sp'] ?></td>
                <td><h6><?= $sp['price'] ?></h6></td>
                <td>
                   <img src="<?= '../' . $sp['image'] ?>" alt="#" width="80px">
                </td>
                <td><?= $sp['quantity'] ?></td>
                <td><?= $sp['mota'] ?></td>
                <td align="center" >
                  <a href="index.php?act=edit_sp&&id_sp=<?= $sp['id_sp']?>">
                  <input type="submit" class="btn btn-primary" value="Sửa">
                  </a>
                  <a href="index.php?act=delete_sp&&id_sp=<?= $sp['id_sp']?>">
                  <input type="submit" class="btn btn-primary" value="Xóa">
                </a>
                </td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
          <a href="index.php?act=add_sp">
          <input type="submit" class="btn btn-primary" value="Thêm sản phẩm">
          </a>

    </div>
    