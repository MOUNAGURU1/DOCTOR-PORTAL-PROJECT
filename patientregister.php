<?php
include "connection.php";

if(isset($_POST['Register'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $confirmpassword = $_POST['cpass'];

    
    if(empty($name) || empty($username) || empty($email) || empty($password) || empty($confirmpassword)) {
        echo "<script>alert('All fields are required.');</script>";
    } else {
        if($password == $confirmpassword){
           
            $check_query = "SELECT * FROM patient WHERE username='$username'";
            $result = mysqli_query($connect, $check_query);

            if(mysqli_num_rows($result) > 0) {
                echo "<script>alert('Username already exists. Please choose a different username.');</script>";
            } else {
                
                $query ="INSERT INTO patient (name, username, email, password) VALUES('$name', '$username', '$email', '$password')";
                mysqli_query($connect, $query);
                echo "<script>alert('Registered successfully');</script>";
            }
        } else {
            echo "<script>alert('Passwords do not match');</script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now</title>
    <link rel="shortcut icon" type="image/x-icon" href="fevi.png">
</head>
<style>
    .card{
        width:500px;
        background-color:transparent !important;
    }
    label{
        color:royalblue;
        font-size:20px;
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
        width: 30%;
    
    border: 2px solid orange !important;
    text-align: center;
    border-radius:20px;
    
    }
    
</style>
<body style="background-image:url(patreg.jpg);background-repeat:no-repeat;background-size:cover">
<?php include "header.php"; ?>

<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 my-2"><h5 class="text-center" style="font-size:35px;color:blue">Register Now!!!</h5>
                <form method="post" class="card" style="text-align:center; background:pink;">
                    <div class="form-group">
                        <label>NAME</label>
                        <input type="text" name="name" id="name" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label>USER NAME</label>
                        <input type="text" name="username" id="username" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label>EMAIL</label>
                        <input type="email" name="email" id="email" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label>PASSWORD</label>
                        <input type="password" name="pass" id="pass" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label>CONFIRM PASSWORD</label>
                        <input type="password" name="cpass" id="cpass" class="form-control" autocomplete="off" required>
                    </div><br>
                    <input type="submit" name="Register" value="Register" class="btn btn-success">
                    <p class="pp">I already have an account <a href="patientlogin.php"><span class="reg">Login</span></a></p>
                </form></div>
            <div class="col-md-6 my-3 jumbotron">
                
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
