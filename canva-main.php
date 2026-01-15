
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canva</title>
    <link rel="stylesheet" href="canva.css">
    

    <style>
    .main {
    background: linear-gradient(
        to bottom,
        #7934ee,
        #00aaff,
        #ffffff,
        #ffffff,
        #ffffff
        );
    }
   .font-bold{
        font-family: "Sansita", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
    }
    .vid-main{
        border-radius: 45px;
    }
    .canva-menu{
        background-color: #ffffff;
        margin-right: 300px;
        margin-left: 300px;
        margin-top: 40px;
        border-radius: 60px;
        height: 80px;
        width: auto;

    }
    .btn-1{
        padding-left: 25px;
        padding-right: 25px;
        border: none;
        height: 50px;
        width: auto;
        border-radius: 60px;
        margin-left: 8px;
        margin-right: 8px;
        background-color: #ffffff;
    }
    .canva-tab-bar {
    background: white;
    border-radius: 40px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    width: fit-content;
    margin: auto;
}

.canva-tab {
    background: none;
    border: none;
    padding: 10px 28px;
    border-radius: 40px;
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
    transition: 0.3s;
}

.canva-tab.active {
    background: linear-gradient(to right, #00aaff, #7429ff);
    color: white;
    font-weight: 600;
}

.vid-exe{
    position: absolute;
    object-fit: cover;
    
}
.content{
    position: relative;
    z-index: 2;
    color: #ffffff;
    font-family: "Sansita", sans-serif;
}
.generate-btn{
    height: 40px;
    width: 200px;
    border: none;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    font-family: 'Inter', sans-serif;
}
.img-exe{
    position: absolute;
    object-fit: cover;
    
}
.photo-exp{
     position: absolute;
    object-fit: cover;
}
.photo-sec{
     position: relative;
    z-index: 2;
}
.photo{
    border: none;
    border-radius: 10px;
    cursor: pointer;
}
.photo.active{
    border: 2px solid #a855f7 ;
    border-radius: 8px;
}
.photo-tabs{
    height: 56px;
    width: 56px;
    border: none;
    border-radius: 10px;
}
.slider-img{
    width: 340px;
    height: 410px;
    border-radius:30px;
}
.templates{
    border-radius: 10px;
    margin-bottom: 15px;
    border: 1px solid #21212125
}
.template-area{
    margin-left: 30px;
    margin-right: 30px;
}


/* .photo-space{
    padding-bottom: 380px;
} */




/* .tab-content-box {
    font-size: 20px;
    padding: 30px;
    background: #f8f8f8;
    border-radius: 15px;
} */

    </style>
</head>

<body>
    <?php include 'canva-navbar.php' ?>
    <div class="main mt-5 pt-5">
        <div class="row">
            <div class="col-md-6" style="padding-top: 100px; padding-left: 60px">
                <h1 class=" ps-5 font-sansita" style="color: white; font-size: 65px">Where heart meets art</h1>
                <p class="ps-5 pt-4 pb-3 font-montserrat" style="color: white">Canva makes it easy to create and share professional designs.</p>
                <span class="ps-5"><a href="canva-login.php"><button class="btn btn-light font-montserrat" style="width: 220px;height :38px; font-size: 13px"><b>Sign up and start designing</b></button></a></span>
            </div>
            <div class="col-md-6">
                <video class="vid-main" src="" width="633.2" height="360.3" poster="images/poster.jpg" style="margin-top: 60px;" controls></video>
            </div>
        </div>
        <div class="">
            <h1 class="display-5 text-center font-montserrat" style="margin-top: 80px"><b><b>Explore Canva's Templates and AI Tools</b></b></h1>
        </div>

<div class="canva-tab-bar d-flex gap-4 justify-content-center align-items-center p-3 mt-5">
    
    <button class="canva-tab active" data-bs-target="#content1">Try it now</button>
    <button class="canva-tab" data-bs-target="#content2">AI</button>
    <button class="canva-tab" data-bs-target="#content3">Presentation</button>
    <button class="canva-tab" data-bs-target="#content4">Social Media</button>
    <button class="canva-tab" data-bs-target="#content5">Print</button>
    <button class="canva-tab" data-bs-target="#content6">Video</button>
    <button class="canva-tab" data-bs-target="#content7">Education</button>

</div>


<!--  try it now Content Area -->
<div class=" mt-5">

    <div class="tab-content-box" id="content1">

        <div class="row" style="padding-left: 60px; padding-right: 60px; padding-bottom: 380px">
            <div class="col-8">
                <video class=" vid-exe" src="images/try it now-1.mp4" width="920px" height="553px" style="border-radius: 30px" autoplay muted loop ></video>
                <div class="content">
                    <h3 style="padding:30px">Watch your words turn into production-quality visuals with AI</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Generate media</button></a></span>
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-exe" src="images/try it now-2.webp" style="width: auto; height: 553px; border-radius: 30px">
                <div class="content">
                    <h3 style="padding: 30px; color: #000000">Bye-bye background, in a single click</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Remove Background</button></a></span>
                </div>
            </div>
        </div>


        <div class="row" style="padding-left: 60px; padding-right: 60px; margin-top: 30px; padding-bottom: 380px">
            <div class="col-md-4">
               <img class="img-exe" src="images/try it now-3.webp" style="width: auto; height: 553px; border-radius: 30px">
                <div class="content">
                    <h3 style="padding:30px">Design, present & inspire with presentations</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Create a Presentation</button></a></span>
                </div>
            </div>
            <div class="col-md-8">
                <img class="img-exe" src="images/try it now-4.webp" style="border-radius: 30px; width: auto; height: 553px" >
                <div class="content">
                    <h3 style="padding:30px">Create scroll-stopping social media content for any platform</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Design for social media</button></a></span>
                </div>
            </div>
        </div>

        <div class="row" style="padding-left: 60px; padding-right: 60px; margin-top: 30px; padding-bottom: 380px">
            <div class="col-md-8">
                <img class="img-exe" src="images/try it now-5.webp" style="border-radius: 30px; width: 920px; height: 553px">
                <div class="content">
                    <h3 style="padding:30px">Design, present & inspire with presentations</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Edit a video</button></a></span>
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-exe" src="images/try it now-6.webp" style="width: auto; height: 553px; border-radius: 30px">
                <div class="content">
                    <h3 style="padding: 30px">Make easy edits with an AI-powered editor</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Edit an image</button></a></span>
                </div>
            </div>
        </div>

    </div>

    <!-- Content Of AI -->

    <div class="tab-content-box d-none" id="content2">

        <div class="row" style="padding-left: 60px; padding-right: 60px; margin-top: 30px; padding-bottom: 400px">
            <div class="col-md-4">
               <img class="img-exe" src="images/AI-1.webp" style="width: auto; height: 553px; border-radius: 30px">
                <div class="content">
                    <h3 style="padding:30px; color: #000000">Design, present & inspire with presentations</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Change background</button></a></span>
                </div>
            </div>
            <div class="col-md-8">
                <img class="img-exe" src="images/AI-2.webp" style="border-radius: 30px; width: auto; height: 553px" >
                <div class="content">
                    <h3 style="padding:30px">Capture the essence of your brand in a logo</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Generate a logo</button></a></span>
                </div>
            </div>
        </div>

         <div class="row" style="padding-left: 60px; padding-right: 60px; padding-bottom: 380px">
            <div class="col-md-8">
                <video class="vid-exe" src="images/AI-3.mp4" width="915px" height="553px" style="border-radius: 30px" autoplay muted loop></video>
                <div class="content">
                    <h3 style="padding:30px">Reimagine your image with a short written prompt</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Try Magic Edit</button></a></span>
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-exe" src="images/AI-4.webp" style="width: auto; height: 553px; border-radius: 30px">
                <div class="content">
                    <h3 style="padding: 30px; color: #000000">Generate natural-sounding AI voices</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Generate voice</button></a></span>
                </div>
            </div>
        </div>

         <div class="row" style="padding-left: 60px; padding-right: 60px; margin-top: 30px; padding-bottom: 380px">
            <div class="col-md-4">
               <img class="img-exe" src="images/AI-5.webp" style="width: auto; height: 553px; border-radius: 30px">
                <div class="content">
                    <h3 style="padding:30px; color: #000000">Upscale your images with AI</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Enhance an image</button></a></span>
                </div>
            </div>
            <div class="col-md-8">
                <video class="vid-exe" src="images/AI-6.mp4" width="920px" height="553px" style="border-radius: 30px" autoplay muted loop></video>
                <div class="content">
                    <h3 style="padding:30px">Make words come easily, introducing the Magic Write</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Try Magic Write</button></a></span>
                </div>
            </div>
        </div>
    </div>

    <!-- content area of presentations -->

    <div class="tab-content-box d-none" id="content3">
        <div class="row" style="padding-left: 60px; padding-right: 60px; margin-top: 30px; padding-bottom: 380px">
            <div class="col-md-8">
                <img class="img-exe" src="images/Presentation-1.webp" style="border-radius: 30px; width: 920px; height: 553px">
                <div class="content">
                    <h3 style="padding:30px">Start inspired with professionally designed templates</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Create a slideshow</button></a></span>
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-exe" src="images/Presentation-2.webp" style="width: auto; height: 553px; border-radius: 30px">
                <div class="content">
                    <h3 style="padding: 30px; color: #000000">AI-powered presentation tools at your fingertips</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Generate an outline</button></a></span>
                </div>
            </div>
        </div>
        <div class="row" style="padding-left: 60px; padding-right: 60px; margin-top: 30px; padding-bottom: 400px">
            <div class="col-md-4">
               <img class="img-exe" src="images/Presentation-3.webp" style="width: auto; height: 553px; border-radius: 30px">
                <div class="content">
                    <h3 style="padding:30px; color: #000000">Create and collaborate seamlessly</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Make a presentation</button></a></span>
                </div>
            </div>
            <div class="col-md-8">
                <video class="vid-exe" src="images/Presentation-4.mp4" width="920px" height="553px" style="border-radius: 30px" autoplay muted loop></video>
                <div class="content">
                    <h3 style="padding:30px">Discover more ways to engage</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Create a graph</button></a></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Social media content -->

    <div class="tab-content-box d-none" id="content4">

        <div class="row" style="padding-left: 60px; padding-right: 60px; margin-top: 30px; padding-bottom: 400px">
            <div class="col-md-4">
               <img class="img-exe" src="images/Social-1.webp" style="width: auto; height: 553px; border-radius: 30px">
                <div class="content">
                    <h3 style="padding:30px; color: #000000">Make your videos social-ready with video enhancer</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Edit a video</button></a></span>
                </div>
            </div>
            <div class="col-md-8">
                <img class="img-exe" src="images/Social-2.webp" style="border-radius: 30px; width: auto; height: 553px" >
                <div class="content">
                    <h3 style="padding:30px">Templates for a variety of ideas, holidays & languages</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Design for social</button></a></span>
                </div>
            </div>
        </div>

         <div class="row" style="padding-left: 60px; padding-right: 60px; padding-bottom: 380px">
            <div class="col-md-8">
                <img class="img-exe" src="images/Social-3.webp" style="border-radius: 30px; width: 920px; height: 553px" >
                <div class="content">
                    <h3 style="padding:30px">Polish your photos & turn your imagination to an image</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Edit a photo</button></a></span>
                </div>
            </div>
            <div class="col-md-4">
                <video class="vid-exe" src="images/Social-4.mp4" width="auto" height="553px" style="border-radius: 30px" autoplay muted loop></video>
                <div class="content">
                    <h3 style="padding: 30px; color: #000000">Resize & transform your design in seconds</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Try Magic Switch</button></a></span>
                </div>
            </div>
        </div>

         <div class="row" style="padding-left: 60px; padding-right: 60px; margin-top: 30px; padding-bottom: 400px">
            <div class="col-md-4">
               <img class="img-exe" src="images/Social-5.webp" style="width: auto; height: 553px; border-radius: 30px">
                <div class="content">
                    <h3 style="padding:30px; color: #000000">Hassle-free content scheduling and publishing</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Start planning</button></a></span>
                </div>
            </div>
            <div class="col-md-8">
                <img class="img-exe" src="images/Social-6.webp" style="border-radius: 30px; width: auto; height: 553px" >
                <div class="content">
                    <h3 style="padding:30px">Keep your designs on brand</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Try Brand Kit</button></a></span>
                </div>
            </div>
        </div>
    </div>

        <!-- Print content area -->

    <div class="tab-content-box d-none" id="content5">
        <div class="row" style="padding-left: 60px; padding-right: 60px; margin-top: 30px; padding-bottom: 380px">
            <div class="col-md-8">
                <img class="img-exe" src="images/Print-1.webp" style="border-radius: 30px; width: 920px; height: 553px">
                <div class="content">
                    <h3 style="padding:30px; color: #000000">Stand out for the right reasons with a custom poster</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Design a poster</button></a></span>
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-exe" src="images/Print-2.webp" style="width: auto; height: 553px; border-radius: 30px">
                <div class="content">
                    <h3 style="padding: 30px; color: #000000">Make your flyers stand out from the rest</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Make a flyer</button></a></span>
                </div>
            </div>
        </div>
        <div class="row" style="padding-left: 60px; padding-right: 60px; margin-top: 30px; padding-bottom: 380px">
            <div class="col-md-4">
               <img class="img-exe" src="images/Print-3.webp" style="width: auto; height: 553px; border-radius: 30px">
                <div class="content">
                    <h3 style="padding:30px; color: #000000">Express yourself with a graphic t-shirt</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Design a t-shirt</button></a></span>
                </div>
            </div>
            <div class="col-md-8">
                <img class="img-exe" src="images/Print-4.webp" style="border-radius: 30px; width: auto; height: 553px" >
                <div class="content">
                    <h3 style="padding:30px; color: #000000">Design & flaunt a customer sticker</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Create a sticker</button></a></span>
                </div>
            </div>
        </div>
        <div class="row" style="padding-left: 60px; padding-right: 60px; margin-top: 30px; padding-bottom: 380px">
            <div class="col-md-8">
                <img class="img-exe" src="images/Print-5.webp" style="border-radius: 30px; width: 920px; height: 553px">
                <div class="content">
                    <h3 style="padding:30px">Leave a great first impression</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Make visiting card</button></a></span>
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-exe" src="images/Print-6.webp" style="width: auto; height: 553px; border-radius: 30px">
                <div class="content">
                    <h3 style="padding: 30px; color: #000000">One Print, One Tree</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Start with Canva</button></a></span>
                </div>
            </div>
        </div>
    </div>

<!--Video area content -->

    <div class="tab-content-box d-none" id="content6">
        <div class="row" style="padding-left: 60px; padding-right: 60px; margin-top: 30px; padding-bottom: 380px">
            <div class="col-md-8">
                <img class="img-exe" src="images/Video-1.webp" style="border-radius: 30px; width: 920px; height: 553px">
                <div class="content">
                    <h3 style="padding:30px;">A free video editor with powerful editing tools</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Edit a video</button></a></span>
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-exe" src="images/Video-2.webp" style="width: auto; height: 553px; border-radius: 30px">
                <div class="content">
                    <h3 style="padding: 30px;">Turn your photos to a video slideshow</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Make photo slideshow</button></a></span>
                </div>
            </div>
        </div>
        <div class="row" style="padding-left: 60px; padding-right: 60px; margin-top: 30px; padding-bottom: 410px">
            <div class="col-md-4">
               <img class="img-exe" src="images/Video-3.webp" style="width: auto; height: 553px; border-radius: 30px">
                <div class="content">
                    <h3 style="padding:30px;">Play with sound and music</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Add music</button></a></span>
                </div>
            </div>
            <div class="col-md-8">
                <img class="img-exe" src="images/Video-4.webp" style="border-radius: 30px; width: auto; height: 553px" >
                <div class="content">
                    <h3 style="padding:30px;">Tell your story loud & clear with subtitles</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Add captions</button></a></span>
                </div>
            </div>
        </div>
        <div class="row" style="padding-left: 60px; padding-right: 60px; margin-top: 30px; padding-bottom: 380px">
            <div class="col-md-8">
                <img class="img-exe" src="images/Video-5.webp" style="border-radius: 30px; width: 920px; height: 553px">
                <div class="content">
                    <h3 style="padding:30px">Erase video background without a green screen</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Remove video background</button></a></span>
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-exe" src="images/Video-6.webp" style="width: auto; height: 553px; border-radius: 30px">
                <div class="content">
                    <h3 style="padding: 30px;">Define the mood with video filters & effects</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Enhance a video</button></a></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Education Area content -->

    <div class="tab-content-box d-none" id="content7">
        <div class="row" style="padding-left: 60px; padding-right: 60px; margin-top: 30px; padding-bottom: 380px">
            <div class="col-md-8">
                <img class="img-exe" src="images/Education-1.webp" style="border-radius: 30px; width: 920px; height: 553px">
                <div class="content">
                    <h3 style="padding:30px;">Spark creativity in every classroom</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Webinar</button></a></span>
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-exe" src="images/Education-2.webp" style="width: auto; height: 553px; border-radius: 30px">
                <div class="content">
                    <h3 style="padding: 30px; color: #000000">Elevate your lessons with Canva tools</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Discover</button></a></span>
                </div>
            </div>
        </div>
        <div class="row" style="padding-left: 60px; padding-right: 60px; margin-top: 30px; padding-bottom: 400px">
            <div class="col-md-4">
               <img class="img-exe" src="images/Education-3.webp" style="width: auto; height: 553px; border-radius: 30px">
                <div class="content">
                    <h3 style="padding:30px; color: #000000">Empower creative learning at school</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Discover</button></a></span>
                </div>
            </div>
            <div class="col-md-8">
                <img class="img-exe" src="images/Education-4.webp" style="border-radius: 30px; width: auto; height: 553px" >
                <div class="content">
                    <h3 style="padding:30px;">Become a certified Canva educator</h3>
                </div>
            </div>
        </div>
        <div class="row" style="padding-left: 60px; padding-right: 60px; margin-top: 30px; padding-bottom: 380px">
            <div class="col-md-8">
                <img class="img-exe" src="images/Education-5.webp" style="border-radius: 30px; width: 920px; height: 553px">
                <div class="content">
                    <h3 style="padding:30px; color: #000000">Real stories of impact with Canva</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Explore</button></a></span>
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-exe" src="images/Education-6.webp" style="width: auto; height: 553px; border-radius: 30px">
                <div class="content">
                    <h3 style="padding: 30px;">Design-driven solutions for higher education</h3>
                    <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn">Discover</button></a></span>
                </div>
            </div>
        </div>
    </div>



</div>
<div class="row" style="margin-top: 140px">
    <div class="col-md-6" style="padding-left: 80px">
        <h1 class="display-5 font-sansita" style="font-size: 58px; margin-top:100px;"><b>Try Image Generator</b></h1><br>
        <p class="font-sansita" style="font-size: 19px">Turn pure text to art with Magic Media™  and our range of AI art generator tools. Simply enter a prompt, pick a style, and watch your words transform into beautiful art.</p><br>
        <div class="d-flex gap-3">
        <div class="input-group">
      <span class="input-group-text" id="basic-addon1">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.296 2.043c.407 1.817 1.284 2.716 3.317 3.089.14 0 .255.104.255.233s-.114.233-.255.233c-1.982.373-2.909 1.218-3.315 3.081a.246.246 0 0 1-.243.18.245.245 0 0 1-.245-.191c-.407-1.818-1.28-2.697-3.313-3.07-.14 0-.254-.104-.254-.233s.114-.233.254-.233c1.982-.373 2.91-1.223 3.317-3.087a.247.247 0 0 1 .241-.175c.117 0 .212.074.241.173Z" fill="url(#_3085173834__a)"></path><path d="M15.094 17.436A7.5 7.5 0 1 1 10 4.046v1.503A6 6 0 1 0 16.446 11h1.504a7.466 7.466 0 0 1-1.46 5.003l4.25 4.25a1 1 0 0 1-1.414 1.414l-4.232-4.231Z" fill="url(#_3085173834__b)"></path><path d="M13.666 8.964c-.857-.236-1.356-.615-1.527-1.4 0-.095-.084-.172-.187-.172s-.187.077-.187.171c-.257.786-.67 1.244-1.528 1.401-.103 0-.187.077-.187.171 0 .095.084.172.187.172.857.235 1.357.614 1.528 1.4 0 .095.084.171.187.171s.187-.076.187-.171c.257-.786.67-1.243 1.527-1.4.104 0 .187-.077.187-.172 0-.094-.083-.171-.187-.171Z" fill="url(#_3085173834__c)"></path><defs><linearGradient id="_3085173834__a" x1="-6.063" y1="11.915" x2="13.914" y2="29.878" gradientUnits="userSpaceOnUse"><stop stop-color="#03A5AB"></stop><stop offset="1" stop-color="#8B3DFF"></stop></linearGradient><linearGradient id="_3085173834__b" x1="-6.063" y1="11.915" x2="13.914" y2="29.878" gradientUnits="userSpaceOnUse"><stop stop-color="#03A5AB"></stop><stop offset="1" stop-color="#8B3DFF"></stop></linearGradient><linearGradient id="_3085173834__c" x1="-6.063" y1="11.915" x2="13.914" y2="29.878" gradientUnits="userSpaceOnUse"><stop stop-color="#03A5AB"></stop><stop offset="1" stop-color="#8B3DFF"></stop></linearGradient></defs></svg>
        </svg>
    </span>
      <input type="text" class="form-control" placeholder="Moon rising over the mountains" aria-label="Username" aria-describedby="basic-addon1"/>
    </div>
    <a href="canva-login.php"><button class= "btn-login" style= " font-size: 15px; width: 90px; height: 40px; color: #ffffff">Generate</button></a>
</div>
    </div>
 <!-- content photo -->
  <div class="col-md-6" style="">
     <div class="big-photo d-flex justify-content-center" style="padding-left: 20px;padding-right: 20px">
        <div class="photo-open photo-exp" id="photo-1">
            <img src="images/photo-tab-1.png" style="width: 500px; height : 480px; border-radius:30px">
        </div>
        <div class="photo-open d-none photo-exp" id="photo-2">
            <img src="images/photo-tab-2.png" style="width: 500px; height : 480px; border-radius:30px">
        </div>
        <div class="photo-open d-none photo-exp" id="photo-3">
            <img src="images/photo-tab-3.png" style="width: 500px; height : 480px; border-radius:30px">
        </div>
        <div class="photo-open d-none photo-exp" id="photo-4">
            <img src="images/photo-tab-4.png" style="width: 500px; height : 480px; border-radius:30px">
        </div>

        <!-- photo section -->
        <div class=" d-flex flex-wrap justify-content-center align-item-center" style="margin-top: 430px" >
            <div class="card" >

            <div class="photo-sec d-flex">
                <div class=""style="padding-left: 10px;padding-right: 10px;padding-top: 10px" >
            <button class="photo active" data-bs-target="#photo-1" >
                <img class="photo-tabs" src="images/photo-tab-1.png">
            </button>
            <p class="text-center font-inter" style=" font-size: 12px"><b>Dreamy</b></p>
            </div>

            <div class="" style="padding-right: 10px; padding-top: 10px">
            <button class="photo" data-bs-target="#photo-2">
                <img class="photo-tabs" src="images/photo-tab-2.png">
            </button>
            <p class="text-center font-inter" style=" font-size: 12px"><b>Anime</b></p>
            </div>

            <div class="" style="padding-right: 10px; padding-top: 10px">
            <button class="photo" data-bs-target="#photo-3">
                <img class="photo-tabs"  src="images/photo-tab-3.png">
            </button>
            <p class="text-center font-inter" style=" font-size: 12px"><b>watercol...</b></p>
            </div>

            <div class="" style="padding-right: 10px; padding-top: 10px">
            <button class="photo" data-bs-target="#photo-4">
                <img class="photo-tabs"  src="images/photo-tab-4.png">
            </button>
            <p class="text-center font-inter" style=" font-size: 12px"><b>Flimic</b></p>
            </div>

            <div class="" style="padding-right: 10px; padding-top: 10px">
            <button class="photo" data-bs-target="#photo-5">
                <a href="canva-login.php">
                <img class="photo-tabs"  src="images/photo-tab-5.png">
                </a>
            </button>
            <p class="text-center font-inter" style=" font-size: 12px"><b>More</b></p>
            </div>
        </div>
    </div>
</div>
    </div>
    </div>
    </div>

    <div class="text-center" style="padding-left: 350px; padding-right: 350px; margin-top: 250px">
        <h1 class="display-5 font-montserrat" style=" margin-top: 80px"><b><b>Our Business Features</b></b></h1>
        <p class="mt-4">Enhance the design capabilities of your team or your entire business with Canva's business plans! To enquire about our Enterprise plan, please contact us <a href="#">here</a>!</p>
    </div>

    <div class="d-flex gap-3 mt-5" >
 <div class="row mt-5" style="padding-left: 60px;padding-right: 60px">
        <div class="col-md-3 mt-5 ">
        <img src="images/slider-1.webp" class="slider-img img-exe">
            <div class="content">
                <h3 style="padding:20px;padding-top: 30px; color: #000000">Set up a Brand Kit to unify your designs</h3>
                <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn" style="width: 150px">Learn more</button></a></span>
            </div>
        </div>
    <div class="col-md-3 mt-5">
        <img src="images/slider-2.webp" class="slider-img img-exe">
        <div class="content">
                <h3 style="padding:20px;padding-top: 30px; color: #000000">Empower your team to scale content</h3>
                <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn" style="width: 150px">Learn more</button></a></span>
            </div>
    </div>
    <div class="col-md-3 mt-5">
        <img src="images/slider-3.webp" class="slider-img img-exe">
        <div class="content">
                <h3 style="padding:20px;padding-top: 30px; color: #000000">Collaborate & create in real time</h3>
                <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn" style="width: 150px">View plans</button></a></span>
            </div>
    </div>
    <div class="col-md-3 mt-5">
        <img src="images/slider-4.webp" class="slider-img img-exe">
        <div class="content">
                <h3 style="padding:20px;padding-top: 30px; color: #000000">Protect and secure your data</h3>
                <span style="padding-left: 30px;"><a href="canva-login.php"><button class="generate-btn" style="width: 150px">Learn more</button></a></span>
            </div>
        </div>
    </div>
</div>
<div class="" style="margin-top: 400px">
    <h1 class="display-3 text-center font-bold" style="color: #212121"> Templates for absolutely anything</h1>
    <p class="text-center mt-4" style="font-size: 20px">Customise an office template, or design something more personal, like an invitation.</p>
    <div class="template-area">
    <div class="row">
        <div class="col-2">
            <img src="images/template-1.webp" alt="" class="templates">
            <img src="images/template-2.webp" alt="" class="templates">
            <img src="images/template-3.webp" alt="" class="templates">
        </div>
        <div class="col-2">
            <img src="images/template-4.webp" alt="" class="templates">
            <video src="images/template-5.mp4" class="video-templates templates" muted autoplay loop controls></video>
            <img src="images/template-6.webp" alt="" class="templates">
            <img src="images/template-7.webp" alt="" class="templates">
        </div>
        <div class="col-2">
            <img src="images/template-8.jpg" alt="" class="templates">
            <img src="images/template-9.webp" alt="" class="templates">
            <img src="images/template-10.webp" alt="" class="templates">
        </div>
        <div class="col-2">
            <video src="images/template-11.mp4" class="video-templates templates" muted autoplay loop controls></video>
            <img src="images/template-12.webp" alt="" class="templates">
            <img src="images/template-13.webp" alt="" class="templates">
        </div>
        <div class="col-2">
            <img src="images/template-14.jpg" alt="" class="templates">
            <img src="images/template-15.webp" alt="" class="templates">
            <img src="images/template-16.webp" alt="" class="templates">
            <img src="images/template-17.jpg" alt="" class="templates">
        </div>
        <div class="col-2">
            <img src="images/template-18.webp" alt="" class="templates">
            <img src="images/template-19.webp" alt="" class="templates">
            <img src="images/template-20.webp" alt="" class="templates">
        </div>
    </div>
    <div class="d-flex gap-3 justify-content-center" style="margin-top: 80px" >
    <a href="canva-login.php"><button class="btn-login" style="height: 37px; width: 130px;color: #ffffff"><b>Start designing</b></button></a>
    <a href="canva-login.php"><button class="btn-sign" style="height: 37px; width: 150px"><b>Browse all templates</b></button></a>
    </div>
</div>
</div>
    <div style="margin-top: 180px;padding-bottom: 200px">
    <p class="text-center font-inter" style="padding-left: 250px; padding-right: 250px; font-size: 15px">Unlock premium templates, more powerful design tools & ​​AI features with a Canva plan. <a href="#"> Educational institutions</a> and <a href="#">non-profits</a>  can use Canva's premium features for free.</p> 
    <span style="padding-left: 650px; padding-right: 650px" ><a href="canva-login.php"><button class="btn-sign font-inter" style="width: 230px; height: 35px;font-size: 14px"> <i class="bi bi-gem" style="color: #000000"> </i> <b>See plans and pricing </b></button></a></div> 
    </div>
</div>
<?php include 'canva-footer.php' ?>
<script>
    
    function tabs(){
    const tabs = document.querySelectorAll(".canva-tab");
    const contents = document.querySelectorAll(".tab-content-box");

    tabs.forEach(tab => {
        tab.addEventListener("click", () => {

            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove("active"));

            // Add active to clicked tab
            tab.classList.add("active");

            // Hide all tab content sections
            contents.forEach(c => c.classList.add("d-none"));

            // Show the clicked one
            const target = tab.getAttribute("data-bs-target");
            document.querySelector(target).classList.remove("d-none");

        });
    });
}
tabs();

function photo() {
    const photos = document.querySelectorAll(".photo");
    const photo_content = document.querySelectorAll(".photo-open");

    photos.forEach(photo => {
        photo.addEventListener("click", () => {

            // Remove active class from all buttons
            photos.forEach(p => p.classList.remove("active"));

            // Add active to clicked button
            photo.classList.add("active");

            // Hide all photo sections
            photo_content.forEach(c => c.classList.add("d-none"));

            // Show selected one
            const target = photo.getAttribute("data-bs-target");
            document.querySelector(target).classList.remove("d-none");
        });
    });
}
photo();

function playhover(){
     const videos = document.querySelectorAll(".video-templates");

    videos.forEach(video => {
        video.addEventListener("mouseenter", () => {
            videos.forEach(v => v.pause()); // stop all
            video.play();
        });

        video.addEventListener("mouseleave", () => {
            video.pause();
            video.currentTime = 0;
        });
    });
}
playhover();





 function slider(){
const slider = document.querySelector(".canva-slider");
const btnLeft = document.querySelector(".left-btn");
const btnRight = document.querySelector(".right-btn");

btnRight.addEventListener("click", () => {
    slider.scrollLeft += 400; // scroll amount
});

btnLeft.addEventListener("click", () => {
    slider.scrollLeft -= 400;
});
 }
 slider();


</script>
</body>
</html>

