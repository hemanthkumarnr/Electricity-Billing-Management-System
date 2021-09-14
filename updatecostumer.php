<html>
<head>
    <title> updation</title>
    <style>
    body{
    
background-color: whitesmoke
        }
        input{
            width:40%;
            height:5%;
            font-family: cursive;
            font-size: 20px;
        border: 1px;
            border-radius: 05px;
            padding:8px 15px 8px 15px;
            margin:10px 0px15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
        }
            .back {
                border: 2px red solid;
                background-color: white;
                position: relative;
                top:80px;
                left:80px;
                color: red;
            } 
            .back:hover{
                background-color: red;
                color: whitesmoke;
            }
            a{
                text-decoration: none;
                background-color: whitesmoke;
                padding: 10px;
                position: absolute;
                top: 800px;
                border-radius: 10px;
                color: green;
                border: 2px solid green;
            }
            a:hover{
                background-color:green;
                color: whitesmoke;
            }
        div{
            margin-top: 300px;
            margin-right :10px; 
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

    </style>
    </head>
    <body>
    <center>
            <header>
<h1>Mysuru Electricity Bill Payment</h1>
<p><i>"We bring light to your house"</i></p>
<hr>
</header>
        <div>
        <h1> Updation Of Customer Data </h1>
        <form action="" method="POST">
        <input type="text" name="name" placeholder="Name"/><br/>
            <input type="text" name="address" placeholder="Address"/><br/>
            <input type="text" name="houseno" placeholder="House_no"/><br/>
            <input type="number" name="phone" placeholder="Phone_no"/><br/>
            <input type="email" name="email" placeholder="Email"/><br/>
           
            <input type="submit" name="update" value="UPDATE DATA"/><br/>
            
            
        </form>
        </div>
        <div1 class="footer">
             &copy; 2020 - <?php echo date("Y")?>Electricity Bill Payment All Right Reserve  <br> 
           <a href="contact.php">Contact US</a>
        
        </div1>
        </center>
        <a href="joincostumer.php" class="back">BACK</a>
        
        
    </body>
    
</html>

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, "electribill");

if(isset($_POST['update']))
{
    $phone=$_POST['phone'];

    $query="UPDATE `custumer` SET name='$_POST[name]',address='$_POST[address]',houseno='$_POST[houseno]',email='$_POST[email]' where phone='$phone'";
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
            