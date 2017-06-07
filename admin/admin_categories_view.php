<?php $url_common = $_SERVER['DOCUMENT_ROOT']; ?>
<?php include($url_common . "/includes/admin_head.php"); ?>
<body>
<div id="container">
    <?php include($url_common . "/includes/header.php"); ?>
    <?php include("../includes/mysqli_connect.php"); ?>
    <div id="content">
        <?php include($url_common . "/includes/admin_sidebar_a.php"); ?>
        <div id="main_content">
            <div id="search_condition">
                <form action="" method="post">
                    <p>Category name:</p>
                    <input type="text" name="category_name_search" value=""><br><br>
                    <input type="submit" name="search" value="Search">
                </form>
            </div>
            <div id="search_result">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Category name</th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Category name</th>
                    </tr>
                </table>
            </div>

        </div><!--end div "main_content"-->
        <?php include($url_common . "/includes/sidebar_b.php"); ?>
        <div class="clear_both"></div>
    </div><!--end div "content"-->
    <?php include($url_common . "/includes/footer.php"); ?>
</div><!--end div "container"-->
</body>
</html>












