<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "game_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$username = $_POST['username'];
$email = $_POST['email'];
$game_story = $_POST['game_story'];

// Chèn dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO players (username, email, game_story) VALUES ('$username', '$email', '$game_story')";

if ($conn->query($sql) === TRUE) {
    echo "Đăng ký thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
