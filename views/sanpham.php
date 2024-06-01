
<div class="container">
<article>
            <h3 class="text-center text-danger">Danh sách sản phẩm</h3>
            <div class="row">
              <?php 
              foreach($dssp as $sp){ 
                $img_path = $sp['image'];
                extract($sp);  ?>
              <div class="col-sm-3">
                    <div class="card" style="width: 16rem;">
                        <img src="<?= $img_path?>" class="card-img-top" alt="Lỗi hình ảnh" height="230px">
                        <div class="card-body">
                          <h5 class="card-title"><?= $sp['name_sp'] ?> </h5>
                          <p class="card-text"><?= $sp['name_sp'] ?></p>
                          <p class="card-text"><h5><?= $sp['price'] ?></h5></p>
                          <a href="index.php?act=ctsp&&id_sp=<?= $id_sp ?>" class="btn btn-primary flex">Xem chi tiết</a>
                        </div>
                    </div>
                <h3></h3>
                </div>
                
             <?php } ?>

                
            </div>
            
            
          </article>
</div>