
<?php


include "connection.php";
if(isset($_POST['submit'])){
$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$native=$_POST['native'];
$specelist=$_POST['specialist'];
$appdate=$_POST['appdate'];
$apptime=$_POST['apptime'];
$issue=$_POST['issue'];


if(empty($name) || empty($number) || empty($email) || empty($native) || empty($specelist) || empty($appdate) || empty($apptime) || empty($issue)) {
  echo "<script>alert('All fields are required.');</script>";
}
else{
  $q = " INSERT INTO `booking`(`name`,`number`,`email`,`native`,`specialist`,`appdate`,`apptime`,`issue`) VALUES('$name','$number','$email','$native','$specelist','$appdate','$apptime','$issue')";
$query = mysqli_query($connect,$q);
echo "<script> alert('booking appoinment successfully')</script>";
  
}



}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPOINMENT BOOKING</title>
    <link rel="stylesheet" type="text/css" href="docc.css">
    
<link rel="shortcut icon" type="image/x-icon" href="fevi.png">


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0091837376.js" crossorigin="anonymous"></script>
   
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-dark"id="navbar">
  <div class="container-fluid">
   
    <a class="navbar-brand" href="#">GURU <span><img  class="logo"src="hl.jpg"></span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"  aria-expanded="false" >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
       <li class="nav-item">
          <a class="nav-link" href="adminlogin.php">PATIENT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="adminlogin.php">LOGOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="patientshow.php">VIEW APPOINMENT</a>
        </li>
        </ul>
     
     
</div>
  
</nav>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif
}

 
 .booimg{
    width: 100%;
    height: 800px;
    animation-name: book;
    animation-delay: 2s;
    animation-iteration-count: infinite;
    animation-duration: 5s;
}

 @keyframes book {
    0%{
        padding: 50%;
    }
 }
 
 input{
    width: 90%;
    height: 40px;
    border: 2px solid orange !important;
    text-align: center;
    border-radius:20px;
    
    
 }
 
 label{
    font-size: 22px;
    color: blue;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight: 800;
 }
 .op{
  width: 90%;
    height: 40px;
    border: 2px solid orange !important;
    text-align: center;
    border-radius:20px;
    
 }
 .form{
    border: 2px solid blue;
    height: 670px;
    border-radius: 0 0 25px 25px;
 }
 .bookbtn{
    width: 150px;
    color: white;
    background: orange;
    height: 40px;
    border-radius: 20%;
    border:2px solid blue;
 }
 .bookbtn:hover{
  background:pink;
  
 }
 
</style>
<body>
 
<section id="book">
  <div class="container m-5">
    <h1 class="text-center my-5" style="color:royalblue;font-size:50px;">BOOKING APPOINMENT</h1>
    <div class="row">
    <div class="container text-center">
  <div class="row align-items-start">
    <div class="col-lg-6 col-md-6 col-12">
    <img class="booimg" src="./book.jpg"/>
    </div>

    <div class="col-lg-6 col-md-6 col-12">
      
      <form method="POST" action="" class="form">
        <label>YourName</label><br/>
        <input type="text" name="name" /></br>
        <label>YourNumber</label><br/>
        <input type="number" name="number" /></br>
        <label>YourEmail</label><br/>
        <input type="text" name="email" /></br>
        <label>YourNative</label><br/>
        <input type="text" name="native"/></br>
        <label>Specelist</label><br/>
        <select class="op" name="specialist">
        <option>Select Specialist</option>
          <option>Generalist</option>
          <option>Cardiologist</option>
          <option>Child Care</option>
          <option>Womens Care</option>
          <option>Skin Speclistt</option>
          <option>Dentist</option>
        </select><br>
       
        <label>AppoinmentDate</label><br/>
        <input type="date" id="date" name="appdate" min="<?php echo date('Y-M-d');?>"required></br>
        <label>AppoinmentTime</label><br/>
        <input type="time" name="apptime" /></br>
        <label>Your Issue</label><br/>
        <input type="text" name="issue" /></br></br>
        
        <button type='submit' name="submit"class="bookbtn" value="submit">Book Now</button>
        

        <script>
        
        var today = new Date().toISOString().split('T')[0];
       
        document.getElementById('date').setAttribute('min', today);
    </script>


      </form>
    </div>
  </div>
</div>
  </div>
</div>

</section>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" ></script>   
</body>
</html>