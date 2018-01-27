<!DOCTYPE html>
<?php
$this->load->view('_header');
$this->load->view('_container'); ?>
<html lang="en">
<meta charset="utf-8">
<title><?veri[0]->ad?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?veri[0]->description?>">
<meta name="keywords" content="<?veri[0]->keywords?>">

<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
<!-- bootstrap -->
<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">

<link href="<?=base_url()?>temp/themes/css/bootstrappage.css" rel="stylesheet"/>

<!-- global styles -->
<link href="<?=base_url()?>temp/themes/css/flexslider.css" rel="stylesheet"/>
<link href="<?=base_url()?>temp/themes/css/main.css" rel="stylesheet"/>

<!-- scripts -->
<script src="<?=base_url()?>temp/themes/js/jquery-1.7.2.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>temp/themes/js/superfish.js"></script>
<script src="<?=base_url()?>temp/themes/js/jquery.scrolltotop.js"></script>
<!--[if lt IE 9]>
  <script src="http://php5shim.googlecode.com/svn/trunk/php5.js"></script>
  <script src="<?=base_url()?>temp/themes/js/respond.min.js"></script>
<![endif]-->
</head>
<div id="wrapper" class="container">
<section class="header_text sub">
  <h4><span>Üyelik</span></h4>
</section>
<section class="main-content">
				<div class="row">
					<div class="span5">
						<h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
						<form action="#" method="post">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
										<input type="text" placeholder="Enter your username" id="username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password</label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" id="password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" type="submit" value="Sign into your account">
									<hr>
									<p class="reset">Recover your <a tabindex="4" href="#" title="Recover your username or password">username or password</a></p>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="span7">
						<h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
						<form action="#" method="post" class="form-stacked">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
										<input type="text" placeholder="Enter your username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Email address:</label>
									<div class="controls">
										<input type="password" placeholder="Enter your email" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password:</label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<p>Now that we know who you are. I'm not a mistake! In a comic, you know how you can tell who the arch-villain's going to be?</p>
								</div>
								<hr>
								<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Create your account"></div>
							</fieldset>
						</form>
					</div>
				</div>
			</section>
</div>
<?php
$this->load->view('_footer');
?>
