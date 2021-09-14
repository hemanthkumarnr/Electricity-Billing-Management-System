<?php
include("includes/connect.php");
?>
<html>
<head>
<title>
Electricity Bill payment
</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/menustyle.css" type="text/css" />
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        #div2{
            margin-left: 250px;
            margin-top: 50px;
        }
        #div1{
            
            margin-left: 1000px;
        }
    </style>
<?php
include("includes/header.php");
?>
<div id="div2" class="contain">
    <div id="div1">
    <a href="adminindex.php">ADMIN</a>
    </div>
<div class="section">
    
<div class="loginpad">
	<br>
	<form action="" method="post">
		<input type="text" name="c_id" id="txt" placeholder="Enter Your Customer ID" required>
		<br>
		<br>
		<input type="submit" name="btnlogin" id="btn" value="Enter">
	</form>
	<br>
	<br>
	<br>
	<label>Note: Your Customer Id located with your bill.<br>Namely: CON ID</label><br>
	
	</div>
</div>
</div>

<center>
<?php
include("includes/footer.php");
?>
</center>
<?php
if(isset($_POST["btnlogin"]))
{
function validate_input($data) 
		{
  			 $data = trim($data);
  			 $data = stripslashes($data);
   			$data = htmlspecialchars($data);
   			return $data;
		}
			$c_id = validate_input($_POST["c_id"]);
		if($c_id =="")
		{
			echo "<script> alert('Please Fill The required Field!');</script>";
			return;
		}
		else
		{
			$sql = "SELECT * FROM custumer where cus_id='$c_id'";
					$result = mysqli_query($con, $sql);
					if (mysqli_num_rows($result) > 0) 
					{
   						session_start();
						$_SESSION['log_user']=$c_id;
						setcookie('user_n',$c_id,time() + 86400*30,'/');
						header("location:home.php");
					} 
					else
					{  				
						echo mysqli_error($con);
						return;
					}		
}
}
?>
</body> 
</html>