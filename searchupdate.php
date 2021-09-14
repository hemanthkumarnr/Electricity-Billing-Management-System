<html>
<head>
    
    <title> search data and update </title>
    <style>
        body{
            background-color: whitesmoke;
        }
        input{
            width : 40%;
            height: 5%;
            border: 1px;
             border-radius: 5px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
        }
    
    </style>
    
    </head>
    <body>
    <center>
        <h1>Search data and Update</h1>
        <form action="" method="POST" style="background-color:lightblue">
            <input type="text" name="cus_id" class="btn" placeholder="ENTER CUS_ID" required/><br>
                    <input type="submit" name="search" class= "btn" value="SEARCH"><br>
             <a href="joincostumer.php" class="back"> <input type="button" value="Back"></a>
        
        </form>
        <?php
        
        $con = mysqli_connect("localhost","root","","electribill");
        $db = mysqli_select_db($con,"electribill");
                    
             
                    if(isset($_POST['search']))
                    {
                        $cus_id = $_POST['cus_id'];
                        
                        $query = "SELECT * FROM `custumer` where cus_id='$cus_id'";
                        $query_run = mysqli_query($con,$query);
                        
                        while($row = mysqli_fetch_array($query_run))
                        {
                           ?>
                            <form action="" method="POST">
                                
                                <input type="text" name="cus_id" class="btn" value="<?php echo $row['cus_id'];?>" readonly/><br>
                                <input type="text" name="name" value="<?php echo $row['name'];?>"/><br/>
                                <input type="text" name="address" value="<?php echo $row['address'];?>"/><br/>
                                <input type="text" name="houseno" value="<?php echo $row['houseno'];?>"/><br/>
                                <input type="number" name="phone" value="<?php echo $row['phone'];?>"/><br/>
                                <input type="email" name="email" value="<?php echo $row['email'];?>"/><br/>
           
                                <input type="submit" name="update" value="UPDATE DATA"/><br/>
                                <input type="submit" name="delete" value="delete"/><br/>
<!--                               <a href="joincostumer.php" class="back"> <input type="button" value="Back"></a>-->
                            </form>
        <?php
                        }
                    }
        ?>
        </center>
    </body>
</html>




<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, "electribill");

if(isset($_POST['update']))
{
    
    $cus_id=$_POST['cus_id'];

    $query="UPDATE `custumer` SET name='$_POST[name]',address='$_POST[address]',houseno='$_POST[houseno]',phone='$_POST[phone]',email='$_POST[email]' where cus_id='$cus_id'";
    $query_run=mysqli_query($connection,$query);
    
    if($query_run)
    {
     echo '<script types="text/javascript"> alert("Data Updated") </script>';
    }
    else
    {
    echo '<script types="text/javascript"> alert("Data Not Updated") </script>';
    }
}
?>
<?php
    $con = mysqli_connect("localhost","root","","electribill");
    $db = mysqli_select_db($con,"electribill");
if(isset($_POST['delete'])) {
$cus_id=$_POST['cus_id'];
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
}
?>