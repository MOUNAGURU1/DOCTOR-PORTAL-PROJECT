


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="docc.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playwrite+MX:wght@100..400&display=swap" rel="stylesheet">

<link rel="shortcut icon" type="image/x-icon" href="fevi.png">


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0091837376.js" crossorigin="anonymous"></script>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif
}
#navbar{
    position: sticky;
    top: 0;
    left: 0;
    z-index: 100;
    padding: .5rem 5rem;
    box-shadow: 5px 5px 20px black;
    background-color:lightblue;
    
    
}
.navbar .navbar-brand{
    font-size:25px ;
    font-weight: 900;
    color: royalblue;
    font-family: fantasy;
    animation-name: name;
    animation-delay: 2s;
    animation-iteration-count: infinite;
    animation-duration: 2s;
   

}
@keyframes name{
    0%{
        color:orange;
    }
    25%{
        color:blueviolet;
    }
    50%{
        color:yellow;
    }
    75%{
        color:pink;
    }
    100%{
        color:rosybrown;
    }
}



#navbarSupportedContent a{
    color: royalblue;
    border-bottom: 2px solid transparent;
    font-size: 22px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    margin-right: 100px;
    
}
#navbarSupportedContent a:hover{
    border-bottom: 2px solid pink;
    color: white;

}


section{
    width: 100%;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
#home{
    background: url(home1.jpg);
    background-size: cover;
    background-position: center;
    flex-direction: column;
    
}
#home h1{
    font-size: 50px;
    color:orange;
    letter-spacing: 3px;
   
    text-shadow: 5px 5px 3px black;
    margin-top: -200px;
    font-family:fantasy;

}
.ch{
    font-size: 50px;
    color:royalblue;
    letter-spacing: 3px;
    font-family: fantasy;
    text-shadow: 5px 5px 3px black;
    
    font-family:fantasy;
}
#home p{
    color:orange;
    font-size: 40px;
    font-weight: 800;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    
}

#home .input-group{
    width: 40%;
    height: 45%;
    border-radius: 10;
    

}
.signin{
    background:pink !important;

    
}

.logo{
    width: 20px;
    height: 20px;
    
    animation-name: log;
    animation-delay: 2s;
    animation-iteration-count: infinite;
    animation-duration: 5s;
}
@keyframes log{
    0%{
        transform: rotate(360deg);
    }
}

</style>
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
          <a class="nav-link" href="adminlogin.php">ADMIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="doctorlogin.php">DOCTOR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="patientlogin.php">PATIENT</a>
        </li>
       
      






      </ul>
     
     
</div>
  
</nav>