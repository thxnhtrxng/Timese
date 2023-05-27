<?php
// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "signin");

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

// Xử lý dữ liệu đăng nhập từ form
if (isset($_POST['email']) && isset($_POST['matkhau'])) {
    $email = $_POST['email'];
    $password = $_POST['matkhau'];

    // Truy vấn để kiểm tra thông tin đăng nhập
    $query = "SELECT * FROM users WHERE email ='$email' AND matkhau ='$password'";
    $result = mysqli_query($conn, $query);

    // Kiểm tra kết quả truy vấn
    if (mysqli_num_rows($result) == 1) {
        // Đăng nhập thành công
        // Chuyển hướng đến trang hehe.html
        header("Location: ../html/hehe.html");
        exit(); // Kết thúc script để chuyển hướng ngay lập tức
    } else {
        // Đăng nhập thất bại
        echo "Đăng nhập thất bại!";
    }
}

// Đóng kết nối đến cơ sở dữ liệu
mysqli_close($conn);
?>
