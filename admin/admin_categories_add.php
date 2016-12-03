<?php $url_common = $_SERVER['DOCUMENT_ROOT']; ?>
<?php include($url_common ."/includes/admin_head.php"); ?>
<body>
<div id="container">
    <?php include($url_common . "/includes/header.php"); ?>
    <?php include("../includes/mysqli_connect.php"); ?>
    <div id="content">
        <?php include($url_common . "/includes/admin_sidebar_a.php"); ?>
        <div id="main_content">
            <div id="admin_title">
                <h3>Thêm Category mới</h3>

                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $errors = array();
                    if (empty($_POST['category'])) {
                        $errors[] = "category";
                    } else {
                        $cat_name = $_POST['category'];
                    }
                    if (empty($_POST['icon'])) {
                        $errors[] = "icon";
                    } else {
                        $icon = $_POST['icon'];
                    }

                    if (empty($errors)) {
                        $q = "INSERT INTO categories (user_id, c_name, c_icon) VALUES (1,'{$cat_name}','{$icon}')";
                        $r = mysqli_query($conn, $q) or die("Query {$q} \n<br/> MySQL Error: " . mysqli_error($conn));
                        if (mysqli_affected_rows($conn) == 1) {
                            echo "<p>Đã đăng ký category thành công</p>";
                        } else {
                            echo "<p>Đăng ký category không thành công, không kết nối với DB được </p>";
                        }
                    } else {
                        echo "<p class='warning'>Hãy điền lại form</p>";
                    }
                }
                ?>
                <form id="add_cat" action="" method="post">
                    <p>Tên Category </p>
                    <input type="text" name="category" id="category" value=""/>
                    <?php
                    if(isset($errors) and in_array('category', $errors)) {
                        echo "<p class='warning'>Hãy điền tên category</p>";
                    }
                    ?>

                    <p>Chọn icon</p>
                    <input type="text" name="icon" id="icon" value=""/>
                    <?php
                    if (isset($errors) AND in_array('icon', $errors)) {
                        echo "<p class='warning'>Hãy chọn icon</p>";
                    }
                    ?>

                    <p><input type="submit" name="submit" value="Thêm category"></p>
                </form>

            </div><!--end div "admin_title"-->

        </div><!--end div "main_content"-->
        <?php include($url_common . "/includes/sidebar_b.php"); ?>
        <div class="clear_both"></div>
    </div><!--end div "content"-->
    <?php include($url_common . "/includes/footer.php"); ?>
</div><!--end div "container"-->
</body>
</html>











