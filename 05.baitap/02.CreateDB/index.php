<?php
// Tạo kết nối
$conn = new mysqli('localhost', 'root', '');
 
// Nếu kết nối thất bại
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
 
// Lệnh tạo database
// $sql = "CREATE DATABASE IF NOT EXISTS hocmysql";
$sql = "CREATE DATABASE IF NOT EXISTS sanpham";
 
// Thực thi câu truy vấn
if ($conn->query($sql) === TRUE) {
    echo "Tạo database thành công";
} else {
    echo "Tạo database thất bại: " . $conn->error;
}
 
// Tạo xong thì ngắt kết nối
$conn->close();

?>