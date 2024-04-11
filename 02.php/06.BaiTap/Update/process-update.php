<?php

$manv=0;
$hoten = "";
$ngaysinh = "";
$dienthoai = "";
$hsluong = 0;

if (isset($_POST["manv"])) {
    $manv = $_POST["manv"];
}
if (isset($_POST["hoten"])) {
    $hoten = $_POST["hoten"];
}
if (isset($_POST["ngaysinh"])) {
    $ngaysinh = $_POST["ngaysinh"];
}
if (isset($_POST["dienthoai"])) {
    $dienthoai = $_POST["dienthoai"];
}
if (isset($_POST["hsluong"])) {
    $hsluong = $_POST["hsluong"];
}


echo $manv . '</br>';
echo $hoten . '</br>';
echo $ngaysinh . '</br>';
echo $dienthoai . '</br>';
echo $hsluong . '</br>';

$sql = "UPDATE nhanvien ".
"SET hoten = '". $hoten . "', ngaysinh = STR_TO_DATE('". $ngaysinh . "', '%Y-%m-%d'), dienthoai = '".$dienthoai."', hsluong = ".$hsluong." ".
"WHERE manv = ".$manv.";";

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
    echo '<script>alert("Cập nhật dữ liệu thành công!");</script>';
} else {
    echo '<script>alert("Cập nhật dữ liệu thất bại: '.$conn->error.'");</script>';
}
 
// Tạo xong thì ngắt kết nối
$conn->close();

echo "<script>window.location.href = '../index.php';</script>";
?>