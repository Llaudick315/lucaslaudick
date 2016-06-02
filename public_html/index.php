<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "MY PAGE TITLE";
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
							<a class="navbar-brand" href="#">LucasLaudick.com</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#">About Me</a></li>
								<li><a href="#">My Projects</a></li>
								<li><a href="#">Resume</a></li>
								<li><a href="#">Contact Me</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>

			</header>
			<main>
				<div class="container">
					<div class="page-header">
						<h1>Lucas Laudick <small>Web Developer</small></h1>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="well text-center">
								<h3>Personal picture</h3>
								<p>pic</p>
								<p>pic</p>
								<p>pic</p>
								<p>pic</p>
								<p>pic</p>
								<p>pic</p>
								<p>pic</p>
								<p>pic</p>
								<p>pic</p>
								<p>pic</p>
							</div>
						</div>
						<div class="col-md-7">
							<div class="well text-center">
								<h3>About Myself</h3>
								<p>blah</p>
								<p>blah</p>
								<p>blah</p>
								<p>blah</p>
								<p>blah</p>
								<p>blah</p>
								<p>blah</p>
								<p>blah</p>
								<p>blah</p>
								<p>blah</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="well text-center">
								<h3>My Projects</h3>
								<p>blah</p>
								<p>blah</p>
								<p>blah</p>
								<p>blah</p>
								<p>blah</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="well text-center">
								<h3>My Resume</h3>
								<p>blah</p>
								<p>blah</p>
								<p>blah</p>
								<p>blah</p>
								<p>blah</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="well text-center">
								<h3>Contact Me</h3>
								<p>blah</p>
								<p>blah</p>
								<p>blah</p>
								<p>blah</p>
								<p>blah</p>
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