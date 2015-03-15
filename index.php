<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Kenetic Fitness</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="lib/css/bootstrap.css" rel="stylesheet">
    <link href="lib/css/bootstrap-responsive.css" rel="stylesheet">
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }



    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="http://getbootstrap.com/2.3.2/assets/ico/favicon.png">
  <style type="text/css" id="holderjs-style">.holderjs-fluid {font-size:16px;font-weight:bold;text-align:center;font-family:sans-serif;margin:0}</style></head>

  <body>



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Change Your Life</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <!-- classes --> 
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header">For the Individual</li>
                    <li><a href="#">Personal Training</a></li>
                    <li><a href="#">Nutritional Coaching</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Group Classes</li>
                    <li><a href="#">Outdoors Bootcamp</a></li>
                    <li><a href="#">Pilates</a></li>
                    <li><a href="#">TRX</a></li>
                    <li><a href="#">Fusion</a></li>
                  </ul>
                </li>

                <li><a href="#contact">Class Schedule</a></li>

                <!-- instructors --> 
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Instructors<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Kendra McNulty</a></li>
                    <li class="nav-header">Hiring Soon</li>
                  </ul>
                </li>

                <li><a href="#about">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item">
          <img src="lib/img/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Take charge!</h1>
              <p class="lead">Your health and well being are well within your control with the help and motivation of a compassionate, dedicated, and qualified professional.</p>
              <a class="btn btn-large btn-primary" href="#">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="lib/img/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Feel good!</h1>
              <p class="lead">Whether you require a strict cardiovascular intensive regimen, strict strength training, or a mixture of both you're doing yourself a favor by dedicating time to your health.
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item active">
          <img src="lib/img/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Look good!</h1>
              <p class="lead">Your health and fitness goals are far more achievable with the advice, insight, and motivation of an experienced and dedicated professional.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAACdklEQVR4nO3YMW7iQBiA0dz/KC5duaKhoeQAPoOv4K0GJSyr7CeRTcy+4hUwoIn4Pw8mb9u27fC33r77D+BYBEMiGBLBkAiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCSCIREMiWBIBEMiGBLBkAiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCSCIREMiWBIBEMiGBLBkAiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIheYlglmXZp2l6uHa9Xvdpmvbz+Xx7bl3XfZqmm3Vdf/R+P8nhg3k/iEfr8zz/NsB5nvfT6XQb/jzPP3a/n+awwby/aseQ7l9zPp9vrxkDHCfA5XLZt23bL5fLPk3Tfr1eb2tjuKfT6bb2Fft992f43wUzrtRHXxFjwGOIY4D3AxuPx0BHJON9I56v2u9oDhvMe48GuCzLvizLh0E+GuD9CbBtn3/tPHu/I3nJYMaQ1nX9dICPrvhxyozT5av3O5KXDGY8vrcsy6f3FGN9eHSv8cz9juYlg3nv/orftu3D6XH/q2Xc0I73PfpF88z9jua/DOZP/xcZN6zjNLi/gX32fkf0EsHw7wiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCSCIREMiWBIBEMiGBLBkAiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCSCIREMiWBIBEMiGBLBkAiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCS/AKycQ7DmKYK8AAAAAElFTkSuQmCC" style="width: 140px; height: 140px;" alt="140x140" class="img-circle" data-src="lib/js/holder.js/140x140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis 
euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi 
leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo
 cursus magna, vel scelerisque nisl consectetur et.</p>
          <p><a class="btn" href="#">View details »</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAACdklEQVR4nO3YMW7iQBiA0dz/KC5duaKhoeQAPoOv4K0GJSyr7CeRTcy+4hUwoIn4Pw8mb9u27fC33r77D+BYBEMiGBLBkAiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCSCIREMiWBIBEMiGBLBkAiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCSCIREMiWBIBEMiGBLBkAiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIheYlglmXZp2l6uHa9Xvdpmvbz+Xx7bl3XfZqmm3Vdf/R+P8nhg3k/iEfr8zz/NsB5nvfT6XQb/jzPP3a/n+awwby/aseQ7l9zPp9vrxkDHCfA5XLZt23bL5fLPk3Tfr1eb2tjuKfT6bb2Fft992f43wUzrtRHXxFjwGOIY4D3AxuPx0BHJON9I56v2u9oDhvMe48GuCzLvizLh0E+GuD9CbBtn3/tPHu/I3nJYMaQ1nX9dICPrvhxyozT5av3O5KXDGY8vrcsy6f3FGN9eHSv8cz9juYlg3nv/orftu3D6XH/q2Xc0I73PfpF88z9jua/DOZP/xcZN6zjNLi/gX32fkf0EsHw7wiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCSCIREMiWBIBEMiGBLBkAiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCSCIREMiWBIBEMiGBLBkAiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCS/AKycQ7DmKYK8AAAAAElFTkSuQmCC" style="width: 140px; height: 140px;" alt="140x140" class="img-circle" data-src="lib/js/holder.js/140x140">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor 
ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus 
sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor 
mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details »</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAACdklEQVR4nO3YMW7iQBiA0dz/KC5duaKhoeQAPoOv4K0GJSyr7CeRTcy+4hUwoIn4Pw8mb9u27fC33r77D+BYBEMiGBLBkAiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCSCIREMiWBIBEMiGBLBkAiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCSCIREMiWBIBEMiGBLBkAiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIheYlglmXZp2l6uHa9Xvdpmvbz+Xx7bl3XfZqmm3Vdf/R+P8nhg3k/iEfr8zz/NsB5nvfT6XQb/jzPP3a/n+awwby/aseQ7l9zPp9vrxkDHCfA5XLZt23bL5fLPk3Tfr1eb2tjuKfT6bb2Fft992f43wUzrtRHXxFjwGOIY4D3AxuPx0BHJON9I56v2u9oDhvMe48GuCzLvizLh0E+GuD9CbBtn3/tPHu/I3nJYMaQ1nX9dICPrvhxyozT5av3O5KXDGY8vrcsy6f3FGN9eHSv8cz9juYlg3nv/orftu3D6XH/q2Xc0I73PfpF88z9jua/DOZP/xcZN6zjNLi/gX32fkf0EsHw7wiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCSCIREMiWBIBEMiGBLBkAiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCSCIREMiWBIBEMiGBLBkAiGRDAkgiERDIlgSARDIhgSwZAIhkQwJIIhEQyJYEgEQyIYEsGQCIZEMCS/AKycQ7DmKYK8AAAAAElFTkSuQmCC" style="width: 140px; height: 140px;" alt="140x140" class="img-circle" data-src="lib/js/holder.js/140x140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis 
in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. 
Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
 ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details »</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="lib/img/browser-icon-chrome.png">
        <h2 class="featurette-heading">First featurette headling. <span class="muted">It'll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor 
fringilla. Vestibulum id ligula porta felis euismod semper. Praesent 
commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, 
tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

     <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>© 2013 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="lib/js/jquery.js"></script>
    <script src="lib/js/bootstrap-transition.js"></script>
    <script src="lib/js/bootstrap-alert.js"></script>
    <script src="lib/js/bootstrap-modal.js"></script>
    <script src="lib/js/bootstrap-dropdown.js"></script>
    <script src="lib/js/bootstrap-scrollspy.js"></script>
    <script src="lib/js/bootstrap-tab.js"></script>
    <script src="lib/js/bootstrap-tooltip.js"></script>
    <script src="lib/js/bootstrap-popover.js"></script>
    <script src="lib/js/bootstrap-button.js"></script>
    <script src="lib/js/bootstrap-collapse.js"></script>
    <script src="lib/js/bootstrap-carousel.js"></script>
    <script src="lib/js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="lib/js/holder.js"></script>
  

</body></html>
