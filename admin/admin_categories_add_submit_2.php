<?php include("../includes/mysqli_connect.php"); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = array();
    if (empty($_POST['content'])) {
        $errors[] = "content";
    } else {
        $content = mysqli_real_escape_string($conn, strip_tags($_POST['content']));
    }

    if (empty($errors)) {
        $q = "INSERT INTO test_submit_2 (user_id, content) VALUES (1,'{$content}')";
        $r = mysqli_query($conn, $q) or die("Query {$q} \n<br/> MySQL Error: " . mysqli_error($conn));
        if (mysqli_affected_rows($conn) == 1) {
            $messages = "<p>Đã đăng ký test submit 2 thành công</p>";
            header( "Location:admin_categories_add.php" ); //reload page
        } else {
            $messages = "<p>Đăng ký test submit 2 không thành công, không kết nối với DB được </p>";
        }
    } else {
        $messages = "<p class='warning'>Hãy điền lại form</p>";
    }
}
?>
<?php if (!empty($messages)) echo $messages ?>