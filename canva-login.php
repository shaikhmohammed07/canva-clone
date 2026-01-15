<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Sansita:ital,wght@0,400;0,700;0,800;0,900;1,400;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        body{
             background-image: linear-gradient(
                rgba(0, 0, 0, 0.78),
                 rgba(0, 0, 0, 0.29),
                rgba(0, 0, 0, 0.78)
            ),
            url(images/bg-canva.jpg);
            background-size: cover;
        }
        .btn-light{
            height: 28px;
            padding: 0;
        }
        .btn-light:hover{
            background-color: #ffffff1f;
        }
        .logIn-box{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 160px;
        }
        .card{
            width: 370px;
            height: 500px;
            border:none;
            background-color: #252627;
            color: #ffffff;
        }
        .btn-box{
            width: 100%;
            height: 40px;
            border-radius: 10px;
            border: 1px solid #ffffff41;
            background-color: #252627;
            color: #ffffff; 
        }
        .btn-box:hover{
            width: 100%;
            height: 40px;
            border-radius: 10px;
            background-color: #ffffff19;
            color: #ffffff; 
            transition: 0.3s;
        }
        .foot{
            text-decoration: none;
            color: #ffffff;
        }
        .foot:hover{
            color: #9c6cf0;
            transition: 0.3s;
        }
        .btn-foot{
            background-color:  #00000004;
            padding: 6px;
        }
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg  fixed-top ml-3" id="mainNavbar">
    <div class="container-fluid">
            <a class="navbar-brand ps-4 pt-3" href="canva-main.php"><img style="width:90px; height: 33.7px"  src="images/canva-logo-white.svg"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto" >
                <li class="nav-item"><a class="nav-link btn btn-light" href="#"><span style="font-size: 13px;font-family: Montserrat, sans-serif; font-weight: 600;color: #ffffff">Design</span></a></li>
                <li class="nav-item "><a class="nav-link btn btn-light" href="#"><span style="font-size: 13px;font-family: Montserrat, sans-serif;font-weight: 600; color: #ffffff">Product</span></a></li>
                <li class="nav-item "><a class="nav-link btn btn-light" href="#"><span style="font-size: 13px;font-family: Montserrat, sans-serif; font-weight: 600;color: #ffffff">Plans</span></a></li>
                <li class="nav-item "><a class="nav-link btn btn-light" href="#"><span style="font-size: 13px;font-family: Montserrat, sans-serif; font-weight: 600;color: #ffffff">Business</span></a></li>
                <li class="nav-item "><a class="nav-link btn btn-light" href="#"><span style="font-size: 13px;font-family: Montserrat, sans-serif; font-weight: 600;color: #ffffff">Education</span></a></li>
                 <li class="nav-item "><a class="nav-link btn btn-light" href="#" ><span style="font-size: 13px;font-family: Montserrat, sans-serif; font-weight: 600;          color: #ffffff">Help</span></a></li>
            </ul>
        </div>
    </div>  
</nav>
<div class="logIn-box">
        <div class="card">
            <div class="p-4">
            <h3 class="" style=" font-family: Sansita, sans-serif;">Log In aur Sign Up in seconds</h3>
            <p class="pt-2" style="font-size: 14px;font-family: Montserrat, sans-serif;">Use your email or another service to<br> continue with Canva (it’s free)!</p>
            <span class="d-flex mt-3"><button class="btn-box d-flex mx-auto"><i class="bi bi-tablet fs-5 ps-2 pt-1" style="margin-left: 6px"></i><p class="mt-2" style="padding-left: 26px;font-size: 14px;font-family: Montserrat, sans-serif; color: #ffffff"><b>Continue with phone number</b></p></button></span>
            <span class="d-flex mt-3"><button class="btn-box d-flex mx-auto"><img class="" src="images/google-icon.png" alt="" style="height: 38px; width: 50px"><p class="mt-2" style="padding-left: 40px;font-size: 14px;font-family: Montserrat, sans-serif; color: #ffffff"><b>Continue with Google</b></p></button></span>
            <span class="d-flex mt-3"><button class="btn-box d-flex mx-auto"><i class="bi bi-envelope fs-5 ps-2 pt-1" style="margin-left: 6px"></i><p class="mt-2" style="padding-left: 56px;font-size: 14px;font-family: Montserrat, sans-serif; color: #ffffff"><b>Continue with email</b></p></button></span>
            <button class="btn-box mt-3" style="border:none;font-size: 14px;font-family: Montserrat, sans-serif; color: #ffffff"><b>Continue another way</b></button>
            <p class="mt-3" style="font-size: 13px">By continuing, you agree to Canva’s <a href="" style="color: #a855f7">Terms of Use</a>.<br> Read our <a href="" style="color: #a855f7">Privacy policy</a>.</p>
            <p class="" style="margin-top: 25px;font-family: Montserrat, sans-serif;font-size: 14px; color: #ffffffa8"><i class="bi bi-buildings" style="padding-right: 7px"></i> <b>Signing up for a business</b></p>
            </div>
        </div>
</div>
    <div class="foot d-flex">
        <div class="ms-auto"style="margin-top: 40px;font-family: Inter, sans-serif;font-size: 14px">
        <a href="" class="foot">Privacy policy</a> | <a href="#" class="foot">Terms</a>
        <button class="btn btn-light btn-foot" style="margin-left: 10px;margin-right: 20px; height: 35px; color: #ffffffff;border:none;font-family: Montserrat, sans-serif;"><i class="bi bi-globe2"></i> <b>English (India)</b></button>
        </div>
    </div>
</body>
</html>