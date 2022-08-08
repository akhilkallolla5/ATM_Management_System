	    <br/>
		<div class="row">					
			<div class="col-md-12">
                <div class="panel">
                    <div class="panel-body" style="padding-bottom:0px;border-radius:0px; box-shadow:2px 2px 4px 0px;">
                        <table class="table table-responsive table-bordered table-hover">
                            <tr>
                                <td align="center" colspan="8" style="background:#444; color:#fff; font-size:22px; border-color:#444;">Customer Requests</td>
                            </tr>
                           <tr>
                               <td align="center" ><b>Name</b></td>
                               <td  align="center" ><b>Bal Limit</b></td>
                               <td  align="center" ><b>Delete / Accept</b></td>
                            </tr>					
                            <?php
                                $class4 = mysqli_query($con,"select * from user where reg='no'");
                                if(mysqli_num_rows($class4)!=0){
                                while($get_class = mysqli_fetch_array($class4)){
                                    $s_id	=   $get_class['0'];
                                    $name	=   $get_class['1'];
                                    $bal	=   $get_class['g_amt'];
                            ?>
                            <tr>
                                <td align="center"><?php echo $name;?></td>
                                <td align="center"><?php echo $bal;?></td>
                                <td align="center"> <a class="btn btn-danger btn-sm" href="delete.php?r=<?php echo $s_id ?>"><i class="glyphicon glyphicon-trash"></i></a> | <a class="btn btn-primary btn-sm" href="index.php?c_r&&ok=<?php echo $s_id ?>"><i class="glyphicon glyphicon-ok"></i></a></td>
                            </tr>
                            <?php }//while end
                                }else{
                                    echo "
                                    <tr>
                                        <td colspan='5' align='center' style='color:red; font-size:20px;'>No Requests !!!</td>
                                    </tr>"		;
                                }
                            ?>				
                        </table>   
                    </div>
                </div>    
            </div>
    </div>
  <?php
    if(isset($_GET['ok'])){
        $id=$_GET['ok'];
        $class4 = mysqli_query($con,"update user set reg='yes' where id='$id'");
        echo "<script>window.open('index.php?c_r','_self')</script>";
    }
?>
    