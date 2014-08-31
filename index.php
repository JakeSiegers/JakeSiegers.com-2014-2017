<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Jake Siegers - Web Developer</title>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,900,100' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/mobile.css"/>
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/functions.js"></script>
	</head>
	<body>
		<div class="container js_head" id="js_head">
				<div class="js_title">Hey, I'm <span class="js_name">Jake Siegers</span></div>
				<div class="js_desc">Web Application Developer, Programmer, and College Kid.</div>
				<div class="js_desc"><a href="" class="js_menuLink" linkTo="js_contactBox">[ Email Me ]</a> <a href="" class="js_menuLink" linkTo="js_workBox">[ My Projects ]</a> <a href="https://github.com/JakeSiegers" class="js_menuLink" target="_blank">[ <i class="fa fa-github"></i> ]</a></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="js_content js_blur" id="js_content">
					</div>
				</div>
			</div>
		</div>

		<div class="js_contentData" id="js_contactBox">
			<form id="js_contactForm">
				<div class="form-group" wrapping="name">
					<input type="text" class="form-control input-lg js_formField js_blur" placeholder="Name" name="name"/>
				</div>
				<div class="form-group" wrapping="email">
					<input type="text" class="form-control input-lg js_formField js_blur" placeholder="Email" name="email"/>
				</div>
				<div class="form-group" wrapping="message">
					<textarea class="form-control input-lg js_formField js_blur" placeholder="Message" name="message" rows="10"></textarea>
				</div>
				<div class="js_formField js_button_wrap js_blur"><button onclick="js_sendMessage(); return false;" class="btn btn-primary btn-lg btn-block js_button"><span class="js_emailLoader"></span> Send <span class="js_emailErrorMessage"></span><span class="js_emailHappyMessage"></span></button></div>
			</form>

		</div>

		<div class="js_contentData" id="js_workBox">
			These are some of the projects I've worked on, or made in my free time:
			<ul>
				<li><a href="http://jakeisa.ninja/" target="_blank">My Un-named, Node.js Multplayer Game</a></li>
				<li><a href="http://ssfdojo.mcleodgaming.com/" target="_blank">The SSF2 DOJO!! Website</a></li>
				<li><a href="http://BBQKittenImprov.com/" target="_blank">Barbeque Kitten Improv Website</a></li>
			</ul>
			Almost all of the professional projects I've worked on aren't public, so email me if you're interested in them. I'm more than happy to share what I'm allowed to.
		</div>

	</body>
</html>