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
                    <input type="text" class="input-lg" name="category_name_search" value=""><br><br>
                    <button type="submit" class="btn" name="search">Search</button>
                    <button class="btn" name="clear_search">Clear</button>
                </form>
            </div>
            <div id="search_result">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $q= "SELECT categories_id,c_name FROM `categories`";
                    $r= mysqli_query($conn, $q) or die ("Query {$q} \n<br/> MySQL Error: " . mysqli_error($conn));

//                    var_dump($r);
                    while ($cats = mysqli_fetch_array($r,MYSQLI_ASSOC)){
//                        '<br/>'.var_dump($cats);
                        echo "<tr>
                        <td>".$cats['categories_id']."</td>
                        <td>".$cats['c_name']."</td>
                        <td><button class='btn-xs btn-primary'>Delete</button></td>
                    </tr>";
                    }
                    ?>
                    </tbody>
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












