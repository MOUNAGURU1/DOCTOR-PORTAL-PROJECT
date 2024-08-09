



<?php
include "connection.php";

$id = "";
$name = "";
$email = "";
$native = "";
$specelist = "";
$appdate = "";
$apptime = "";
$issue = "";
$token = "";
$docname="";
$status="";

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    if (!isset($_GET['id'])) {
        header("location:/online/bookedit.php"); 
        exit;
    }
    $id = $_GET['id'];
    $sql = "SELECT * FROM booking WHERE id=$id";
    $result = $connect->query($sql);
   
    $row = $result->fetch_assoc();
    if (!$row) {
        header("location:bookedit.php");
        exit;
    }
    
    $name = $row["name"];
    $number = $row["number"];
    $email = $row["email"];
    $native = $row["native"];
    $specelist = $row["specialist"];
    $appdate = $row["appdate"];
    $apptime = $row["apptime"];
    $issue = $row["issue"];
    $token = $row["token"];
    $docname =$row["doctorname"];
    $status =$row["status"];
} else {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $native = $_POST['native'];
    $specelist = $_POST['specialist'];
    $appdate = $_POST['appdate'];
    $apptime = $_POST['apptime'];
    $issue = $_POST['issue'];
    $token = $_POST['token'];
    $docname =$_POST['doctorname'];
    $status =$_POST['status'];

    $tokencheck = "SELECT * FROM booking WHERE token='$token'";
    $tokenResult = $connect->query($tokencheck);
    if ($tokenResult->num_rows > 0) {
        $error = "Token number already exists. Please use a different token.";
    }
    else{

    $sql = "UPDATE booking SET name='$name', number='$number', email='$email', native='$native', specialist='$specelist', appdate='$appdate', apptime='$apptime', issue='$issue', token='$token',doctorname='$docname',status='$status' WHERE id='$id'";
    $result = $connect->query($sql);
    echo "<script> alert('Admin Updated successfully')</script>";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Appointment</title>
    <link rel="stylesheet" type="text/css" href="docc.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
<link rel="shortcut icon" type="image/x-icon" href="fevi.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        .booimg {
            width: 100%;
            height: 600px;
            animation-name: book;
            animation-delay: 2s;
            animation-iteration-count: infinite;
            animation-duration: 5s;
        }

        @keyframes book {
            0% {
                padding: 50%;
            }
        }

        input {
            width: 90%;
            height: 40px;
            border: 2px solid pink !important;
            text-align: center;
            border-radius:20px;
        }

        label {
            font-size: 22px;
            color: blue;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: 800;
        }

        .op {
            width: 90%;
            height: 30px;
        }

        .form {
            border: 5px solid blue;
            height: 930px;
        }

        .bookbtn {
            width: 200px;
            color: white;
            background: pink;
            height: 40px;
            border-radius: 20%;
        }
       

    

    </style>
</head>
<body>

  
<nav class="navbar navbar-expand-lg navbar-dark"id="navbar">
  <div class="container-fluid">
   
    <a class="navbar-brand" href="#">GURU <span><img  class="logo"src="hl.jpg"></span>CARE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"  aria-expanded="false" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
       <li class="nav-item">
          <a class="nav-link" href="adminindex.php">ADMIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminlogin.php">LOGOUT</a>
        </li>
        </ul>
     
     
</div>
  
</nav>
<section id="book">
    <div class="container m-5">
        <h1 class="text-center my-5" style="color:royalblue;font-size:50px;">UPDATE APPOINTMENT</h1>
        <div class="row">
            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="col-lg-6 col-md-6 col-12">
                        <img class="booimg" src="./book.jpg"/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <form method="POST" action="" class="form">
                            <input type="hidden" name="id" value="<?php echo $id; ?>"><br>
                            <label>Your Name</label><br/>
                            <input type="text" value="<?php echo $name; ?>" name="name"/><br>
                            <label>Your Number</label><br/>
                            <input type="number" value="<?php echo $number; ?>" name="number"/><br>
                            <label>Your Email</label><br/>
                            <input type="text" value="<?php echo $email; ?>" name="email"/><br>
                            <label>Your Native</label><br/>
                            <input type="text" value="<?php echo $native; ?>" name="native"/><br>
                            <label>Specialist</label><br/>
                            <input type="text" value="<?php echo $specelist; ?>" name="specialist"/><br>
        
       
                            <label>Appointment Date</label><br/>
                            <input type="date" value="<?php echo $appdate; ?>" name="appdate"/><br>
                            <label>Appointment Time</label><br/>
                            <input type="time" value="<?php echo $apptime; ?>" name="apptime"/><br>
                            <label>Your Issue</label><br/>
                            <input type="text" value="<?php echo $issue; ?>" name="issue"/><br>
                            <label>Token</label><br/>
                            
                            
                            <input type="number" value="<?php echo $token; ?>" name="token"/><br><br>
                            <span style="color:red"><?php echo "$error"  ?></span>
                            <label>DOCTOR NAME</label><br/>
                            <select class="op" name="doctorname">
                            <option>Select doctor</option>
          <option>Dr.Sivakumar</option>
          <option>Dr.Manikandan</option>
          <option>Dr.Meera</option>
          <option>Dr.Saranya</option>
          <option>Dr.Sanjeev</option>
          <option>Dr.Rajkumar</option>
        </select><br><br>
        <label>Booking Status</label><br/>
                            <select class="op" name="status">
                            <option></option>
          <option>Booking Confirmed</option>
          <option>Doctor Leave</option>
    </select><br><br>
                           <a href="adminindex.php"> <button type="submit" name="update" class="bookbtn" value="update">Update Now</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</body>
</html>
