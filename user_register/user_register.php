<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ah Khuyến Mãi_Đăng ký</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap-3.3.7-dist/css/bootstrap.css"/>
</head>
<body>

<div class="container-fluid">
    <div class ="row">
        <div class="col-md-12" style="background-color:lavender;">TOP</div>
    </div>
    <div class ="row" style="background: #ffdebf;">
        <div class="col-md-2" >LEFT</div>
        <div class="col-md-8" style="background-color: #ffbe87;">
            <h4>Đăng ký thành viên</h4>
            <form>
                <div class="form-group">
                    <label>User Name:</label>
                    <input type="text" class="form-control" id="usr">
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label>First Name:</label>
                    <input type="text" class="form-control" id="fname" >
                </div>
                <div class="form-group">
                    <label>Last Name:</label>
                    <input type="text" class="form-control" id="lname" >
                </div>
                <div class="form-group">
                    <label>Sex:
                    <form>
                        <label class="radio-inline">
                            <input type="radio" name="optradio">Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="optradio">Female
                        </label>
                    </form>
                    </label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-default">Confirm</button>
            </form>
        </div>
        <div class="col-md-2" >RIGHT</div>
    </div>
    <div class ="row">
        <div class="col-md-12" style="background-color:lavender;">BOTTOM</div>
    </div>
</div>

</body>
</html>