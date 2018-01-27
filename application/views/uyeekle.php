<!DOCTYPE html>
<?php
$this->load->view('_header');
?>
<html lang="en">
<meta charset="utf-8">
<title><?$veri[0]->ad?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?$veri[0]->description?>">
<meta name="keywords" content="<?$veri[0]->keywords?>">

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
  <h4><span>Kayıt Sayfası</span></h4>
</section>
<div class="span7">
						<h4 class="title"><span class="text"><strong>Kayıt</strong> Formu</span></h4>
						<form action="<?=base_url()?>home/ekle_kaydet" method="post" class="form-stacked">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Adınız Soyadınız</label>
									<div class="controls">
										<input type="text" placeholder="Adsoy" name="adsoy" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Email adresi:</label>
									<div class="controls">
										<input type="email" placeholder="email" name="email" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Şifreniz:</label>
									<div class="controls">
										<input type="password" placeholder="Şifre" name="sifre" class="input-xlarge">
									</div>
								</div>
                <div class="control-group">
									<label class="control-label">Şehir:</label>
									<div class="controls">
                    <select class="form-control input-lg m-bot15" name="sehir">
                                          <option>Istanbul</option>
                                          <option>Izmir</option>
                                          <option>Antalya</option>
                                      </select>
									</div>
								</div>
								<hr>
								<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Oluştur"></div>
							</fieldset>
						</form>
  			</div>
</div>
<?php
$this->load->view('_footer');
?>
