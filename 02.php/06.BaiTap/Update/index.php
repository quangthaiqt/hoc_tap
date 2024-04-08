<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li> -->
                </ul>
                <form class="d-flex" role="search">
                    <a class="nav-link me-5" href="#">Xin chào bạn abc</a>
                    <a class="nav-link" href="#">Đăng xuất</a>
                </form>
            </div>
        </div>
    </nav>

    <?php
    $hoten = "";
    $ngaysinh = "";
    $dienthoai = "";
    $hsluong = 0;
    
    if (isset($_GET["hoten"])) {
        $hoten = $_GET["hoten"];
    }
    if (isset($_GET["ngaysinh"])) {
        $ngaysinh = $_GET["ngaysinh"];
    }
    if (isset($_GET["dienthoai"])) {
        $dienthoai = $_GET["dienthoai"];
    }
    if (isset($_GET["hsluong"])) {
        $hsluong = $_GET["hsluong"];
    }
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Chỉnh sửa nhân viên</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="mb-3">
                        <label for="hoten" class="form-label">Họ và tên : </label>
                        <input type="text" class="form-control" id="hoten" name="hoten" value="<?php echo $hoten; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="ngaysinh" class="form-label">Ngày sinh</label>
                        <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" value="<?php echo $ngaysinh; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="dienthoai" class="form-label">Số điện thoại : </label>
                        <input type="text" class="form-control" id="dienthoai" name="dienthoai" value="<?php echo $dienthoai; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="hsluong" class="form-label">Hệ số lương : </label>
                        <input type="number" class="form-control" id="hsluong" name="hsluong"value="<?php echo $hsluong; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <button type="submit" class="btn btn-danger">
                        <a href="/hoc_tap/02.php/06.BaiTap/index.php">Hủy</a>
                    </button>
                </form>
            </div>
        </div>
    </div>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>