<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả đăng nhập</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

<?php
$user = $_POST["uname"] ?? "";
$pass = $_POST["pswd"] ?? "";
?>

<div class="container vh-100 d-flex justify-content-center align-items-center">

    <div class="card shadow-lg border-0 rounded-4" style="width: 500px;">

        <div class="card-header bg-primary text-white text-center py-4 rounded-top-4">
            <h2><i class="bi bi-person-check-fill"></i> Đăng nhập thành công</h2>
        </div>

        <div class="card-body p-4">

            <div class="mb-4">
                <label class="form-label fw-bold">
                    <i class="bi bi-person-fill"></i> Tên đăng nhập
                </label>
                <div class="form-control bg-light">
                    <?php echo htmlspecialchars($user); ?>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">
                    <i class="bi bi-lock-fill"></i> Mật khẩu
                </label>
                <div class="form-control bg-light">
                    <?php echo htmlspecialchars($pass); ?>
                </div>
            </div>

            <div class="d-grid gap-2">
                <a href="dangnhap.php" class="btn btn-success btn-lg">
                    <i class="bi bi-arrow-left-circle"></i>
                    Quay lại đăng nhập
                </a>
            </div>

        </div>

        <div class="card-footer text-center text-muted">
            © 2025 Hệ thống đăng nhập
        </div>

    </div>

</div>

</body>
</html>