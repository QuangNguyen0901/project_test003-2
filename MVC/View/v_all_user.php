<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sach user </title>
    <link rel="stylesheet" href="/css/bootstrap-3.3.7-dist/css/bootstrap.css"/>
</head>
<body>
<h3>Users</h3>
<div class="table-bordered">
    <?php
    include("../Controller/c_user.php"); ?>

    <?php
    print_r($user);
    foreach ($user as $user){
    ?>

    <div class="1user table-bordered" style="float:left; width: 150px;">
        <h4> User</h4>
        <p> <?php echo $user->username ?> </p>
        <h4> Sex</h4>
        <p> <?php echo $username->sex ?></p>
    </div>
    <?php
    }
    ?>

</div>
</body>
</html>









