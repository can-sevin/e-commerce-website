<!DOCTYPE php>
<php lang="en">
	<head>
		<meta charset="utf-8">
		<title><?=$sayfa?> <?=$veri[0]->ad?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?=$veri[0]->description?>">
		<meta name="keywords" content="<?=$veri[0]->keywords?>">

		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/css/dropdown.css" rel="stylesheet">

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
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="Arama çubuğu">
					</form>
				</div>
				<nav>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">
							<?php
								$anasayfa=null;
								$hakkimizda=null;
								$iletisim=null;
								$bize_yazin=null;
								$uye=null;
								$sepetim=null;
								$kayit=null;
								if($menu=="anasayfa")
										$anasayfa="active";
								if($menu=="hakkimizda")
										$hakkimizda="active";
								if($menu=="iletisim")
										$iletisim="active";
								if($menu=="bize_yazin")
										$bize_yazin="active";
								if($menu=="uye")
										$uye="active";
								if($menu=="sepetim")
										$sepetim="active";
										if($menu=="kayit")
												$sepetim="active";
							 ?>
							<li><a  class="<?=$anasayfa?>" href="<?=base_url()?>home">Anasayfa</a></li>
							<li> <a class="<?=$hakkimizda?>" href="<?=base_url()?>home/hakkimizda">Hakkımızda</a></li>
							<li><a href="<?=base_url()?>home/kategoriler">Kategoriler</a></li>
							<li><a href="<?=base_url()?>home/kampanyalar">Kampanyalar</a></li>
							<li> <a class="<?=$bize_yazin?>" href="<?=base_url()?>home/bize_yazin">Bize Yazın</a></li>
							<li> <a class="<?=$iletisim?>"href="<?=base_url()?>home/iletisim">İletişim</a></li>
							<li> <a class="<?=$kayit?>"href="<?=base_url()?>uye">Kayıt Ol</a></li>
							<li><a href="<?=base_url()?>uye/sepetim">Sepetim<span class="badge badge warning"><?=$sepet[0]->say?></span></a></li>
							<li><a href="checkout.php"></a></li>
							<?php
								if($this->session->userdata("uye_session"))
							 { ?>
							 <li id="loginaf">
       					<a id="login-trigger" href="#">
         					<?=$this->session->uye_session["adsoy"]?><span>▼</span>
       					</a>
       				<div id="login-content">
         				<form>
           				<a href="<?=base_url()?>uye/hesabim">Hesabım</a>
 									<br><a class="<?=$sepetim?>" href="<?=base_url()?>uye/sepetim">Sepetim</a>
									<br><a href="<?=base_url()?>uye/siparisler">Siparişlerim</a>
									<br><a href="<?=base_url()?>uye/cikis">Çıkış</a>
         					</form>
									</div>
     						</li>
							</ul>
							</div>
						</div>
					</nav>
				</div>
							<?php }
							else
							{ ?>
    					<li id="loginaf">
      					<a id="login-trigger" href="#">
        					Giriş<span>▼</span>
      					</a>
      				<div id="login-content">
        				<form method="post" action="<?=base_url()?>home/login">
          				<fieldset id="inputs">
            			<input id="username" type="email" name="email" placeholder="E-mail" required>
            			<input id="password" type="password" name="sifre" placeholder="Şifre" required>
          				</fieldset>
          				<fieldset id="actions">
            			<input type="submit" id="submit" value="Giriş">
									<br><label><input type="checkbox" checked="checked">Beni Hatırla</label>
									<br><br><a href="<?=base_url()?>home/uye/sifremi_unuttum">Şifremi Unuttum</a>
								</fieldset>
								</form>
      						</div>
    							</li>
								</ul>
								</div>
							</div>
						</nav>
					</div>
							<?php }?>
		<div class="row">
		<div id="wrapper" class="container">
		<section class="navbar main-menu">
		  <div class="navbar-inner main-menu">
				<a href="<?=base_url()?>home" class="logo pull-left"><img src="<?=base_url()?>temp/themes/images/loggo.png" class="site_logo" alt=""></a>
			    <nav id="menu" class="pull-right">
					<?php foreach ($kategoriler as $rs) { ?>
		        <ul><li><a href="<?=base_url()?>kategoriler/<?=$rs->Id?>"><?=$rs->ad?></a></li></ul>
						<?php } ?>
		     	</nav>
		  </div>
		</section>
	</div>
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
			$(document).ready(function(){
  		$('#login-trigger').click(function(){
    	$(this).next('#login-content').slideToggle();
    	$(this).toggleClass('active');

    	if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
      else $(this).find('span').html('&#x25BC;')
    	})
			});
		</script>
  </php>
