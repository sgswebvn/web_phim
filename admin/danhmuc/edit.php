<?php if(is_array($dm)){
    extract($dm);
}  ?>

    <div class="container">
        <hr>
        
        <br>
        <h5 class="text-center">SỬA DANH MỤC</h5>
        <form action="index.php?act=update_dm" method="post">
            <input type="text" name="id_dm"  class="form-control" disabled> <br>
            <input type="text" name="category" value="<?php if (isset($category) && ($category != "")) echo $category; ?>" class="form-control"> <br>
        <div class="form-group">
            <input type="hidden" name="id_dm" value="<?php if(isset($id_dm) && ($id_dm > 0)) echo $id_dm; ?>">
            <input type="submit" name="submit" class="btn btn-primary"  value="Cập nhật">
            <input type="reset" class="btn btn-primary" value="Hủy bỏ"> <br><br>
            <a href="index.php?act=list_dm">Trở lại </a>
        </div>

        <hr>
        </form>
        <?php
                    if (isset($tb) && ($tb != "")) echo $tb;
                    ?>  
    
    </div>
    </div>