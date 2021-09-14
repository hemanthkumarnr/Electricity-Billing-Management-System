<?php
include("includes/connect.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOGIN </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    body{
    background-image: linear-gradient(to right, yellow 0%, red 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 97vh;
    flex-direction: column;
}



form{
    width: 500px;
    border: 2px solid #ccc;
    padding: 30px;
    background: #fff;
    border-radius: 15px; 
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

h2{
    text-align: center;
    margin-bottom: 40px;    
}

input, textarea{
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
        } 

button{
    background-color: white;
    padding: 10px 15px;
    color: green;
    border-radius: 5px;
    margin-left: 10px;
    border: 2px solid green;
    cursor: pointer;
}
button:hover{
    background-color: green;
    color: white;
}
.error{
    background: #F2DEDE;
    color: #A94442;
    padding: 10px;
    border-radius: 5px;
    position:fixed;
    top:300px;
    z-index: 2;
   /* margin: 20px auto; */
} 
h1 {
    text-align: center;
    color: #fff;
}
a{
    background: #555;
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
    border: none;
     text-decoration: none;
}
a:hover {
    opacity: .7;
}
    
    </style>
    </head>
<body>
    <form action="" method="post">
        <h2>FEEDBACK</h2>
     
        <input type="text" name="name" placeholder="NAME" required><br>
        <input type="email" name="email" placeholder="EMAIL" required><br>
        <textarea type="text" name="message" placeholder="MESSAGE" rows="6" cols="50"></textarea>
        <button type="submit" name="insert">SUBMIT</button>
    </form>        
<?php
if(isset($_POST['insert'])) {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $message = $_POST['message'];
    $query = "insert into feedback values('$name','$email','$message')";
    $result = mysqli_query($con, $query);
    if($result) 
    {
        echo '<script type="text/javascript"> alert("THANK YOU")</script>';
    } else {
        echo '<script type="text/javascript"> alert("Please fill form correctly")</script>';
    }
    }
    ?>
</body>
   
    
</html>