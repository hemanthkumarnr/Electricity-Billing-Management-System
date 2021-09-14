<!DOCTYPE html>
<html>
<head>
<style>
    body {
        margin: 0;
        padding: 0;
       background: url(p6.jpg);
       background-repeat: no-repeat;
       background-size: cover; 
        
    }
    
button {
  background-color: whitesmoke;
  border: white;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  /*display: inline-block;*/
  font-size: 20px;
    border-radius: 10px;
  cursor: pointer;
    margin-left: 50px;
}
    div {
       
       margin-left: 500px;
        margin-top:500px;
    } 
   
   
    header {
        top: 0px;
		position:fixed;
		background-color:#000;
		width:100%;
		color:#fff;	
		opacity:.8;
		text-align:center; 
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
            margin-left: 10px;
		}
    .bill {
        margin-left: 380px;
    }
</style>
</head>
<body>
<header>
<h1>Electricity Bill Payment</h1>
<p><i>"We bring light to your house"</i></p>
<hr>
</header>
<div>
<a href="costumerpage.php"><button>COSTUMER</button></a>
    
<a href="electrictybill.php" class="bill"><button>BILL</button></a>
    </div>
<center>
    <?php
include("includes/footer.php");
?>
    </center>
</body>
</html>