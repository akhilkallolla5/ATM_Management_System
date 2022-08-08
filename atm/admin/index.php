<?php 
session_start();
include('../conn.php');
$admin= $_SESSION['name'];
if(!$_SESSION['email'])
{
header('location:login.php');
}else{
?>
<!DOCTYPE html>
<html>		    
	<head>
        <!--
            ==============================================
                Mobile + Desktop + Browser Responsive Tags
            ==============================================
        -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bank Atm System</title>
        <meta http-equiv="refresh" content=""/>
        <!--
            ============================
                Bootstrap + Custom + Css
            ============================
        -->
		<link rel="stylesheet" href="../css/bootstrap.min.css"/>
		<link rel="stylesheet" href="../css/custom.css"/>
		<!--
            ============================
                Bootstrap + Custom + Jquery
            ============================
        -->
		<script src="../js/jquery_library.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</head>
    <body>
        <!--
        ==================
            Navbar starts
        ==================
        -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><i class="glyphicon glyphicon-lock"></i> Admin Panel</b></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i>  Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--
        ==================
            Main Section
        ==================
        -->
        <div class="container-fluid" style="margin-top:50px; background:#666;">
            <div class="row">
                 <!--
                    ==================
                        Left Side
                    ==================
                 -->
                <div class="col-sm-3">
                    <br/>
                    <div class="well well-sm">
                        <ul class="nav">
                            <li class="" style="background:#999; text-align:center; font-size:25px; padding:0px 0px; margin:0px">Dashboard </li>
                            <li><a href="index.php?m"><span class="glyphicon glyphicon-cog"></span> Enter Managers</a></li>
                            <li><a href="index.php?a"><span class="glyphicon glyphicon-cog"></span> Enter Admin</a></li>
                            <li><a href="index.php?c"><span class="glyphicon glyphicon-cog"></span> Check Customers </a></li>
                            <li><a href="index.php?c_r"><span class="glyphicon glyphicon-cog"></span> Customers Request </a></li>
                        </ul>
                    </div>
                </div>
                 <!--
                    ==================
                        right Side
                    ==================
                 -->
                <div class="col-sm-9" style="background:#fdfdfd">
                    <!-- container-fluid-->
                      <?php 
                      if(isset($_GET['m'])){
                          include('manager.php');
                      }
                      else if(isset($_GET['a'])){
                          include('admin.php');
                      }
                      else if(isset($_GET['c_r'])){
                          include('request.php');
                      }
                      else if(isset($_GET['c'])){
                          include('customer.php');
                      }
                      else{  
                    ?>
                    <h1 class="page-header">Website Dashboard</h1>
                    <h3>Welcome ! <?php echo ucwords($admin); ?> </h3>
                    <hr/>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="well" style="border-radius:0px; padding-bottom:0px; box-shadow:2px 2px 3px 0px;">
                                <table class="table table-bordered table-hover table-striped">
                    
                                    <tr>
                                        <td colspan="2" style="background:#555; color:#fff; text-align:center; font-size:20px;">Website Status</td>
                                    </tr>
                                    
                                    <tr>
                                        <td align="center" width="50%"><b>Total Customers </b></td>
                                        <td align="center" width="50%">
                                            <b>
                                                <?php
                                                    echo $amt = mysqli_num_rows(mysqli_query($con,"select * from user")). " Customers";
                                                ?>
                                            </b>    
                                        </td>   
                                    </tr>	

                                    <tr>
                                        <td align="center" width="50%"><b>Total Managers </b></td>
                                        <td align="center" width="50%">
                                            <b>
                                                <?php
                                                    echo $amt = mysqli_num_rows(mysqli_query($con,"select * from manager")). " Managers";
                                                ?>
                                            </b>
                                        </td>
                                    </tr>	


                                    <tr>
                                        <td align="center" width="50%"><b>Total Admins </b></td>
                                        <td align="center" width="50%">
                                            <b>
                                                <?php
                                                    echo $amt = mysqli_num_rows(mysqli_query($con,"select * from admin")). " Admins";
                                                ?>
                                            </b>
                                        </td>
                                    </tr>	


                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <?php } ?>
                </div>
            </div>
        </div>
        <!--
        ==================
            Footer Section
        ==================
        -->
        <footer class="container-fluid" style="background:#444; font-size:19px; color:#fff;">
           <br/> <p align="center">Copyright &copy; 2019</p>
            <p align="center">Website Developed By CME-005</p>
        </footer>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.js"></script>
    </body>
</html>
<?php } ?>