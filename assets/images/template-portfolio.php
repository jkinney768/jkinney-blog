<?php
/*
Template Name: Portfolio Page
*/
?><!DOCTYPE html>
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  <meta name="robots" content="index, follow">
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">

  <title><?php wp_title('|','true','right'); ?><?php if ( is_single() ) { ?> Blog Archive | <?php } ?></title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
  <link rel="author" href="https://plus.google.com/u/0/110765841501756610818/posts">	
  <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <?php wp_head(); ?>
</head>

<body>

<div class="wrap">
	<header>
		<div class="logo">
			<span class="name" title="Jason Kinney"><a href="/">Jason Kinney</a></span>
			<span class="title">Front-End Developer <span class="dashes">// </span> <span id="phrase"></span></span>
		</div>

		<nav>
			<a class="show-hide-navigation" href="#"><img src="<?php bloginfo('template_directory'); ?>/images/menu.png" /> Navigation</a>
			<a href="/">Home</a>
			<a href="/about">About Me</a>
			<a class="active" href="/portfolio">Portfolio</a>
			<a href="/blog">Blog</a>
			<a href="/contact">Contact</a>
		</nav>
	</header>

	<div style="clear:both;"></div>


		<h1 class="big">My Projects.</h1>
		<h2 class="callout-small">Please Note: Most of my projects were worked on in a team enviornment. Refer to the role section in each project for my participation.</h2>

	<section>
		<div class="screenshot">
		  <a href="http://jasonkinney.me/portfolio/sonoma-orthopedics/">
		  	<img src="<?php bloginfo('template_directory'); ?>/images/sonoma-thumb.jpg" alt="Sonoma Orthopedics">
		  	<span class="caption top">
		    	<h1>Sonoma Orthopedics</h1>
		    	<p><em>Responsive, HTML5, CSS, jQuery, and WordPress Theme</em></p>
		    	<p>Sonoma Orthopedics is a company revolutionizing bone fracture recovery... <em>Read more about the project &raquo;</em></p>
		  	</span>
		  </a>
		</div>

		<div class="screenshot">
		  <a href="http://jasonkinney.me/portfolio/oak-park-prosthodontics/">
		  	<img src="<?php bloginfo('template_directory'); ?>/images/oak-park-thumb.jpg" alt="Oak Park Prosthodontics">
		  	<span class="caption top">
		    	<h1>Oak Park Prosthodontics</h1>
		    	<p><em>Responsive, HTML5, CSS, jQuery, and WordPress Theme</em></p>
		    	<p>Oak Park Prostho is a site for a dental company providing specialized services... <em>Read more about the project &raquo;</em></p>
		  	</span>
		  </a>
		</div>

		<div class="screenshot">
		  <a href="http://jasonkinney.me/portfolio/responsive-sass-navigation/">
		  	<img src="<?php bloginfo('template_directory'); ?>/images/sass-nav-thumb.jpg" alt="Responsive Sass Navigation">
		  	<span class="caption top">
		    	<h1>Responsive SASS Nav</h1>
		    	<p><em>Responsive, HTML5, CSS, jQuery</em></p>
		    	<p>Responsive SASS Nav is navigation plugin created using SASS variables... <em>Read more about the project &raquo;</em></p>
		  	</span>
		  </a>
		</div>

		

	</section>

	<section>

		<div class="screenshot">
		  <a href="http://jasonkinney.me/portfolio/short-term-loans/">
		  	<img src="<?php bloginfo('template_directory'); ?>/images/loan-thumb.jpg" alt="Buckys Biscuits">
		  	<span class="caption top">
		    	<h1>Short Term Loans</h1>
		    	<p><em>HTML5, CSS, jQuery, WordPress Blog</em></p>
		    	<p>Short Term Loans help Illinois residents with payday or installment loans... <em>Read more about the project &raquo;</em></p>
		  	</span>
		  </a>
		</div>

		
		<div class="screenshot">
		  <a href="http://jasonkinney.me/portfolio/buffalo-grove-park-district/">
		  	<img src="<?php bloginfo('template_directory'); ?>/images/buffalo-grove-thumb.jpg" alt="Buffalo Grove Park District">
		  	<span class="caption top">
		    	<h1>Buffalo Grove Park District</h1>
		    	<p><em>Responsive, HTML5, CSS, jQuery</em></p>
		    	<p>The Buffalo Grove is was completed for the town's park district and community... <em>Read more about the project &raquo;</em></p>
		  	</span>
		  </a>
		</div>

		<div class="screenshot">
		<a href="http://jasonkinney.me/portfolio/hesed-house/">	
		  <img src="<?php bloginfo('template_directory'); ?>/images/hesed-house-thumb.jpg" alt="Hesed House">
		  <span class="caption top">
		    <h1>Hesed House</h1>
		    <p><em>WordPress Theme Development</em></p>
		    <p>Hesed House is a homeless shelter located in Aurora, IL helping those in need... <em>Read more about the project &raquo;</em></p>
		  </span>
		  </a>
		</div>

		
	</section>


	<section>
	<div class="screenshot">
		  <a href="http://jasonkinney.me/portfolio/buckys-biscuits/">
		  	<img src="<?php bloginfo('template_directory'); ?>/images/buckys-thumb.jpg" alt="Buckys Biscuits">
		  	<span class="caption top">
		    	<h1>Bucky's Biscuits</h1>
		    	<p><em>Responsive, HTML5, CSS</em></p>
		    	<p>Bucky's Biscuits make all natural dog biscuits made of leftover ingredients from brewing beer... <em>Read more about the project &raquo;</em></p>
		  	</span>
		  </a>
		</div>

		<div class="screenshot">
		  <a href="http://jasonkinney.me/portfolio/aspiritech/">
		  	<img src="<?php bloginfo('template_directory'); ?>/images/aspiritech-thumb.jpg" alt="Aspiritech">
		  	<span class="caption top">
		    	<h1>Aspiritech</h1>
		    	<p><em>WordPress Theme Development</em></p>
		    	<p>Aspiritech provides high quality, competitively-priced, domestic software testing services... <em>Read more about the project &raquo;</em></p>
		  	</span>
		  </a>
		</div>
	<div class="screenshot">
		  <a href="http://jasonkinney.me/portfolio/cameron-raab/">
		  	<img src="<?php bloginfo('template_directory'); ?>/images/cameron-thumb.jpg" alt"Cameron Raab 3D">
		  	<span class="caption top">
		    <h1>Cameron Raab</h1>
		    <p><em>HTML, CSS, jQuery</em></p>
		    <p>Cameron Raab is a 3D artist focusing on modeling video game assets... <em>Read more about the project &raquo;</em></p>
		  </span>
		  </a>
		</div>

	</section>

	
</div><!--end wrap-->
<div style="clear:both;"></div>
<?php get_footer(); ?>