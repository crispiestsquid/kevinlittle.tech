<?php
/* Short and sweet */
define( 'WP_USE_THEMES', false );
require( 'wp_blog/wp-blog-header.php' );
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Kevin Little</title>
	<link href="css/main.css" rel="stylesheet" type="text/css">
	<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
	<script>
		var __adobewebfontsappname__ = "dreamweaver"
	</script>
	<script src="http://use.edgefonts.net/annie-use-your-telescope:n4:default;chewy:n4:default;exo:n1,n9,n3,n2,n4,n6,n5:default.js" type="text/javascript"></script>
</head>

<body>
	<div id="container">
		<div id="hamburger">
			<a href="#menu" class="menu-toggle icon-anchor" role="button" id="menu-toggle" aria-epanded="false" aria-controls="menu" aria-label="Open menu">
		  <img class="menu-icon" src="images/hamburger.png" aria-hidden="true" alt="" />
	  </a>
		

			<nav id="menu" class="menu" role="navigation" aria-expanded="false" aria-label="Menu">
				<a href="#menu-toggle" class="menu-close icon-anchor" role="button" id="menu-close" aria-expanded="false" aria-controls="menu" aria-label="Close menu">
			  <img class="menu-icon" src="images/hamburger-close.png" aria-hidden="true" alt="" />
		  </a>
			

				<ul id="ham-nav">
					<li><a href="index.html">Home</a>
					</li>
					<li><a class="current" href="blog.php">Blog</a>
					</li>
					<li><a href="about.html">About</a>
					</li>
					<li><a href="contact.html">Contact</a>
					</li>
				</ul>
			</nav>
			<a href="#menu-toggle" class="backdrop" tabindex="-1" aria-hidden="true">
	  </a>
		

		</div>
		<div id="header">
			<div id="propic">
				<img src="images/profile.jpg" width="2319" height="2319" alt=""/>
			</div>
			<div id="headertext">
				<h1 id="name">Kevin<br/>Little</h1>
				<p id="definition"><b>PROGRAMMER</b><br> n.[proh-gram-er]
					<br>someone who solves a problem you didn't know you had in a way that you don't understand.<br><br>See also WIZARD, MAGICIAN</p>
			</div>
			<div id="navigation">
				<ul>
					<li><a href="index.html">Home</a>
					</li>
					<li><a class="current" href="blog.php">Blog</a>
					</li>
					<li><a href="about.html">About</a>
					</li>
					<li><a href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
			<div id="widgets">
				<ul>
					<li><a href="https://linkedin.com/in/crispiestsquid"><img src="images/2-Color/In-2C-121px-R.png" width="20" height="18" alt=""/></a>
						<li><a href="https://github.com/crispiestsquid"><img src="images/PNG/GitHub-Mark-120px-plus.png" width="20" height="20" alt=""/></a>
							<li><a href="https://twitter.com/CrispiestSquid"><img src="images/Twitter_Logo_White_On_Blue/Twitter_Logo_White_On_Blue.png" width="20" height="20" alt=""/></a>
				</ul>
			</div>
		</div>
		<div id="main">
			<h1>blog</h1>

			<?php
			$posts = get_posts( 'numberposts=10&order=DESC&orderby=date' );
			foreach ( $posts as $post ): setup_postdata( $post );
			?>
			<?php the_date(); echo "<br />"; ?>
			<p id="blogtitle">
				<b>
					<?php the_title(); ?>
				</b>
			</p>
			<?php the_content(); ?>
			<?php
			endforeach;
			?>
		</div>
		<div id="footer">
			<hr>
			<p>&copy;2017 KevinLittleTech</p>
		</div>
	</div>
</body>
</html>