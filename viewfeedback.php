<?php 
include("includes\connect.php");
?>

<html>
    <head>
        <style>
        #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
            margin-left: 100px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
    
} 
            td {
                height: 70px;
            }
            a{
                text-decoration: none;
                background-color: whitesmoke;
                padding: 10px;
                border-radius: 10px;
                color: green;
                border: 2px solid green;
            }
            a:hover{
                background-color:green;
                color: whitesmoke;
            }
            .back {
                border: 2px red solid;
                background-color: white;
                position: relative;
                top:150px;
                left:100px;
                color: red;
            } 
            .back:hover{
                background-color: red;
                color: whitesmoke;
            }
        
        </style>
        

    </head>
    

    <body>
        <center>
    <div>
<table cellpadding=5 id="customers">
<tr>
<th>Name</th>
<th>Email_ID</th>
<th>Message</th>

</tr>
<?php
$sql = "select * from feedback";
$res = mysqli_query($con, $sql);
if(mysqli_num_rows($res) != 0) {
    while($row = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['message']."</td>";
       
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
    </center>
        <a href="costumerpage.php" class="back">BACK</a>
    </body>
</html>