<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Scouteria</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="...">
  <meta name="keywords" content="...">
  <meta name="author" content="...">
  <meta name="contact" content="...">

  <meta property="og:title" content="..." />
  <meta property="og:url" content="..." />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="..." />
  <meta property="og:description" content="..." />
  <meta property="og:site_name" content="Scouteria" />

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- /=/=/=/=/=/=/ Favicons /=/=/=/=/=/=/ -->

  <link rel="shortcut icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <!-- Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('assets/Swiper/css/swiper.min.css')}}" media="screen" charset="utf-8">
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}" media="screen" charset="utf-8">
  <!-- Main Style -->
  <link rel="stylesheet" href="{{asset('css/main.css')}}" media="screen" charset="utf-8">

</head>
<body>
  <div class="wrap" id="page">

    <!-- All Modals wrapper -->

    <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-title text-center">
            <h3 class="uppercase bold">New to scouteria</h3>
          </div>
          <div class="modal-content-wrapper">
            <div class="signup-social clearfix">
              <span class="uppercase">Scout With</span>
              <ul>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></a></i></li>
              </ul>
            </div>
            <div class="signup-sp"><p class="uppercase bold">or</p></div>
            <div class="signup-email">
              <form method="POST">
                <div class="form-group">
                  <label for="signup-name">Name</label>
                  <input type="name" class="form-control" id="signup-name">
                </div>
                <div class="form-group">
                  <label for="signup-email">Email address</label>
                  <input type="email" class="form-control" id="signup-email">
                </div>
                <div class="form-group">
                  <label for="signup-password">Password</label>
                  <input type="password" class="form-control" id="signup-password">
                </div>
                <div class="register-button text-center">
                  <button type="submit" class="btn btn-primary">register</button>
                </div>
                <div class="text-center uppercase"><p>
                  Already member? <a href="#" class="notmember-sign" class="close" data-dismiss="modal" aria-label="Close" role="button" data-toggle="modal" data-target="#signin-modal">Login</a>
                </p></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


        <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-title text-center">
                <h3 class="uppercase bold">Sign In to scouteria</h3>
              </div>
              <div class="modal-content-wrapper">
                <div class="signup-social clearfix">
                  <span class="uppercase">Scout With</span>
                  <ul>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{{route('linkedin')}}"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="{{route('facebooklogin')}}"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{route('googlelogin')}}"><i class="fa fa-google-plus"></a></i></li>
                  </ul>
                </div>
                <div class="signup-sp"><p class="uppercase bold">or</p></div>
                <div class="signup-email">
                  <form method="POST" id="login_form" action="{{url('auth/login')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                      <label for="signup-email">Email address</label>
                      <input type="email" name="email" class="form-control" id="email" required="required">
                    </div>
                    <div class="form-group">
                      <label for="signup-password">Password</label>
                      <input type="password" name="password" class="form-control" id="password" required="required">
                    </div>


                        @if (count($errors->loginErrors->all()) > 0)


                            <ul style="color: red">
                                @foreach ($errors->loginErrors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                                        
                      <div class="register-button text-center">
                      <button type="submit" class="btn btn-primary login">Sign In</button>
                    </div>
                    <div class="text-center uppercase"><p>
                      Not a member? <a href="#" class="notmember-sign" class="close" data-dismiss="modal" aria-label="Close" role="button" data-toggle="modal" data-target="#signup-modal">Sign Up</a>
                    </p></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>



    <!-- End Modals wrapper -->

    <!-- Start Header -->

    <div id="header" class="header">
      <div class="container clearfix">
        <div class="logo white-logo logo-active">
          <a href="#"><img src="assets/imgs/logo-w.png" alt="Scouteria"/></a>
        </div>
        <div class="logo blue-logo">
          <a href="#"><img src="assets/imgs/blue-logo.png" alt="Scouteria"/></a>
        </div>
        <div class="account-area">
        @if(Auth::guest())
          <a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#signup-modal">Sign up</a>
          <a class="btn btn-no-border" href="#" role="button" data-toggle="modal" data-target="#signin-modal">Log In</a>
          @else
          <a class="btn btn-info btn-lg" href="#" role="button">Dashboard</a>
          <a class="btn btn-no-border" href="{{url('/auth/logout')}}" role="button">Logout</a>


          @endif
        </div>
      </div>
    </div>

    <!-- End Header -->

    <!-- Start Slider -->

    <div class="main-slider">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide slide-1" style="background-image: url(assets/imgs/slide1.jpg)">
              <div class="slider-caption">
                <h1 class="gigantic bold uppercase">Welcome</h1>
                <p class="lead">to the new football career changing platform.</p>
                <a class="btn btn-primary big" href="#" role="button">Get To Know More</a>
              </div>
            </div>
            <div class="swiper-slide slide-2" style="background-image: url(assets/imgs/slide2.jpg)">
              <div class="slider-caption">
                <h1 class="gigantic bold uppercase">Player?</h1>
                <p class="lead">Connect with the largest football community in the world. find a new chances by searching for the last offers that can build your career.</p>
                <a class="btn btn-primary big" href="#" role="button">SIGN UP TO SCOUTERIA</a>
              </div>
            </div>
            <div class="swiper-slide slide-3" style="background-image: url(assets/imgs/slide3.jpg)">
              <div class="slider-caption">
                <h1 class="gigantic bold uppercase">Scout?</h1>
                <p class="lead">Connect with the largest football community in the world. find a new chances by searching for the last offers that can build your career.</p>
                <a class="btn btn-primary big" href="#" role="button">SIGN UP TO SCOUTERIA</a>
              </div>
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- End Slider -->

    <section class="section-dark section_features">
      <div class="container">
        <h1 class="uppercase bold text-center section-title-dark">Why scouteria?</h1>
        <div class="row">

          <div class="col-xs-12 col-sm-6 col-lg-3">
            <div class="feature_box text-center">
              <div class="box-icon">
                <img src="assets/imgs/features-icon1.svg" alt="">
              </div>
              <div class="feature_box-title">
                <h3 class="uppercase">Free Account</h3>
              </div>
              <div class="feature_box-desc">
                <p>Make your account for free, for ever. No hidden featuers or limits.</p>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-lg-3">
            <div class="feature_box text-center">
              <div class="box-icon">
                <img src="assets/imgs/features-icon2.svg" alt="">
              </div>
              <div class="feature_box-title">
                <h3 class="uppercase">Build Your Career</h3>
              </div>
              <div class="feature_box-desc">
                <p>Scouteria makes you reach you goals and build your career easier, and more awesome!</p>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-lg-3">
            <div class="feature_box text-center">
              <div class="box-icon">
                <img src="assets/imgs/features-icon3.svg" alt="">
              </div>
              <div class="feature_box-title">
                <h3 class="uppercase">Social Networking</h3>
              </div>
              <div class="feature_box-desc">
                <p>Communicate with a large football network all over the world.</p>
              </div>
            </div>
          </div>


          <div class="col-xs-12 col-sm-6 col-lg-3">
            <div class="feature_box text-center">
              <div class="box-icon">
                <img src="assets/imgs/features-icon4.svg" alt="">
              </div>
              <div class="feature_box-title">
                <h3 class="uppercase">Scouteria market</h3>
              </div>
              <div class="feature_box-desc">
                <p>A new daily chances for the players and the scouts to find their needs.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-blue section_about">
      <div class="container">
        <h1 class="section-title-light uppercase bold text-center">
          What is scouteria?
        </h1>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="about-box text-center">
              <div class="box-icon">
                <img src="assets/imgs/about-icon1.png" alt="">
              </div>
              <h3 class="uppercase">About</h3>
              <p>Scouteria is a football social network that gets all the football community in one place, helping players and scouts to find their needs and improve their career.</p>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-lg-4">
            <div class="about-box text-center">
              <div class="box-icon">
                <img src="assets/imgs/about-icon2.svg" alt="">
              </div>
              <h3 class="uppercase">Vision</h3>
              <p>Scouteria helps connecting all the football community in one place.</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-lg-4">
            <div class="about-box text-center">
              <div class="box-icon">
                <img src="assets/imgs/about-icon3.svg" alt="">
              </div>
              <h3 class="uppercase">Mission</h3>
              <p>Scouteria helps players find a new chances all over the world. And helps scouts to find a new talent easily.</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="call-to-action section-dark text-center">
      <div class="container">
        <h1 class="uppercase bold text-center section-title-dark">convinced?</h1>
        <a class="btn btn-primary bigger" href="#" role="button" data-toggle="modal" data-target="#signup-modal">SIGN UP TO SCOUTERIA</a>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row clearfix">
          <div class="col-xs-12 col-md-5">
            <img src="assets/imgs/logo-dark.png" alt="" style="width:80%">
          </div>

          <div class="col-xs-12 col-md-4">
            <p>Scouteria is a football social network that gets all the football community in one place, helping players and scouts to find their needs and improve their career.</p>
          </div>
          <div class="col-xs-12 col-md-3">
            <ul class="footer-social-icons">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-12 text-center ">
            <ul class="bottom-bar-footer clearfix">
              <li>© 2016 Scouteria</li>
              <li><a href="#">About</a></li>
              <li><a href="#">How It Works</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

  </div> <!-- End wrap -->





  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- Bootstrap JS File -->
  <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <!-- Owl carousel -->
  <script type="text/javascript" src="{{asset('assets/Swiper/js/swiper.jquery.min.js')}}"></script>
  <!-- Functios -->
  <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
 
 @if (!$errors->loginErrors->isEmpty())

  <script type="text/javascript">
    
        $('#signin-modal').modal('show');

                            
  </script>

  @endif
</body>
</html>
