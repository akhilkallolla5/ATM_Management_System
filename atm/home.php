<?php 
include('conn.php');
session_start();
if(!$_SESSION['id']){
    echo "<script>window.open('index.php','_self');</script>";
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
								    <h4><b>Welcome Mr/Ms. <?php echo ucwords($_SESSION['name']);?></b></h4>
								    <hr/>
								    <h4>Select your choice </h4>
									<h5>1 : Balance Enquery </h5>
									<h5>2 : Withdrawal </h5>
									<h5>3 : Check Transactions</h5>	
								</div>
							</div>
							<div class="panel-footer">
                                <select name="option" class="form-control">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                                <br/>
                                <center>
                                    <button type="submit" name="sub" class="btn btn-info btn-custom"><span class="glyphicon glyphicon-send"></span> Submit</button>
                                </center>
                            </div>
                        </div>
						<?php
						if(isset($_POST['sub']))
						{//1st starts
					        $opt=$_POST['option'];
							// to save from hacking or not
							if($opt==1)
							{
                                echo "<script>window.open('chk_amt.php','_self');</script>";
							}
							else if($opt==2)
							{
                                echo "<script>window.open('chk_cash.php','_self');</script>";
							}
							else if($opt==3)
							{
                                echo "<script>window.open('check.php','_self');</script>";
                            }// isset bracket ends here
                        }
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
<?php  } ?>