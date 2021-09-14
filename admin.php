<?php
session_start();
include("includes/connect.php");
if(isset($_POST['uname']) && isset($_POST['password'])){
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $uname = validate($_POST['uname']);
    $pass =  validate($_POST['password']);
    
    if(empty($uname)){
        header("Location: adminindex.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: adminindex.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM ADMIN WHERE USER_NAME='$uname' AND PASSWORD='$pass'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
         if($row['USER_NAME'] === $uname && $row['PASSWORD'] === $pass){
            $_SESSION['USER_NAME'] =$row['USER_NAME'];
            $_SESSION['NAME'] =$row['NAME'];
            $_SESSION['ID'] =$row['ID'];
               header("Location: costumerandebill.php");
               exit();
         }else{
            header("Location: adminindex.php?error=Incorrect Username or Password");
            exit();
        }
    }else{
            header("Location: adminindex.php?error=Incorrect Username or Password");
        exit();
        }
        
    }
    
}else{
    header("Location: adminindex.php");
    exit();
}