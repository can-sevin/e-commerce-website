<!DOCTYPE html>
<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- Bootstrap CSS -->
    <link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?=base_url()?>assets/admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?=base_url()?>assets/admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?=base_url()?>assets/admin/css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="<?=base_url()?>assets/admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/admin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?=base_url()?>assets/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/css/owl.carousel.css" type="text/css">
	<link href="<?=base_url()?>assets/admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="<?=base_url()?>assets/admin/css/widgets.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/admin/css/style-responsive.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/admin/css/xcharts.min.css" rel=" stylesheet">
	<link href="<?=base_url()?>assets/admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i>Ürün Ekle</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Ana Sayfa</a></li>
              <li><i class="fa fa-table"></i>Ürün Ekle</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
        <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">
                    Uye Ekle
                </header>
                <div class="panel-body">
                    <form role="form" method="post" action="<?=base_url()?>admin/urunler/urun_ekle_kaydet">
                        <div class="form-group">
                            <label>Ürün Adı:</label>
                            <input type="text" name="ad" class="form-control" placeholder="Adı">
                        </div>
                        <div class="form-group">
                            <label>Kodu::</label>
                            <input type="text" name="kodu" class="form-control" placeholder="Kodu">
                        </div>
                        <div class="form-group">
                        <label>Kategori:</label>
                            <input type="text"  name="kategori"class="form-control" placeholder="Kategori">
                        </div>
                        <div class="form-group">
                            <label>Stok:</label>
                            <input type="text" name="stok" class="form-control" placeholder="stok">
                        </div>
                        <div class="form-group">
                            <label>Keywords:</label>
                            <input type="text" name="keywords" class="form-control" placeholder="keywords">
                        </div>
                        <div class="form-group">
                            <label>Açıklama:</label>
                            <input type="text" name="aciklama" class="form-control" placeholder="açıklama">
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <input type="text" name="description" class="form-control" placeholder="description">
                        </div>
                        <div class="form-group">
                            <label>Afiyat:</label>
                            <input type="text" name="afiyat" class="form-control" placeholder="afiyat">
                        </div>
                        <div class="form-group">
                            <label>Sfiyat:</label>
                            <input type="text" name="sfiyat" class="form-control" placeholder="sfiyat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Resim seçin:</label>
                            <input type="file" name="resim" id="exampleInputFile">
                        </div>
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </form>
                </div>
            </section>
        </div>
          </section>
    </section>
    <!--main content end-->
  </section>
      <!-- javascripts -->
    <script src="<?=base_url()?>assets/admin/js/jquery.js"></script>
	<script src="<?=base_url()?>assets/admin/js/jquery-ui-1.10.4.min.js"></script>
    <script src="<?=base_url()?>assets/admin/js/jquery-1.8.3.min.js"></script>
    <script type="<?=base_url()?>assets/admin/text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="<?=base_url()?>assets/admin/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?=base_url()?>assets/admin/js/jquery.scrollTo.min.js"></script>
    <script src="<?=base_url()?>assets/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="<?=base_url()?>assets/admin/assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="<?=base_url()?>assets/admin/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?=base_url()?>assets/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?=base_url()?>assets/admin/js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="<?=base_url()?>assets/admin/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="<?=base_url()?>assets/admin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?=base_url()?>assets/admin/js/calendar-custom.js"></script>
	<script src="<?=base_url()?>assets/admin/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?=base_url()?>assets/admin/js/jquery.customSelect.min.js" ></script>
	<script src="<?=base_url()?>assets/admin/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="<?=base_url()?>assets/admin/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?=base_url()?>assets/admin/js/sparkline-chart.js"></script>
    <script src="<?=base_url()?>assets/admin/js/easy-pie-chart.js"></script>
	<script src="<?=base_url()?>assets/admin/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?=base_url()?>assets/admin/js/xcharts.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/jquery.autosize.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/jquery.placeholder.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/gdp-data.js"></script>
	<script src="<?=base_url()?>assets/admin/js/morris.min.js"></script>
	<script src="<?=base_url()?>assets/admin/js/sparklines.js"></script>
	<script src="<?=base_url()?>assets/admin/js/charts.js"></script>
	<script src="<?=base_url()?>assets/admin/js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code/assets){
	      el.html(el.html()+' (GDP - '+gdpData[code/assets]+')');
	    }
	  });
	});
  </script>
  <?php
  $this->load->view('admin/_footer');
  ?>
