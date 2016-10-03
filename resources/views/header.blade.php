<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Creative Bucket</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<script src="http://localhost:8080/easyrec-web/api-js/easyrec.js" type="text/javascript"></script>
	<script type="text/javascript">
   		var apiKey = "c76049faddf4092854ee588ae9bb29fd";
   		var tenantId = "Creative_Bucket";
	</script>
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
	<link id="base-style" href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
	<link id="base-style-responsive" href="{{ URL::asset('css/style-responsive.css') }}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico') }}">
	<!-- end: Favicon -->
	<!--content="0;url=https://www.google.co.in/"-->
	<noscript>
		<meta http-equiv="refresh" content="0;url=img/gallery/photo2.jpg">

		<style type="text/css">
			.nojs {
				display:none;				
			}
		
		</style>
	</noscript>	
		
		
</head>
<!-- onContextMenu="alert('Right click disabled!');return false;" -->
<body  class="nojs" onContextMenu="alert('Right click disabled!');return false;">

		<!-- start: Header -->
	<div class="navbar nojs">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index"><span>Creative Bucket</span></a>				
					<ul class="nav pull-left">	
						<li>
							<input type="text"  class="span4 typeahead" style="height:15px; margin:7px;" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>								
							<!--<input type="button" name="Search">-->
							<button type="search" class="btn" Style="background-color:#000; color:#fff; ">Search</button>						

						</li>
					</ul>
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">			
						<li>
							<a class="btn" href="{{ url('/text') }}">
								Text
							</a>
						</li>
						<li>
							<a class="btn" href="{{ url('/photo') }}">
								Graphics
							</a>
						</li>
						<li>
							<a class="btn" href="{{ url('/write') }}">
								Write
							</a>
						</li>
						<li>
							<a class="btn" href="{{ url('/upload') }}">
								Upload
							</a>
						</li>
						@if(\Auth::user())
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white warning-sign"></i>
							</a>
							<ul class="dropdown-menu notifications" style="max-height:300px; overflow:hidden; overflow-y:scroll;">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li><li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li><li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li><li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li><li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li><li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">New comment</span>
										<span class="time">6 hour</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>	
							</ul>
						</li>
						@endif
						<!-- start: Notifications Dropdown -->
						
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<!-- end: Message Dropdown -->
						<!-- start: User Dropdown -->

						@if(\Auth::user())	  					
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> {{ \Auth::user()->first_name }} 
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Channel</a></li>
								<li><a href="{{ url('/logout') }}"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						@else
						<li><a href="{{ url('/login') }}"><i class="halflings-icon off"></i> Login</a></li>
						@endif						
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	<div class="container-fluid-full">
		<div class="row-fluid">
			@if(\Auth::user())	  					
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="{{ url('/index') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Home</span></a></li>	
						<li><a href="{{ url('/profile') }}"><i class="icon-envelope"></i><span class="hidden-tablet"> Your Gallery</span></a></li>
						<li><a href="{{ url('/trending') }}"><i class="icon-tasks"></i><span class="hidden-tablet"> Trending</span></a></li>
						<li><a href="{{ url('/subscription') }}"><i class="icon-eye-open"></i><span class="hidden-tablet"> Subscriptions</span></a></li>
						<li><a href="{{ url('/history') }}"><i class="icon-dashboard"></i><span class="hidden-tablet"> History</span></a></li>						
						<li><a href="{{ url('/saved') }}"><i class="icon-edit"></i><span class="hidden-tablet"> Saved</span></a></li>					
					</ul>
					<!-- start sw-rss-feed code --> 
