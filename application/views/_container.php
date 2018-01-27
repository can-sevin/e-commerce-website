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
<section  class="homepage-slider" id="home-slider">
	<div class="flexslider ">
		<?php
		$say=0;
		$aktf=null;
		foreach ($kampanya as $rs) {
			$say++;
			if($say==1)
				$aktf="active";
			else
				$aktf=null;
		 ?>
    <ul class="slides <?=$aktf?>">
      <li>
				<a href="<?=base_url()?>home/urundetay/<?=$rs->id?>">
					<img style="width:30%" src="<?=base_url()?>uploads/<?=$rs->resim?>"></a>
        <div class="introoo">
          <h1><?=$rs->ad?></h1>
					<p><span><?=$rs->description?></span></p>
        </div>
      </li>
		</ul>
			<?php } ?>
  </div>
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
