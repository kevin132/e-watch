<!--==========================================================================
#title            : E-watch
#description      : e-commerce web site of luxury connected watch
#author           : Chen Kevin
#date             : march 2018
#version          : v1
#usage            : Bootstrap/Sass/Php/Javascript
#notes            : Support all browsers except internet explorer
============================================================================-->

<!Doctype html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport"
           content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <title>e-watch</title>
     <!-- style-->
     <link rel="stylesheet" href="assets/css/home.css"/>
     <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
     <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!--javascript-->
     <script type="text/javascript" src="assets/javascript/jquery-3.3.1.min.js"></script>
     <script type="text/javascript" src="assets/javascript/fontawesome-all.min.js"></script>
</head>


<body>

<!-- nav bar -->
<?php require 'partials/nav.php'; ?>
<!--end nav-bar-->

<!--header-->
<header>
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
               <div class="carousel-item active">
                    <section id="home-video" class="home-demo">
                         <video class="watch-video" autoplay loop muted data-setup="{1}">
                              <source src="assets/video/e-watch.mp4" type="video/mp4"/>
                              Your browser does not support the HTML5 video tag. Try updating your browser or using a
                              different one.
                         </video>
                         <a href="#home-first"><span></span></a>
                    </section>
               </div>
               <div class="carousel-item">
                    <video class="watch-video" autoplay loop muted data-setup="{}">
                         <source src="assets/video/tag-heuer.mp4" type="video/mp4"/>
                         Your browser does not support the HTML5 video tag. Try updating your browser or using a
                         different
                         one.
                    </video>
               </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
          </a>
     </div>
</header>
<!-- end header -->


<section id="home-info">
     <div class="container">
          <ul class="home-info-select">
               <li class="home-info-list">collection</li>
               <li class="home-info-list">watch</li>
               <li class="home-info-list">hello</li>
          </ul>
     </div>
</section>

<section id="home-first">
     <div class="row no-gutters">
          <div class="col-lg-6 text-center">
               <img src="assets/images/watch.png" class="head-watch" alt="watch"/>
          </div>
          <div class="col-lg-6 d-flex align-item-center justify-content-center flex-column">
               <h2 class="head-title ml-5">We are connected</h2>
               <p class="head-info ml-5 mr-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A,
                    consequatur eaque
                    earum ipsam itaque labore laborum laudantium magnam neque, nulla quidem sunt totam veniam
                    voluptate
                    voluptatibus? Illo minus nisi ullam.</p>
               <a href="">
                    <button class="head-button ml-5 mt-4">View More</button>
               </a>
          </div>
     </div>
</section>

<!--block dial -->
<section id="block-dial">
     <h2 class="block-two-title text-center pt-4 pb-5">Choose Your Dial</h2>
     <div class="container">
          <div class="row no-gutters">
               <div class="col-lg-3 col-md-6 text-center">
                    <div class="block-circle">
                         <img src="assets/images/download.png" alt="clock"/>
                    </div>
               </div>
               <div class="col-lg-3 col-md-6 text-center">
                    <div class="block-circle">
                         <img src="assets/images/download-2.png" alt="clock"/>
                    </div>
               </div>
               <div class="col-lg-3 col-md-6 text-center">
                    <div class="block-circle">
                         <img src="assets/images/download-3.png" alt="clock"/>
                    </div>
               </div>
               <div class="col-lg-3 col-md-6 text-center">
                    <div class="block-circle">
                         <img src="assets/images/download-1.png" alt="clock"/>
                    </div>
               </div>
          </div>
     </div>
</section>
<!-- end block dial -->

