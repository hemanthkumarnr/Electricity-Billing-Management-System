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
<th>name</th>
<th>address</th>
<th>houseno</th>
<th>phone</th>
<th>emails</th>
    
<?php
    if(isset($_POST['del'])) {
    $query = "select * from custumer where cus_id='$row'";
    $result = mysqli_query($conn, $query);
    if($result) 
    {
        echo '<script type="text/javascript"> alert("deleted")</script>';
    } else {
        echo  "Error deleting record: " . mysqli_error($conn);
    }
    }
    ?>