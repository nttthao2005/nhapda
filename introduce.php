
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="introduce1.css">
    <title>Đăng Nhập</title>
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
    <div class="container-md">
        <div class="row">
            <!-- Cột 6 -->
            <div class="col-md-7 ">
                <!-- Tiêu đề chính -->
                <h2 class="fw-bold pt-4 text-center">Sơ lược về miền Trung Việt Nam</h2>
                <p class="mb-3">
                    Lãnh thổ nước ta trải dài từ Bắc xuống Nam và được chia làm 3 miền địa lý là <strong>Miền Bắc</strong> (Bắc Bộ), <strong>Miền Trung</strong> (Trung Bộ), và <strong>Miền Nam</strong> (Nam Bộ). Trong đó:
                </p>
                <p class="mb-4">
                    Miền Trung Việt Nam hay còn gọi là Trung Bộ bao gồm các tỉnh duyên hải từ Thanh Hóa tới Bình Thuận và các tỉnh Tây Nguyên. Có 1 thành phố trực thuộc trung ương là TP Đà Nẵng. Miền Trung chia làm tổng cộng <strong>3 vùng</strong> cơ bản là <strong>Bắc Trung Bộ</strong>, <strong>Tây Nguyên</strong> và <strong>Duyên hải Nam Trung Bộ</strong>. Cụ thể:
                </p>
                
                <!-- Danh sách các vùng -->
                <ul class="list-unstyled mb-4">
                    <li class="mb-2">
                    <strong>+Bắc Trung Bộ</strong> gồm 6 tỉnh: Tỉnh Thanh Hóa, Nghệ An, Hà Tĩnh, Quảng Bình, Quảng Trị và Thừa Thiên Huế.
                    </li>
                    <li class="mb-2">
                    <strong>+Duyên hải Nam Trung Bộ</strong> gồm 7 tỉnh và 1 thành phố: Tp. Đà Nẵng, Quảng Nam, Quảng Ngãi, Bình Định, Phú Yên, Khánh Hòa, Ninh Thuận và Bình Thuận.
                    </li>
                    <li class="mb-2">
                    <strong>+Tây Nguyên</strong> gồm 5 tỉnh: Kon Tum, Gia Lai, Đắk Lắk, Đắk Nông và Lâm Đồng.
                    </li>
                </ul>

                <!-- Đoạn văn bổ sung -->
                <p class="mb-3">
                    Miền Trung có địa hình nổi lên là núi sát biển, đều các dải đồng bằng nhỏ hẹp.
                </p>
                <p class="mb-3">
                    <strong>+ Vị trí địa lý:</strong> Miền Trung là một trong ba vùng văn hóa nước ta, được bao bọc bởi địa hình núi đồi chạy dọc bờ biển hẹp ở phía Đông. Phía Đông là biển, phía Tây giáp địa hình trung du Tây Nguyên – Tây nguyên Việt Nam (khoảng 50 km) và nối liền đến Quảng Bình.
                </p>
                <p>
                    Tiếp giáp biển: Phía cực Bắc của miền Trung giáp khu vực Đông bằng sông Hồng và Trung du và miền núi phía Bắc; phía Nam giáp tỉnh Bình Phước, Đồng Nai và Bà Rịa – Vũng Tàu vùng Nam Bộ; phía Đông giáp Biển Đông; phía Tây giáp 2 nước Lào và Campuchia.
                </p>
            </div>
            
            <!-- Cột 4 -->
            <div class="col-md-5 pt-4">
                <div class="map-image">
                <img src="https://www.invert.vn/media/uploads/uploads/04160144-2-ban-do-mien-trung-viet-nam.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>


    <?php include 'footer.php'; ?>
</body>
</html>
