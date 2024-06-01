
    <div class="container">
        <br>
        
        <table class="table table-bordered">
            <thead>
              <tr>
                <th>ID </th>
                <th>Tên tài khoản</th>
                <th>Mật khẩu</th>
                <th>Vai trò</th>
                <th>Chức năng</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach($list_khachhang as $khachhang) : ?>
             <tr>
                <th> <?= $khachhang['id_user'] ?></th>
                <td><?= $khachhang['username'] ?></td>
                <td><?= $khachhang['password'] ?></td>
                <td><?= $khachhang['role'] ?></td>
                <td>
                    <a class="btn btn-primary" href="index.php?act=xoa_kh&&id_user=<? echo $id_user ?>" > Xóa</a>
                    <a class="btn btn-success" > Sửa </a>
                </td>
              </tr>
            
            </tbody>
            <?php endforeach; ?>
          </table>
    </div>
