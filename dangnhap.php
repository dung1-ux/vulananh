<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Đăng nhập</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
<div class="container mt-3">
    <h3>Xác thực biểu mẫu</h3>
    <p>Thử gửi biểu mẫu</p>

    <form action="xulydangnhap.php" class="was-validated" method="post">

        <div class="mb-3 mt-3">
            <label for="uname" class="form-label">Tên người dùng</label>
            <input
                type="text"
                class="form-control"
                id="uname"
                placeholder="Nhập tên người dùng"
                name="uname"
                required>

            <div class="valid-feedback">Hợp lệ</div>
            <div class="invalid-feedback">Vui lòng nhập tên người dùng</div>
        </div>

        <div class="mb-3">
            <label for="psw" class="form-label">Mật khẩu</label>
            <input
                type="password"
                class="form-control"
                id="psw"
                placeholder="Nhập mật khẩu"
                name="psw"
                required>

            <div class="valid-feedback">Hợp lệ</div>
            <div class="invalid-feedback">Vui lòng nhập mật khẩu</div>
        </div>

        <div class="form-check mb-3">
            <input
                class="form-check-input"
                type="checkbox"
                id="mycheck"
                name="remember"
                required>

            <label class="form-check-label" for="mycheck">
                Tôi đồng ý
            </label>

            <div class="valid-feedback">Hợp lệ</div>
            <div class="invalid-feedback">Bạn phải đồng ý trước khi gửi</div>
        </div>

        <button type="submit" class="btn btn-primary">
            Gửi
        </button>

    </form>
</div>

</body>
</html>