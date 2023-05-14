<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Athang Learning Institute/home</title>

    <!-------------------------------------------------URL-IMG------------------------------------------------------->
    <link rel="icon" type="image/jpg" href="logo_url.jpg" width="512" height="512" />
    <link rel="icon" type="image/jpg" href="logo_url.jpg" width="512" height="512" />

    <!---------------------------------------------FONTAWSOME-LINK--------------------------------------------------->

    <link rel="stylesheet" href="font-awesome/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-------------------------------------------------FONTS-------------------------------------------------------->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-----------------------------------------------PUBLIC-CSS----------------------------------------------------->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <link href="css/style.css" rel="stylesheet">
    <!-----------------------------------------------BOOTRAPS-LINK------------------------------------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!--------------------------<script src="script.js"></script> ------------------------------->
  </head>
  <body> 
    <!-------------------------------------------------NAV-BAR------------------------------------------------------->          
    <?php 
          include('nav.php') 
    ?>
     <!---------------------------------------------BOOTRAPS-IMG-CAROUSEL-------------------------------------------->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="1000">
            <img src="ap.jpg" class="d-block w-100" alt="...">
        </div> 
        <div class="carousel-item" data-bs-interval="2000">
              <img src="erp.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
              <img src="js.jpg" class="d-block w-100" alt="...">
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!----------------------------------------------------ANNOUNCEMENT-------------------------------------------------->
    <div class="as">
      <div>
          <img src="athangb.jpg" alt="Image 1">   
      </div>
      <div>
          <p>Athang Training Academy is pleased to announce the 2nd batch training on ICT and Online Freelancing Program for 20 slots for 
          Athang Training Academy is pleased to announce the 2nd batch training on ICT and Online Freelancing Program for 20 slots 
          Athang Training Academy is pleased to announce the 2nd batch training on ICT and Online Freelancing Program for 20 slots 
          Athang Training Academy is pleased to announce the 2nd batch training on ICT and Online Freelancing Program <br>
          <br>
          Athang Training Academy is pleased to announce the 2nd batch training on ICT and Online Freelancing Program for 20 slots 
          Athang Training Academy is pleased to announce the 2nd batch training on ICT and Online Freelancing Program for 20 slots 
          Athang Training Academy is pleased to announce the 2nd batch training on  Athang Training Academy is pleased to announce the 2nd batch training on ICT and Online Freelancing Program for 20 slots 
          Athang Training Academy is pleased to announce the 2nd batch training on ICT and Online Freelancing Program for 20 slots 
          Athang Training Academy is pleased to announce the 2nd batch training on <br></p> 
      </div>
    </div>
    <!-------------------------------------------------------DETAILS--------------------------------------------------->
    <div class="box">
        <h2 class="bols">Since 2005</h2>
        <p style="text-align:center; color:#fff;padding:30px;">Based in Thimphu, 
          Bhutan with aim of changing demand of customers in field of ICT</p>
    </div>
    <!------------------------------------------------------CARD------------------------------------------------------>
    <h1 style="font-family:cambay; text-align:center;">Services we Offer</h1>
    <div class="containers">
      <div class="card">
          <img src="solution.jpg">
          <div class="contenido">
            <h4>Software solution</h4>
            <p>1. Project and Management </p>
            <p style="margin-left:29px">2. Testing and Quality assurance </p>
            <p>3. Maintenance and support </p>
          </div>
      </div>
      <div class="card">
          <img src="aup.jpg">
          <div class="contenido">
            <h4>3-D Animation</h4>
            <p>1. 2-D Animation Services</p>
            <p>2. 3D module Animation </p>
            <p style="margin-left:30px">3. Adobe photoshop and video</p>        
          </div>
      </div>
      <div class="card">
        <img src="dip.jpg">
        <div class="contenido">
            <h4>Technologies services</h4>
            <p style="margin-right:19px">1. ERP monal system</p>
            <p>2. Partnership of MOLHR</p>
            <p style="margin-left:20px">3. Diploma in Info technology</p>
        </div>
      </div>
    </div>
    <!-----------------------------------------------------MINI-PIC------------------------------------------------>
    <h1 style="text-align:center; cursor:pointer;margin:30px 0px 40px; font-family:cambay">Latest Announcement</h1>
         
    <!-----------------------------------------------------VERTICAL------------------------------------------------>
    <div class="timeline">
    <ul>
      <li>
        <div class="content">
          <h3>Register</h3>
          <p><a href="#">For Diploma</a></p>
        </div>
        <div class="point"></div>
        <div class="date">
          <h4>May 15th 2023</h4>
        </div>
      </li>
      <li>
        <div class="content">
          <h3>Vacancy</h3>
        <?php include ("content/homean/vaca.html");?>
        </div>
        <div class="point"></div>
        <div class="date">
          <h4>May 15th 2023</h4>
        </div>
      </li>
      <li>
        <div class="content">
        <?php include ("content/homean/training.html");?>
        </div>
        <div class="point"></div>
        <div class="date">
          <h4>2022</h4>
        </div>
      </li>
    </ul>
  </div>
    <!-- -----------------------------------------------------PARTNERSHIP-LOGO------------------------------------------->
    <div class="ship">
      <div class="pic">
          <img src="red.png" style="height:150px; width:140px">
      </div>
      <div class="pic">
          <img src="jaablogo.png"style="height:150px; width:140px">
      </div>
      <div class="pic">
          <img src="download.png"style="height:150px; width:140px">
      </div>
    </div>
    <!------------------------------------------------------------FOOTER-------------------------------------------------> 
    <?php  
        include('footer.php')    
    ?>
  </body>
</html>


