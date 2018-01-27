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
  <h4><span>Contact Us</span></h4>
</section>
<div class="span7">
  <?php if ($this->session->flashdata("mesaj")) { ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert"></button>
        <?=$this->session->flashdata("mesaj")?>
    </div>
  <?php } ?>
<script>
  function validateForm() {
    if(document.forms["myForm"]["adsoy"].value==""){
        alert("Adsoy alanı boş olmamalı");
        return false;
    }
    if(document.forms["myForm"]["email"].value==""){
        alert("Email alanı boş olmamalı");
        return false;
    }
    if(document.forms["myForm"]["mesaj"].value==""){
        alert("Mesaj alanı boş olmamalı");
        return false;
    }
}
</script>
  <form method="post" name="myform" action="<?=base_url()?>home/mesaj_kaydet" onsubmit="return validateForm()">
    <fieldset>
      <div class="clearfix">
        <label for="name"><span>Adınız Soyadınız:</span></label>
        <div class="input">
          <input tabindex="1" size="18" name="adsoy" type="text" value="" class="input-xlarge" placeholder="Adınız Soyadınız">
        </div>
      </div>

      <div class="clearfix">
        <label for="email"><span>E-posta:</span></label>
        <div class="input">
          <input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge" placeholder="Email Addresiniz">
        </div>
      </div>

      <div class="clearfix">
        <label for="message"><span>Mesajınız:</span></label>
        <div class="input">
          <textarea tabindex="3" class="input-xlarge" id="message" name="mesaj" rows="7" placeholder="Mesajınız..."></textarea>
        </div>
      </div>
      <div class="actions">
        <input type="submit" name="" value="gönder" class="btn btn-inverse">
      </div>
    </fieldset>
  </form>
</div>
</div>
<?php
$this->load->view('_footer');
?>
