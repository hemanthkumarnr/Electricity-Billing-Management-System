<?php 
    include("includes\connect.php");
?>
    
<html>
    <head>
    <style>
        body{
            background: url("p8.jpg");
        }
        form {
            margin-top: 150px;
        }
        input {
            margin: 20px;
            height: 40px;
            width: 150px;
        } 
             header {
        top: 0px;
		position:fixed;
		background-color:#000;
		width:100%;
		color:#fff;	
		opacity:.8;
		text-align:center; 
         left: 0px;
}
       
hr {
	border:none;
	border-top:1px solid #CCCCCC;
	height:1px;
	margin-bottom:25px;
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
        </style>
    
    
    </head>
<body>
         <header>
<h1>Mysuru Electricity Bill Payment</h1>
<p><i>"We bring light to your house"</i></p>
<hr>
</header>
 <form action="" method="POST">
   <input type="number" name="cus_id" placeholder="cus_id" required><br>
    <input type="text" name="billno" placeholder="billno"  required><br>
    <input type="text" name="tax" placeholder="tax"  required><br>
     <input type="text" name="balance" placeholder="balance"  required><br>
     <input type="text" name="totalamount" placeholder="totalamount"><br>
     <input type="text" name="date" placeholder="date"  required><br>
     <input type="text" name="payment" placeholder="payment"  required><br>
    
    
    
    
     
     <input type="submit" name="insert" value="insert" style="background-color:green";>
 </form>   
<?php
    if(isset($_POST['insert'])) {
       $cus_id = $_POST['cus_id'];
        $billno = $_POST['billno'];
       $tax = $_POST['tax'];
        $balance = $_POST['balance'];
       $totalamount = $_POST['totalamount'];
       // $totalamount = call adm();
       $date= $_POST['date'];
       $payment = $_POST['payment'];
      
        
        
        
    $query = "insert into bill values('','$cus_id','$billno','$tax','$balance','$totalamount','$date','$payment')";
    $result = mysqli_query($con, $query);
    if($result) 
    {
        echo "data inserted";
    } else {
        echo "data not inserted";
    }
    }
    ?>
    <center>
    <a href="costumerandebill.php" class="back">BACK</a>
        <div class="footer">
&copy; 2020 - <?php echo date("Y")?> Electricity Bill Payment All Right Reserve  <br> 
<a href="contact.php">Contact US</a> 
</div>
    </center>
</body>
</html>