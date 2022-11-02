<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Log in</title>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="dashboard_files/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard_files/css/ionicons.min.css">
    <link rel="stylesheet" href="dashboard_files/css/skin-blue.min.css">


        <link rel="stylesheet" href="dashboard_files/css/font-awesome-rtl.min.css">
        <link rel="stylesheet" href="dashboard_files/css/AdminLTE-rtl.min.css">
        <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
        <link rel="stylesheet" href="dashboard_files/css/bootstrap-rtl.min.css">
        <link rel="stylesheet" href="dashboard_files/css/rtl.css">

        <style>
            body, html {
              height: 100%;
              margin: 0;
            }

            .bg {
              /* The image used */
              background-image: url("login.jpg");

              /* Full height */
              height: 100%; 

              /* Center and scale the image nicely */
              background-position: center;
              background-repeat: no-repeat;
              background-size: cover;
            }
        </style>

        <style>
            body, h1, h2, h3, h4, h5, h6 {
                font-family: 'Cairo', sans-serif !important;
            }
        </style>


    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<body class="bg login-page">

<div class="login-box">

    <div class="login-logo">
        <a href="index.html"><b>Admin</b>LTE</a>
    </div><!-- end of login lgo -->

    <div class="login-box-body">
        <p class="login-box-msg">سجل وابداء جلستك</p>

        <form name="form1" method="post" action="check_login.php">           

            <div class="form-group has-feedback">
                <input type="email" required name="email" class="form-control" placeholder="البريد الاكتروني">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input type="password" required name="password" class="form-control" placeholder="كلمه المرور">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="form-group">
                <label style="font-weight: normal;"><input type="checkbox" name="remember">تذكرني</label>
            </div>

            <button type="submit" class="btn btn-primary btn-block btn-flat">دخول</button>

        </form><!-- end of form -->

    </div><!-- end of login body -->

</div><!-- end of login-box -->

<!-- jQuery 3 -->
<script src="dashboard_files/js/jquery.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="dashboard_files/js/bootstrap.min.js"></script>

<!-- icheck -->
<script src="dashboard_files/plugins/icheck/icheck.min.js"></script>

<!-- FastClick -->
<script src="dashboard_files/js/fastclick.js"></script>

</body>
</html>
