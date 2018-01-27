<?php
$this->load->view('_uyesidebar'); ?>
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
 <h3>Hesabım</h3>
 <?php if($this->session->flashdata("mesaj")) {?>
    <b><?=$this->session->flashdata("mesaj")?> <b>
 <?php } ?>
<body>
<div id="wrapper" class="container">
  <section class="main-content">
 <div class="span5">
						<h4 class="title"><span class="text"><strong>Üye</strong>Hesap</span></h4>
						<form action="<?=base_url()?>uye/uye_guncelle" method="post">
							<fieldset>
                <div class="control-group">
									<label class="control-label">Adı soyadı:</label>
									<div class="controls">
										<input type="email" value="<?=$uye[0]->adsoy?>" name="adsoy">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Email:</label>
									<div class="controls">
										<input type="email" value="<?=$uye[0]->email?>" name="email">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Şifre:</label>
									<div class="controls">
										<input type="password" value="<?=$uye[0]->sifre?>" name="sifre">
									</div>
								</div>
                <div class="control-group">
									<label class="control-label">Şehir:</label>
									<div class="controls">
										<input type="password" value="<?=$uye[0]->sehir?>" name="sehir">
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" type="submit" value="Güncelle">
								</div>
							</fieldset>
						</form>
					</div>
        </section>
      </div>
    </body>
    <?php
    $this->load->view('_footer'); ?>
