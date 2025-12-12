<?php
/**
 * Created by PhpStorm.
 * User: vishal
 * Date: 10/23/17
 * Time: 1:45 PM
 */ ?>
<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css"/>
</head>
<body>


<div class="container">
    <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="img/htl.png"/>

        <br>
        <div class="result">
            <?php
            if (isset($_GET['empty'])){
                echo '<div class="alert alert-danger">Vui lòng nhập Tên đăng nhập hoặc Mật khẩu</div>';
            }elseif (isset($_GET['loginE'])){
                echo '<div class="alert alert-danger">Tên đăng nhập hoặc Mật khẩu không đúng</div>';
            } ?>
        </div>
        <form class="form-signin" data-toggle="validator" action="ajax.php" method="post">
            <div class="row">
                <div class="form-group col-lg-12">
                    <label>Tên đăng nhập hoặc Email</label>
                    <input type="text" name="email" class="form-control" placeholder="" required
                           data-error="Vui lòng nhập Tên đăng nhập hoặc Email">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-lg-12">
                    <label>Mật khẩu</label>
                    <input type="password" name="password" class="form-control" placeholder="" required
                           data-error="Vui lòng nhập Mật khẩu">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <button class="btn btn-lg btn-success btn-block btn-signin" type="submit" name="login">ĐĂNG NHẬP</button>

        </form><!-- /form -->
    </div><!-- /card-container -->
</div><!-- /container -->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator.min.js"></script>
</body>
</html>