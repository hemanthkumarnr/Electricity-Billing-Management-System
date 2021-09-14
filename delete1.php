<?php
    $con = mysqli_connect("localhost","root","","electribill");
    $db = mysqli_select_db($con,"electribill");

$cus_id=$_GET['cus_id'];
$query="DELETE FROM `custumer` where cus_id='$cus_id'";
$query_run = mysqli_query($con,$query);
                        
if($query_run)       
{
    echo'<script type="text/javascript">alert("delete")</script>';
}
else
{
    echo'<script type="text/javascript">alert("not delete")</script>';
}
    
?>