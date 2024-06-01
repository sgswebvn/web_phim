<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body >
    <div  class="container" >
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?act=sanpham">Sản phẩm</a>
    </li>
    <?php if (isset($_SESSION['username'])) {
        extract($_SESSION['username']); ?>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Tùy chọn
            </a>
            <ul class="dropdown-menu">
                <?php if ($role == 1) { ?>
                    <li><a class="dropdown-item" href="admin/">Admin</a></li>
                <?php } else { ?>
                    <li><a class="dropdown-item" href="index.php?act=thongtin">Xem thông tin</a></li>
                    <li><a class="dropdown-item" href="index.php?act=quenmatkhau">Quên mật khẩu</a></li>
                <?php } ?>
                <li><a class="dropdown-item" href="index.php?act=dangxuat">Đăng xuất</a></li>
            </ul>
        </li>
    <?php
    } else {
         ?>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tài khoản
        </a>
        <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="index.php?act=dangnhap">Đăng nhập</a></li>
         <li><a class="dropdown-item" href="index.php?act=dangky">Đăng ký</a></li>
          <li><a class="dropdown-item" href="index.php?act=quenmatkhau">Quên mật khẩu</a></li>
        </ul>
        </li>
    <?php
    } ?>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php?act=addtocart">Giỏ hàng</a>
    </li>
</ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
          <header>
          </header>
          


    </div>
</body>
</html>