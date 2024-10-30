<?php
// Kết nối tới cơ sở dữ liệu
include 'database.php';

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $confirm_password = isset($_POST['confirm_password']) ? trim($_POST['confirm_password']) : '';

    // Kiểm tra username đã tồn tại chưa
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $errors[] = "Username đã tồn tại!";
    }

    // Kiểm tra email đã tồn tại chưa
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $errors[] = "Email đã tồn tại!";
    }

    // Kiểm tra password và confirm password
    if ($password != $confirm_password) {
        $errors[] = "Mật khẩu không khớp!";
    }

    // Xử lý upload hình ảnh
    $targetDir = "uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true); // Create directory if not exists
    }

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $targetFile = $targetDir . basename($_FILES['image']['name']);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Kiểm tra loại hình ảnh
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array($imageFileType, $allowedTypes)) {
            if (!move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                $errors[] = "Có lỗi khi tải hình ảnh.";
            }
        } else {
            $errors[] = "Chỉ chấp nhận hình ảnh JPG, JPEG, PNG, và GIF.";
        }
    }

    // Nếu không có lỗi, tiếp tục đăng ký
    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, email, password, profile_image) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $username, $email, $hashed_password, $targetFile);

        if ($stmt->execute()) {
            header("Location: login.php");
            exit();
        } else {
            $errors[] = "Đã xảy ra lỗi, vui lòng thử lại!";
        }
    }

    $stmt->close();
}

// Đóng kết nối cơ sở dữ liệu
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="signup.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="logo.png" class="rounded float-start" alt="HoaCo Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto justify-content-center">
                <li class="nav-item"><a class="nav-link" href="main.php">Trang chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="introduce.php">Giới thiệu</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item auth-links"><a class="nav-link" href="signup.php"><i class="fas fa-user"></i> Đăng kí</a></li>
                <li class="nav-item auth-links"><a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-md mt-5">
    <div class="row justify-content-between">
        <div class="col-md-6 col-lg-6">
            <h2 class="text-center">Hình Ảnh Đại Diện Đã Chọn </h2>
                <img id="imagePreview" src="" alt="Hình ảnh đại diện" style="display:none; width: 100%; height: auto; margin-top: 10px;">
        </div>
        <div class="col-md-6 col-lg-5">
                <h2 class="text-center">Sign Up</h2>
                <?php
                if (!empty($errors)) {
                    echo '<div class="alert alert-danger">';
                    foreach ($errors as $error) {
                        echo '<p>' . $error . '</p>';
                    }
                    echo '</div>';
                }
                ?>
                <form action="signup.php" method="POST" enctype="multipart/form-data" class="mt-4">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Chọn Hình Ảnh</label>
                        <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required onchange="previewImage(event)">
                    </div>
                    <img id="imagePreview" src="" alt="Hình ảnh đại diện" style="display:none; width: 100%; height: auto; margin-top: 10px;">
                    <button type="submit" class="btn btn-primary btn-block">Đăng Ký</button>
                    <p class="text-center mt-3">Bạn đã có tài khoản? <a href="login.php">Đăng nhập</a></p>
                </form>
            </div>
           
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
<script>
        function previewImage(event) {
            const image = document.getElementById('imagePreview');
            image.src = URL.createObjectURL(event.target.files[0]);
            image.style.display = 'block'; // Hiển thị hình ảnh
        }
    </script>
</body>
</html>
