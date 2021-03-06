<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "About Me";
/*load html-head.php*/
require_once("php/partials/html-head.php");

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
						<div class="col-md-4">
							<div class="well text-center">
								<h3>Personal picture</h3>
								<img src="images/llaudick.jpg" alt="propic" class="img-rounded">
							</div>
						</div>
						<div class="col-md-8">
							<div class="well text-center">
								<h3>About Myself</h3>
								<p>My name is Lucas Laudick and I am a junior web developer with a certificate of completion from the Deep Dive Coding Bootcamp. In addition to my certificate of completion I recently graduated with a Bachelors degree in Business Administration from Fort Lewis College in Durango, CO in May 2015. Right out of college I received a job in Vancouver, WA working at a credit union. At this credit union we worked with a software system called symitar to keep track of all transactions we went through on a daily basis. Our IT department had created an add on to this program that was very creative and I was amazed at what it could do and how helpful it was to us as well. Even before this experience I had always had an interest in software development, always wanting to create my own software and applications. So working with this program gave me the final kick to join a bootcamp and take on being a web developer as my career. </p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="well text-center">
								<h3><a href="<?php echo $PREFIX; ?>resume/index.php">My Resume</a></h3>
								<p>My resume page will include my full resume which describes all the skills I have, my technical toolbox, work experience, education as well as my leadership skills.  </p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="well text-center">
								<h3><a href="<?php echo $PREFIX; ?>my-projects/index.php">My Projects</a></h3>
								<p>My most recent project I worked on a baseball scouting app built from scratch with a group of 4 that allows baseball scouts to find all the information they need about players from one place. This is only the beginning of my projects, there are plenty more to come and cant wait to get started.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="well text-center">
								<h3><a href="<?php echo $PREFIX; ?>contact-me/index.php">Contact Me</a></h3>
								<p>Interested in talking about future business opportunities please feel free to contact me here. I am always looking for new work experiences and would love to discuss what you have in mind. </p>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
	<?php
	require_once("php/partials/html-footer.php");
	?>
	</body>
</html>