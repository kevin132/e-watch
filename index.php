<!doctype html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport"
           content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <title>E-watch</title>
     <link rel="stylesheet" href="style.css">

</head>
<body>
<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/4AjdAObqC74" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
<nav class="navbar navbar-expand-lg  navbar-dark fixed-top no-gutters">
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

<video autoplay class="watch-video" style="width:100%;
    height: 695px;
    margin-top:-40px;" controls loop muted>
     <source src="e-watch.mp4" type="video/mp4">
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
     <div class="row">
          <div class="col-lg-5 d-flex align-item-center justify-content-center flex-column">
               <h2 class="head-title ml-5">Lorem ipsum dolor</h2>
               <p class="head-info ml-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, consequatur eaque
                    earum ipsam itaque labore laborum laudantium magnam neque, nulla quidem sunt totam veniam voluptate
                    voluptatibus? Illo minus nisi ullam.</p>
               <a href="">
                    <button class="head-button ml-5">En savoir plus</button>
               </a>

          </div>

          <div class="col-lg-7 text-center">
               <img src="images/watch.jpg" class="head-watch" alt="watch">
          </div>
     </div>
</header>
<!-- end header -->


<!-- second block -->
<section id="block-two">
     <h2 class="block-two-title text-center">Montre</h2>
     <div class="container">
          <div class="row">
               <div class="col-lg-3 text-center">
                    <div class="block-circle"></div>
               </div>
               <div class="col-lg-3 text-center">
                    <div class="block-circle"></div>
               </div>
               <div class="col-lg-3 text-center">
                    <div class="block-circle"></div>
               </div>
               <div class="col-lg-3 text-center">
                    <div class="block-circle"></div>
               </div>
          </div>
     </div>
</section>
<!-- end second block -->


<!--collection -->
<section id="block-three">
     <h2 class="block-three-title text-center pt-4">Montre Collection</h2>
     <div class="row">
          <div class="col-lg-6">
          </div>
          <div class="col-lg-6">
          </div>
     </div>
</section>
<!--end collection-->


<section id="block-four">
     <div class="row no-gutters">
          <div class="col-lg-7">
               <div class="block-four-child">
                    <h2 class="block-four-title">
                         Lorem ipsum dolor
                    </h2>
               </div>
          </div>


          <div class="col-lg-5">
               <div class="block-four-child-two">
                    <h2 class="block-four-title">
                         Lorem ipsum dolor
                    </h2>
               </div>
          </div>
     </div>
</section>


<!--end collection -->

<script>
    var vids = $("video");
    $.each(vids, function () {
        this.controls = false;
    });
</script>
</body>
</html>