<script type="text/javascript"> 
<!-- 
rssfeed_url = new Array(); 
rssfeed_url[0]="http://timesofindia.indiatimes.com/rssfeeds/5880659.cms";  
rssfeed_frame_width="180"; 
rssfeed_frame_height="250"; 
rssfeed_scroll="on"; 
rssfeed_scroll_step="6"; 
rssfeed_scroll_bar="off"; 
rssfeed_target="_blank"; 
rssfeed_font_size="12"; 
rssfeed_font_face=""; 
rssfeed_border="on"; 
rssfeed_css_url=""; 
rssfeed_title="off"; 
rssfeed_title_name=""; 
rssfeed_title_bgcolor="#3366ff"; 
rssfeed_title_color="#fff"; 
rssfeed_title_bgimage="http://"; 
rssfeed_footer="off"; 
rssfeed_footer_name="rss feed"; 
rssfeed_footer_bgcolor="#fff"; 
rssfeed_footer_color="#333"; 
rssfeed_footer_bgimage="http://"; 
rssfeed_item_title_length="50"; 
rssfeed_item_title_color="#666"; 
rssfeed_item_bgcolor="#fff"; 
rssfeed_item_bgimage="http://"; 
rssfeed_item_border_bottom="on"; 
rssfeed_item_source_icon="off"; 
rssfeed_item_date="off"; 
rssfeed_item_description="on"; 
rssfeed_item_description_length="120"; 
rssfeed_item_description_color="#666"; 
rssfeed_item_description_link_color="#333"; 
rssfeed_item_description_tag="off"; 
rssfeed_no_items="0"; 
rssfeed_cache = "5917df9a22ce808feff05796c512cbb5"; 
//--> 
</script> 
<script type="text/javascript" src="http://feed.surfing-waves.com/js/rss-feed.js"></script> 
<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
<div style="text-align:right; width:180px;"></div> 
<!-- end sw-rss-feed code -->
				</div>
			</div>
			@else			
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">																		
						<li><a href="{{ url('/index') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Home</span></a></li>							
						<li><a href="{{ url('/trending') }}"><i class="icon-tasks"></i><span class="hidden-tablet"> Trending</span></a></li>											
						<li><a href="{{ url('/login') }}"><i class="icon-list-alt"></i><span class="hidden-tablet"> Login</span></a></li>
						<li></li>
					</ul>
					<!-- start sw-rss-feed code --> 
<script type="text/javascript"> 
<!-- 
rssfeed_url = new Array(); 
rssfeed_url[0]="http://timesofindia.indiatimes.com/rssfeeds/5880659.cms";  
rssfeed_frame_width="180"; 
rssfeed_frame_height="250"; 
rssfeed_scroll="on"; 
rssfeed_scroll_step="6"; 
rssfeed_scroll_bar="off"; 
rssfeed_target="_blank"; 
rssfeed_font_size="12"; 
rssfeed_font_face=""; 
rssfeed_border="on"; 
rssfeed_css_url=""; 
rssfeed_title="off"; 
rssfeed_title_name=""; 
rssfeed_title_bgcolor="#3366ff"; 
rssfeed_title_color="#fff"; 
rssfeed_title_bgimage="http://"; 
rssfeed_footer="off"; 
rssfeed_footer_name="rss feed"; 
rssfeed_footer_bgcolor="#fff"; 
rssfeed_footer_color="#333"; 
rssfeed_footer_bgimage="http://"; 
rssfeed_item_title_length="50"; 
rssfeed_item_title_color="#666"; 
rssfeed_item_bgcolor="#fff"; 
rssfeed_item_bgimage="http://"; 
rssfeed_item_border_bottom="on"; 
rssfeed_item_source_icon="off"; 
rssfeed_item_date="off"; 
rssfeed_item_description="on"; 
rssfeed_item_description_length="120"; 
rssfeed_item_description_color="#666"; 
rssfeed_item_description_link_color="#333"; 
rssfeed_item_description_tag="off"; 
rssfeed_no_items="0"; 
rssfeed_cache = "5917df9a22ce808feff05796c512cbb5"; 
//--> 
</script> 
<script type="text/javascript" src="http://feed.surfing-waves.com/js/rss-feed.js"></script> 
<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
<div style="text-align:right; width:180px;"></div> 
<!-- end sw-rss-feed code -->
				</div>
			</div>
			@endif
			<!-- end: Main Menu -->
	@yield('content')

	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="{{ URL::asset('js/jquery-1.9.1.min.js') }}"></script>
	<script src="{{ URL::asset('js/jquery-migrate-1.0.0.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery-ui-1.10.0.custom.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.ui.touch-punch.js') }}"></script>
	
		<script src="{{ URL::asset('js/modernizr.js') }}"></script>
	
		<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.cookie.js') }}"></script>
	
		<script src="{{ URL::asset('js/fullcalendar.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>

		<script src="{{ URL::asset('js/excanvas.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.flot.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.flot.pie.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.flot.stack.js') }}"></script>
	<script src="{{ URL::asset('js/jquery.flot.resize.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.chosen.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.uniform.min.js') }}"></script>
		
		<script src="{{ URL::asset('js/jquery.cleditor.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.noty.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.elfinder.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.raty.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.iphone.toggle.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.uploadify-3.1.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.gritter.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.imagesloaded.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.masonry.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.knob.modified.js') }}"></script>
	
		<script src="{{ URL::asset('js/jquery.sparkline.min.js') }}"></script>
	
		<script src="{{ URL::asset('js/counter.js') }}"></script>
	
		<script src="{{ URL::asset('js/retina.js') }}"></script>

		<script src="{{ URL::asset('js/custom.js') }}"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
