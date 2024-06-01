    
<div class="container">
        <article>
            <h3 class="text-center text-danger">Chi tiết sản phẩm</h3>
            <hr>
            <div class="row">
                <?php extract($onesp); ?>
                <?php  ?>
                <div class="col-5 m-3">
                    <img src="<?= $onesp['image'] ?>" height="230px" alt="Lỗi không có hình ảnh"> <hr>
                </div>
                <div class="col-5 m-3">
                    <h2><?= $onesp['name_sp'] ?></h2>
                    <p><?= $onesp['mota'] ?></p>
                    <p><?= $onesp['price'] ?></p>
                    <p>Bộ nhớ 256GB</p>
                    <p>Số lượng hàng còn <?= $onesp['quantity'] ?></p>
                    <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id_sp" value="<?= $id_sp ?>" >
                        <input type="hidden" name="image" value="<?= $image ?>" >
                        <input type="hidden" name="name_sp" value="<?= $name_sp ?>" >
                        <input type="hidden" name="price" value="<?= $price ?>">
                        <input type="submit" class="btn btn-primary" name="addtocart" value="Thêm vào giỏ hàng" >
                    </form>
                    
                <hr>
                </div>
                <?php  ?>
            </div>
        </article>
        <article>        
            <!-- Hiển thị bình luận đã được gửi -->
            <div class="comment">
                <h4  class="text-primary">Trương Văn Hiếu</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti omnis magnam cum est, sed numquam provident harum? Repellendus cupiditate temporibus optio eius odio voluptatem tempore, sit, ipsum, ad aliquid ratione!</p>
            </div>
        
            <div class="comment">
                <h4 class="text-primary">Bình nguyễn</h4>
                <p>Ip dùng rất được nha </p>
            </div>
        
            <!-- Form để thêm bình luận mới -->
            <form>
                <div class="mb-3">
                    <label for="comment" class="form-label"><h3>Bình luận</h3></label>
                    <textarea class="form-control" id="comment" rows="3" placeholder="Nhập bình luận của bạn"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gửi</button>
                <button type="reset" class="btn btn-primary">Hủy bỏ</button>
            </form>
        </article>
        <hr>
        <aside>
            <h3 class="text-center text-danger">Các sản phẩm liên quan khác</h3>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="width: 16rem;">
                        <img src="images/sp1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Iphone 15 promax</h5>
                          <p class="card-text">Điện thoại đời mới nhất</p>
                          <p class="card-text"><h5>15.000.000đ</h5></p>
                          <a href="details.html" class="btn btn-primary flex">Xem chi tiết</a>
                        </div>
                      </div>
                </div>
                <h3></h3>
                
            </div>
        </aside>
        
    </div>
<?php var_dump($onesp); ?>
