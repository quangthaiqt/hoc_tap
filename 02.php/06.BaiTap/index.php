<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #dddddd;
        } */
    </style>
</head>

<?php
// Tạo kết nối
$conn = new mysqli('localhost', 'root', '', 'hocmysql');

// Nếu kết nối thất bại
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Câu SQL lấy danh sách
$sql = "SELECT * FROM nhanvien";

// Thực thi câu truy vấn và gán vào $result
$result = $conn->query($sql);

// Kiểm tra số lượng record trả về có lơn hơn 0
// Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
// Vẽ bảng
// Dòng tiêu đề
?>

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
                <h1>Danh sách nhân viên</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7"></div>

            <div class="col-md-4">
                <div class="input-group">
                    <div class="form-outline" data-mdb-input-init>
                        <input type="search" id="form1" class="form-control" placeholder="Search" />
                    </div>
                    <a href="Them/index.php"><button type="button" class="btn btn-primary" data-mdb-ripple-init>
                            <i class="fas fa-search"></i>
                        </button></a>
                </div>

            </div>
            <div class="col-md-1">
                <a href="Create/index.php">
                    <button type="submit" class="btn btn-primary mb-2">Thêm</button>
                </a>

            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
                <table id="table-nhan-vien" class="table table-striped table-hover table-bordered">
                    <tr class="table-success">
                        <th>
                            Mã nhân viên
                        </th>
                        <th>
                            Họ và tên
                        </th>
                        <th>
                            Ngày sinh
                        </th>
                        <th>
                            Số điện thoại
                        </th>
                        <th>
                            Hệ số lương
                        </th>
                        <th colspan="2">
                            Tùy chọn
                        </th>

                    </tr>

                    <?php
                    if ($result->num_rows > 0) {
                        // Sử dụng vòng lặp while để lặp kết quả
                        while ($row = $result->fetch_assoc()) {
                            // Các dòng chi tiết
                            ?>
                            <tr>
                                <td>
                                    <?php echo $row["manv"] ?>
                                </td>
                                <td>
                                    <?php echo $row["hoten"] ?>
                                </td>
                                <td>
                                    <?php echo $row["ngaysinh"] ?>
                                </td>
                                <td>
                                    <?php echo $row["dienthoai"] ?>
                                </td>
                                <td>
                                    <?php echo $row["hsluong"] ?>
                                </td>
                                <td class="text-center">
                                    <a href="Update/index.php?manv=<?php echo $row["manv"]; ?>">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="Delete/index.php"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>

                            <?php

                        }
                    } else {
                        echo "Không có record nào";
                    }
                    ?>

                </table>
            </div>
        </div>
    </div>

    <?php
    // Ngắt kết nối
    $conn->close();

    ?>
    <script>
        var idNhanvien = document.getElementById("table-nhan-vien");
        console.log(idNhanvien);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>import { Input, Ripple, initMDB } from "mdb-ui-kit";

        initMDB({ Input, Ripple });</script>
</body>

</html>