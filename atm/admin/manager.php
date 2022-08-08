	    <br/>
		<div class="row">					
			<div class="col-md-8 ">
                <div class="panel">
                    <div class="panel-body" style="padding-bottom:0px;border-radius:0px; box-shadow:2px 2px 4px 0px;">
                        <table class="table table-responsive table-bordered table-hover">
                            <tr>
                                <td align="center" colspan="8" style="background:#444; color:#fff; font-size:22px; border-color:#444;">Manager</td>
                            </tr>
                            <tr>
                                <td align="center" ><b>Sr.no</b></td>
                                <td align="center" ><b>Name</b></td>
                                <td align="center" ><b>Username</b></td>
                                <td align="center" ><b>Password</b></td>
                                <td align="center" ><b>Delete</b></td>
                            </tr>
                            <?php
                                $i = 0;
                                $manager=mysqli_query($con,"select * from manager order by 1 desc");
                                while($row = mysqli_fetch_array($manager)){
                                $i++;
                            ?>
                            <tr>
                                
                                <td align="center"> <?php echo $i; ?></td>
                                <td align="center"> <?php echo $row['name']?></td>
                                <td align="center"> <?php echo $row['user']?></td>
                                <td align="center"> <?php echo $row['pass']?></td>
                                <td align="center"><a class="btn btn-danger btn-sm" href='delete.php?m=<?php echo $row['id'] ?>'> <i class="glyphicon glyphicon-trash"></i> </a></td>
                            </tr>
                        <?php } ?> 
                        </table>   
                    </div>
                </div>    
            </div>
            
            <div class="col-md-4 ">
                <div class="login-panel panel panel-default" style="border-radius:0px; box-shadow:2px 2px 2px 0px;">
                    <div>
                        <h3 align="center"><i class="glyphicon glyphicon-copy"></i>  Insert Manager </h3>
                    </div>
					<hr/>
                    <form method="post" action="" enctype="multipart/form-data">
						<div class="panel-body" style="margin-top:-15px;">  
							<fieldset>	
								<div class="form-group">
                                    <label>Name</label>
									<input class="form-control" name="name" type="text"  required placeholder="Name...">
								</div>							
								
                               <div class="form-group">
                                    <label>Username</label>
									<input class="form-control" name="u" type="text"  required placeholder="User Name...">
								</div>							
								
                                <div class="form-group">
                                    <label>Password</label>
									<input class="form-control" name="p" type="text"  required placeholder="User Password...">
								</div>							
										
								<?php
									if(isset($_POST['submit']))
									{//1st starts
										$n = ucwords($_POST['name']);
										$u = $_POST['u'];
										$p = $_POST['p'];
										if(mysqli_query($con,"insert into manager (name,user,pass)
                                        values('$n','$u','$p')")){
                                            echo "<script>alert('Manager has been Inserted...')</script>";
                                            echo "<script>window.open('index.php?m','_self')</script>";
										}
										else{
											echo "<script>alert('Error!!!')</script>";
										}  
                                    }// isset bracket ends here
								?>    
							</fieldset>
						</div>
						<div class="panel-footer">
                            <center>
                                <button name="submit" type="submit" value="Submit" class="btn btn-success" style="padding:12px 20px;"> <i class="glyphicon glyphicon-send"></i> Submit  </button>     
                            </center>
                        </div>
					</form>
                </div>
            </div>
        </div>
