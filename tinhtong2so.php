
<?php
$a = "";
$b = "";
$kq = "";

if (isset($_POST["a"]) && isset($_POST["b"])) {
    $a = $_POST["a"];
    $b = $_POST["b"];

    if (is_numeric($a) && is_numeric($b)) {
        $kq = $a + $b;
    } else {
        $kq = "Dữ liệu tính toán phải là số";
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tổng hai số</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">TỔNG HAI SỐ</h1>

    <form method="post">
        <table class="table table-warning w-50 mx-auto">
            <tr>
                <td class="text-center">Nhập a</td>
                <td>
                    <input type="text" class="form-control" name="a"
                           value="<?php echo $a; ?>">
                </td>
            </tr>

            <tr>
                <td class="text-center">Nhập b</td>
                <td>
                    <input type="text" class="form-control" name="b"
                           value="<?php echo $b; ?>">
                </td>
            </tr>

            <tr>
                <td colspan="2" class="text-center">
                    <input type="submit" class="btn btn-primary" value="Tính">
                    <input type="reset" class="btn btn-secondary" value="Reset">
                </td>
            </tr>

            <tr>
                <td class="text-center">Kết quả</td>
                <td>
                    <input type="text" class="form-control"
                           value="<?php echo $kq; ?>" readonly>
                </td>
            </tr>
        </table>
    </form>
    
</div>

</body>
</html>