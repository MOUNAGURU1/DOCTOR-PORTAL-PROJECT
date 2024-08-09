<?php
session_start();
include "connection.php";

if(isset($_POST['login'])){




    $username=$_POST['uname'];
    $password=$_POST['pass'];

    $error = array();
    if (empty($username)){
        $error['doctor'] ="Enter username";
    }
    elseif (empty($password)){
        $error['doctor'] ="Enter password";
    }

    if(count($error)==0){
        $query ="SELECT * FROM doctor WHERE username='$username' AND password='$password'";
        $result =mysqli_query($connect,$query);

        if (mysqli_num_rows($result)== 1){
            echo "<script> alert('you have login as an doctor')</script>";

            $_SESSION['doctor'] = $username;

            header("Location:doctor.php");
            exit();
        }
        else{
            echo "<script>alert('Invalid username or password')</script>";
        }
        
    }
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="shortcut icon" type="image/x-icon" href="fevi.png">
    <title>Doctor Login Page</title>
</head>
<style>
    .ad{
        width: 200px;
        height:150px;
        margin-top:-20px;
       
    }
    .card{
        width:500px;
        background-color:transparent !important;
    }
    .users{
        color:blue;
        font-family:fanstacy;
        font-size:28px;
        font-weight:800;
    }
   .reg{
    font-size:20px;
    color:yellow;
   }
   .pp{
    font-size:18px;
    color:white;
   }
   input{
        width: 40%;
    height: 40px;
    border: 2px solid orange !important;
    text-align: center;
    border-radius:20px;
    
    }
   
   
</style>
<?php
include "header.php"

?>
<body style="background-image:url(dd.jpg);background-repeat:no-repeat;background-size:cover">
<div class="card">
<div style="margin-top:60px">
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 ">
                <img src="doc.png" class="ad">
                <form method="post" >

                      <!-- <div class="alert alert-danger">
                        <?php
                        if(isset($error['doctor'])){
                            $show = $error['doctor'];
                           
                         
                        }
                        else{
                            $show ="";
                        }
                       echo $show;
                        ?>


                      </div> -->
                    <div class="form-group">
                        <label class="users">USER NAME</label>
                        <input type="text"name="uname" class="form-control"autocomplete="off" placeholder="enter user name">

                    </div><br>
                    <div class="form-group">
                        <label class="users">PASS WORD</label>
                        <input type="password"name="pass" class="form-control">

                    </div><br>
                    <input type="submit" name="login" class="btn btn-success">

                    <p class="pp"> I dont have an account<a href="apply.php"><span class="reg">Register</span></a></p>

                </form>
            </div>
            <div class="col-md-3"></div>

        </div>

    </div>
</div>
</div> 
</body>
</html>