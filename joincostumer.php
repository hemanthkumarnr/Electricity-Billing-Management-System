<?php 
    include("includes\connect.php");
?>
    
<html>
    <head>
    <style>
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
        body{
            background: url("p2.jpg");      
        }
        input {
            
            margin: 25px;
            height: 40px;
            width: 200px;
            font-family: cursive;
            font-size: 20px;
        }
        .back {
                border: 2px red solid;
                background-color: white;
                text-decoration: none;
                padding: 10px;
                border-radius: 10px;
                position: absolute;
                top:150px;
                left: 0px;
                color: red;
            } 
            .back:hover{
                background-color: red;
                color: whitesmoke;
            }
        div{
            margin-top: 300px;
            float: left;
        }
        .div {
            margin-top: 300px;
        }
            .update {
               border: 2px green solid;
                background-color: white;
                text-decoration: none;
                padding: 10px;
                border-radius: 10px;
                position: absolute;
                bottom: 100px;
                color: green;
            }
            .update:hover{
                background-color:green;
                color: whitesmoke;
            }
       
        
        .delete {
               border: 2px green solid;
                background-color: white;
                text-decoration: none;
                padding: 10px;
                border-radius: 10px;
                position: absolute;
                bottom: 40px;
                color: green;
            }
            .delete:hover{
                background-color:green;
                color: whitesmoke;
            }
       
                    #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 90%;
  margin-left: 500px;
    float: left;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
    background-color: #f2f2f2;
}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
    
} 
        
       
        </style>
    
    
    </head>
<body>
     <header>
<h1>Mysuru Electricity Bill Payment</h1>
<p><i>"We bring light to your house"</i></p>
<hr>
</header>
   
    <center>
 <div>
 <form action="" method="POST">
   <input type="text" name="name" placeholder="Name" required><br>
      <input type="text" name="address" placeholder="Address"  required><br>
      <input type="text" name="houseno" placeholder="House_no"  required><br>
    <input type="text" name="phone" placeholder="Phone_no"  required><br>
   <input type="email" name="email" placeholder="Email_ID"  required><br>
     
     
     <input type="submit" name="insert" value="Insert" style="background-color: pink";>
 </form>   
        </div>
<?php
    if(isset($_POST['insert'])) {
       $name = $_POST['name'];
        $address = $_POST['address'];
        $houseno = $_POST['houseno'];
       $phone = $_POST['phone'];
       $email = $_POST['email'];

   
  
   // $query = "insert into custumer values('','','','','','')";
 $query = "insert into custumer values('','$name','$address','$houseno','$phone','$email')";
    $result = mysqli_query($con, $query);
    if($result) 
    {
        echo "data inserted";
    } else {
        echo "data not inserted";
    }
    }
    ?>
        </center>
  <div class="div">
    <table cellpadding=5 id="customers">
<tr>
<th>Name</th>
<th>Address</th>
<th>House_no</th>
<th>Phone_no</th>
<th>Email</th>


</tr>
<?php 
$sql = "select * from custumer";
$res = mysqli_query($con, $sql);
if(mysqli_num_rows($res) != 0) {
    while($row = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>".$row['houseno']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['email']."</td>";
        
       
    }
} 
else
{
    echo "0 results" ;
}
mysqli_close($con);
    ?>
    </table>
    
    </div>
    <a href="searchupdate.php" class="update">UPDATE CUSTOMER</a><br>
    
    <a href="costumerpage.php" class="back">BACK</a>
        
</body>
</html>