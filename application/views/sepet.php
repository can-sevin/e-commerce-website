<?php
$this->load->view('_header');
?>
 <!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>

		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="themes/js/superfish.js"></script>
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="themes/js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>
			<section class="main-content">
				<div class="row">
					<div class="span9">
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
                  <th>Resim</th>
									<th>Ürün Adı</th>
									<th>Miktar</th>
									<th>Tek Ürün Fiyat</th>
									<th>Fiyat</th>
                  <th>Sil</th>
								</tr>
							</thead>
							<tbody>
                <?php
                  $rn=0;
                  $toplam=0;
                  foreach($veriler as $rs)
                  {
                    $rn++;
                    $tutar=$rs->satfiyat * $rs->adet;
                    $toplam+=$tutar;
                    ?>
								<tr <?=$rn?>>
                  <td>
                    <a href="<?=base_url()?>home/urundetay/<?=$rs->urun_id?>">
                    <img src="<?=base_url()?>uploads/<?=$rs->urunresim?>" height="60" width="60"/>
                    </a>
                </td>
									<td><?=$rs->urunadi?></td>
									<td><?=$rs->adet?></td>
									<td><?=$rs->satfiyat?> TL</td>
									<td><?=($rs->satfiyat * $rs->adet)?> TL</td>
                  <td><a href="<?=base_url()?>uye/sepetsil/<?=$rs->Id?>" onclick="return confirm('Slinecek Emin Misin?')" class="btn btn-block btn-danger btn-xs">SİL<i class="fa fa-remove"></i></td>
								</tr>
                <?php
              }
             ?>
							</tbody>
						</table>
						<hr>
						<p class="cart-total right">
							<strong>Toplam Tutar</strong>:<?=$toplam?><br>
						</p>
						<hr/>
						<p class="buttons center">
                <form method="post" action="<?=base_url()?>uye/satinal">
                  <input type="hidden" name="toplam" value="<?=$toplam?>" >
                  <button type="submit" class="shopBtn" value="Sepete Ekle"> Satınal</button>
                </form>
            </p>
					</div>
				</div>
			</section>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>
    </body>
</html>
<?php
$this->load->view('_footer'); ?>
