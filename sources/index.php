<?php
    include("db_config.php");
    $sql_sanpham = "select * from tbl_sanpham";
    $query_sanpham = mysqli_query($conn,$sql_sanpham);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head> 
<body>
    <div class="wrapper">
        <div class="header"></div>
        <div class="menu">
            <ul class="list-menu">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="#">Danh mục</a></li>
                <li><a href="#">Giỏ hàng</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>
        <div class="main">
            <div class="sidebar">
                <ul class="list-sidebar">
                    <li><a href="#">Ốp lưng</a></li>
                    <li><a href="#">Tai nghe</a></li>
                    <li><a href="#">Cục sạc</a></li>
                    <li><a href="#">Pin dự phòng</a></li>
                </ul>
            </div>
            <div class="maincontent">
                <ul class="list-product">
                <?php
                        while($row_pro = mysqli_fetch_array($query_sanpham)) {
                    ?>
                    <li>
                        <a href="#">
                            <img src="<?php echo $row_pro['hinhanh'] ?>" alt="Sản phẩm 1">
                            <p><?php echo $row_pro['tesanpham'] ?></p>
                            <p class="price">Giá: <?php echo $row_pro['giaban'] ?> vnđ</p>
                        </a>
                    </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <div class="footer">
            <p>Đây là footer</p>
        </div>
    </div>
</body>
</html>