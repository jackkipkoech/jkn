
<!DOCTYPE html>
<html lang="en">

    <!-- *** HEAD ***-->
 
		
<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Reliable ISP">
    <meta name="author" content="Wilord Metet | Wiltelcompany">
    <meta name="keywords" content="">

    <title>
        Wiltel : Your One-Stop ICT Solutions Provider
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
	<link rel="stylesheet" type="text/css" title="blue" href="css/style.blue.css" id="theme-stylesheet">
	<link rel="alternate stylesheet" type="text/css" title="pink" href="css/style.pink.css" id="theme-stylesheet">
	<link rel="alternate stylesheet" type="text/css" title="green" href="css/style.green.css" id="theme-stylesheet">
	<link rel="alternate stylesheet" type="text/css" title="mono" href="css/style.mono.css" id="theme-stylesheet">
	<link rel="alternate stylesheet" type="text/css" title="violet" href="css/style.violet.css" id="theme-stylesheet">
	<link rel="alternate stylesheet" type="text/css" title="turquoise" href="css/style.turquoise.css" id="theme-stylesheet">
    
    <!-- your stylesheet with modifications -->
    <link type="text/css" href="css/custom.css" rel="stylesheet">

    <script type="text/javascript" src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="images/favicon.png">
<script type="text/javascript">
// *** TO BE CUSTOMISED ***

var style_cookie_name = "style" ;
var style_cookie_duration = 300 ;
var style_domain = "skylink.centralriftfkf.com" ;

// *** END OF CUSTOMISABLE SECTION ***
// You do not need to customise anything below this line

function switch_style ( css_title )
{
// You may use this script on your site free of charge provided
// you do not remove this notice or the URL below. Script from
// https://www.thesitewizard.com/javascripts/change-style-sheets.shtml
  var i, link_tag ;
  for (i = 0, link_tag = document.getElementsByTagName("link") ;
    i < link_tag.length ; i++ ) {
    if ((link_tag[i].rel.indexOf( "stylesheet" ) != -1) &&
      link_tag[i].title) {
      link_tag[i].disabled = true ;
      if (link_tag[i].title == css_title) {
        link_tag[i].disabled = false ;
      }
    }
    set_cookie( style_cookie_name, css_title,
      style_cookie_duration, style_domain );
  }
}
function set_style_from_cookie()
{
  var css_title = get_cookie( style_cookie_name );
  if (css_title.length) {
    switch_style( css_title );
  }
}
function set_cookie ( cookie_name, cookie_value,
    lifespan_in_days, valid_domain )
{
    // https://www.thesitewizard.com/javascripts/cookies.shtml
    var domain_string = valid_domain ?
                       ("; domain=" + valid_domain) : '' ;
    document.cookie = cookie_name +
                       "=" + encodeURIComponent( cookie_value ) +
                       "; max-age=" + 60 * 60 *
                       24 * lifespan_in_days +
                       "; path=/" + domain_string ;
}
function get_cookie ( cookie_name )
{
    // https://www.thesitewizard.com/javascripts/cookies.shtml
    var cookie_string = document.cookie ;
    if (cookie_string.length != 0) {
        var cookie_value = cookie_string.match (
                        '(^|;)[\s]*' +
                        cookie_name +
                        '=([^;]*)' );
        return decodeURIComponent ( cookie_value[2] ) ;
    }
    return '' ;
}
        alert(cookie_value);
</script>




</head>
		
    <!-- *** HEAD END *** -->