<!--collection -->
<section class="block-three d-flex justify-content-center align-items-center flex-column">
     <h3 class="block-three-title  text-center pt-4">Watch Collection</h3>
     <h2 class="collection-subtitle text-center">Tag Heure</h2>
     <div class="row no-gutters">
          <div class="col-lg-2">
               <img src="assets/images/watch-tag.png" class="home-model-watch" alt="watch tag-heuer"/>
          </div>
          <div class="col-lg-2">
               <img src="assets/images/watch-tag2.png" class="home-model-watch" alt="watch tag-heuer"/>
          </div>
          <div class="col-lg-2">
               <img src="assets/images/watch-tag3.png" class="home-model-watch" alt="watch tag-heuer"/>
          </div>
          <div class="col-lg-2">
               <img src="assets/images/watch-tag.png" class="home-model-watch" alt="watch tag-heuer"/>
          </div>
          <div class="col-lg-2">
               <img src="assets/images/watch-tag2.png" class="home-model-watch" alt="watch tag-heuer"/>
          </div>
          <div class="col-lg-2">
               <img src="assets/images/watch-tag3.png" class="home-model-watch" alt="watch tag-heuer"/>
          </div>
     </div>
     <button class="three-button">View More</button>
</section>

<!--end collection-->


<!-- parallax block -->
<section id="block-parallax">
     <div class="row no-gutters">
          <div class="col-lg-6">
               <div class="img-parallax-block"></div>
          </div>
          <div class="col-lg-6">
               <div class="b-para-img-two d-flex justify-content-center flex-column">
                    <div class="row no-gutters">
                         <div class="col-6"></div>
                         <div class="col-6">
                              <h2 class="prl-title mb-4">Men's watches</h2>
                              <h3 class="prl-sub text-uppercase">smart watches <br> latest fashion statement</h3>
                              <a href="">
                                   <button class="head-button ml-5 mt-4">View More</button>
                              </a>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>
<section id="block-four">
     <div class="row no-gutters">
          <div class="col-lg-6">
               <div class="b-para-img d-flex  justify-content-center flex-column">
                    <div class="row no-gutters">
                         <div class="col-6"></div>
                         <div class="col-6">
                              <h2 class="prl-title mb-4">Ladies' watches</h2>
                              <h3 class="prl-sub text-uppercase">wear your style<br> with verve & attitude</h3>
                              <a href="">
                                   <button class="head-button ml-5 mt-4">View More</button>
                              </a>
                         </div>
                    </div>
               </div>
          </div>
          <div class="col-lg-6">
               <div class="img-parallax-two"></div>
          </div>
     </div>
</section>
<!--  end parallax block -->
<section id="home-men-ad">
     <h2 class="home-blog-title text-center pt-5">Latest News</h2>
     <!--will replace by foreach php here-->
     <div class="container">
          <div class="row no-gutters">
               <div class="col-lg-4 d-flex flex-column align-items-center">
                    <div class="card" style="width: 18rem;">
                         <img class="card-img-top" src="assets/images/news2.jpg" alt="Card image cap"/>
                         <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the
                                   bulk of
                                   the card's content.
                              </p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                         </div>
                    </div>
               </div>
               <div class="col-lg-4 d-flex flex-column align-items-center">
                    <div class="card" style="width: 18rem;">
                         <img class="card-img-top" src="assets/images/news.jpg" alt="Card image cap"/>
                         <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the
                                   bulk
                                   of the card's content.
                              </p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                         </div>
                    </div>
               </div>
               <div class="col-lg-4 d-flex flex-column align-items-center">
                    <div class="card" style="width: 18rem;">
                         <img class="card-img-top" src="assets/images/news3.jpg" alt="Card image cap"/>
                         <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the
                                   bulk
                                   of the card's content.
                              </p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>

<!-- home newsletters -->
<section id="home-news">
     <h2 class="home-news-title text-center pt-4 text-uppercase">subscribe to our newsletter</h2>
     <form action="index.php" class="text-center">
          <label for="email">
               <input type="email" name="email" id="email" class="home-news-ipt text-center" placeholder="E-mail"/>
          </label>
          <input type="submit" class="home-news-submit" value="Submit">
     </form>
</section>

<!-- end home newsletters -->

<!-- footer-->
<?php require 'partials/footer.php'; ?>
<!-- end footer-->

<!--javascript -->

<script src="assets/javascript/script.js"></script>
<script src="assets/javascript/bootstrap.min.js"></script>

</body>
</html>
