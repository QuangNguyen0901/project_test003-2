<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]);
$root_1 = $root."/AhKhuyenMai";
?>
<?php include("$root_1/includes/admin_head.php"); ?>
<body>
<div id="container">
    <?php include("$root_1/includes/header.php"); ?>
    <div id="content">
        <?php include("$root_1/includes/admin_sidebar_a.php"); ?>
        <div id="main_content">
            <div id="admin_title">
                <h3>Thêm member mới</h3>
                <p>Chủ đề:</p>
                <form>
                    <select name="catalog">
                        <option value="Shopping">Shopping</option>
                        <option value="eating_drinking">Ẩm thực</option>
                        <option value="event_ticket">Vé sự kiện</option>
                        <option value="Other">Khác</option>
                    </select>
                </form>
            </div><!--end div "admin_title"-->

        </div><!--end div "main_content"-->
        <?php include("$root_1/includes/sidebar_b.php"); ?>
        <div class="clear_both"></div>
    </div><!--end div "content"-->
    <?php include("$root_1/includes/footer.php"); ?>
</div><!--end div "container"-->
</body>
</html>











