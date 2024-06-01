<div class="container">
        <article>
            <div class="row">
                <div class="col-12">
                    <h2>Giỏ hàng</h2>
                    <?php if (!isset($_SESSION['username'])) {
                        echo '<p> Bạn cần đăng nhập để có thể xem giỏ hàng của mình ! <a href="index.php?act=dangnhap"> Đăng nhập ngay </a>  </p>';
                    } else {
                        echo '<table class="table">
                        <thead>
                            <tr>
                                <th>Hình ảnh </th>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Tổng tiền</th>
                                <th>Thao tác </th>
                            </tr>
                        </thead>';
                        viewcart(1);
                        echo ' </table>';
                    } ?>
                        <tr>
                            <th>Tổng đơn hàng :  </th>
                        </tr>
                   
                    <?php if (isset($_SESSION['username'])) {
                        if (isset($error_message)) {
                            echo '<p> ' . $error_message . '</p>';
                        } else {
                            echo '<div class="text-end">
                            <button class="btn btn-primary">Checkout</button>
                           </div>';
                        }
                    } ?>
                    
                </div>
            </div>
        </article>
    </div>
