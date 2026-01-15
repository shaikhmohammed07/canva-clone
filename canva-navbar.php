<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Canva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- Google font
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Sansita:ital,wght@0,400;0,700;0,800;0,900;1,400;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->
    <style>
        * {
            box-sizing: border-box;
            max-width: 100%;
        }
        body{
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        /* slide effect */
        .navbar {
            transition: top 0.4s ease-in-out;
                height: 80px;
        }
        .btn.btn-light{
            padding: 3px;
        }
        .btn1{
            height: 30px;
            width: 60px;
            font-size: 12px;
            border: none;
            border-radius: 10px;
        }
        .btn-sign{
            height: 30px;
            width: 70px;
            font-size: 13px;
            border: 1px solid #00000076;
            border-radius: 7px;
            background-color: white;
        }
        .btn-sign:hover{
            height: 30px;
            width: 70px;
            font-size: 13px;
            border: 1px solid #00000039;
            border-radius: 7px;
            background-color: #dddddd86;
            transition: 0.5s;
        }
        .btn-login{
            height: 30px;
            width: 70px;
            font-size: 13px;
            border: none;
            border-radius: 7px;
            background-color: #8b3dff;
        }
        .btn-login:hover{
            height: 30px;
            width: 70px;
            font-size: 13px;
            border: none;
            border-radius: 7px;
            background-color: #8345dfde;
            transition: 0.5s;
        }
        body {
    font-family: 'Inter', sans-serif;
    }
    </style>
</head>

<body>

 <div class="navbar-main">
<nav class="navbar navbar-expand-lg  fixed-top ml-3" id="mainNavbar" style="background-color: #ffffff">
    <div class="container-fluid">
            <a class="navbar-brand ps-5" href="canva-main.php"><img style="" src="images/canva-logo.svg"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto d-flex gap-1" >
                <li class="nav-item"><a class="nav-link btn btn-light" href="canva-login.php"><span style="font-size: 12px;font-family: Montserrat, sans-serif; font-weight: 600;color:  #000000">Design</span></a></li>
                <li class="nav-item "><a class="nav-link btn btn-light" href="canva-login.php"><span style="font-size:12px;font-family: Montserrat, sans-serif; font-weight: 600; color: #000000;">Product</span></a></li>
                <li class="nav-item "><a class="nav-link btn btn-light" href="canva-login.php"><span style="font-size: 12px;font-family: Montserrat, sans-serif; font-weight: 600; color:  #000000">Plans</span></a></li>
                <li class="nav-item "><a class="nav-link btn btn-light" href="canva-login.php"><span style="font-size: 12px;font-family: Montserrat, sans-serif; font-weight: 600; color:  #000000">Business</span></a></li>
                <li class="nav-item "><a class="nav-link btn btn-light" href="canva-login.php"><span style="font-size: 12px;font-family: Montserrat, sans-serif; font-weight: 600; color:  #000000">Education</span></a></li>
                 <li class="nav-item "><a class="nav-link btn btn-light" href="canva-login.php" ><span style="font-size: 12px;font-family: Montserrat, sans-serif; font-weight: 600; color:  #000000">Help</span></a></li>
            </ul>
        </div>
        <ul class="navbar-nav ms-auto pe-4 d-flex gap-2 ">
                <li class="nav-item "><a href="canva-login.php"><button class="btn-sign" style="font-family: Montserrat, sans-serif; color: black">Sign up</button></a></li>
                <li class="nav-item "><a href="canva-login.php"><button class="btn-login" style="font-family: Montserrat, sans-serif; color: white">Log in</button></a></li>
            </ul>
        </div>  
</nav>
         </div>
 
<script>
    let lastScroll = 0;
    const navbar = document.getElementById("mainNavbar");

    window.addEventListener("scroll", () => {
        let currentScroll = window.pageYOffset;

        if (currentScroll > lastScroll) {
            // scrolling down → hide navbar
            navbar.style.top = "-80px";
        } else {
            // scrolling up → show navbar
            navbar.style.top = "0";
        }

        lastScroll = currentScroll;
    });
</script>

</body>
</html>
