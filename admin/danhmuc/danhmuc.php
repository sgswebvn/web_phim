    <div class="container">
    
        <br>

        <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th>ID danh mục</th>
                <th>Tên danh mục</th>
                <th>Chức năng</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($list_dm as $dm1) :
             ?>
              <tr>
                <th><?= $dm1['id_dm'] ?></th>
                <td class="text-center"><?= $dm1['category'] ?></td>
                <td align="center">
                  <a href="index.php?act=edit_dm&&id_dm=<?= $dm1['id_dm'] ?>">
                  <input class="btn btn-primary" type="submit" value="Sửa">
                  </a>
                  <a href="index.php?act=delete_dm&&id_dm=<?= $dm1['id_dm'] ?>">
                  <input  class="btn btn-primary" type="submit" value="Xóa">
                  </a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

          <a href="index.php?act=add_dm">
                  <input class="btn btn-primary" type="submit" value="Thêm danh mục">
                  </a>
    </div>
