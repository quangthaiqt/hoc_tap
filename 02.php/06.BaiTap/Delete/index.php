<?php

$manv = 0;

if (isset($_GET["manv"])) {
    $manv = $_GET["manv"];
}

if ($manv == 0) {
    echo '<script>alert("Không tìm thấy dữ liệu!");</script>';
    echo "<script>window.location.href = '../index.php';</script>";
}


$sql = "DELETE FROM nhanvien WHERE  manv= $manv";


// Tạo kết nối
$conn = new mysqli('localhost', 'root', '', 'hocmysql');

// Nếu kết nối thất bại
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Thực thi câu truy vấn
if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Xóa dữ liệu thành công!");</script>';
} else {
    echo '<script>alert("Xóa dữ liệu thất bại: ' . $conn->error . '");</script>';
}

// Tạo xong thì ngắt kết nối
$conn->close();

echo "<script>window.location.href = '../index.php';</script>";

?>