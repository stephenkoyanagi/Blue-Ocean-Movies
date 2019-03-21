<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blue Ocean Movies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/fancybox.min.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  

  <div class="site-wrap">

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <header class="header-bar d-flex d-lg-block align-items-center" data-aos="fade-left">
    <div class="site-logo">
      <a href="">Blue Ocean Movies</a>
    </div>
    
    <div class="d-inline-block d-xl-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

    <div class="main-menu">


      <!-- <div class="collapse navbar-collapse justify-content-end" id="navigation"> -->
        <ul class="js-clone-nav">
          @guest
          <li class="list-unstyled nav-item">
            <a class="nav-link" href="{{ url('/login') }}">LOGIN</a>
          </li>
          <li class="list-unstyled nav-item">
            <a class="nav-link" href="{{ url('/register') }}">REGISTER</a>
          </li>
        @else
          <li class="list-unstyled nav-item">
            <a class="nav-link" href="{{ url('/logout') }}">LOGOUT</a>
          </li>
        @endguest
      </ul>
      <!-- </div> -->

      <!-- <ul class="js-clone-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="photos.html">Photos</a></li>
        <li><a href="bio.html">Bio</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
      <ul class="social js-clone-nav">
        <li><a href="#"><span class="icon-facebook"></span></a></li>
        <li><a href="#"><span class="icon-twitter"></span></a></li>
        <li><a href="#"><span class="icon-instagram"></span></a></li>
      </ul> -->
    </div>
  </header> 
  <main class="main-content">
    <div class="container-fluid photos">
      <div class="row align-items-stretch">
        
        <div class="col-6 col-md-6 col-lg-8" data-aos="fade-up">
          <a href="#" class="d-block photo-item">
            <img src="https://3.bp.blogspot.com/-TYWeVUkT21o/UV4ypDzEOwI/AAAAAAAADpw/4RCGClozRZU/s1600/life_of_pi_movie-1920x1080.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h1 class="heading">Have you ever watched a movie and you can't remember who the lead actor/actress is?</h1>              
            </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="d-block photo-item">
            <img src="https://www.wallpaperup.com/uploads/wallpapers/2014/04/13/331456/675f42ecabc771c55a561dd89457c13a.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading">Have you ever heard about a movie and you want to know more about it?</h3>              
            </div>
            </div>
          </a>
        </div>        
        @yield('login')
        @yield('register')
        <div class="col-6 col-md-6 col-lg-3" data-aos="fade-up">
          <a href="#" class="d-block photo-item">
            <img src="http://movieposterhd.com/wp-content/uploads/2019/03/Will-Smith-Aladdin-2019-Poster-HD.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <h3 class="heading">Have you ever wanted to see the trailer of a movie?</h3>              
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="d-block photo-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_Si6t71OWdWuYHJkJeu-mk_DckrrBigSyjFzV7wBJssPIGii9" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading">Have you ever wanted to Catalog your DVD/Blu Ray collection?</h3>              
            </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="d-block photo-item">
            <img src="http://images2.fanpop.com/images/photos/2800000/King-Kong-1933-Movie-Poster-king-kong-2814337-551-852.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading">Have you ever wanted to see what movies are coming to theatres?</h3>             
            </div>
            </div>
          </a>
        </div>

        <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="">
          <a href="#" class="d-block photo-item">
            <img src="https://farm4.staticflickr.com/3699/18958720124_7d10cb12fa_b.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading">Have you ever wanted to know what the top rated movies are?</h3>              
            </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="d-block photo-item">
            <img src="https://www.virtuosgames.com/sites/default/files/%5E184027CD.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading">With Blue Ocean Movies, you can do it all.</h3>              
            </div>
            </div>
          </a>
        </div>


        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="">
          <a href="#" class="d-block photo-item">
            <img src="https://assets.vice.com/content-images/contentimage/196690/horror-movie-legends.jpg?resize=320:*" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading">So what are you waiting for?</h3>              
            </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="d-block photo-item">
            <img src="http://www.max983fm.com/wp-content/uploads/2016/10/Movies1-736x510.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading">Register today!</h3>              
            </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="d-block photo-item">
            <img src="https://www.picclickimg.com/d/l400/pict/253167606588_/BEST-CLASSIC-HORROR-MOVIE-POSTERS-PRINTS-A4.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading"></h3>              
            </div>
            </div>
          </a>
        </div>


        <div class="col-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="">
          <a href="#" class="d-block photo-item">
            <img src="https://cdn.shopify.com/s/files/1/0233/6235/products/10178872-0-bee_movie_dvd__digital_hd_bilingual-dvd_f_3090a4ce-b3d1-43b6-8094-8c5b90d88bc3_large.jpg?v=1528538144" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading"></h3>              
            </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="d-block photo-item">
            <img src="https://wallpapers-house.com/data/out/10/wallpaper2you_462514.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading"></h3>              
            </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="d-block photo-item">
            <img src="https://i.pinimg.com/originals/20/32/8a/20328a17bd48c768e8a1a729dc801c9a.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading"></h3>              
            </div>
            </div>
          </a>
        </div>

        <div class="col-6 col-md-6 col-lg-8" data-aos="fade-up" data-aos-delay="">
          <a href="#" class="d-block photo-item">
            <img src="https://cdn-images-1.medium.com/max/1600/1*YhsGz4lXux0XEYL2NZkQJQ.jpeg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading"></h3>              
            </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="d-block photo-item">
            <img src="https://static.tvtropes.org/pmwiki/pub/images/grease.bmp" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading"></h3>              
            </div>
            </div>
          </a>
        </div>

        <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="">
          <a href="#" class="d-block photo-item">
            <img src="http://paperlief.com/images/back-to-the-future-2-poster-wallpaper-3.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading"></h3>              
            </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="d-block photo-item">
            <img src="https://thewallpaper.co/wp-content/uploads/2016/10/Game-of-Thrones-Wallpapers-hd-Trailer-download-4k-high-definition-amazing-colourful-pictures-mac-desktop-images-widescreen-1920x1080.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading"></h3>              
            </div>
            </div>
          </a>
        </div>


        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="">
          <a href="#" class="d-block photo-item">
            <img src="https://png.pngtree.com/thumb_back/fw800/back_pic/03/95/42/5857ecd29f24de2.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading"></h3>              
            </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-6 col-lg-8" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="d-block photo-item">
            <img src="https://wallpapersprime.com/wp-content/uploads/angry-birds-2016-movie-poster-wallpapers-800x450.jpg" alt="Image" class="img-fluid">
            <div class="photo-text-more">
              <div class="photo-text-more">
              <h3 class="heading"></h3>              
            </div>
            </div>
          </a>
        </div>
        

      </div>

      <div class="row justify-content-center">
        <div class="col-md-12 text-center py-5">
          <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
        </div>
      </div>
    </div>
  </main>

</div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/jquery.fancybox.min.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>