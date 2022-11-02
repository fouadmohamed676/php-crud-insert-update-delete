
<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM rental");
if (mysqli_num_rows($result) > 0) {
?>

<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Blank Page</title>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="dashboard_files/img/user2-160x160.jpg" class="user-image" alt="User Image">
                        </a>
                        <ul class="dropdown-menu">
        
                            <li class="user-header">
                                <img src="dashboard_files/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                               
                            </li>
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
            <li><a href="owners.php"><i class="fa fa-tag"></i><span>بيانات المالك</span></a></li>
        </ul>
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="comments.php"><i class="fa fa-tag"></i><span>التعليقات </span></a></li>
        </ul>

        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="add_owner.php"><i class="fa fa-plus"></i><span>اضافه مالك</span></a></li>
        </ul>
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="agar.php"><i class="fa fa-tag"></i><span> العقارات</span></a></li>
        </ul>
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="rental.php"><i class="fa fa-tag"></i><span> المستأجرين</span></a></li>
        </ul>
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="Comments.php"><i class="fa fa-tag"></i><span> التعليقات</span></a></li>
        </ul>
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="orders.php"><i class="fa fa-tag"></i><span> الطلبات</span></a></li>
        </ul>
        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="logout.php"><i class="fa fa-sign-out"></i><span>تسجيل خروج</span></a></li>
        </ul>


    </section>

</aside>
 <div class="content-wrapper">
        <section class="content-header">
            <strong>عرض المستأجرين</strong>
            <ol class="breadcrumb">
                <li><a href="owners.php"><i class="fa fa-dashboard"></i>الرئيسيه</a></li>
                <li class="active">المستأجرين</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">


                       

                </div><!-- end of box header -->

                <div class="box-body">

                        <table class="table table-hover">

                            <thead>
                            <tr>
                            <th>#</th>
                                <th>المستأجر</th>
                                <th>رقم الهاتف</th>
                                <th> قيمة الإيجار</th>
                                <th>التأمين</th>
                                <th>فاتورة الكهرباء</th>
                                <th>فاتورةالمياه</th>
                                <th>رقم الكهرباء</th>
                                <th>العقد الالكتروني</th>
                                <th>تاريخ الاستحقاق</th>
                                <th>الهويه</th>
                                <th>تاريخ العقد</th>
                                <th>نوع الدفع</th>
                                <th>قيمة الدفع</th>
                                <th>فترة العقد</th>
                            </tr>
                            </thead>
                            <?php
			$i=1;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr style="width: 20px;"> 	 	
       	 	 	 	 
      	 	
       	 	 	 	 	 	        	 	 	 	
	    <td><?php echo $i; ?></td>					
		<td><?php echo $row["rental_name"]; ?></td>
		<td><?php echo $row["rental_phone"]; ?></td>
		<td><?php echo $row["total_rent"]; ?></td>
		<td><?php echo $row["rent_insurance"]; ?></td>
		<td><?php echo $row["elctri_bill"]; ?></td>
		<td><?php echo $row["water_bill"]; ?></td>
        <td><?php echo $row["elctri_no"]; ?></td>
		<td>
            <!-- <?php echo $row["contrect_url"]; ?> -->
        <a href="#" class="btn btn-success">عرض</a></td>
		<td><?php echo $row["pay_date"]; ?></td>
		<td><?php echo $row["rental_id_card"]; ?></td>
		<td><?php echo $row["contract_date"]; ?></td>
		<td><?php echo $row["kind_pay"]; ?></td>
		<td><?php echo $row["pay_value"]; ?></td>
		<td><?php echo $row["contract_period"]; ?></td>

        <td>
              </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else

{
    header("Location: rental.php");
}
?>
                        </table><!-- end of table -->


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




























