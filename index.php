<?php
	$js_randomGreetings = array("Hello World,","Sup Kiddos,","Ohai,")

?>

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
		<div class="vis_wrap" style="display:flex;justify-content:center;align-items:center;width:100%;height:100%;">
			<canvas class="vis_visualizer" width="1280" height="720" ></canvas>
		</div>
		<div class="container js_head" id="js_head">
				<div class="js_title"><?php echo $js_randomGreetings[array_rand($js_randomGreetings,1)] ?> I'm <span class="js_name">Jake Siegers</span></div>
				<div class="js_desc">Web Application Developer, Programmer and Designer. Also Enjoys Cooking.</div>
				<div class="js_desc"><a href="" class="js_menuLink" linkTo="js_contactBox">[ Email Me ]</a> <a href="" class="js_menuLink" linkTo="js_workBox">[ My Projects ]</a> <a href="https://github.com/JakeSiegers" class="js_menuLink" target="_blank">[ <i class="fa fa-github"></i> ]</a></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
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

		<div class="js_contentData" id="js_workBox">
			These are some of the projects I've worked on, or made in my free time:
			<!--<ul>
				<li><a href="http://jakeisa.ninja/" target="_blank">My Un-named, Node.js Multplayer Game</a></li>
				<li><a href="http://ssfdojo.mcleodgaming.com/" target="_blank">The SSF2 DOJO!! Website</a></li>
				<li><a href="http://BBQKittenImprov.com/" target="_blank">Barbeque Kitten Improv Website</a></li>
			</ul>-->
			<?php
			require_once('portfolio.php');
			foreach($portfolio as $row){
				echo '<div class="js_portfolioTitle">'.$row['title'].'</div>';
				echo '<div class="js_portfilioBoxFrame js_blur">';
					echo '<div class="row">';
						echo '<div class="col-xs-4">';
							echo '<img src="'.$row['image'].'" class="img-responsive js_image" alt="Responsive image">';
						echo '</div>';
						echo '<div class="col-xs-8">';
							echo '<div class="js_portfilioBox js_white">';
								echo '<div class="js_portfolioDesc">'.$row['desc'].'<br /><a href="'.$row['url'].'" target="_blank">[ View Project ]</a>';
								if(isset($row['github'])){
									echo '<a href="'.$row['github'].'" target="_blank">[ <i class="fa fa-github"></i> ]</a>';
								}
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			}
			?>
			Almost all of the professional projects I've worked on aren't public, so email me if you're interested in them. I'm more than happy to share what I'm allowed to.
		</div>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/functions.js"></script>
		<script src="js/visualizer.js"></script>
	</body>
</html>