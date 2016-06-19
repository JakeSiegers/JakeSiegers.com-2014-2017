<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Jake Siegers - Web Developer</title>
		<meta name="description" content="&quot;Now avaiable in web 2.0!&quot;" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,900,100' rel='stylesheet' type='text/css'>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/mobile.css"/>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/history.js/1.8/native.history.min.js"></script>

		<!--Woah, that's a lot of icons! -->
		<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="favicons/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="favicons/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="favicons/manifest.json">
		<link rel="shortcut icon" href="favicons/favicon.ico">
		<meta name="apple-mobile-web-app-title" content="JakeSiegers">
		<meta name="application-name" content="JakeSiegers">
		<meta name="msapplication-TileColor" content="#202020">
		<meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
		<meta name="msapplication-config" content="favicons/browserconfig.xml">
		<meta name="theme-color" content="#202020">
		<!-- end of icons -->
	</head>
	<body>
		<canvas class="js_backgroundCanvas" id="js_backgroundCanvas" width="1280" height="720" ></canvas>
		<div class="container js_head" id="js_head">
				<div class="js_title">&lt; <span class="js_name">Jake Siegers</span> /&gt;</div>
				<div class="js_desc">Web Application Developer, Programmer and Designer. Also Enjoys Cooking.</div>
				<div class="js_desc"><a href="#" class="js_menuLink" linkTo="js_contactBox">[ Email Me ]</a> <a href="#" class="js_menuLink" linkTo="js_workBox">[ My Projects ]</a> <a href="https://github.com/JakeSiegers" class="js_menuLink" target="_blank">[ <i class="fa fa-github"></i> ]</a></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="js_content_wrap" id="js_content_wrap">

					</div>
				</div>
			</div>
		</div>

		<div class="js_contentData" id="js_contactBox">
			<form id="js_contactForm">
				<div class="form-group" wrapping="name">
					<input type="text" class="form-control input-lg js_formField" placeholder="Name" name="name"/>
				</div>
				<div class="form-group" wrapping="email">
					<input type="text" class="form-control input-lg js_formField" placeholder="Email" name="email"/>
				</div>
				<div class="form-group" wrapping="message">
					<textarea class="form-control input-lg js_formField" placeholder="Message" name="message" rows="10"></textarea>
				</div>
				<button onclick="js_sendMessage(); return false;" class="btn btn-primary btn-lg btn-block js_button"><span class="js_emailLoader"></span> Send </button>
			</form>
			<div class="js_emailErrorMessage"></div>
			<div class="js_emailHappyMessage"></div>
		</div>

		<div class="js_contentData" id="js_workBox"></div>

		<div class="js_contentData" id="js_workDetail"></div>

		<script src="js/libraries/jquery-1.11.1.min.js"></script>
		<script src="js/functions.js"></script>
		<script src="js/visualizer.js"></script>
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-66497412-1', 'auto');
		ga('send', 'pageview');

		</script>
	</body>
</html>