<?php
/*grab current directory*/
$CURRENT_DIR = __DIR__;
/*set page title here*/
$PAGE_TITLE = "Contact Me";
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
								<h1>Lets Talk</h1>
							</div>
						</div>
					</div>
					<!-- main content-->
					<div class="row">
						<div class="col-xs-12">
							<!--Begin Contact Form-->
							<form id="contact-form" action="<?php echo $PREFIX; ?>php/mailer.php" method="POST">
								<div class="form-group">
									<label for="name">Name <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user" aria-hidden="true"></i>
										</div>
										<input type="text" class="form-control" id="name" name="name" placeholder="Name">
									</div>
								</div>
								<div class="form-group">
									<label for="email">Email <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</div>
										<input type="email" class="form-control" id="email" name="email" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label for="subject">Subject</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-pencil" aria-hidden="true"></i>
										</div>
										<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
									</div>
								</div>
								<div class="form-group">
									<label for="message">Message <span class="text-danger">*</span></label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-comment" aria-hidden="true"></i>
										</div>
										<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
									</div>
								</div>

								<!-- reCAPTCHA -->
								<div class="g-recaptcha" data-sitekey="6LccBCITAAAAALH6o8O6ceow3booCuIEc4kPriph"></div>

								<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
								<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
							</form>

							<!--empty area for form error/success output-->
							<div class="row">
								<div class="col-xs-12">
									<div id="output-area"></div>
								</div>
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