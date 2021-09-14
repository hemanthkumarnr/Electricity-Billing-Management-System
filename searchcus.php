<html>
    
    <head>
        <title>Search by its Custumer ID</title>
        <style>
        
            table,th,td{
                border:1px solid black;
                width: 1500px;
                background-color: aquamarine;
            }
        
        </style>
    </head>
    
    <body>
        <center>
            <h1>Search by its Custumer ID</h1>
            
            <div class="container">
                <form action="" method="POST">
                    <input type="text" name="cus_id" class="btn" placeholder="ENTER CUS_ID"/>
                    <input type="submit" name="search" class= "btn" value="SEARCH">
                </form>
                <table>
                            <tr>
                                <th> Custumer_id</th>
                                <th> Name</th>
                                <th> Address</th>
                                <th> Houseno</th>
                                <th> Phone</th>
                                <th> Email</th>
                                <th> Delete</th>
       
                </tr><br>
                    
                    <?php
                   $con = mysqli_connect("localhost","root","","electribill");
                    $db = mysqli_select_db($con,"electribill");
                    
                    
                    if(isset($_POST['search']))
                    {
                        $cus_id = $_POST['cus_id'];
                        
                        $query = "SELECT * FROM `custumer` where cus_id='$cus_id'";
                        $query_run = mysqli_query($con,$query);
                        
                        while($row = mysqli_fetch_array($query_run))
                        {
                           ?>
                    <tr>
                      <td> <?php echo $row['cus_id'];?></td>
                    <td> <?php echo $row['name'];?></td>
                    <td> <?php echo $row['address'];?></td>
                    <td> <?php echo $row['houseno'];?></td>
                    <td> <?php echo $row['phone'];?></td>
                    <td> <?php echo $row['email'];?></td>
                    <td> <a href='delete1.php?cus_id=$row[cus_id]'>DELETE</a></td>
                        
                    </tr>
     
                    <?php
                            
                        }
                    }
                    ?>
            </table>
            </div>
        
        
        
        </center>
    
    
    </body>
</html>