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
if ($result->num_rows > 0) 
{
    // Sử dụng vòng lặp while để lặp kết quả
    while($row = $result->fetch_assoc()) {
        // Các dòng chi tiết
       echo "Họ tên: " . $row["hoten"] . "---" . "Ngày sinh: " . $row["ngaysinh"] . "</br>";
    }
} 
else {
    echo "Không có record nào";
}

// Ngắt kết nối
$conn->close();

?>