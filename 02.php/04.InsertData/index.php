<?php
// Tạo kết nối
$conn = new mysqli('localhost', 'root', '', 'hocmysql');
 
// Nếu kết nối thất bại
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
 
// Lệnh tạo database
$sql = "INSERT INTO nhanvien (`hoten`, `ngaysinh`, `dienthoai`, `hsluong`) VALUES ('Nguyen Van Vinh', '2020/10/03', '886963', 2.14);";
 
// Thực thi câu truy vấn
if ($conn->query($sql) === TRUE) {
    echo "Thêm dữ liệu thành công";
} else {
    echo "Thêm dữ liệu thất bại: " . $conn->error;
}
 
// Tạo xong thì ngắt kết nối
$conn->close();

?>