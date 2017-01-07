<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Home | Ocean Films</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
         
<meta name="description" content="Ocean Films is a full spectrum event planning, production and entertainment company that designs, plans and produces original, signature events & talent hunt shows.">
<meta name="keywords" content="oceanfilms movie production entertainment event planning"> 
  <link rel="shortcut icon" href="favicon.ico" />
  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900|Mirza" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
  <!-- Page level plugin styles START -->
  <link href="assets/pages/css/animate.css" rel="stylesheet">
  <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="assets/pages/css/components.css" rel="stylesheet">
  <link href="assets/pages/css/slider.css" rel="stylesheet">
  <link href="assets/corporate/css/style.css" rel="stylesheet">
  <link href="assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="assets/corporate/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/corporate/css/animate.css">


  <!-- Theme styles END -->
  <!-- Begin PHP Code -->
  <?php
  if(isset($_POST['Register'])){

      require 'phpmailer/PHPMailerAutoload.php';

   
      function died($error) {
        echo '<script language="javascript">';
        echo 'alert("Please fix the following errors in your form :-\n'.$error.'")';
        echo '</script>';
      }
        
      // validation expected data exists
   
      if(empty($_POST['email'])){
           
        died('Please enter the email id');       
   
      }
   
      else{ 
     
        $email_from = $_POST['email']; // required
        $error_message = "";     
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
     
       if(!preg_match($email_exp,$email_from)) {
     
          $error_message .= 'The Email Address you entered does not appear to be valid.\n';
     
        }

        if(strlen($error_message) > 0) {
       
          died($error_message);
       
        }

        else{
          $txt = $email_from;
          $myfile = file_put_contents('subscriptions.txt', $txt.PHP_EOL , FILE_APPEND);
          $sub_mail = new PHPMailer;
            $sub_mail->Host= localhost;
            //$sub_mail->isSMTP();
            //$sub_mail->SMTPDebug = 0;
            //$sub_mail->Debugoutput = 'html';
            //$sub_mail->Host = 'smtp.gmail.com';
            //$sub_mail->Port = 587;
            //$sub_mail->SMTPSecure = 'tls';
            //$sub_mail->SMTPAuth = true;
            //$sub_mail->Username = "oceanfilmmailer@gmail.com";
            //$sub_mail->Password = "theoceanfilms";
            $sub_mail->addAddress('trustoceanfilms@gmail.com');
          $sub_mail->Subject = 'UPDATED MAILINGLIST';
          $sub_mail->Body = 'You have got a new subscription. Find the updated mailing list in attachment';
          $sub_mail->AddAttachment('subscriptions.txt');
          //send the message, check for errors
          if (!$sub_mail->send()) {
            echo '<script language="javascript">';
            echo 'alert("An error occured. Please try again later.")';
            echo '</script>';
          }
          else{
            echo '<script language="javascript">';
            echo 'alert("Congratulations! Subcription Successful.  We will get in touch with you, shortly !")';
            echo '</script>';            
          }
        }
      }
    }
  ?>
  <!-- End PHP Code -->

