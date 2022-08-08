<!DOCTYPE html>
<html>
	<head>
        <meta http-equiv="refresh" content=""/>	
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Website - Main Menu</title>
        <link rel="stylesheet" href="atm/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="atm/css/custom.css"/>
        <script src="atm/js/jquery_library.js"></script>
		<script src="atm/js/bootstrap.min.js"></script>
        <style>
            footer{
                color: #fff;
                padding: 15px 0px;
                font-size: 17px;
                background-color: #222;
            }
            .panel-body{
                padding-bottom: 10px;
            }
        </style>
    </head>
	<body style="background: #ccc;">
		<nav class="navbar navbar-default navbar-fixed-top" style="background:">
			<div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand"><strong><i class="glyphicon glyphicon-list-alt "></i> Website - Main Menu</strong></a>
                </div>
			</div>
		</nav>	
		<!-- navbar ends-->
		<div class="container-fluid" style="background: #f3f3f3; margin-top:50px;">
			<br/><div class="row">
                <div class="col-sm-1"></div>
				<!-- Main Menu -->
                <div class="col-sm-3">
                    <div class="panel" style="border-radius:0px; box-shadow:2px 2px 4px 0px">
                        <div class="panel-heading" id="signin_panel_header">
                            <p align="center"> <img src="atm/admin/download.png" style="width: 50%;border-radius: 50%;text-align: center;margin-top: 20px;"/> </p>
                            <h4 align="center" style="padding-top:5px;">User Login</h4><hr/>
                        </div>
                        <div class="panel-body" style="margin-top:-30px;">
                           <center>
                                  <a class="btn btn-success" style="padding:15px 20px;" href="atm/"><i class="glyphicon glyphicon-log-in"></i>  Visit</a>
                         </center>
                        </div>
                    </div>
                </div>
                <!-- Admin Menu -->
                <div class="col-sm-4">
                    <div class="panel" style="border-radius:0px; box-shadow:2px 2px 4px 0px">
                        <div class="panel-heading" id="signin_panel_header">
                            <p align="center"> <img src="atm/admin/images.png" style="width: 50%;border-radius: 50%;text-align: center;margin-top: 20px;"/> </p>
                            <h4 align="center" style="padding-top:5px;">Manager Login</h4><hr/>
                        </div>
                        <div class="panel-body" style="margin-top:-30px;">
                           <center>
                                  <a class="btn btn-success" style="padding:15px 20px;" href="atm/manager/"><i class="glyphicon glyphicon-log-in"></i>  Visit</a>
                         </center>
                        </div>
                    </div>
                </div>
                <!-- Admin Menu -->
				<div class="col-sm-3">
                    <div class="panel" style="border-radius:0px; box-shadow:2px 2px 4px 0px">
                        <div class="panel-heading" id="signin_panel_header">
                            <p align="center"> <img src="atm/admin/user.png" style="width: 50%;border-radius: 50%;text-align: center;margin-top: 20px;"/> </p>
                            <h4 align="center" style="padding-top:5px;">Admin Login</h4><hr/>
                        </div>
                        <div class="panel-body" style="margin-top:-30px;">
                           <center>
                               <a class="btn btn-success" style="padding:15px 20px;" href="atm/admin/"><i class="glyphicon glyphicon-log-in"></i>  Visit</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
			</div>
		</div>
		<!-- Main div end -->
		<footer class="container-fluid" style="background:#444; color:#fff;">
            <p align="center">Copyright &copy; 2019</p>
            <p align="center">Website Developed By CME-005</p>
        </footer>
		<!-- footer end-->
	</body>
</html>