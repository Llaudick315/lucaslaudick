<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "My Projects";
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
								<li><a href="<?php echo $PREFIX; ?>index.php">About Me</a></li>
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
								<h1>My Projects</h1>
							</div>
						</div>
					</div>
					<!-- main content-->
					<div class="row">
						<div class="col-md-6">
							<div class="well text-center">
								<img class="img-responsive" src="../images/baseball.jpg" alt="baseball">
							</div>
						</div>
						<div class="col-md-6">
							<div class="well text-center">
								<h3>RealTimeScout</h3>
								<p>Through the Deep Dive Coding Bootcamp we were put into small groups to work on a project with a couple classmates. For the group I was assigned to we had the privilege of creating RealTimeScout, a baseball scouting app that allows all sorts of scouts including MLB and college scouts the ability to find up and coming players in one place. The task of getting noticed by these scouts is getting more and more difficult and that's where the RealTimeScout comes into play, giving everyone a better chance of getting noticed. RealTimeScout gives these players that ability to get noticed whether it be for the major league or college baseball. On the technical side for this project we had used basic HTML5 and CSS3, as well as AngularJs, Javascript, and Bootstrap. </p>
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