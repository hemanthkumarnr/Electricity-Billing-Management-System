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
?>
<html>
<head>
<title>
Electricity Bill Payment
</title>
<style>
#txt
{
	width:250px;
	border-style:groove;
	height:30px;
	border-radius:4px;
}

#btn
{
	background-color:#1e5799;
	border-style:none;
	width:100px;
	height:30px;
	border-radius:4px;
	color:white;
}
#btn:hover{
background-color:#1e5700;
color:#000;
}
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
		.footer
		{
		position:fixed;
		bottom:0px;
		background-color:#000;
		width:100%;
		left:0px;
		color:#fff;
		
		}
		.footer a
		{
color:#fff;
		}
		.container
		{
			padding-top:140px;
		}
</style>
</head>
<body>  
<center>
<?php
include("includes/header.php");
?>
<div class="container">
<p>Online Payment Services Supported</p>
<a href="https://www.paypal.com"><img src="image/paypal.png" width="80" title="Paypal Service"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://www.paytm.com"><img src="image/Paytm.png" width="80" title="Paytm Service"></a>
<br>
<hr>
<h4>Choose Your Payment Method</h4>
<form action="payment.php" method="post">
<select name="bank" id="txt">
<option value="">Select Your bank</option>
 <?php
 $sql = "SELECT * FROM bank";
					$result = mysqli_query($con, $sql);
					while($rows=mysqli_fetch_array($result))
{ 
          ?>
              <option value="<?php echo $rows['bank_name']?>"><?php echo $rows['bank_name']?></option>
			  
    <?php
	}
?>
</select>
<input type="submit" name="ok" id="btn" value="Proceed">
</form>
<a href="home.php"><input type="submit"id="btn" value="Cancel"></a>
</div>
<center>
<?php
include("includes/footer.php");
?>
</center>
    </center>
</body>
</html>
<?php
}
?>