<body onload="set_style_from_cookie()">
   
	<!-- *** TOPBAR ***-->
 
		
    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Unlimited High-Speed Internet</a>  <a href="#">Your One-Stop ICT Solutions Provider!</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
				              <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li><a href="http://localhost/wiltelco/register.php">Register</a>
                    </li>
              
                    <li><a href="contacts.php">Contact</a>
                    </li>
		                    <li><a href="#" data-toggle="modal" data-target="#theme-modal">Theme</a>
                    </li>
                </ul>
            </div>
        </div>
		        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="http://localhost/wiltelco/login.php" method="post" accept-charset="utf-8">
                            <div class="form-group">
                                <input type="email" required="required" name="login_email" class="form-control" id="email-modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" required="required" name="login_pass" class="form-control" id="password-modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary" name="SubmitLogin"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.php"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>
		        <div class="modal fade" id="theme-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Preferred Theme</h4>
                    </div>
                    <div class="modal-body">
                        <form class="theme-form">
							<div class="form-group col-xs-4">
								<input type="submit" class="btn btn-sm btn-block color11" onclick="switch_style('blue');return false;" name="theme" value="Blue" id="blue">
							</div>
							<div class="form-group col-xs-4">
								<input type="submit" class="btn btn-sm btn-block color22" onclick="switch_style('pink');return false;" name="theme" value="Pink" id="pink">
							</div>
							<div class="form-group col-xs-4">
								<input type="submit" class="btn btn-sm btn-block color33" onclick="switch_style('green');return false;" name="theme" value="Green" id="green">
							</div>
							<div class="form-group col-xs-4">
								<input type="submit" class="btn btn-sm btn-block color44" onclick="switch_style('mono');return false;" name="theme" value="Mono" id="mono">
							</div>
							<div class="form-group col-xs-4">
								<input type="submit" class="btn btn-sm btn-block color55" onclick="switch_style('violet');return false;" name="theme" value="Violet" id="violet">
							</div>
							<div class="form-group col-xs-4">
								<input type="submit" class="btn btn-sm btn-block color66" onclick="switch_style('turquoise');return false;" name="theme" value="Turquoise" id="turquoise">
							</div>
							<button class="btn btn-primary" data-dismiss="modal" ><i class="fa fa-thumbs-up"></i> </button>
                        </form>
					</div>
                </div>
            </div>
        </div>

    </div>
    <!-- *** TOP BAR END *** -->		
    <!-- *** TOP BAR END *** -->
		    <!-- *** NAVBAR *** -->

    
    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="wiltel.co.ke.php" data-animate-hover="bounce">
                    <img src="images/wiltel.png" alt="wiltel logo" class="hidden-xs">
                    <img src="mages/favicon.png" alt="wiltel logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                   
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown yamm-fw" class='active'>
						<a href="wiltel.co.ke.php"   data-hover="dropdown">Home</a>
                    </li>
                    <li class="dropdown yamm-fw" >
                        <a href="internet.php"  data-hover="dropdown">Our Internet </a>
                    </li>
                  
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Services <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Software Solutions/ Web design</h5>
                                            <ul>
                                                <li><a href="servces.php">Customized Applications</a>
                                                </li>
                                                <li><a href="servces.php">Personal/Business Websites</a>
                                                </li>
                                                <li><a href="servces.php">Point of Sale Systems</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Networking Services</h5>
                                            <ul>
                                                <li><a href="servces.php">LAN installations</a>
                                                </li>
                                                <li><a href="servces.php">Networking Consultancy</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Digital Optimization</h5>
                                            <ul>
                                                <li><a href="servces.php">Risk Assessments</a>
                                                </li>
                                                <li><a href="servces.php">Search Engine Optimization</a>
                                                </li>
                                            </ul>
                                        </div>
                                         <div class="col-sm-3">
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="images/banwiltel.png" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                        </div>


                                 
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

							<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

						</span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->
    <!-- *** NAVBAR END *** -->

      <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Our Internet</li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <!-- *** PAGES MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Quick Links</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="about.php">About Us</a>
                                </li>
                                <li class="active">
                                    <a href="internet.phpphpphpphp">Our Internet</a>
                                </li>
                                <li>
                                    <a href="contacts.phpphpphpphp">Contact page</a>
                                </li>
                                <li>
                                    <a href="faq.phpphpphpphp">FAQ</a>
                                </li>
                                <li>
                                    <a href="servces.phpphpphpphp">Our Services</a>
                                </li>

                            </ul>

                        </div>
                    </div>

                    <!-- *** PAGES MENU END *** -->


                    <div class="banner">
                        <a href="#">
                            <img src="images/banwiltel.png" alt="sales 2018" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">

                    <div class="box" id="text-page">
                        <h1>Our Internet</h1>

                        <p class="lead"> <a href="http://www.facebook.com/weltelcompany" class="external">Wiltel Company' </a>Unlimited High-Speed Internet Brings the World to Your Fingertips.
                        Access everything the wide world has to offer with a fast internet connection.</p>
  
                        <h2>Connection Speed</h2>
                        <p>Most home/office internet service providers tout fast speeds, report 
                        speeds in multiples of standard dial-up speed or even in potential kilobits per second (Kbps) or
                        megabits per second (Mbps). However, reported speeds do not always match average performance 
                        speed; speeds vary greatly depending on the time of day and even your location. Their posted 
                        speed is only the potential speed, not the actual average performance speed.<strong> We walk our talk</strong>
                        and we've got exceptional ratings in terms of internet speeds. wiltel company maintains pre-agreed internet speeds 
                        at all times and have a 99.9% availability.</p>

                        <h2>Service Area</h2>
                        <p>wiltel company has a huge clientel and spans across several counties (Bomet , Kericho e.t.c).
                        We have also been around for many years and are now more<strong>  flexible and we easily understand our customers</strong> 
                        requirements and easily adapt to any customers special preferences. We have over the years also widened our 
                        internet's geographical reach into the rural areas.</p>

                        <h2>Additional Features</h2>
                        <p>Most people are now
                        comfortable with free webmail options such as Gmail or Yahoo and do not need additional
                        email accounts offered by the internet service provider. However, wiltel company provides extra
                        benefits to using the branded email service such as extra online storage and spam and 
                        virus blocking. We provide security layer that is always up-to-date, as well as parental 
                        controls. A few of the large providers offer
                        low-income internet solutions for families with young students, veterans and the elderly.</p>

                        <h2>Support Options</h2>
                        <p>Fast, helpful, knowledgeable support is critical. We provide 
                        numerous avenues of contact such as by phone, email and chat. We also provide timely responsive, 
                        local on-site support and training whenever required. We provides convenient tools such 
                        as online support documentation in regards to billing.</p>
                        
                        <blockquote>
                        <p>If you are moving into a new area or looking for a new ISP, a little research can
                        save you hours or even weeks of frustration. See our reviews to get a general idea
                        of what your experiences might be with us. We provide a free trial period of upto two weeks to all our
                        new internet connections. This provides the customers a feel of what their experience will be 
                        with us. </p>
                        </blockquote>
                        

                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="text-center">
                                    <img src="images/lan.jpg" class="img-rounded img-responsive" alt="">
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-center">
                                    <img src="images/network.png" class="img-rounded  img-responsive" alt="">
                                </p>
                            </div>
                            <div class="col-md-4">
                                <p class="text-center">
                                    <img src="images/responce.png" class="img-rounded img-responsive" alt="">
                                </p>
                            </div>
                        </div>

                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


       <! *** FOOTER ***--->
        
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Pages</h4>

                        <ul>
                            <li><a href="about.phpphpphp">About us</a>
                            </li>
                            <li><a href="internet.phpphpphp">Our Internet</a>
                            </li>
                            <li><a href="faq.phpphpphp">FAQ</a>
                            </li>
                            <li><a href="contacts.phpphpphp">Contact us</a>
                            </li>
                        </ul>

                        <hr>

                        <h4>User section</h4>

                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                            <li><a href="register.phpphpphp">Register</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                <!--     /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Top categories</h4>

                        <h5>Networking</h5>

                        <ul>
                            <li><a href="servces.phpphp">Routers</a>
                            </li>
                            <li><a href="servces.phpphp">Switches</a>
                            </li>
                            <li><a href="servces.phpphp">Cables</a>
                            </li>
                            <li><a href="servces.phpphp">Receivers</a>
                            </li>
                        </ul>

                       
                        <hr class="hidden-md hidden-lg">

                    </div>
                   <!--  /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p><strong>Wiltel Company Ltd.</strong>
                            <br>
                            <br>3nd Floor
                            <br>Tet Plaza
                            <br>Kericho Town
                            <br>
                            <strong>Kenya</strong>
                        </p>

                        <a href="contacts.php">Go to contact page</a>

                        <hr class="hidden-md hidden-lg">

                    </div>
                <!--     /.col-md-3-->



                    <div class="col-md-3 col-sm-6">

                        <h4>Get the news</h4>

                        <p class="text-muted">Provide us your email to get a copy of our quarterly newsletter.</p>

                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

                <button class="btn btn-default" type="button">Subscribe!</button>

            </span>

                            </div>
                           <!--  /input-group -->
                        </form>

                        <hr>

                        <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="https://www.facebook.com/wiltelcompany/" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>


                    </div>
                    <!-- /.col-md-3

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->
        

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***-->
        
        
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2018 Wiltel Company ltd.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">by <a href="https://www.facebook.com/wiltelcompany">Wiltel Company - Systems</a>  
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>
                </div>
            </div>
        </div>
                
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>



</body>

</html>