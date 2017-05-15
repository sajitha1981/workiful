<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Meta -->
		<meta charset="utf-8">
		<title>Razeqeen - Log into Master Admin</title>
		<meta name="keywords" content="Pakistan, jobs, careers, employment, international, upload Resume, Post Jobs in Pakistan, Jobs Ads, Pakistan English News Paper Jobs">
		<meta name="description" content="Razeqeen is an online job portal serving people with greatest career opportunities being offered. We’re making the procedure smoother and easier for job seekers by providing reliable job sources.">		
		
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	

		<!-- Bootstrap core CSS -->
    	<link href="{{ url('public/admin/css') }}/bootstrap.min.css" rel="stylesheet">
    	<!-- Font-Awesome -->
    	<link href="{{ url('public/admin/css') }}/font-awesome.min.css" rel="stylesheet">
    	<!-- Razeqeen Custome/Template CSS -->
		  <link href="{{ url('public/admin/css') }}/style.css" rel="stylesheet">	
			
	
		<!-- Updates css goes here -->
								
		<!-- Favicons -->	
		<link rel="shortcut icon" href="{{ url('public/admin/img') }}/icons/favicon.ico">
		<link rel="apple-touch-icon" sizes="114x114" href="{{ url('public/admin/images') }}/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="{{ url('public/admin/images') }}/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" href="{{ url('public/admin/images') }}/icons/apple-touch-icon.png">
			
		<!-- Google Fonts -->	
		<link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>    

		<!--ALL JS FILES-->


		<!-- Documentation extras -->

		<!--[if lt IE 9]><script src="../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<!-- Header
================================================== -->
<!-- Start Header Section-->
<body>
<header>
<!--Start Header for sign up page-->	
<div class="top-bar">
    <div class="navbar navbar-static-top">
          <div class="navbar navbar-default navbar-fixed-top" role="navigation">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"><img src="{{ url('public/admin/images') }}/razeqeen-logo.png" alt="" title="Logo"></a>
                </div>
                <div class="navbar-collapse collapse">
                  <div class="right-top pull-right">
                    <!-- <a href="#" class="clr-white">Already have an account?</a></li> -->
                    <!-- <a href="#" class="yellow-btn">log in</a> -->
                </div>
                </div><!--div/.nav-collapse -->
              </div>
            </div>
    </div>
</div>
<!--End Header for sign up page-->	
<!--Start Header when user login-->	
<div class="top-bar" style="display:none;">
    <div class="navbar navbar-static-top">
          <div class="navbar navbar-default navbar-fixed-top" role="navigation">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"><img src="{{ url('public/admin/images') }}/razeqeen-logo.png" alt="" title="Logo"></a>
                </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li><a href="#">Dashboard</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">CV/Resume <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">View your CV/Resume</a></li>
                        <li><a href="#">Edit your CV/Resume</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Candidates <span class="caret"></span></a>
                      <ul class="dropdown-menu " role="menu">
                        <li><a href="#">My Interviews</a></li>
                        <li><a href="#">Applied Jobs</a></li>
                        <li><a href="#">Saved Jobs</a></li>
                        <li><a href="#">Recommendations</a></li>
                        <li><a href="#">Upload your CV/Resume</a></li>
                        <li><a href="#">View Company Profiles</a></li>
                      </ul>
                    </li>
                  </ul>
                  <div class="nav navbar-nav navbar-right">
                    <div class="form-group search_bar">
                        <input class="form-control brd-left" type="text" placeholder="Keywords . . .">
                        <a href="#" class="search-btn"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="bell_box">
                        <a href="#"><i class="fa fa-bell"></i></a>
                    </div>
                    <a href="#" class="yellow-btn pull-left margintop">View Jobs</a>    
                    <ul class="nav navbar-nav info-deatails">
                    <li class="dropdown info-drop pull-right">
                      <a href="#" class="dropdown-toggle thumnail" data-toggle="dropdown">
                        <img src="{{ url('public/admin/images') }}/thumnail.png" alt="" title=""> 
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-star-o"></i><strong>Moon Javed</strong></a></li>
                        <li><a href="#"><i class="fa fa-cog"></i>Account Settings</a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i>Messages</a></li>
                        <li><a href="#"><i class="fa fa-list-ol"></i>Packages</a></li>
                        <li><a href="#"><i class="fa fa-file-text"></i>Invoices</a></li>
                        <li><a href="#"><i class="fa fa-sign-out"></i>Signout</a></li>
                      </ul>
                    </li>
                  </ul>
                  </div>
                </div><!--/.nav-collapse -->
              </div>
            </div>
    </div>
</div>
<!--End Header when user login-->	
</header>
<!-- End Header Section-->
<!-- Body
================================================== -->
<div class="container">
	<div class="sign-up">
		<h1>Warning!!</h1>
		<div class="sign-up-container">
    		<div class="select-box">
        		
            </div>
           
            <div class="text-center">
            	<p>Some Error Occured. Please try again..</p>
				
				
				
            </div>
            <!--Start SignUp Form-->
	
          
            <!--End SignUp Form-->
        </div>
    </div>
</div>
  @include('Master-Admin/layouts.partials._footer')
   @include('Master-Admin/layouts.partials._js')