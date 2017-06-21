<?php include("../includes/mysqli_connect.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ah Khuyến Mãi_Đăng ký</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap-3.3.7-dist/css/bootstrap.css"/>
</head>
<body>
<?php include("../includes/mysqli_connect.php"); ?>
<?php
if (isset($_POST['confirm'])){
    $error = array();
    if (empty($_POST['uname'])){
        $error[]="user_name";
    }else{
        $uname = mysqli_real_escape_string($conn, strip_tags($_POST['uname']));
    }
    if (empty($_POST['pass'])){
        $error[]="pass";
    }else{
        $pass = mysqli_real_escape_string($conn, strip_tags($_POST['pass']));
    }
    if (empty($_POST['confirm_pass']))or ($_POST !={
        $error[]="confirm_pass";
    }else{
////////////////////////////////////////
    }
    if (empty($_POST['sex'])){
        $error[]="sex";
    }else{
        $sex = mysqli_real_escape_string($conn, strip_tags($_POST['sex']));
    }
}


?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="background-color:lavender;">TOP</div>
    </div>
    <div class="row" style="background: #ffdebf;">
        <div class="col-md-2">LEFT</div>
        <div class="col-md-8" style="background-color: #ffbe87;">
            <h4>Member Register</h4>
            <form method="post">
                <div class="form-group">
                    <label>User Name:</label>
                    <input type="text" class="form-control" name="uname" id="usr">
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" class="form-control" name="pass" id="pwd">
                </div>
                <div class="form-group">
                    <label>Confirm Password:</label>
                    <input type="password" class="form-control" name="confirm_pass" id="pwd">
                </div>
                <div class="form-group">
                    <label>Sex:
                        <form>
                            <label class="radio-inline">
                                <input type="radio" name="sex" value="1">Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="sex" value="2">Female
                            </label>
                        </form>
                    </label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary" name="confirm">Confirm</button>
            </form>
        </div>
        <div class="col-md-2">RIGHT</div>
    </div>
    <div class="row">
        <div class="col-md-12" style="background-color:lavender;">BOTTOM</div>
    </div>
</div>

</body>
</html>