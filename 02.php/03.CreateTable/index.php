<?php
// Tạo kết nối
$conn = new mysqli('localhost', 'root', '', 'hocmysql');
 
// Nếu kết nối thất bại
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
 
// Lệnh tạo bảng
$sql = "CREATE TABLE nhanvien (	
        manv INT NOT NULL AUTO_INCREMENT PRIMARY KEY,	
        hoten VARCHAR(50) NOT NULL,	
        ngaysinh DATETIME NULL,	
        dienthoai VARCHAR(11) NULL,	
        hsluong DECIMAL(3, 2)
    );";
 
// Thực thi câu truy vấn
if ($conn->query($sql) === TRUE) {
    echo "Tạo bảng nhanvien thành công";
} else {
    echo "Tạo bảng nhanvien thất bại: " . $conn->error;
}
 
// Tạo xong thì ngắt kết nối
$conn->close();

?>