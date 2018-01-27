<!DOCTYPE html>
<?php
$this->load->view('_header'); ?>
<title><?veri[0]->ad?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?$veri[0]->description?>">
<meta name="keywords" content="<?$veri[0]->keywords?>">
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->

		<!-- bootstrap -->
		<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="<?=base_url()?>temp/themes/css/bootstrappage.css" rel="stylesheet"/>

		<!-- global styles -->
		<link href="<?=base_url()?>temp/themes/css/main.css" rel="stylesheet"/>
		<link href="<?=base_url()?>temp/themes/css/jquery.fancybox.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="<?=base_url()?>temp/themes/js/jquery-1.7.2.min.js"></script>
		<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
		<script src="<?=base_url()?>temp/themes/js/superfish.js"></script>
		<script src="<?=base_url()?>temp/themes/js/jquery.scrolltotop.js"></script>
		<script src="<?=base_url()?>temp/themes/js/jquery.fancybox.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>

		<div id="wrapper" class="container">
			<section class="header_text sub">
				<h4><span>Ürün Detayı</span></h4>
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span9">
						<div class="row">
							<div class="span4">
								<a href="" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>"</a>
								<ul class="thumbnails small">
									<?php
									foreach($resimler as $rs)
									{
										?>
										<li class="span1">
											<a href="" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="<?=base_url()?>uploads/<?=$rs->resim?>"</a>
										</li>
									<?php } ?>
								</ul>
							</div>
							<div class="span5">
								<address>
									<strong>Ürün Adı:</strong> <span><?=$veri[0]->ad?></span><br>
									<strong>Ürün Kodu:</strong> <span><?=$veri[0]->kodu?></span><br>
									<strong>Kalan Stok:</strong> <span><?=$veri[0]->stok?></span><br>
								</address>
								<h4><strong>Fiyat:<?=$veri[0]->sfiyat?></strong></h4>
							</div>
							<div class="span5">
								<form class="form-inline" method="post" action="<?=base_url()?>uye/sepete_ekle">
									<input type="hidden" name="urunid" value="<?=$veri[0]->id?>" class="span6">
									<label>Adet:</label>
									<input type="number" name="miktar" value="1" class="span1" placeholder="1" min="1" max="<?$veri[0]->stok?>">
									<button class="btn btn-inverse" type="submit">Sepete Ekle</button>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									<li class=""><a href="#profile">Yorum</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="home"><?=$veri[0]->description?></div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">
											<tbody>
												<tr class="">
													<th>Size</th>
													<td>Large, Medium, Small, X-Large</td>
												</tr>
												<tr class="alt">
													<th>Colour</th>
													<td>Orange, Yellow</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
					</div>
				</div>
			</section>
		</div>
		<script src="<?=base_url()?>temp/themes/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});

				$('#myCarousel-2').carousel({
                    interval: 2500
                });
			});
		</script>
		<?php
		$this->load->view('_footer'); ?>
    </body>
</html>
