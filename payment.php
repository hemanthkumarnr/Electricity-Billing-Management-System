<?php
session_start();
include("includes/connect.php");

if(!(isset($_SESSION['log_user'])))
{
	header("location: check.php");
}
else
{	
	$user_name=$_SESSION['log_user'];
?>
<html>
<head>
<title>
Electricity bill
</title>
<style>
body
{
	background-color:#ccc;
}
#txt
{
	width:250px;
	border-style:groove;
	height:30px;
	border-radius:4px;
}
#sl
{
	width:125px;
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
			padding-top:120px;
		}
		table
		{
			text-align:center;
		}
		.section
		{
			
		background-color:#fff;
		width:700px;
		height:490px;
		border-radius:10px;
		
		}
</style>
</head>
<body>
<?php
include("includes/header.php");
?>
<center>
<div class="container">
<div class="section">
<?php
$dt=date("m/d/Y");
$query1="select * from bill join custumer on bill.cus_id=custumer.cus_id where payment='Not Complete'";
$result1=mysqli_query($con,$query1);
while($rows=mysqli_fetch_array($result1)) {
	echo "Name: ".$rows['name']."<br>";
	echo "Bill NO: ".$rows['billno']."<br>";
	echo "Amount: ".$rows['amount']."<br>";
	$amount=$rows['amount'];
}
?>
		<br>
<form action="" method="post">
		<input type="text" name="ch" id="txt" placeholder="Card Holder" required>
		<br>
		<br>
		<input type="text" name="cn" id="txt" placeholder="Card Number" required>
		<br>
		<br>
		<input type="text" name="cvv" id="txt" placeholder="CVV" required>
		<br>
		<br>
		<select name="card" id="txt">
		<option value="">Select Your Card</option>
		<?php
		$sql = "SELECT * FROM card";
					$result = mysqli_query($con, $sql);
					while($rows=mysqli_fetch_array($result))
		{ 
          ?>
              <option value="<?php echo $rows['card_name']?>"><?php echo $rows['card_name']?></option>  
		<?php
		}
		?>
</select>
<br>
<label>Card Expire On</label><br>
<select name="mm" id="sl">
		<option value="">Select Month</option>
		<?php
		for($i=1;$i<=12;$i++)
		{
          ?>
              <option value="<?php echo $i?>"><?php echo $i?></option>  
		<?php
		}
		?>
</select>
<select name="yy" id="sl">
		<option value="">Select Year</option>
		<?php
		$dy=date("Y");
		for($j=$dy;$j<=2050;$j++)
		{
          ?>
              <option value="<?php echo $j?>"><?php echo $j?></option>  
		<?php
		}
		?>
</select>
		<br>
		<br>
    <a href="complete.php"><input type="submit" name="btnpro" id="btn" value="Pay Now"></a>
    <a href="complete.php"><input type="submit" name="okay" id="okay" value="Okay"></a>
	</form>
	<a href="schpayment.php"><input type="submit"id="btn" value="Cancel"></a><br>
	<?php
	#echo "Confirm Your Payment of Rs.".$amount." By clicking The Button Pay Now<br>";
	#?>

    </div>
  </div>    </center>

  
  <center>
<?php
include("includes/footer.php");
?>
    </center>
      </body>
</html>
<?php
}
?>