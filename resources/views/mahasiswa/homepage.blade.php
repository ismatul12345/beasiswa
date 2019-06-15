<!DOCTYPE html>
<html>
  <head>
    <title>Powerful Template</title>
    <meta name="keywords" content="" />
	<meta name="description" content="" />
    <!-- 
    Powerful Template 
    http://www.templatemo.com/tm-390-powerful
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/templatemo_style.css" rel="stylesheet">

    <link href="css/circle.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/nivo-slider.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
    <script src="js/modernizr.custom.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <div id="templatemo_top" class="mainTop">
        <div class="container">
          <div class="row">
            <div class="hidden-xs hidden-sm col-md-6">
              <div class="mailme">
                <a href="mailto:info@company.com"><i class="fa fa-envelope"></i>info@company.com</a>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="socials">
                <ul>
                  <li><a href="#"><i class="fa fa-twitter soc"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook soc"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss soc"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble soc"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram soc"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- e/o mainTop -->
      <center>
      	<div id="slider" class="nivoSlider">
            <a href="#"><img src="images/slider/1.jpg" alt="slide 1" /></a>
            <a href="#"><img src="images/slider/2.jpg" alt="slide 2" /></a>
            <a href="#"><img src="images/slider/3.jpg" alt="slide 3" /></a>
    	</div>
      </center>
    </header>

    <div class="mWrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="logo">
              <a href="#"><img src="images/logo.jpg" style="width: 70px; height: 70px;" alt="Powerful Theme"> Politeknik Negeri Indramayu</a>
            </div>
          </div>
          <div class="col-sm-8 col-md-8">
            <nav class="mainMenu">
              <ul class="nav">
                <li><a href="#templatemo_top">Home</a></li>
                <li><a href="#templatemo_services">Services</a></li>
                <li><a href="#templatemo_portfolio">Portfolio</a></li>
                <li><a href="#templatemo_about">About</a></li>
                <li><a href="#templatemo_contact">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div id="templatemo_services" class="section1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="secHeader">
              <h1 class="text-center">Our Services</h1>
              <p class="text-center"><small>Powerful is a responsive web template built on Bootstrap framework. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Credits go to <a rel="nofollow" href="http://dev7studios.com/plugins/nivo-slider/" target="_parent">NivoSlider</a> and <a rel="nofollow" href="http://unsplash.com" target="_parent">Unsplash</a> for images.</small></p>
            </div>
            <div class="row">
              @foreach($data as $datas)
              <div class="col-xs-6 col-sm-6 col-md-4">
                <div class="blok text-center">
                  <div class="hexagon-a">
                    <a class="hlinktop" href="#">
                      <div class="hexa-a">
                        <div class="hcontainer-a">
                          <div class="vertical-align-a">
                            <span class="texts-a"><i class="fa fa-bell"></i></span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>  
                  <div class="hexagon">
                    <a class="hlinkbott" href="#">
                      <div class="hexa">
                        <div class="hcontainer">
                          <div class="vertical-align">
                            <span class="texts"></span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <h4>{{$datas->judul}}</h4>
                  <p><small>{{$datas->deskripsi}}</small></p>
                  <a class="btn btn-primary" href="#">Read More</a>
                </div>
              </div>
               @endforeach
          </div>
          </div>
        </div>
      </div>
    </div> <!-- e/o section1 -->

    <div class="opener text-center">
        <span><a id="togg" href="#foo" onclick="toggle_visibility('foo');">hide footer</a></span>
    </div>

    <footer class="footer" id="foo">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="info1">
              <h4>Powerful Info</h4>
              <div class="addr">
                <p>Etiam non tellus facilisis, scelerisque est sed, aliquet metus. In arcu sapien, hendrerit eu lectus et, interdum fringilla urna. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</p>
                <ul>
                  <li><i class="fa fa-map-marker"></i>450 Aenean ut sagittis 11220</li>
                  <li><i class="fa fa-mobile-phone"></i>010-020-0120</li>
                  <li><i class="fa fa-globe"></i><a rel="nofollow" href="http://www.example.com">www.example.com</a></li>
                  <li><i class="fa fa-envelope"></i>info@company.com</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info2">
              <h4></h4>
              <div class="row">
                <div class="col-xs-4">
                  <!-- <a href="#"><img class="img-responsive" alt="flickr" src="images/feed/image1.jpg"></a> -->
                </div>
                <div class="col-xs-4">
                  <!-- <a href="#"><img class="img-responsive" alt="flickr" src="images/feed/image2.jpg"></a> -->
                </div>
                <div class="col-xs-4">
                  <!-- <a href="#"><img class="img-responsive" alt="flickr" src="images/feed/image3.jpg"></a> -->
                </div>
                <div class="col-xs-4">
                  <!-- <a href="#"><img class="img-responsive" alt="flickr" src="images/feed/image4.jpg"></a> -->
                </div>
                <div class="col-xs-4">
                  <!-- <a href="#"><img class="img-responsive" alt="flickr" src="images/feed/image5.jpg"></a> -->
                </div>
                <div class="col-xs-4">
                  <!-- <a href="#"><img class="img-responsive" alt="flickr" src="images/feed/image6.jpg"></a> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info3">
              <!-- <h4>Stay Tuned</h4>
              <p>You may sign up our monthly newsletter to receive updates or news from our team.</p>
              <form role="form">
                <div class="form-group">
                  <input type="email" class="form-control" id="email_newsletter" placeholder="Your Email">
                </div>
                <div><button type="button" class="btn btn-primary">Send</button></div>
              </form> -->

            </div>
          </div>
        </div>
      </div>
    </footer>

      <div id="back-top" class="gotop text-center">
        <a href="">Back to top</a>
      </div>

      <div class="bfWrap text-center">
        <div class="templatemo_footer">Copyright © 2014 Company Name</div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cycle2.min.js"></script>
    <script src="js/jquery.cycle2.carousel.min.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>
    <script src="js/jquery.cookie.js"></script>
    <script type="text/javascript">
      $(function(){
          var default_view = 'grid';
          if($.cookie('view') !== 'undefined'){
              $.cookie('view', default_view, { expires: 7, path: '/' });
          } 
          function get_grid(){
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox-list');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          function get_list(){
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox');
                  $('.prod-cnt').addClass('dbox-list');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          if($.cookie('view') == 'list'){ 
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0});
              $('.prod-cnt').removeClass('dbox');
              $('.prod-cnt').addClass('dbox-list');
              $('.prod-cnt').stop().animate({opacity:1}); 
          } 

          if($.cookie('view') == 'grid'){ 
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0});
                  $('.prod-cnt').removeClass('dboxlist');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
          }

          $('#list').click(function(){   
              $.cookie('view', 'list'); 
              get_list()
          });

          $('#grid').click(function(){ 
              $.cookie('view', 'grid'); 
              get_grid();
          });

          /* filter */
          $('.menuSwitch ul li').click(function(){
              var CategoryID = $(this).attr('category');
              $('.menuSwitch ul li').removeClass('cat-active');
              $(this).addClass('cat-active');
              
              $('.prod-cnt').each(function(){
                  if(($(this).hasClass(CategoryID)) == false){
                     $(this).css({'display':'none'});
                  };
              });
              $('.'+CategoryID).fadeIn(); 
              
          });
      });
    </script>

    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider({
          prevText: '',
          nextText: '',
          controlNav: false,
        });
    });
    </script>
    <script>
      $(document).ready(function(){

        // hide #back-top first
        $("#back-top").hide();
        
        // fade in #back-top
        $(function () {
          $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
              $('#back-top').fadeIn();
            } else {
              $('#back-top').fadeOut();
            }
          });

          // scroll body to 0px on click
          $('#back-top a').click(function () {
            $('body,html').animate({
              scrollTop: 0
            }, 800);
            return false;
          });
        });

      });
      </script>
      <script type="text/javascript">
      <!--
          function toggle_visibility(id) {
             var e = document.getElementById(id);
             if(e.style.display == 'block'){
                e.style.display = 'none';
                $('#togg').text('show footer');
            }
             else {
                e.style.display = 'block';
                $('#togg').text('hide footer');
            }
          }
      //-->
      </script>
      <script type="text/javascript" src="js/lib/jquery.mousewheel-3.0.6.pack.js"></script>

      <script type="text/javascript">
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
      </script>
      <script src="js/stickUp.min.js" type="text/javascript"></script>
      <script type="text/javascript">
        //initiating jQuery
        jQuery(function($) {
          $(document).ready( function() {
            //enabling stickUp on the '.navbar-wrapper' class
            $('.mWrapper').stickUp();
          });
        });
      </script>
</body>
</html>