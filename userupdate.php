<?php
session_start();
include("includes/connect.php");
if(!(isset($_SESSION['log_user'])))
			{
				header("location:check.php");
			}
			else
			{	
$user_name=$_SESSION['log_user'];
$query="select * from custumer where cus_id=$user_name";
$result=mysqli_query($con,$query);
$rows=mysqli_fetch_array($result);
		$serial=$rows['cus_id'];
		$name=$rows['name'];
		$address=$rows['address'];
		$house=$rows['houseno'];
		$phone=$rows['phone'];
		$email=$rows['email'];
		?>
<html>
<head>
<title>
Electricity Bill Payment
</title>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/menustyle.css"/>
</head>
<body>
    <style>
            .header
{
		position:fixed;
		top:0px;
		background-color:#000;
		width:100%;
		left:0px;
		color:#fff;	
		opacity:.8;
		text-align:center;
}
       
    </style>
<?php
include("includes/header.php");
?>
<div class="container">
<?php
include("includes/menu.php");
?>
<div class="bd">
<br>
<center>
		<label>ID Number: <?php echo $serial;?></label><br><br>
<form action="" method="post">

<input type="text" name="name" placeholder="Name" id="txt" value="
<?php
echo $name;
?>
" required/>

<br><label>Address:</label><br>
<input type="text" name="ad" placeholder="Address" id="txt" value="
<?php
echo $address;
?>
" required/>
<br>

<label>House No:</label><br>
<input type="text" name="hn" placeholder="House NO" id="txt" value="
<?php
echo $house;
?>
" required/>
<br>

<label>Mobile Number:</label><br>
<input type="text" name="phone" placeholder="Mobile Number" id="txt" value="
<?php
echo $phone;
?>
" required/>
<br>

<label>Email:</label><br>
<input type="text" name="email" placeholder="Email" id="txt" value="
<?php
echo $email;
?>
" required/>
  <br> <br>
<input type="submit" name="btn_update" value="Update" id="btn"/>
</form>
<a href="home.php"><input type="submit" id="btn" value="Back"/></a>
</div></div>
</body>
    <center>
        <?php
include("includes/footer.php");
?>
</center>
</html>
<?php
if(isset($_POST['btn_update']))
{
	$name=$_POST["name"];
	$address=$_POST["ad"];
	$house=$_POST["hn"];
	$phone=$_POST["phone"];
	$email=$_POST["email"];
	
	if( $name=="" || $address=="" || $house=="" || $email=="" || $phone=="")
	{
		echo "<script> alert('All field required');</script>";
		return;
	}
	
	else
	{
		$query="update custumer set name='$name', address='$address', houseno='$house', phone='$phone', email='$email' where cus_id=$serial";
		if(mysqli_query($con,$query))
		{
		echo "<script> alert('Successful');</script>";
		}
		else
		{
			echo "<script> alert('Please check the field if it contain any special charecter or contact administrator');</script>";
		}
		}
	}
}
	?>