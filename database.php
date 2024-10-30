<?php
// Thông tin kết nối đến cơ sở dữ liệu
$servername = "localhost";  // Hoặc IP của server database
$username = "root";         // Tên đăng nhập MySQL
$password = "";             // Mật khẩu MySQL (trống nếu không có)
$dbname = "demoda";  // Tên cơ sở dữ liệu bạn muốn kết nối

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
