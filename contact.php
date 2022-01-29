<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['visa']) && isset($_POST['message'])) {
    # code...
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['visa']) && !empty($_POST['message']) ) {
            # code...
            $name = $_POST['name'];
            $email = $_POST['email'];
            $visa = $_POST['visa'];            
            $message = $_POST['message'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                # code...
                echo 'Kindly Provide Valid Email';
            }
                else {
                 $body = $name."\n".$email."\n".$visa."\n".$message;
                    if (mail('didarulselim@gmail.com' , 'Letmates', $body ,'From: didarulselim@gmail.com')) {
                    alart " Thanks For Your Mail";
                 }
                 else {
                    echo 'There is a problem in sending mail.';
                 }
                }
            
            }
       
        else {
            echo 'All Fields Are Required.';
        }
     }
        else {
            echo '';
        }
        
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- meta tag start -->
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="initial-scale=1">
    <meta class="metaTagTop" name="description" content="">
    <meta class="metaTagTop" name="keywords" content="">
    <meta class="metaTagTop" name="author" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="cf:funnel_id" content="">
    <meta property="cf:page_id" content="">
    <meta property="cf:funnel_step_id" content="">
    <meta property="cf:user_id" content="">
    <meta property="cf:account_id" content="">
    <meta property="cf:page_code" content="=">
    <meta property="cf:mode_id" content="1">
    <meta property="cf:time_zone" content="">
    <meta property="cf:app_domain" content="">
    <!-- meta tag end -->

    <!-- link start -->
    <link rel="icon" type="image/png" href="image/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="css/all.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" />
    <!-- link end -->
        <title>Lexmates</title>
  </head>
  <body>
    <header class="sticky-top">
      <div class="header-top ">
        <div class="container d-flex">
          <div class="left "><p class="m-0 p-2"><img src="image/map-marker-alt-solid.svg" alt="" width="10" height="auto">  House No-35, 3rd Floor, Road No-4, Block-F, Kalwalapara, Mirpur-1, Dhaka 1216</p></div>
          <div class="right d-flex " style="margin: auto;"><a class="m-0 p-2" href="tel:18633702427" ><img src="image/phone-alt-solid.svg" alt="" width="12" height="auto"> +8801727145247</a><p class="m-0 p-2"><img src="image/envelope-open-regular.svg" alt="" width="10" height="auto"> parvez.hashem@gmail.com</p></div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="image/logo.png" alt="" width="200px"></a>
    <div class="btn-icon">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <span class="navbar-toggler-icon"></span>
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="m-0  call" href="tel:18633702427"><img src="image/phone-alt-solid.svg" alt="" width="10" height="auto"> </a>
    </div>      

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html" >ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.html" >SERVICES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.html"  >BLOG</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="about.html" id="navbarDropdown"  data-bs-toggle="dropdown" aria-expanded="false">
            USEFUL LINKS          </a>
          <ul class="dropdown-menu" >
            <li><a class="nav-link" href="http://www.supremecourt.gov.bd/">Supreme Court</a></li>
            <li><a class="nav-link" href="http://www.judiciary.org.bd/">Judicial Portal Bangladesh</a></li>            
            <li><a class="nav-link" href="http://bdlaws.minlaw.gov.bd/">Laws of Bangladesh</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php" >CONTACT US</a>
        </li>
      </ul>
    </div>
   
  </div>
</nav>
    </header>

<section class="contact-form" id="Contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="heading p-5">
          <h1 style="color: #425A7B;">Have Questions? Get in Touch</h1>
        </div>
      </div>
      <div class="col-lg-6 location" style="padding: 0px 30px ;">
          <div class="address-list " style="background-color: #425A7B29;padding: 20px;margin-bottom: 20px;box-shadow: 0px 0px 5px 2px #425A7B;"><img src="image/map-marker-alt-solid.svg" alt="" width="" height="auto" style="padding: 10px;border-radius: 10px;background-color: #425A7B;margin-bottom: 20px;width: 50px;">  <h5 style="color: #425A7B;">House No-35, 3rd Floor
