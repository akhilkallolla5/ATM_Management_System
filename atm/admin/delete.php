<?php
include('../conn.php');

    if(@$_GET['m']){
        $delete = @$_GET['m'];
        $query = "delete from manager where id='$delete'";
        $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.open('index.php?m','_self');</script>";
        }
        else
        {
            echo "lol";
        }
    } 



    if(@$_GET['c']){
        $delete = @$_GET['c'];
        $query = "delete from user where id='$delete'";
        $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.open('index.php?c','_self');</script>";
        }
        else
        {
            echo "lol";
        }
    }




    if(@$_GET['r']){
        $delete = @$_GET['r'];
        $query = "delete from user where id='$delete'";
        $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.open('index.php?c_r','_self');</script>";
        }
        else
        {
            echo "lol";
        }
    }





    if(@$_GET['a']){
        $delete = @$_GET['a'];
        $query = "delete from admin where id='$delete'";
        $run = mysqli_query($con,$query);
        if($run){
            echo "<script>window.open('index.php?a','_self');</script>";
        }
        else
        {
            echo "lol";
        }
    }

?>



