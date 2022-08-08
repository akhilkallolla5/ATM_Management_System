	    <br/>
		<div class="row">					
			<div class="col-md-12">
                <div class="panel">
                    <div class="panel-body" style="padding-bottom:0px;border-radius:0px; box-shadow:2px 2px 4px 0px;">
                        <table class="table table-responsive table-bordered table-hover">
                            <tr>
                                <td align="center" colspan="8" style="background:#444; color:#fff; font-size:22px; border-color:#444;">Customer Details</td>
                            </tr>
                          <tr>
						<td align="center" ><b>Name</b></td>
						<td align="center" ><b>Pass.</b></td>
						<td align="center" ><b>User</b></td>
						<td align="center" ><b>Bal. left</b></td>
						<td align="center" ><b>Bal. Limit</b></td>
						<td align="center" ><b> Delete</b></td>
					</tr>
					<?php
						$class2 = mysqli_query($con,"select * from user where reg='yes'");
						while($u = mysqli_fetch_array($class2))
						{
					?>
					<tr>
						<td align="center"><?php echo $u[1]; ?></td>
						<td align="center"><?php echo $u[2]?></td>							
						<td align="center"><?php echo $u[3]?></td>							
						<td align="center"><?php echo $u[5]?></td>		
						<td align="center"><?php echo $u[6]?></td>		
						<td align="center"> <a class="btn btn-danger btn-sm" href="delete.php?c=<?php echo $u[0] ?>"><i class="glyphicon glyphicon-trash"></i></a> </td>	
					</tr>
					<?php } ?> </table>   
                    </div>
                </div>    
            </div>
    </div>