Road No-4, Block-F, Kalwalapara (Main Road) Mirpur-1, Dhaka 1216, Bangladesh </h5> <span style="font-weight: 700; color: #adb5bd;">Our location</span></div>
          <div class="address-list " style="background-color: #425A7B29;padding: 20px;margin-bottom: 20px;box-shadow: 0px 0px 5px 2px #425A7B;"><img src="image/phone-alt-solid.svg" alt="" width="" height="auto" style="padding: 10px;border-radius: 10px;background-color: #425A7B;margin-bottom: 20px;width: 50px;">  <h5 style="color: #425A7B;">Phone: +8801727145247 </h5> <span style="font-weight: 700; color: #adb5bd;">Let's Talk</span></div>
          <div class="address-list " style="background-color: #425A7B29;padding: 20px;margin-bottom: 20px;box-shadow: 0px 0px 5px 2px #425A7B;"><img src="image/envelope-open-regular.svg" alt="" width="" height="auto" style="padding: 10px;border-radius: 10px;background-color: #425A7B;margin-bottom: 20px;width: 50px;">  <h5 style="color: #425A7B;"><a href="mailto:parvez.hashem@gmail.com" style="text-decoration: none;">parvez.hashem@gmail.com</a></h5>
            <span style="font-weight: 700; color: #adb5bd;">Drop a Line</span></div>
      </div>
      <div class="col-lg-6">
        <form method="post" action="" class="">
                            
                             <div class="row">
                              <!-- <div class="col-md-12 pt-1 pb-4 text-center">
                                <h4>Request Free Consultation</h4>
                              </div> -->
                               <div class="col-md-6  d-flex fl-name mb-3">
                                 
                                    <!-- <label for="name" class="form-label">Name</label><br> -->
                                    <input type="text" class="form-control " name="name" placeholder="Enter Your Name" required=""> 
                                  
                               </div><br><br>
                               <div class="col-md-6 mail mb-3">
                                 <!-- <label for="email" class="">Email</label> <br> --><input type="email" class="form-control" name="email" placeholder="Enter Your E-mail" required="">
                               </div><br><br>
                               <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12 number mb-3">
                                <select class="form-control" name="visa">
                <option>Your Question About..</option>
                <option>CIVIL</option>
                <option>WRIT PETITION</option>
                <option>LAND &amp; REAL ESTATE</option>
                <option>COMMERCIAL</option>
                <option>INCOME TAX, VAT &amp; CUSTOM</option>
                <option>COMPANY MATTER</option>
                <option>BUSINESS</option>
                <option>DOCUMENTATION</option>
                <option>REGISTRATION</option>
                <option>HEBA DEED, WILLS AND WAQF</option>
                <option>OTHERS</option>
              </select>
            </div>
                                 <br><br>

                               <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12 number mb-3">
                                 <textarea name="message" id="" class="form-control" cols="30" rows="10" placeholder="Enter Your Name" required=""></textarea>
                               </div><br><br>
                               <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12">                                 
                                  <button class="btn "  type="submit" value="send">SEND REQUEST</button>
                               </div>
                             </div>
                          </form>
    </div>
  </div>
</div></section>


<footer class="pt-5 pb-2 text-white">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <a class="navbar-brand logo" href="index.php">
          <img src="image/footer_logo.png" alt="" width="" height="">
        </a>
        <p class="mt-4 text-justify">
          Lexmates is a Dhaka Based Law Firm which employs a team of excellent and hardworking Advocates, Legal Consultant and Advisers to provide top-notch legal representation and advice to its clients.
        </p>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="mt-2">Contact Details</h5>
        <p class="mt-4">House No. 35, 3rd Floor, Road No-4, <br> Block-F, Kalwalapara (Main Road) <br> Mirpur-1, Dhaka 1216, Bangladesh
         <br> <br> 
          Phone: +8801727145247
          <br>
          <a href="mailto:parvez.hashem@gmail.com" >parvez.hashem@gmail.com</a>
          <br><br>
          Saturday to Thursday 9 to 9
        </p>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="mt-2">Useful Links:</h5>
        <p class="mt-4">
          <a href="Privacy-Policy.html" >Privacy Policy</a> <br>
        <a href="dsl.html">DISCLAIMER</a> <br>
          <a href="http://www.supremecourt.gov.bd/" target="_blank">Supreme Court</a><br>
        <a href="http://www.judiciary.org.bd/" target="_blank">Judicial Portal Bangladesh</a><br>
        <a href="https://nbr.gov.bd/" target="_blank">NBR</a><br>
        <a href="http://bdlaws.minlaw.gov.bd/" target="_blank">Laws of Bangladesh</a><br>
        <a href="#" target="_blank">FAQ</a> <br>
        <a href="#" target="_blank">PRESS</a>
      </p>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="mt-2">Services</h5>
        <p class="mt-4">
          <a href="service.html" class="text-decoration-none">LAND & REAL ESTATE</a><br>
          <a href="service.html" class="text-decoration-none">INCOME TAX, VAT & CUSTOM</a><br>
          <a href="service.html" class="text-decoration-none">CIVIL SERVICE</a><br>
          <a href="service.html" class="text-decoration-none">FAMILY MATTER</a><br>
          <a href="service.html" class="text-decoration-none">CRIMINAL CASES</a>
        </p>
      </div>
      

      <hr>

      <div class="col-lg-12 footer-copy  mt-2 ">
        <div class="col-lg-6 col-md-6 text-left">
          <p class="">
          <img src="image/copyright-svg.png" width="15" height="15" alt="">
          Copyright <a href="index.html">Lexmates</a> 2021. All Right Reserved.
        </p>
        </div>
        <div class="col-lg-6 col-md-6 text-right">
          <p class="social">
          <a href="https://www.facebook.com/Lexmates-110941304607348"><img src="image/fb.png" alt="Facebook" width="20" height="20"></a><!-- 
          <a href="https://www.linkedin.com/mynetwork/"><img src="image/linkedin.png" alt="linkedin" width="20" height="20"></a>
          <a href="https://www.youtube.com/channel/UC2cHbRX0u0QrAFfCvy6LMdg"><img src="image/youtube.png" alt="linkedin" width="20" height="20"></a> -->
        </p>
        </div>
        
      </div>
      
    </div>
  </div>
</footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.js" ></script>
    <!-- <script src="js/bootstrap.js"></script -->
    <!--Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- custom JS code after importing jquery and owl -->


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
