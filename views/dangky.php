<div class="container">
        <h2>Đăng ký</h2>
        <form action="index.php?act=dangky" method="post">
        <div class="mb-3">
                <label for="registerEmail" class="form-label">Tên đăng nhập</label>
                <input type="text" name="username" class="form-control" id="registerEmail" required>
            </div>
            <div class="mb-3">
                <label for="registerEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="registerEmail" required>
            </div>
            <div class="mb-3">
                <label for="registerPassword" class="form-label">Mật khẩu</label>
                <input type="password" name="password" class="form-control" id="registerPassword" required>
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Xác nhận mật khẩu</label>
                <input type="password" name="comfirmPass" class="form-control" id="confirmPassword" required>
            </div>
            <input name="submit" type="submit" class="btn btn-primary" value="Đăng ký ">
        </form>
        <?php if (isset($tb)) {
            echo $tb;
        } ?>

        <hr>

       

