<?php

$tenao = "";
$gioitinh = "";
$gia = "";
$hinhanh = "";

if (isset($_GET["tenao"])) {
    $tenao = $_GET["tenao"];
}
if (isset($_GET["gioitinh"])) {
    $gioitinh = $_GET["gioitinh"];
}
if (isset($_GET["gia"])) {
    $gia = $_GET["gia"];
}
if (isset($_GET["hinhanh"])) {
    $hinhanh = $_GET["hinhanh"];
}

echo $tenao;
echo $gioitinh;
echo $gia;
echo $hinhanh;

$sql = "INSERT INTO ao (`tenao`, `gioitinh`, `gia`, `hinhanh`) VALUES "
    . " ('" . $tenao . "', '" . $gioitinh . "', '" . $gia . "', " . $hinhanh . " );";

echo "<br>";
echo $sql;


// Tạo kết nối
$conn = new mysqli('localhost', 'root', '', 'sanpham');

// Nếu kết nối thất bại
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}


// Thực thi câu truy vấn
if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Thêm dữ liệu thành công!");</script>';
} else {
    echo '<script>alert("Thêm dữ liệu thất bại: ' . $conn->error . '");</script>';
}

// Tạo xong thì ngắt kết nối
$conn->close();

echo "<script>window.location.href = '../BaiTap/index.php';</script>";
?>