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
if (isset($_POST['confirm'])) {
    $error = array();
    if (empty($_POST['uname'])) {
        $error[] = "user_name";

    } else {
        $uname = mysqli_real_escape_string($conn, strip_tags($_POST['uname']));
    }
    if (empty($_POST['pass'])) {
        $error[] = "pass";
    } else {
        $pass = mysqli_real_escape_string($conn, strip_tags($_POST['pass']));
    }
    if (empty($_POST['confirm_pass'])) {
        $error[] = "confirm_pass";
    } else if ($_POST['pass'] != $_POST['confirm_pass']) {
        $error[] = "confirm_pass2";
////////////////////////////////////////
    }
    if (empty($_POST['sex'])) {
        $error[] = "sex";
    } else {
        $sex = mysqli_real_escape_string($conn, strip_tags($_POST['sex']));
    }
    if (empty($error)){
        $q = "INSERT INTO user (username, pass) VALUE ('{$uname}','{$pass}')";
        $r = mysqli_query($conn,$q) or die ("Query {$q} \n<br/> MySQL Error: " . mysqli_error($conn));
        if (mysqli_affected_rows($conn) == 1) {
            $messages = "<p style='color: red'>Đã đăng ký user thành công</p>";
//            header("Location:user_register.php"); //reload page
        } else {
            $messages = "<p class='label-warning'>Đăng ký user không thành công, không kết nối với DB được </p>";
        }
    }
//    print_r($_POST);
//    print_r($error);
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
            <?php if (!empty($messages)) echo $messages ?>
            <form method="post" action="user_register.php" name="register_form">
                <div class="form-group">
                    <label>User Name:</label>
                    <input type="text" class="form-control" name="uname" id="usr">
                    <p id="username" style="color: red"></p>
                    <?php
                    if (isset($_POST['confirm'])) {
                        if (in_array("user_name", $error)) {
                            echo "<p style='color: red'>Please input username</p>";
                        }
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" class="form-control" name="pass" id="pwd">
                    <p id="validate_pass" style="color: red"></p>
                </div>
                <div class="form-group">
                    <label>Confirm Password:</label>
                    <input type="password" class="form-control" name="confirm_pass" id="pwd1">
                    <p id="validate_confirm_pass" style="color: red"></p>
                </div>
                <div class="form-group">
                    <label>Sex:
                        <label class="radio-inline">
                            <input type="radio" name="sex" id="sex-1" value="1">Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="sex" id="sex-2" value="2">Female
                        </label>
                    </label>
                    <p id="sex" style="color: red"></p>
                </div>
                <!--                <div class="checkbox">-->
                <!--                    <label><input type="checfsdfsdfdskbox"> Remember me</label>-->
                <!--                </div>-->
                <button type="submit" class="btn btn-primary" id="btn_confirm" name="confirm">Confirm</button>
            </form>
            <p id="demo"></p>
        </div>
        <div class="col-md-2">RIGHT</div>
    </div>
    <div class="row">
        <div class="col-md-12" style="background-color:lavender;">BOTTOM</div>
    </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script>

    $("#btn_confirm").click(function() {
        return validate_form();
//        var a = document.getElementById("validate_pass");
//        var x = document.getElementById("pwd").value;
//        if (x==""){
//            a.innerHTML="Please input password";
//            return false;
//        }
    });
    function validate_form() {
        var a1 = document.getElementById("username");
        var x1 = document.getElementById("usr").value;
        var a2 = document.getElementById("validate_pass");
        var x2 = document.getElementById("pwd").value;
        var a3 = document.getElementById("validate_confirm_pass");
        var x3 = document.getElementById("pwd1").value;
        var a4 = document.getElementById("sex");
        var x4a = document.getElementById("sex-1");
        var x4b = document.getElementById("sex-2");

        var chk = true;

        if (x1=="") {
            a1.innerHTML = "Please input username";
            chk = false;
        }else {
            a1.innerHTML = "";
        }

        if (x2==""){
            a2.innerHTML="Please input password";
            chk = false;
        }else if(!x2.match(/^\d+$/g)){
            a2.innerHTML="Please input only number";
            chk = false;
        }else if((x2.length < 6)||(x2.length > 8)){
            a2.innerHTML="Please input 6-8 characters";
            chk = false;
        }else{
            a2.innerHTML="";
        }

        if (x3=="") {
            a3.innerHTML = "Please input confirm password";
            chk = false;
        }else if(x2 != x3){
            a3.innerHTML = "Confirm pass not match password";
            chk = false;
        }else{
            a3.innerHTML = "";
        }

        if(x4a.checked==false && x4b.checked==false){
            a4.innerHTML = "Please select male or female";
            chk = false;
        }else{
            a4.innerHTML = "";
        }
        return chk;
    }
</script>

</body>
</html>