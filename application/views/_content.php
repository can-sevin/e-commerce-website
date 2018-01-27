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
<section class="header_text">
  Daha ucuzunu bulamazsınız...
</section>
<section class="main-content">
    <div class="span12">
      <div class="row">
        <div class="span12">
          <h4 class="title">
            <span class="pull-left"><span class="text"><span class="line">YENİ <strong>ÜRÜNLERİMİZ</strong></span></span></span>
            <span class="pull-right">
              <a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
            </span>
          </h4>
          <div id="myCarousel" class="myCarousel carousel slide">
            <div class="carousel-inner">
              <div class="active item">
                <ul class="thumbnails">
									<?php
										foreach ($yeni as $rs)
									{ ?>
                  <li class="span3">
                    <div class="product-box">
                      <span class="sale_tag"></span>
                      <p><a class="zoomTool" href="<?=base_url()?>home/urundetay/<?=$rs->id?>"title="add to cart"><?=$rs->ad?></a></p>
                      <a href="<?=base_url()?>home/urundetay/<?=$rs->id?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>"class="title"></a><br/>
                      <a href="products.php" class="category"></a>
                      <p class="price">700TL</p>
                    </div>
                  </li>
								<?php } ?>
            </div>
          </div>
        </div>
      </div>
		</div>
      <br/>
      <div class="row">
        <div class="span12">
          <h4 class="title">
            <span class="pull-left"><span class="text"><span class="line">RASTGELE <strong>ÜRÜNLER</strong></span></span></span>
            <span class="pull-right">
              <a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
            </span>
          </h4>
          <div id="myCarousel-2" class="myCarousel carousel slide">
            <div class="carousel-inner">
              <div class="active item">
                <ul class="thumbnails">
									<?php
										foreach ($random as $rs)
									{ ?>
                  <li class="span3">
                    <div class="product-box">
											<span class="sale_tag"></span>
                      <p><a class="zoomTool" href="<?=base_url()?>home/urundetay/<?=$rs->id?>"title="add to cart"><?=$rs->ad?></a></p>
                      <a href="<?=base_url()?>home/urundetay/<?=$rs->id?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>"class="title"></a><br/>
                      <a href="products.php" class="category"></a>
                      <p href="<?=base_url()?>home/urundetay/<?=$rs->id?>"class="price"><?=$rs->sfiyat?></p>
                    </div>
                  </li>
								<?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row feature_box">
        <div class="span4">
          <div class="service">
            <div class="responsive">
              <img src="<?=base_url()?>temp/themes/images/feature_img_2.png" alt="" />
              <h4><strong>2 YIL GARANTİ</strong></h4>
              <p>Ürünlerimiz 2 yıl garantili.</p>
            </div>
          </div>
        </div>
        <div class="span4">
          <div class="service">
            <div class="customize">
              <img src="<?=base_url()?>temp/themes/images/feature_img_1.png" alt="" />
              <h4><strong>KARGO BEDAVA</strong></h4>
              <p>Yurtiçi kargo ile ürünleriniz kapınıza kadar teslim.</p>
            </div>
          </div>
        </div>
        <div class="span4">
          <div class="service">
            <div class="support">
              <img src="<?=base_url()?>temp/themes/images/feature_img_3.png" alt="" />
              <h4><strong>7/24 DESTEK</strong></h4>
              <p>7/24 yanınızdayız.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="our_client">
  <h4 class="title"><span class="text">Manufactures</span></h4>
  <div class="row">
    <div class="span2">
      <a href="#"><img alt="" src="<?=base_url()?>temp/themes/images/clients/14.png"></a>
    </div>
    <div class="span2">
      <a href="#"><img alt="" src="<?=base_url()?>temp/themes/images/clients/35.png"></a>
    </div>
    <div class="span2">
      <a href="#"><img alt="" src="<?=base_url()?>temp/themes/images/clients/1.png"></a>
    </div>
    <div class="span2">
      <a href="#"><img alt="" src="<?=base_url()?>temp/themes/images/clients/2.png"></a>
    </div>
    <div class="span2">
      <a href="#"><img alt="" src="<?=base_url()?>temp/themes/images/clients/3.png"></a>
    </div>
    <div class="span2">
      <a href="#"><img alt="" src="<?=base_url()?>temp/themes/images/clients/4.png"></a>
    </div>
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
