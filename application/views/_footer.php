<!DOCTYPE php>
<php lang="en">
	<head>
		<meta charset="utf-8">
		<title>Telefon satış sistemi</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
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
	<section id="footer-bar">
  <div class="row">
    <div class="span3">
      <h4>Navigation</h4>
      <ul class="nav">
        <li><a href="<?=base_url()?>application/views/index.php">Homepage</a></li>
        <li><a href="<?=base_url()?>application/views/about.php">About Us</a></li>
        <li><a href="<?=base_url()?>application/views/contact.php">Contact Us</a></li>
        <li><a href="<?=base_url()?>application/views/cart.php">Your Cart</a></li>
        <li><a href="<?=base_url()?>application/views/register.php">Login</a></li>
      </ul>
    </div>
    <div class="span4">
      <h4>My Account</h4>
      <ul class="nav">
        <li><a href="#">My Account</a></li>
        <li><a href="#">Order History</a></li>
        <li><a href="#">Wish List</a></li>
        <li><a href="#">Newsletter</a></li>
      </ul>
    </div>
    <div class="span5">
      <p class="logo"><img src="<?=base_url()?>temp/themes/images/logo.png" class="site_logo" alt=""></p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
      <br/>
      <span class="social_icons">
        <a class="facebook" href="#">Facebook</a>
        <a class="twitter" href="#">Twitter</a>
        <a class="skype" href="#">Skype</a>
        <a class="vimeo" href="#">Vimeo</a>
      </span>
    </div>
  </div>
</section>
<section id="copyright">
  <span>Copyright 2013 bootstrappage template  All right reserved.</span>
</section>
</div>
<script src="<?=base_url()?>temp/themes/js/common.js"></script>
<script src="<?=base_url()?>temp/themes/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
  $(function() {
    $(document).ready(function() {
      $('.flexslider').flexslider({
        animation: "fade",
        slideshowSpeed: 4000,
        animationSpeed: 600,
        controlNav: false,
        directionNav: true,
        controlsContainer: ".flex-container" // the container that holds the flexslider
      });
    });
  });
</script>
</php>
