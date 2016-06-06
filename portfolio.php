<?php
	$portfolio = array(
		'MG' => array(
			'image' => 'img/portfolio/mg.jpg'
			,'url' => 'http://McleodGaming.com'
			,'title' => 'McleodGaming.com'
			,'desc' => "Mcleodgaming.com is a gaming website, and their flagship game, Super Smash Flash 2 (SSF2), is one of the most popular Smash Bros. fangames on the web. The site averages over 100 thousand views daily! In early 2016, I re-vamped and updated the current website, which hadn't been touched in eight years. This new site is now powered by wordpress, running a theme that I designed and programmed. The theme features mobile-responsive layout, with custom templates for many of the blog and gaming related pages on the site."
			,'screens' => array(
				'img/portfolio/mg/mg1.jpg',
				'img/portfolio/mg/mg2.jpg',
				'img/portfolio/mg/mg3.jpg'
			)
		),
		'Alexandra' => array(
			'image' => 'img/portfolio/alexandra.jpg'
			,'url' => 'http://AlexandraConley.com'
			,'title' => 'AlexandraConley.com'
			,'desc' => 'This is portfolio site for the artist, Alexandra Conley. It features a custom Wordpress theme that was coded using Photoshop designs made by Alexandra. The theme has special back-end editors to make all the portfolio and gallery pages easy to edit, with no coding knowledge needed from the client.'
			,'screens' => array(
				'img/portfolio/mg/mg1.jpg',
				'img/portfolio/mg/mg2.jpg',
				'img/portfolio/mg/mg3.jpg'
			)
		),
		'NodeGame' => array(
			'image' => 'img/portfolio/nodegame.jpg'
			,'url' => 'http://aws.jakeisa.ninja'
			,'title' => 'My Node JS Game'
			,'desc' => 'My Un-named, Node.js Multplayer Game. Grab some friends, and try it out! Written in Javascript using Phaser.js and Socket.io'
			,'screens' => array(
				'img/portfolio/mg/mg1.jpg',
				'img/portfolio/mg/mg2.jpg',
				'img/portfolio/mg/mg3.jpg'
			)
		),
		'Visualizer' => array(
			'image' => 'img/portfolio/visual.jpg'
			,'url' => 'http://jakeisa.ninja/audioapi'
			,'github' => 'https://github.com/JakeSiegers/JavascriptMusicVisualizer'
			,'title' => 'Audio Api Example'
			,'desc' => 'This is a pure vanilla javascript & canvas audio visual. It uses the new audio API that is present in modern versions of Firefox and Chrome (Sorry, no IE or Safari yet!). The entire project is open source on GitHub. Fork Me!'
			,'screens' => array(
				'img/portfolio/mg/mg1.jpg',
				'img/portfolio/mg/mg2.jpg',
				'img/portfolio/mg/mg3.jpg'
			)
		),
		'BBQK' => array(
			'image' => 'img/portfolio/kitten.jpg'
			,'url' => 'http://bbqkittenimprov.com/'
			,'title' => 'Barbeque Kitten Improv - Website'
			,'desc' => 'I designed and programmed the website for my college improv troupe. It shows off our members, and our upcoming shows.'
			,'screens' => array(
				'img/portfolio/mg/mg1.jpg',
				'img/portfolio/mg/mg2.jpg',
				'img/portfolio/mg/mg3.jpg'
			)
		)
		/*'Dojo' => array(
			'image' => 'img/portfolio/ssfdojo.jpg'
			,'url' => 'http://ssfdojo.mcleodgaming.com/'
			,'title' => 'The SSF2 Dojo'
			,'desc' => 'This is a WordPress blog I set up, designed, and currently manage. It contains lots of content about the popular flash-based Smash Brothers fan-game, "Super Smash Flash 2".'
		)*/
	);

	echo json_encode($portfolio);
?>