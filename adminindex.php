<!DOCTYPE html>
<html>
<head>
    <title>ADMIN </title>
   <style>
    body{
    /*background-image: linear-gradient(90deg,#020024 0%,#090979 35%,#00d4ff 100%);*/
/*
        background: #F46242;
        background: -webkit-linear-gradient(top left,#F46242,#A5D425);
        background: -moz-linear-gradient(top left,#F46242,#A5D425);
        background: linear-gradient(top left,#F46242,#A5D425);
*/
/*        background-image: radial-gradient(#45a247,#283c86);*/
/*        background-image: radial-gradient(#283c86,#45a247);*/
        background-image: radial-gradient(#159957,#155799);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    flex-direction: column;
}

*{
    font-family: sans-serif;
    box-sizing: border-box;  
}

form{
    width: 500px;
    border: 2px solid #ccc;
    padding: 30px;
    background: #fff;
    border-radius: 15px;   
}

h2{
    text-align: center;
    margin-bottom: 40px;    
}

input{
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
}
label{
    color: #888;
    font-size: 18px;
    padding: 10px;
}

button{
    float: right;
    background: #555;
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
}
button:hover{
    opacity: .7;
}
.error{
    background: #F2DEDE;
    color: #A94442;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;
}
h1 {
    text-align: center;
    color: #fff;
}
a{
    float: right;
    background: #555;
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
     text-decoration: none;
}
a:hover {
    opacity: .7;
}
    </style>
    </head>
<body>
    <form action="admin.php" method="post">
        <h2>LOGIN</h2>
        <?php if(isset($_GET['error'])){ ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        
        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>   
        
        <button type="submit">Login</button>
    </form>
</body>
</html>