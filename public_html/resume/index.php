<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "My Resume";
/*load html-head.php*/
require_once(dirname(__DIR__)."/php/partials/html-head.php");

?>

<body class="sfooter">
		<div class="sfooter-content">

			<!-- header -->
			<header class="p-y-4">

					<nav class="navbar navbar-inverse">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="page-header">
								<h1>Lucas Laudick <small>Web Developer</small></h1>
							</div>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="<?php echo $PREFIX; ?>index.php">Home</a></li>
								<li><a href="<?php echo $PREFIX; ?>my-projects/index.php">My Projects</a></li>
								<li><a href="<?php echo $PREFIX; ?>resume/index.php">Resume</a></li>
								<li><a href="<?php echo $PREFIX; ?>contact-me/index.php">Contact Me</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>

			</header>
			<main>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="well text-center">
								<h1>Professional Resume</h1>
							</div>
						</div>
					</div>
					<!-- main content-->
					<div class="row">
						<div class="col-xs-12">
							<div class="well text-center">
								<h2>Lucas Laudick</h2>
								<h4><a href=https://github.com/Llaudick315 target = _blank>GitHub</a></h4>
								<h3>Web Developer</h3>
								<p>I am an entry level Junior Web Developer with a degree in Business Administration and a certificate of completion from the Deep Dive Coding Bootcamp at the STEMulus Center at CNM. I am known for my attention to detail and my ability to be a hard worker and a team player.</p>
								<h3>Technical Toolbox</h3>
								<h4>Languages</h4>
								<p>HTML5, CSS3, AngularJs, JavaScript, PHP, Bootstrap, MySQL</p>
								<h4>Operating Systems</h4>
								<p>IOS, Windows</p>
								<h4>Software</h4>
								<p>Microsoft Office, Internet Explorer, Mozilla Firefox, GitHub, Google Chrome, Google Applications: Docs, Gmail, Calendar, Maps</p>
								<h4>Other Skills</h4>
								<p>Basic Networking Skills</p>
								<h3>Education</h3>
								<h4>Central New Mexico Community College, Albuquerque, NM       June 2016</h4>
								<p>Deep Dive Coding Bootcamp, CNM STEMulus Center</p>
								<p>Certificate of completion - Web Development</p>
								<p>Capstone project: RealTimeScout</p>
								<h4>Fort Lewis College      May 2015</h4>
								<p>Bachelor of Arts Business Administration, with a focus in Tourism and Hospitality</p>
								<h3>Work Experience</h3>
								<h4>iQ Credit Union, Vancouver, WA      May 2015 - March 2016</h4>
								<h5>Member Service Representative</h5>
								<p>Main duties included customer service, cash transactions while working in a fast paced work environment</p>
								<p>Utilized computer software that allows me to transfer between accounts and provide members with transaction history </p>
								<p>Vast knowledge about company products and ability to figure out member needs</p>
								<h4>The Glacier Club, Durango, CO        May 2014 - October 2014</h4>
								<h5>Golf Shop Intern</h5>
								<p>Pro Shop Cash Register, Customer/Member service</p>
								<p>Tee time system that would project times when groups would make the turn to the back nine, as well as inputs member information</p>
								<p>Product knowledge of various equipment, Merchandise sales, Excel inventory system</p>
								<p>Assistant to Head and Assistant golf pros</p>
								<h4>Sandia Golf Resort, Albuquerque, NM        May 2012 - August 2012</h4>
								<h5>Guest Services</h5>
								<p>Cart Barn/Bag drop and Drop-off, Cleaning clubs, Member requests</p>
								<h3>Leadership Experience</h3>
								<p>Fort Lewis College Golf Team,    August 2011 - May 2015</p>
								<p>Team Captain,   August 2014 - May 2015</p>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
	<?php
	require_once(dirname(__DIR__)."/php/partials/html-footer.php");
	?>
	</body>
</html>