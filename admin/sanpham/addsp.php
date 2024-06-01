
    <div class="container">
        <h4 class="text-center text-danger">Chào mừng bạn quay trở lại với trang ADMIN </h4>
        <hr>
        
        <br>
        <h5 class="text-center">THÊM SẢN PHẨM</h5>
      <form action="index.php?act=add_sp" method="post" enctype="multipart/form-data">
      <div class="form-group">
                        <div class="col-sm-10">
                            <select name="category_id" class="form-control"> 

                                <?php
                                foreach ($list_dm as $dm1) {
                                    extract($dm1);
                                    echo '<option value="' . $id_dm . '">' . $category . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        
                    </div><br>
        <input type="text" name="name_sp" placeholder="Nhập tên sản phẩm" class="form-control"> <br>
        <input type="text" name="price" placeholder="Nhập giá sản phẩm" class="form-control"> <br>
        <input type="number" name="quantity" placeholder="Số lượng sản phẩm" class="form-control"> <br>
        <input type="text" name="mota" placeholder="Mô tả" class="form-control"> <br>
        <input type="file" name="image" >
         <br><br>
        
          <input type="submit" name="submit" class="btn btn-primary" value="Thêm sản phẩm" >
      
        <a href="" type="reset" class="btn btn-primary">Hủy bỏ</a> <br><br>
        <a href="index.php?act=list_sp">Trở lại </a>
        <hr>
      </form>
        
    </div>
    </div>
