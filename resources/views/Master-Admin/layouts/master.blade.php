<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Meta -->
    <meta charset="utf-8">
    <title>PurelyHrs - Log into Master Admin</title>
    <meta name="keywords" content="Pakistan, jobs, careers, employment, international, upload Resume, Post Jobs in Pakistan, Jobs Ads, Pakistan English News Paper Jobs">
    <meta name="description" content="PurelyHrs is an online job portal serving people with greatest career opportunities being offered. We’re making the procedure smoother and easier for job seekers by providing reliable job sources.">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="_token" content="{!! csrf_token() !!}"/>
    <!-- Bootstrap core CSS -->
    <link href="{{ url('public/admin/css') }}/bootstrap.min.css" rel="stylesheet">
    <!-- Font-Awesome -->
    <link href="{{ url('public/admin/css') }}/font-awesome.min.css" rel="stylesheet">
    <!-- PurelyHrs Custome/Template CSS -->
    <link href="{{ url('public/admin/css') }}/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ url('public/admin/assets') }}/SweetAlert/lib/sweet-alert.css">
	<link href="{{ url('public/admin/css') }}/magic-data.css" rel="stylesheet">
    <!-- Updates css goes here -->
    <!-- Favicons --> 
    <link rel="shortcut icon" href="{{ url('public/admin/img') }}/icons/favicon.ico">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('public/admin/images') }}/icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('public/admin/images') }}/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="{{ url('public/admin/images') }}/icons/apple-touch-icon.png">
    <!-- Google Fonts --> 
    <!-- <link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>     -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'> -->
    <script type="text/javascript">
      WebFontConfig = {
        google: { families: [ 'Open+Sans:300,700,800,400,600:latin' ] }
      };
      (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
          '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })(); 
    </script>
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
      
    
        @include('Master-Admin/layouts.partials._header')
    
        @yield('content')
    
        @include('Master-Admin/layouts.partials._footer')
			
		
    
    </body>
</html>