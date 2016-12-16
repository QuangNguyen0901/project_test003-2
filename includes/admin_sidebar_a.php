<div id="sidebar_a">
    <div id="admin_menu">
        <h3><a href="../admin/admin.php"> ADMIN</a></h3>
        <ul>
            <li><a href="../admin/user_manager.php">Quản lý user</a></li>
            <li><a href="../admin/catagory_manager.php">Quản lý catagory</a></li>
            <li><a href="../admin/tag_manager.php">Quản lý tag</a></li>
            <li><a href="../admin/news_manager.php">Quản lý news</a></li>
            <li><a href="../admin/special_news_manager.php">Quản lý special news</a></li>
        </ul>
    </div><!--end div "admin_menu"-->

    <div id="category_list">
        <h3>Danh sách category</h3>
        <ul>
            <?php
            $q = "SELECT c_name FROM `categories`";
            $r = mysqli_query($conn, $q) or die ("Query {$q} \n<br/> MySQL Error: " . mysqli_error($conn));
            while ($cats = mysqli_fetch_array($r,MYSQLI_ASSOC)){
                echo "<li><a href='../index.php'>".$cats['c_name']."</a>";
            }
            ?>
        </ul>
    </div><!--end div "category_list"-->

</div><!--end div "sidebar_a"-->