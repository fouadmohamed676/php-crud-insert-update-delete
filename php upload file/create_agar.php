<?php
include_once 'database.php';
include("developers.php");

?>
<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>إضافة مستأجر</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="dashboard_files/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard_files/css/ionicons.min.css">
    <link rel="stylesheet" href="dashboard_files/css/skin-blue.min.css">

    <link rel="stylesheet" href="dashboard_files/css/font-awesome-rtl.min.css">
    <link rel="stylesheet" href="dashboard_files/css/AdminLTE-rtl.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
    <link rel="stylesheet" href="dashboard_files/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="dashboard_files/css/rtl.css">

    <style>
        body, h1, h2, h3, h4, h5, h6 {
            font-family: 'Cairo', sans-serif !important;
        }
    </style>

    <style>
        .mr-2{
            margin-right: 5px;
        }

        .loader {
            border: 5px solid #f3f3f3;
            border-radius: 50%;
            border-top: 5px solid #367FA9;
            width: 60px;
            height: 60px;
            -webkit-animation: spin 1s linear infinite; /* Safari */
            animation: spin 1s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

    </style>
    <script src="dashboard_files/js/jquery.min.js"></script>

    <link rel="stylesheet" href="dashboard_files/plugins/noty/noty.css">
    <script src="dashboard_files/plugins/noty/noty.min.js"></script>

    <!-- {{--morris--}} -->
    <link rel="stylesheet" href="dashboard_files/plugins/morris/morris.css">
    <link rel="stylesheet" href="dashboard_files/plugins/morris/morris.css">

    <!-- {{--iCheck--}} -->
    <link rel="stylesheet" href="dashboard_files/plugins/icheck/all.css">

    <!-- {{--html in  ie--}} -->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

    <header class="main-header">
        <a href="dashboard/index2.html" class="logo">
            <span class="logo-mini"><b>A</b>LT</span>
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>

        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

    


 <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
             <li class="dropdown user user-menu">

                        <ul class="dropdown-menu">
                           <li class="user-footer">
                                <a href="login.php" class="btn btn-default btn-flat" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"> تسجيل الخروج</a>

                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </nav>
       
    </header>
    

    <!--aside-->

    <aside class="main-sidebar">

    <section class="sidebar">

    <ul class="sidebar-menu" data-widget="tree">
    <li>
                <a href="owners.php"><i class="fa fa-tag"></i><span>بيانات المالك</span></a>
            </li>
    

        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="orders.php"><i class="fa fa-tag"></i><span> الطلبات</span></a></li>
        </ul>
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="comments.php"><i class="fa fa-tag"></i><span>التعليقات </span></a></li>
        </ul>

        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="add_owner.php"><i class="fa fa-plus"></i><span>اضافه مالك</span></a></li>
        </ul>
        
        
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="Comments.php"><i class="fa fa-tag"></i><span> التعليقات</span></a></li>
        </ul>
        
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="logout.php"><i class="fa fa-sign-out"></i><span>تسجيل خروج</span></a></li>
        </ul>

    </section>

</aside>


 <div class="content-wrapper">
        <section class="content-header">
            <strong>اضافه عقار</strong>
            <ol class="breadcrumb">
                <li><a href="owners.php"><i class="fa fa-dashboard"></i>الرئيسيه</a></li>
                <li class="active">اضافه</li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                </div><!-- end of box header -->
                <div class="box-body">
                <form action="add_agar.php" method="post" enctype="multipart/form-data">
                    <!-- <form action="add_rental.php" method="post"> -->
                        <div class="row">
                        							 	
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>الاسم</label>
                                    <input type="text" required name="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>المنطقه</label>
                                    <input type="text" required name="area" class="form-control">
                                </div>
                            </div>



                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> الكود</label>
                                    <input type="text" required name="code" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> الوحدة</label>
                                    <input type="text" required name="units" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>النوع</label>


                                    <select name="type" class="form-control">
                                            <option value="">  نوع العقار </option>
                                            <option value="سكني">سكني</option>
                                            <option value="إيجار">إيجار</option>
                                        </select>

                                    <!-- <input type="text" required name="type" class="form-control"> -->
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> الصالات</label>
                                    <input type="text" required name="halls" class="form-control">        
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> </label>
                                    <input type="hidden" required name="owner_id" class="form-control" value="<?php echo $_GET['id']

?>">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> العقد</label>
                                    <input type="file" required name="my_image">
                                     </div>
                            </div>
                        </div>
                        
                    
                        <div class="form-group">
                        <input type="submit" name="submit" value="تأكيد" class="btn btn-success">
                            <!-- <button type="submit" value="submit" class="btn btn-primary"><i class="fa fa-plus"></i>اضافه</button> -->
                        </div>

                    </form><!-- end of form -->
                <?php 
                // }else {
                //     echo "noooo ";
                // }
                
                ?>
                </div><!-- end of box body -->
            </div><!-- end of box -->
        </section><!-- end of content -->
    </div><!-- end of content wrapper -->



     <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016
            <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

</div><!-- end of wrapper -->

<script src="dashboard_files/js/bootstrap.min.js"></script>
<script src="dashboard_files/plugins/icheck/icheck.min.js"></script>

<script src="dashboard_files/js/fastclick.js"></script>

<script src="dashboard_files/js/adminlte.min.js"></script>

<script src="dashboard_files/plugins/ckeditor/ckeditor.js"></script>

<script src="dashboard_files/js/jquery.number.min.js"></script>

<script src="dashboard_files/js/printThis.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="dashboard_files/plugins/morris/morris.min.js"></script>

<script src="dashboard_files/js/custom/image_preview.js"></script>
<script src="dashboard_files/js/custom/order.js"></script>
</body>
</html>