</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <!--<li><i class="fa fa-phone"></i><span>what to add?</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>info@oceanfilms.in</span></li>-->
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="register.php">Registration</a></li><!--login.php here this will come instead of this-->
                        <li><a href="contacts.php">Contact Us</a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="home.php"><img src="assets/corporate/img/logos/finalogo.png" alt="Ocean Films" style="height: 60px; margin: 0px; margin-top: 5px;"></a>
        <a class="site-logo" href="home.php" style="text-decoration: none;"><h2 style="font-size: 2.3em; font-family:Mirza; margin-top: 5px;"> OCEAN FILMS</h2>
        <h5 style="text-align: center; line-height: 0em; margin-top: -10px;">"Your Trust, Our Priority"</h5></a>
        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-right font-transform-inherit">
          <ul>
            <li class="dropdown active">
              <a class="dropdown-toggle" style="font-size: 1.03em;" href="home.php">
                Home 
                
              </a>

              
            </li>
            <li class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle" data-toggle="dropdown" style="font-size: 1.03em;" data-target="#" href="javascript:;">
                Explore the Ocean
                
              </a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-4 header-navigation-col">
                        <h4>All you need to know about us</h4>
                        <ul>
                          <li><a href="gallery.php">Gallery</a></li>
                          <li><a href="services.php">Our Services</a></li>
                          <li><a href="projects.php">Projects</a></li>
                          <li><a href="about.php">About Ocean Films</a></li>
                        </ul>
                      </div>
                      <div class="col-md-4 header-navigation-col">
                        <h4>Reach out to us &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                        <ul>
                          
                          <li><a href="register.php">Registration</a></li>
                          <li><a href="contacts.php">Contact Us</a></li>
                        </ul>
                      </div>
         
                    </div>
                  </div>
                </li>
              </ul>
            </li>           
            <li class="dropdown">
              <a class="dropdown-toggle" href="gallery.php" style="font-size: 1.03em;">
                Gallery </a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" href="services.php" style="font-size: 1.03em;">
                Our Services
                
              </a>
            </li>          
            
        </ul>
        </div>

        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->

    <!-- BEGIN SLIDER -->
    <div class="page-slider margin-bottom-40">
        <div id="carousel-example-generic" class="carousel slide carousel-slider">
            <!-- Indicators -->
            <ol class="carousel-indicators carousel-indicators-frontend">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <!-- Zeroth slide -->
                <div class="item carousel-item-twelve active">
                    <div class="container">
                        <div class="carousel-position-six">
                        </div>
                    </div>
                </div>
                
                <!-- First slide -->
                <div class="item carousel-item-eight">

                    <div class="container">
                        <div class="carousel-position-six text-uppercase text-center">
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v5" data-animation="animated fadeInDown" style="font-weight: bolder; color:#ffffff; text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;">
                                Explore the power <br/>
                                <span class="carousel-title-normal" style="font-weight: bold;">of Ocean Films</span>
                            </h2>
                            <p class="carousel-subtitle-v5 border-top-bottom margin-bottom-30" data-animation="animated fadeInDown" style="font-weight: bold; text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;">This is what you were looking for</p>

                            <a class="carousel-btn-green" href="services.php" data-animation="animated fadeInUp" style="font-weight: bold;">Our Services !</a>

                        </div>
                    </div>
                </div>
                
                <!-- Second slide -->
                <div class="item carousel-item-nine">
                    <div class="container">
                        <div class="carousel-position-six">
                            <h2 class="animate-delay carousel-title-v6 text-uppercase" data-animation="animated fadeInDown" style="font-weight:bold; color: #fff; text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;">
                                Need A Production Team?
                            </h2>
                            <p class="carousel-subtitle-v6 text-uppercase" data-animation="animated fadeInDown">
                                This is what you were looking for
                            </p>
                            <p class="carousel-subtitle-v7 margin-bottom-30" data-animation="animated fadeInDown" style="font-weight:bold; color: #fff; text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;">
                                Ocean Films is a full-spectrum event planning, production and entertainment company <br>that designs, 
                                plans and produces original, signature events &amp; talent hunt shows.
                            </p>
                            <a class="carousel-btn-green" href="register.php" data-animation="animated fadeInUp">Get In Touch Now!</a>
                        </div>
                    </div>
                </div>

                <!-- Third slide -->
                <div class="item carousel-item-ten">
                    <div class="container">
                        <div class="carousel-position-six"  style="text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;">
                            <h2 class="animate-delay carousel-title-v6 text-uppercase" data-animation="animated fadeInDown" style="font-weight:bold; color: #fff; text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;">
                                Powerful &amp; Dedicated
                            </h2>
                            <p class="carousel-subtitle-v6 text-uppercase" data-animation="animated fadeInDown">
                                Trustful Movie &amp; Production Team
                            </p>
                            <p class="carousel-subtitle-v7 margin-bottom-30" data-animation="animated fadeInDown" style="font-weight:bold; color: #fff; text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;">
                                Ocean Films represents large number of actors,<br>models, singers, writers, dancers and media professionals <br>and seniors for acting and music platform.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Fourth slide -->
                <div class="item carousel-item-eleven">
                    <div class="container">
                        <div class="carousel-position-six">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control carousel-control-shop carousel-control-frontend" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="right carousel-control carousel-control-shop carousel-control-frontend" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!-- END SLIDER -->

    <div class="main">
      <div class="container">
        <!-- BEGIN SERVICE BOX --> 
        <div class="wow fadeIn" data-wow-duration= "5.5s">
        <div class="row service-box margin-bottom-40">
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-check red" style="font-weight: bold;"></i></em>
              <span style="font-weight: bold; font-family: Mirza !important; font-size: 2.5em !important; color:#0079b3;">Who We Are?</span>
            </div> 
            <p style="line-height: 1.6em; font-weight: bold;">Ocean Films is a full spectrum event planning, production and entertainment company that designs, plans and produces original, signature events &amp; talent hunt shows. It is the prodigy lineage from the critically acclaimed, Choreographer &amp; Director, Mr VK Dasaundhi (Master VK). Driven by the irrevocable notion of excellence, Ocean Films has strived to provide a platform to the great talents of India.</p>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-location-arrow blue" style="font-weight: bold;"></i></em>
              <span style="font-weight: bold; font-family: mirza !important; font-size: 2.5em !important; color:#0079b3;">Our Goal</span>
            </div>
            <p style="line-height: 1.6em; font-weight: bold;">We believe that the true piece art is the prodigious gain of the boundless endeavours of an incorruptible artist wandering in the path of his dreams. Thus it’s the path itself we virtuously try and build up for your dreams. We are the wings for your flight to paradise. We lay the imperishable platform on which we ask you to walk. Thriving towards a revolution in the field of art. </p>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="service-box-heading">
              <em><i class="fa fa-compress green" style="font-weight: bold;"></i></em>
              <span style="font-weight: bold; font-family: mirza !important; font-size: 2.5em !important; color:#0079b3;">Our Works</span>
            </div>
            <p style="line-height: 1.6em; font-weight: bold;">In over Six years Ocean Films has done number of events, cultural program, stage shows and talent hunt shows in more than twenty cities including all metro cities. We know that the success of our business is directly related to the success of our customers. As a producer Mr V.K. and his team has progressed immensely in the field of TV serials and films. </p>
          </div>
        </div>
        </div>
        <!-- END SERVICE BOX -->

        <!-- BEGIN BLOCKQUOTE BLOCK -->   
        <div class="row quote-v1 margin-bottom-30">
            <div class="col-md-10">
                <span style="font-weight: bold !important;">Ocean Films - Most Trusted Brand In Management &amp; Entertainment Industry</span>
            </div>
            <div class="col-md-2">
                <a class="btn-transparent" href="gallery.php"><i class="fa fa-rocket margin-right-10"></i>See Our Gallery!</a>
            </div>
        </div>
        <!-- END BLOCKQUOTE BLOCK -->

        <!-- BEGIN RECENT WORKS -->
        <div class="wow fadeIn" data-wow-duration="5s">
        <div class="row recent-work margin-bottom-40">
          <div class="col-md-3">
            <h2 style="font-weight: bold; font-family: times !important; font-size: 2.5em !important; color:#0079b3;><a href="gallery.php">Recent Works</a></h2>
            <p style="line-height: 1.6em; font-weight: bold;"><br> We know that the success of our business is directly related to the success of our customers. As a producer Mr V.K. and his team has progressed immensely in the field of TV serials and films. He has also given opportunity to new faces and talent in the industry and helped them achieve their aspirations. Ocean Films provides this platform to many new comers and professionals alike. As a choreographer Mr V.K. has done many bojpuri films, reality shows, Albums etc. Some of his films in which he has worked are "Kaisan Piyawa Ke Charitar Baa", "Raju Raja Ram", "Loot", "Sakhi Rakhyah Sendurwa Ke Laaj", "Love Aur Rajneeti".</p>
          </div>
          <div class="col-md-9">
            <div class="owl-carousel owl-carousel3">
              <div class="recent-work-item">
                <em>
                  <img src="assets/pages/img/works/img15.jpg" class="img-responsive">
                  <a href="gallery.php" title="Visit Gallery"><i class="fa fa-link"></i></a>
                  <a href="assets/pages/img/works/img15.jpg" class="fancybox-button" title="Love Aur Rajneeti" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Love Aur Rajneeti</strong>
                  <b>Ocean Films</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="assets/pages/img/works/img13.jpg" class="img-responsive">
                  <a href="gallery.php" title="Visit Gallery"><i class="fa fa-link"></i></a>
                  <a href="assets/pages/img/works/img13.jpg" class="fancybox-button" title="DD Bharti, Chatt Shoot" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>DD Bharti, Chatt Shoot</strong>
                  <b>Ocean Films</b>
                </a>
              </div>
              <div class="recent-work-item">
                <em>
                  <img src="assets/pages/img/works/img22.jpg" class="img-responsive">
                  <a href="gallery.php" title="Visit Gallery"><i class="fa fa-link"></i></a>
                  <a href="assets/pages/img/works/img22.jpg" class="fancybox-button" title="Kaisan Piyawa Ke Charitar Baa" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="javascript:;">
                  <strong>Kaisan Piyawa Ke Charitar Baa</strong>
                  <b>Ocean Films</b>
                </a>
              </div>
            </div>       
          </div>
        </div>
        </div>   
        <!-- END RECENT WORKS -->

        <!-- BEGIN TABS AND TESTIMONIALS -->
        <div class="row mix-block margin-bottom-40" style="line-height: 1.8em;">
          <!-- TABS -->
          <div class="col-md-7 tab-style-1">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab-1" data-toggle="tab">Ocean Films</a></li>
              <li><a href="#tab-2" data-toggle="tab">Why Us?</a></li>
              <li><a href="#tab-3" data-toggle="tab">Our Works and Achievements</a></li>
              <li><a href="#tab-4" data-toggle="tab">Clean &amp; Fresh Approach</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane row fade in active" id="tab-1">
                <div class="col-md-3 col-sm-3">
                  <a href="assets/pages/img/works/img17.jpg" class="fancybox-button" title="G TIMS Award" data-rel="fancybox-button">
                    <img class="img-responsive" src="assets/pages/img/works/img17.jpg" alt="">
                  </a>
                </div>
                <div class="col-md-9 col-sm-9">
                  <p class="margin-bottom-10">Ocean Films has no less prestige than its Founder himself, who had garnered his impeccable reputation from nearly a decade of astounding and widely-praised work for Indian Cinema. Driven by the irrevocable notion of excellence, Ocean Films has strived to provide a platform to the great talents of India, thriving towards the experience of what might be the transcendence to the age of indigenous revolution in the field of art.</p>    
                </div>
              </div>
              <div class="tab-pane row fade" id="tab-2">
                <div class="col-md-9 col-sm-9">
                  <p>Success is not our destination but it is our journey. To achieve perfection and growth, our way is not soft grass; it is a mountainous path with lots of rocks and hardships. But it goes upwards, forward and towards the sky, which ultimately brings everything you seek for:- "growth", "name", "fame", "money" and most important "the beauty of art and creativity". So, a bright future awaits you with us.</p>
                </div>
                <div class="col-md-3 col-sm-3">
                  <a href="assets/pages/img/works/img30.jpg" class="fancybox-button" title="Gimmics International News Clipping" data-rel="fancybox-button">
                    <img class="img-responsive" src="assets/pages/img/works/img30.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-3">
                <p>Achievements Starting with Mr. VK the winner of Boogie Woogie dance show 2005, ibibo. He has shared stage with Shiamak Davar (SDIPA), Shahid Kapoor, Ahmed khan and many other film stars of Indian cinema. Under him, Ocean Films has achieved great heights and continue to make a mark in entertainment industry. From reality shows to tv commercials, talent hunt programmes to movie and album shoots, Ocean Films has presence almost everywhere.</p>
              </div>
              <div class="tab-pane fade" id="tab-4">
                <p>With some of the most hard working, creative and dedicated people, "team Ocean Films" believes that <em>“Knowledge isn’t a piece of portrait you hang on to your showcase, but it’s an analogous entity to your hand that you extend for other’s welfare".</em> Thus we work hard and love to share our hard earned experience in entertainment industry with new faces and talents. We all work together, we all celebrate together, we all dwell together. Let it be happiness, sorrow, ups and downs we share everything. we are not just another team, we are a "PARIVAR".</p>
              </div>
            </div>
          </div>
          <!-- END TABS -->
        
          <!-- TESTIMONIALS -->
          <div >
          <div class="col-md-5 testimonials-v1">
                  <blockquote>
                    <p>“Knowledge isn’t a piece of portrait you hang on to your showcase, but it’s an analogous entity to your hand that you extend for other’s welfare.”</p>
                    <small>VK Dasaundhi, <cite title="Source Title">Founder (Ocean Films)</cite></small>
                  </blockquote>   
                  <div class="carousel-info">
                    <img class="pull-left" src="assets/pages/img/people/bg9cropped.jpg" alt="">
                  </div>             
                
          </div>
          <!-- END TESTIMONIALS -->
        </div>  
        </div>              
        <!-- END TABS AND TESTIMONIALS -->

        <!-- BEGIN STEPS -->
       <!-- <div class="wow flipInX" data-wow-duration="3.5s">-->
        <div class="row margin-bottom-40 front-steps-wrapper front-steps-count-3">
          <div class="col-md-4 col-sm-4 front-step-col">
            <div class="front-step front-step1 wow zoomIn" data-wow-duration="1.5s">
              <h2 style="font-weight: bold;">Goal definition</h2>
              <p style="line-height: 1.5em;">Our goal is simple - "To give you the best platform and a launch pad to showcase your talent to the world and a state of art technical support for professionals and new comers alike."</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 front-step-col wow zoomIn" data-wow-duration="1.5s" data-wow-delay="1.2s">
            <div class="front-step front-step2">
              <h2 style="font-weight: bold;">Analyse</h2>
              <p style="line-height: 1.5em;">Ocean Films has established itself as the pioneer in the field of art and entertainment. We make sure, all our clients get the best experience while working with us. "Art Above All" is our motto and we make sure that we bring the best out of you.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 front-step-col wow zoomIn" data-wow-duration="1.5s" data-wow-delay="2.4s">
            <div class="front-step front-step3">
              <h2 style="font-weight: bold;">Act</h2>
              <p style="line-height: 1.5em;">Join hands with Ocean Films and get the best event-planning, production and entertainment company to either design, plan or produces original, signature event &amp; talent hunt shows for you and make it a great success.</p>
            </div>
          </div>
        </div>
        <!--</div>-->
        <!-- END STEPS -->

        <!-- BEGIN CLIENTS -->
        <h2 style="font-weight: bold; font-family: times !important; font-size: 2.5em !important; color:#0079b3; text-align: center;">Our Clients</h2>

        <div class="row margin-bottom-40 our-clients" align="center" style="margin-top:20px;">
          <div class="col-md-4">
              <img src="assets/pages/img/clients/client1.jpg" class="img-responsive" alt="" style="height: 100px; width: 200px;">
          </div> 
          <div class="col-md-4">
              <img src="assets/pages/img/clients/client_2.jpg" class="img-responsive" alt="" style="height: 100px; width:200px;">
          </div>          
          <div class="col-md-4">
              <img src="assets/pages/img/clients/client_3.jpg" class="img-responsive" alt="" style="height: 100px; width:150px;">
          </div>                   
        </div>
        <!-- END CLIENTS -->
      </div>
    </div>

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2 style="font-weight:bold;">About us</h2>
            <p style="line-height: 1.5em;">Ocean Films is a full spectrum event planning, production and entertainment company that designs, plans and produces original, signature events &amp; talent hunt shows. It is the prodigy lineage from the critically acclaimed, Choreographer &amp; Director, Mr VK Dasaundhi. Driven by the irrevocable notion of excellence, Ocean Films has strived to provide a platform to the great talents of India.</p>

            <div class="photo-stream">
              <h2 style="font-weight:bold;">Photo Stream</h2>
              <ul class="list-unstyled">
                <li><a href="gallery.php"><img alt="" src="assets/pages/img/people/abhishek_thumb.jpg"></a></li>
                <li><a href="gallery.php"><img alt="" src="assets/pages/img/people/sheetal_thumb.jpg"></a></li>
                <li><a href="gallery.php"><img alt="" src="assets/pages/img/people/lalit_thumb.jpg"></a></li>
                <li><a href="gallery.php"><img alt="" src="assets/pages/img/people/bg9cropped.jpg"></a></li>
                <li><a href="gallery.php"><img alt="" src="assets/pages/img/works/img3.jpg"></a></li>
                <li><a href="gallery.php"><img alt="" src="assets/pages/img/works/img6.jpg"></a></li>
                <li><a href="gallery.php"><img alt="" src="assets/pages/img/works/img2.jpg"></a></li>
                <li><a href="gallery.php"><img alt="" src="assets/pages/img/works/img5.jpg"></a></li>
                <li><a href="gallery.php"><img alt="" src="assets/pages/img/works/img15.jpg"></a></li>
                <li><a href="gallery.php"><img alt="" src="assets/pages/img/works/img18.jpg"></a></li>
                <li><a href="gallery.php"><img alt="" src="assets/pages/img/works/img17.jpg"></a></li>
                <li><a href="gallery.php"><img alt="" src="assets/pages/img/works/img8.jpg"></a></li>
                <li><a href="gallery.php"><img alt="" src="assets/pages/img/works/img7.jpg"></a></li>
                <li><a href="gallery.php"><img alt="" src="assets/pages/img/works/img1.jpg"></a></li>
                <li><a href="gallery.php"><img alt="" src="assets/pages/img/works/img9.jpg"></a></li>
              </ul>                    
            </div>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2 style="font-weight:bold;">Contact Us</h2>
            <address class="margin-bottom-40" style="line-height: 1.5em;">
              Email: oceanfilms.india@outlook.com<br>
              Phone: 9350665657, 9650821702<br>              
              Or send us a message directly: <a href="contacts.php">Contact Us</a>
            </address>

            <div class="pre-footer-subscribe-box pre-footer-subscribe-box-vertical">
              <h2 style="font-weight:bold;">Newsletter</h2>
              <p style="line-height: 1.5em;">Subscribe to our newsletter and stay up to date with the latest news and updates!</p>
              <form action="home.php" method="POST">
                <div class="input-group">
                  <input type="text" placeholder="youremail@mail.com" class="form-control" name="email">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit" name="Register">Subscribe</button>
                  </span>
                </div>
              </form>
            </div>
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2 class="margin-bottom-0" style="font-weight:bold;">Latest Tweets</h2>
            <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a>
          </div>
          <!-- END TWITTER BLOCK -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-4 col-sm-4 padding-top-10">
            2016 &copy; &reg; Ocean Films, All Rights Reserved. Copyright Protected. 
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-offset-2 col-md-4 col-sm-4">
            <ul class="social-footer list-unstyled list-inline ">
              <li class="wow rollIn"><a href="https://twitter.com/OCEANFILMZ"><i class="fa fa-twitter" style="color: #00aced;"></i></a></li>
              <li class="wow rollIn"><a href="https://www.facebook.com/oceanfilmsvk/?fref=ts"><i class="fa fa-facebook" style="color: #3b5998;"></i></a></li>
              <li class="wow rollIn"><a href="https://www.youtube.com/channel/UCGm18j2hXr9EwelD6X3h5gg"><i class="fa fa-youtube" style="color: white;"></i></a></li>              
              <li class="wow rollIn"><a href="https://in.linkedin.com/in/oceanfilm"><i class="fa fa-linkedin" style="color: #007bb6;"></i></a></li>
            </ul>  
          </div>
          <!-- END PAYMENTS -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>
    <![endif]-->
    <script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->

    <script src="assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            Layout.initNavScrolling();
        });
    </script>
    <script type="text/javascript" src="assets/corporate/scripts/wow.js"></script>
    <script>
 $(document).ready(function(){

 
              new WOW().init();
              
 });



    </script>





    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
