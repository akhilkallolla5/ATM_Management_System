<?php 
include('conn.php');
session_start();
if(!$_SESSION['id']){
    echo "<script>window.open('chkamt.php','_self');</script>";
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
        <!--
            ============================
                Bootstrap + Custom + Css
            ============================
        -->
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/custom.css"/>
		<!--
            ============================
                Bootstrap + Custom + Jquery
            ============================
        -->
		<script src="js/jquery_library.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
	 <!--
            ====================
                Navbar Starts
            ====================
        -->
		<nav class="navbar navbar-default navbar-fixed-top" style="background:">
			<div class="container">
				<div class="navbar-header">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
					 <a class="navbar-brand" href="home.php"><strong><i class="glyphicon glyphicon-list-alt"></i> Opra Bank (ATM)</strong></a>
     			</div>
                <div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="logout.php"><span class='glyphicon glyphicon-log-out'></span>  Logout</a></li>
                    </ul>
			</div>
		</nav>	
        <!--
            ====================
                Main Section Starts
            ====================
        -->
        <div class="container-fluid" style="background:#ddd; margin-top:50px;">
            <br/>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form method="post" action="">
                        <div class="panel" style="border-radius:0px; box-shadow:2px 2px 4px 0px;">
                            <div class="panel-heading" style="font-size:23px; margin-bottom:-20px; text-align:center;">
                                <i class="glyphicon glyphicon-copy"></i> ATM Machine 
                            </div>
                            <hr/>
                            <div class="panel-body" style="margin:-20px 0px; ">
                                <div class="well well-sm" style="border-radius:0px;">
                                    <?php
									   $id=$_SESSION['id'];
                                        $amt=mysqli_fetch_array(mysqli_query($con,"select * from user where id='$id'"));
                                    ?>
                                    <h4 align="center">Account Balance : Rs. <?php echo $amt['amt']; ?>  </h4>
									<hr/>
									<h4 align="center">Withdraw Balance : Rs. <?php if(@$_GET['r']){echo @$_GET['r'];}else{ echo "0";} ?>  </h4>
									<hr/>
									<p align="center"><a href="home.php" align="center" class="btn btn-info btn-custom">Back</a></p>
								</div>
                            </div>
                            <div class="panel-footer" align="center">
                                <input type="text" name="amt" required="" placeholder="Enter Amount..." class="form-control"/><br/>
                                <button type="submit" name="sub" class="btn btn-success btn-custom"><span class="glyphicon glyphicon-thumbs-up"></span> Withdraw </button>
                            </div>
                        </div>
                        <?php
                            if(isset($_POST['sub']))
                            {//1st starts
                                $rup=$_POST['amt'];
                                // to save from hacking or not
                                if($amt['amt']==0){
                                    echo "<script>alert('Please Recharge your Account! Thank you');</script>";
                                }
                                else if($rup<500 || $rup>6000)
                                {
									echo "<script>alert('You Can withdraw mininum 500 and maximum 6000');</script>";
                                }
                                else if($rup<=$amt['amt']){
                                    $amnt = $amt['amt'];
                                    $amnt = $amnt - $rup;
                                    $id=$_SESSION['id'];
                                    $date = date('d/M/y h:i a');
                                    $t_date = date('M/y');
                                    mysqli_query($con,"update user set amt='$amnt',lt='$date' where id='$id'");
                                    mysqli_query($con,"insert into tran (uid,dte,amt,month) values('$id','$date','$rup','$t_date')");   
                                    echo "<script>window.open('chk_cash.php?r=$rup','_self');</script>";
                                }else{
				    				echo "<script>alert('Withdraw amount is greater then your balance.');</script>";
                                }
                            }
                            //amt zero
                        ?>
                    </form>	
                </div>
            </div>
        </div>
		 <!--
            ======================
                Footer  Starts 
            ======================
        -->
        <div class="container-fluid" style="background:#555; color:#fff; padding:10px 0px">
            <h4 align="center">Copyrights &copy; 2019</h4>
            <h4 align="center">Website Developed by CME-005</h4>
        </div>
	</body>
</html>
<?php } ?>