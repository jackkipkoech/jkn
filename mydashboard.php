

<!DOCTYPE html>
<html lang="en">

    <!-- *** HEAD ***-->
 
		
<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Reliable ISP">
    <meta name="author" content="Evans Ombati | SkylinkNetworks">
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
				
		                    <li><a href="logout.php">Logout</a>
                    </li>
                    <li><a href="dash.php">Dashboard</a>
                    </li>
		                    <li><a href="#" data-toggle="modal" data-target="#theme-modal">Theme</a>
                    </li>
                </ul>
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
                    <li class="dropdown yamm-fw" >
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
                        <li>My Dashboard</li>
                    </ul>
														
                </div>

                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Navigation Sidebar</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="dash.php"><i class="fa fa-list"></i> My Dashboard</a>
                                </li>
                                <li class="active">
                                    <a href="mydashboard.php"><i class="fa fa-user"></i> Wiltel Clients</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <div class="col-md-9">
                    <div class="box">
					
					
						
						
						
						
						
						
						
        <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>All Clients  </h1>
                    </div>
                </div>
				
				
				
					<!--main content start-->
					<section id="main-content">
						<section class="wrapper no-gaps">
							<div class="row">
								<div class="col-lg-12">
									<ol class="breadcrumb">
										<li><i class="fa fa-home"></i><a href="wiltel.co.ke.php">Home</a></li>
										<li>Dashboard</li>
										<li><i class="fa fa-square-o"></i>All Clients</li>
									</ol>
								</div><!--
								<div class="col-lg-8">
									<ol class="breadcrumb">
										<a href=""><button title="" data-placement="right" data-toggle="tooltip" class="btn btn-primary btn-xs tooltips" type="button" data-original-title="Refresh the Configuration Dashboard"><i class="fa fa-refresh"></i> Reload</button></a>
									</ol>
								</div>-->
							</div>
						</section>
					</section>
					<!--main content end-->
				
						
						<div class="panel-body">
							<div class="alert-danger">
															</div>
							<button class="btn btn-warning btn-outline" data-toggle="modal" data-target="#myModalm">
								<i class="icon-refresh"></i> Generate Payments
							</button>
							<button class="btn btn-success btn-outline" data-toggle="modal" data-target="#myModalw">
								<i class="icon-plus"></i> New Client
							</button>
							<div class="modal fade" id="myModalw" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title" id="myModalLabel">Clients Registration</h4>
										</div>
										<form action="http://www.skylinknetworks.co.ke/Clients/Reg_Client" class="form-signin" role="post" method="post" accept-charset="utf-8">
											<div class="modal-body">
												<div class="form-group col-md-12">
													<input type="text" class="form-control" name="cl_name"  value="" placeholder="Full Name">
												</div>
												<div class="form-group col-md-12">	
													<input type="email" class="form-control" name="cl_email" value="" placeholder="Email">
												</div>
												<div class="form-group col-md-12">
													<input type="number"  min="0" step=".01" class="form-control" name="pk_mbps"  value="" placeholder="Mbs/Sec">
												</div>
												<div class="form-group col-md-12">	
													<input type="text" class="form-control" name="pk_cost_p_mnth" value="" placeholder="Cost/Month">
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="reset" class="btn btn-default">Reset Button</button>
												<button type="submit" class="btn btn-primary">Register</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
				
						<div class="panel-body">
							<div class="modal fade" id="myModalm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title" id="myModalLabel">Generate Billing</h4>
										</div>
										<form action="http://www.skylinknetworks.co.ke/Clients/Gen_monthly_payables" class="form-signin" role="post" method="post" accept-charset="utf-8">
											<div class="modal-body">
												<div class="form-group col-md-12">
													<input type="month" class="form-control" name="month"  >
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="reset" class="btn btn-default">Reset Button</button>
												<button type="submit" class="btn btn-primary">Generate</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
						
                <!--TABLE, PANEL, ACCORDION AND MODAL  -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								All Clients Registered 
								
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>Email</th>
												<th class="text-right"> Cost/Month</th>
											</tr>
										</thead>
										<tbody>
																						<tr>
												<td align="right">10</td>
												<td><a href="http://www.skylinknetworks.co.ke/Clients/Profile/10">ACK DOICEASE OF KERICHO </a></td>
												<td>ackkcodioc@yahoo.com</td>
												<td class="text-right">45000.00</td>
											</tr>
																						<tr>
												<td align="right">8</td>
												<td><a href="http://www.skylinknetworks.co.ke/Clients/Profile/8">ACK HOLYTRINTY ACADEMY</a></td>
												<td>ackacademykericho@gmail.com</td>
												<td class="text-right">45000.00</td>
											</tr>
																						<tr>
												<td align="right">5</td>
												<td><a href="http://www.skylinknetworks.co.ke/Clients/Profile/5">ADMINISTRATION POLICE OFFICE </a></td>
												<td>kerichocountyap@gmail.com</td>
												<td class="text-right">11000.00</td>
											</tr>
																						<tr>
												<td align="right">2</td>
												<td><a href="http://www.skylinknetworks.co.ke/Clients/Profile/2">APPLEX COMPUTERS</a></td>
												<td>applexcomputers@yahoo.com</td>
												<td class="text-right">36000.00</td>
											</tr>
																						<tr>
												<td align="right">1</td>
												<td><a href="http://www.skylinknetworks.co.ke/Clients/Profile/1">ASHWIN PATEL </a></td>
												<td>ashwinp0021@gmail.com</td>
												<td class="text-right">14936.00</td>
											</tr>
																					</tbody>
									</table>
								</div>
							  
							   
						
							   
							   
							</div>
						</div>
					</div>
            
                </div>
            </div>

        </div>
        <!--END PAGE CONTENT -->

						
						
			      
					</div>
                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->



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
    <script src="http://www.skylinknetworks.co.ke/assets_w/js/jquery-1.11.0.min.js"></script>
    <script src="http://www.skylinknetworks.co.ke/assets_w/js/bootstrap.min.js"></script>
    <script src="http://www.skylinknetworks.co.ke/assets_w/js/jquery.cookie.js"></script>
    <script src="http://www.skylinknetworks.co.ke/assets_w/js/waypoints.min.js"></script>
    <script src="http://www.skylinknetworks.co.ke/assets_w/js/modernizr.js"></script>
    <script src="http://www.skylinknetworks.co.ke/assets_w/js/bootstrap-hover-dropdown.js"></script>
    <script src="http://www.skylinknetworks.co.ke/assets_w/js/owl.carousel.min.js"></script>
    <script src="http://www.skylinknetworks.co.ke/assets_w/js/front.js"></script>

    <!--END GLOBAL STYLES -->
    <script src="http://www.skylinknetworks.co.ke/assets_w/plugins/jquery-2.0.3.min.js"></script>
     <script src="http://www.skylinknetworks.co.ke/assets_w/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://www.skylinknetworks.co.ke/assets_w/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="http://www.skylinknetworks.co.ke/assets_w/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="http://www.skylinknetworks.co.ke/assets_w/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>


</body>

</html>
