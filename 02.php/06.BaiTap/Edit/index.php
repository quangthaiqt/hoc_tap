<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa</title>
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


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Chỉnh sửa nhân viên</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
    <form >
        <label for="hoten">Họ và tên : </label> <br>
        <input type="text" id="hoten" name=""hoten" /> <br />
        <label for="ngaysinh">Ngày sinh: </label> <br>
        <input type="month" id="ngaysinh" name="ngaysinh" /> <br />
        <label for="sdt">Số điện thoại : </label> <br>
        <input type="number" id="sdt" name="sdt" /> <br />
        <label for="hsl">Hệ số lương : </label> <br>
        <input type="number" id="hsl" name="hsl" /> <br />
        <button name="button" type="button">Lưu</button>
        <button name="button" type="button">Hủy</button>


    </form>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>