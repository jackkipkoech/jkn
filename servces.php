
<!DOCTYPE html>
<html lang="en">

    <!-- *** HEAD ***-->
 
		
<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Reliable ISP">
    <meta name="author" content="Wilord Metet | WiltelCompany">
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
                    <li><a href="register.php">Register</a>
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
                    <img src="images/favicon.png" alt="wiltel logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
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
                   <!--  <a class="btn btn-default navbar-toggle" href="http://www.skylinknetworks.co.ke/#">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">0 items in cart</span>
                    </a> -->
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

                <!-- <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="http://www.skylinknetworks.co.ke/#" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">0 items in cart</span></a>
                </div> -->
                <!--/.nav-collapse -->

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
                        <li>Our Services</li>
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
                                <li>
                                    <a href="internet.php">Our Internet</a>
                                </li>
                                <li>
                                    <a href="contacts.php">Contact page</a>
                                </li>
                                <li>
                                    <a href="faq.php">FAQ</a>
                                </li>
                                <li class="active">
                                    <a href="servces.php">Our Services</a>
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


                    <div class="box" id="contact">
                        <h1>Our Services</h1>
                        <p class="lead">Please feel free to contact us, our customer service center is working for you 24/7.</p>

                        <hr>

                        <div class="panel-group" id="accordion">

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">

                                        1. Customized Applications

                                        </a>

                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Custom software development is the designing of software applications 
                                        for a specific user or group of users within an organization. Such software is
                                        designed to address their needs precisely as opposed to the more traditional and widespread off-the-shelf software. Such software is typically created just for that specific entity by a third-party by contract or 
                                        in-house group of developers and is not packaged for reselling.</p>
                                        <p>The benefit to custom software is the simple fact it provides features off-the-shelf software doesn&rsquo;t. Designing an application with your organization&rsquo;s needs in consideration implies an increased level of productivity.</p>

                                        <p>If you have a software application designed to increase productivity or address an internal need, the cost of it is offset by the promise of increased efficiency. If your organization has a need unique enough to warrant for custom software, then customizing a solution rather than settling for an off-the-shelf application becomes a smart course of action.</p>

                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                                        <a data-toggle="collapse" data-parent="#accordion" href="#faq1">

                                        2. Personal/Business Websites

                                        </a>

                                    </h4>
                                </div>
                                <div id="faq1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Web design encompasses many different skills and disciplines
                                        in the production and maintenance of websites. The different are
                                        as of web design include web graphic design; interface design;
                                        authoring, including standardized code and proprietary software;
                                        user experience design; and search engine optimization. Often 
                                        many individuals will work in teams covering different aspects 
                                        of the design process, although some designers will cover them
                                        all. </p><p>Web design is normally used to describe the 
                                        design process relating to the front-end (client side) design 
                                        of a website including writing mark up. Web design partially 
                                        overlaps web engineering in the broader scope of web development.
                                        Web designers are expected to have an awareness of usability and
                                        if their role involves creating mark up then they are also 
                                        expected to be up to date with web accessibility guidelines.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">

                                        3. Point of Sale Systems

                                        </a>

                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse">
                                    <div class="panel-body">
                                     <p>A point-of-sale (POS) transaction is what takes place between a merchant and a customer when a product or service is purchased, commonly using a point of sale system to complete the transaction. So when you&rsquo;re at your favorite restaurant or retail shop, and you make a purchase, you are completing a point-of-sale (POS) or a point of purchase (POP) transaction.</p>

                                        <p>Merchants typically use a POS system to complete a sales transaction.&nbsp; In its most basic definition, a POS system is a combination of POS hardware and POS software to create a POS machine for processing a transaction and payment. Cash registers are not as evolved as using a POS system and lack many of the functions and features of a modern day point of sale system.&nbsp; A cash register could be considered a point of sale solution technically, however, for our definitions, we will be focusing on point-of-sale machines (aka POS terminals) that involve both software and hardware.&nbsp; Continue below to learn more.</p>

                                     </div>
                                </div>
                            </div>
                            <!-- /.panel -->

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">

                                        4. LAN installations

                                        </a>

                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>A local area network (LAN) is a group of computers and associated devices that share a common communications line or wireless link to a server. Typically, a LAN encompasses computers and peripherals connected to a server within a distinct geographic area such as an office or a commercial establishment. Computers and other mobile devices use a LAN connection to share resources such as a printer or network storage.</p>
                                    <p>A local area network may serve as few as two or three users (for example, in a small-office network) or several hundred users in a larger office. LAN networking comprises cables, switches, routers and other components that let users connect to internal servers, websites and other LANs via&nbsp;wide area networks.</p>

                                    <p>Ethernet and Wi-Fi are the two primary ways to enable LAN connections. Ethernet is a specification that enables computers to communicate with each other. Wi-Fi uses radio waves to connect computers to the LAN. Other LAN technologies, including&nbsp;Token Ring,&nbsp;Fiber Distributed Data Interface&nbsp;and&nbsp;ARCNET,&nbsp;have lost favor as Ethernet and Wi-Fi speeds have increased. The rise of virtualization has fueled the development of&nbsp;virtual LANs, which allows network administrators to logically group network nodes and partition their networks without the need for major infrastructure changes.</p>

                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">

                                        5. Networking Consultancy

                                        </a>

                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse">
                                    <div class="panel-body">
                                     <p>In information technology, networking is the construction, design, and use of a&nbsp;network, including the physical (cabling,&nbsp;hub,&nbsp;bridge,&nbsp;switch,&nbsp;router, and so forth), the selection and use of telecommunication&nbsp;protocol&nbsp;and computer software for using and managing the network, and the establishment of operation policies and procedures related to the network.</p>

                                     </div>
                                </div>
                            </div>
                            <!-- /.panel -->

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">

                                        6. Risk Assessments

                                        </a>

                                    </h4>
                                </div>
                                <div id="collapseSeven" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <p>ICT has implemented internal risk management and risk control systems with a view to minimising its operating and financial risks and to limit the impact of unexpected events on balance sheet ratios and results. ICT considers risk management to be a continuous process, an essential part of which is to embed policy in control systems and procedures at every level of the organisation. ICT&rsquo;s internal framework is based on Entity-level controls.</p>

                                    
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">

                                        7. Search Engine Optimization

                                        </a>

                                    </h4>
                                </div>
                                <div id="collapseEight" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    <p>Search engine optimization (SEO) is the practice of increasing the quantity and quality of traffic to your website through organic search engine results.</p>

                                        <h2>What goes into SEO?</h2>

                                        <p>To understand what SEO really means, let&#39;s break that sentence down and look at the parts:</p>

                                        <ul>
                                            <li>Quality of traffic. You can attract all the visitors in the world, but if they&#39;re coming to your site because Google tells them you&#39;re a resource for Apple computers when really you&#39;re a farmer selling apples, that is not quality traffic. Instead you want to attract visitors who are genuinely interested in products that you offer.</li>
                                            <li>Quantity of traffic. Once you have the right people clicking through from those search engine results pages (SERPs), more traffic is better.</li>
                                            <li>Organic results. Ads make up a significant portion of many SERPs. Organic traffic is any traffic that you don&#39;t have to pay for.</li>
                                        </ul>
   
                                    </div>
                            </div>
                            <!-- /.panel -->



                        </div>
                        <!-- /.panel-group -->


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
                            <li><a href="about.php">About us</a>
                            </li>
                            <li><a href="internet.php">Our Internet</a>
                            </li>
                            <li><a href="faq.php">FAQ</a>
                            </li>
                            <li><a href="contacts.php">Contact us</a>
                            </li>
                        </ul>

                        <hr>

                        <h4>User section</h4>

                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                            <li><a href="register.php">Register</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                <!--     /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Top categories</h4>

                        <h5>Networking</h5>

                        <ul>
                            <li><a href="servces.php">Routers</a>
                            </li>
                            <li><a href="servces.php">Switches</a>
                            </li>
                            <li><a href="servces.php">Cables</a>
                            </li>
                            <li><a href="servces.php">Receivers</a>
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