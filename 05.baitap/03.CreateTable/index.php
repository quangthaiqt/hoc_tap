<?php
// Tạo kết nối
$conn = new mysqli('localhost', 'root', '', 'sanpham');
 
// Nếu kết nối thất bại
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
 
// Lệnh tạo bảng
$sql = "CREATE TABLE ao (	
        maao INT NOT NULL AUTO_INCREMENT PRIMARY KEY,	
        tenao VARCHAR(50) NOT NULL,	
        gioitinh VARCHAR(10) NOT NULL,	
        gia VARCHAR(11) NOT NULL,	
        hinhanh VARCHAR(50) NOT NULL
    );";
 
// Thực thi câu truy vấn
if ($conn->query($sql) === TRUE) {
    echo "Tạo bảng ao thành công";
} else {
    echo "Tạo bảng ao thất bại: " . $conn->error;
}
 
// Tạo xong thì ngắt kết nối
$conn->close();

?>