<!doctype html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport"
     content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>e-watch</title>
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

     <!-- navbar -->
     <nav class="navbar navbar-expand-lg fixed-top navbar-dark no-gutters ">
          <ul class="navbar-nav">
               <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
               </li>
               <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
               </li>
          </ul>
     </nav>
     <!--end navbar-->

     <video class="watch-video" autoplay="autoplay" loop muted data-setup="{}" >
          <source src="assets/video/e-watch.mp4" type="video/mp4"/>
          Your browser does not support the HTML5 video tag. Try updating your browser or using a different one.
     </video>

     <section id="home-info">
          <div class="container">
               <ul class="home-info-select">
                    <li class="home-info-list">collection</li>
                    <li class="home-info-list">watch</li>
                    <li class="home-info-list">hello</li>
               </ul>
          </div>
     </section>


     <!--header -->
     <header>
          <div class="row no-gutters">
               <div class="col-lg-6 text-center">
                    <img src="assets/images/watch.png" class="head-watch" alt="watch" />
               </div>
               <div class="col-lg-6 d-flex align-item-center justify-content-center flex-column">
                    <h2 class="head-title ml-5">Lorem ipsum dolor</h2>
                    <p class="head-info ml-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, consequatur eaque
                         earum ipsam itaque labore laborum laudantium magnam neque, nulla quidem sunt totam veniam voluptate
                    voluptatibus? Illo minus nisi ullam.</p>
                    <a href="">
                         <button class="head-button ml-5">En savoir plus</button>
                    </a>
               </div>
          </div>
     </header>
     <!-- end header -->


     <!-- second block -->
     <section id="block-two">
          <h2 class="block-two-title text-center">Montre</h2>
          <div class="container">
               <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6 text-center">
                         <div class="block-circle">
                              <img src="assets/images/ios_clock.svg" alt="clock"/>
                         </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                         <div class="block-circle">
                              <img src="assets/images/ios_clock.svg" alt="clock"/>
                         </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                         <div class="block-circle">
                              <img src="assets/images/ios_clock.svg" alt="clock"/>
                         </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                         <div class="block-circle">
                              <img src="assets/images/ios_clock.svg" alt="clock"/>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <!-- end second block -->


     <!--collection -->
     <section id="block-three">
          <h2 class="block-three-title text-center pt-4">Montre Collection</h2>

     </section>
     <!--end collection-->


     <!-- parallaxe block -->
     <section id="block-parallaxe">
          <div class="row no-gutters">
               <div class="col-lg-6">
                    <div class="img-paralaxe-block">
                    </div>
               </div>
               <div class="col-lg-6"></div>
          </div>
     </section>

     <section id="block-four">
          <div class="row no-gutters">
               <div class="col-lg-6">
                    <div class="block-four-child">
                         <h2 class="block-four-title">
                              Lorem ipsum dolor
                         </h2>
                    </div>
               </div>

               <div class="col-lg-6">
                    <div class="block-four-child-two">
                         <h2 class="block-four-title">
                              Lorem ipsum dolor
                         </h2>
                    </div>
               </div>
          </div>
     </section>

     <!--  end parallaxe block -->


     <!--javascript -->
     <script type="text/javascript" src="assets/javascript/bootstrap.min.js"></script>
     <script type="text/javascript" src="assets/javascript/app.js"></script>
</body>
</html>
