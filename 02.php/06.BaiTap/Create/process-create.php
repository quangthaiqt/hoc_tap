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

echo $hoten;
echo $ngaysinh;
echo $dienthoai;
echo $hsluong;

$sql = "INSERT INTO nhanvien (`hoten`, `ngaysinh`, `dienthoai`, `hsluong`) VALUES "
." ('". $hoten . "', '".$ngaysinh."', '".$dienthoai."', ".$hsluong." );";

echo "<br>";
echo $sql;


// Tạo kết nối
$conn = new mysqli('localhost', 'root', '', 'hocmysql');
 
// Nếu kết nối thất bại
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}


// Thực thi câu truy vấn
if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Thêm dữ liệu thành công!");</script>';
} else {
    echo '<script>alert("Thêm dữ liệu thất bại: '.$conn->error.'");</script>';
}
 
// Tạo xong thì ngắt kết nối
$conn->close();

echo "<script>window.location.href = '../index.php';</script>";
?>