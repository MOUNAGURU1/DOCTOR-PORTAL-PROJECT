



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Contact</title>

    <style>
        #container{
            width:1000px !important;
        }
        p{
            font-size:12px;
            font-family: "Pompiere", cursive;
        }
        h1{
            font-family: "Pompiere", cursive;
        }
        .bg-primary{
            background-color:rgb(235, 83, 109) !important;
        }
        .form-label{
            font-family: "Pompiere", cursive;
        }
        .form-control{
            height:36px;
            background:#fff;
            color:black;
            font-size:14px;
            border-radius:2px;
            box-shadow:none !important;
            border:1px solid pink;            
        }
        .contactForm .form-control{
            border:none;
            border-bottom:1px solid black;
            font-family: "Pompiere", cursive;
            padding:0;
        }
        .form-control:focus, .form-control:active{
            border-color:rgb(235, 83, 109) !important;
        }
        #vv{
            background:rgb(235, 83, 109) !important;
            border-color:rgb(235, 83, 109) !important;
            color:white;
            width: 100px;
            border-radius:2px !important;
            font-family: "Pompiere", cursive;
        }
        #vv:hover{
            background-color:pink;
        }
        #bi{
            font-size:50px;                       
        }
        @media only screen and(max-width:600px) {
            .container{
                width: 100% !important; 
                padding-bottom:207px !important;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5 shadow" id="container">
        <div class="row">
            <div class="col-md-4 bg-primary p-5 text-white order-sm-first order-last">
                <h2>Let's Get in Touch</h2>
                <p id="p">We're open for any suggestion or just to have a chat</p>
                <div class="d-flex mt-2">
                    <i class="bi bi-geo-alt" id="bi"></i>
                    <p class="mt-3 ms-3" id="p">Address: Road 208 North Street, Suite 423, Bangalore, WW 560004</p>
                </div>
                <div class="d-flex mt-2">
                    <i class="bi bi-phone"></i>
                    <p class="mt-3 ms-3">Phone: 1234567890</p>
                </div>
                <div class="d-flex mt-2">
                    <i class="bi bi-envelope-at"></i>
                    <p class="mt-3 ms-3">E-mail: shivuspa@gmail.com</p>
                </div>
                <div class="d-flex mt-2">
                    <i class="bi bi-youtube"></i>
                    <p class="mt-3 ms-3">www.shivuspa.com</p>
                </div>
            </div>
            <div class="col-md-8 p-5">
                <h2>Get in Touch</h2>
                <form class="row g-3 contactForm mt-5" action="send_email.php" method="post">
                    <div class="col-md-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName">
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName">
                    </div>
                    <div class="col-12">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject">
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="col-md-6">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city">
                    </div>  
                    <div class="col-md-6">
                        <label for="contact" class="form-label">Contact</label>
                        <input type="text" class="form-control" id="contact" name="contact">
                    </div>  
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary mt-3" id="vv">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>