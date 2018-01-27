<!DOCTYPE html>
<html lang="en">
<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>
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
	<link href="<?=base_url()?>assets/admin/css/widposts.css" rel="stylesheet">
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
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-laptop"></i>Dashboard</li>
					</ol>
				</div>
			</div>
        <section class="panel-body">
                <header class="panel-heading tab-bg-primary">
                  <ul class="nav nav-tabs">
                    <li class="active">
                      <a data-toggle="tab" href="#genel">Genel</a>
                    </li>
                    <li class="">
                      <a data-toggle="tab" href="#email">Email</a>
                    </li>
                    <li class="">
                      <a data-toggle="tab" href="#sosyal">Sosyal</a>
                    </li>
                    <li class="">
                      <a data-toggle="tab" href="#hakkimizda">Hakkımızda</a>
                    </li>
                    <li class="">
                      <a data-toggle="tab" href="#iletisim">İletişim</a>
                    </li>
                  </ul>
                </header>
                <div class="panel-body">
                  <div class="tab-content">
          <div id="genel" class="tab-pane active">
          <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal " method="post" action="<?=base_url()?>admin/home/ayarlar_guncelle/<?=$veri[0]->id?>">
                    <div class="form-group ">
                      <label class="control-label col-lg-2">Ad:<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" name="ad" value="<?=$veri[0]->ad?>" type="text">
                      </div>
                    </div>
                    <div class="form-group ">
                      <label class="control-label col-lg-2">Açıklama:<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" name="description" value="<?=$veri[0]->description?>" type="text">
                      </div>
                    </div>
                    <div class="form-group ">
                      <label class="control-label col-lg-2">Keywords:<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " name="keywords" value="<?=$veri[0]->keywords?>" type="text">
                      </div>
                    </div>
                    <div class="form-group ">
                      <label  class="control-label col-lg-2">Adres:<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " name="adres" value="<?=$veri[0]->adres?>" type="text">
                      </div>
                    </div>
                    <div class="form-group ">
                      <label class="control-label col-lg-2">Telefon:<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " name="telefon" value="<?=$veri[0]->telefon?>" type="text">
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="email" class="control-label col-lg-2">Şehir:<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " name="sehir" value="<?=$veri[0]->sehir?>" type="text">
                      </div>
                    </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
                    <div id="sosyal" class="tab-pane">
                      <div class="row">
                      <div class="col-lg-12">
                        <section class="panel">
                          <div class="panel-body">
                            <div class="form">
                                <div class="form-group ">
                                  <label class="control-label col-lg-2">Facebook:<span class="required">*</span></label>
                                  <div class="col-lg-10">
                                    <input class=" form-control" name="facebook" value="<?=$veri[0]->facebook?>" type="text">
                                  </div>
                                </div>
                                <div class="form-group ">
                                  <label class="control-label col-lg-2">Twitter:<span class="required">*</span></label>
                                  <div class="col-lg-10">
                                    <input class=" form-control" name="twitter" value="<?=$veri[0]->twitter?>" type="text">
                                  </div>
                                </div>
                                <div class="form-group ">
                                  <label class="control-label col-lg-2">Instagram:<span class="required">*</span></label>
                                  <div class="col-lg-10">
                                    <input class="form-control " name="instagram" value="<?=$veri[0]->instagram?>" type="text">
                                  </div>
                                </div>
                                <div class="form-group ">
                                  <label  class="control-label col-lg-2">Pinterest:<span class="required">*</span></label>
                                  <div class="col-lg-10">
                                    <input class="form-control " name="pinterest" value="<?=$veri[0]->pinterest?>" type="text">
                                  </div>
                                </div>
                            </div>
                          </div>
                        </section>
                      </div>
                    </div>
                    </div>
            <div id="email" class="tab-pane">
                      <div class="row">
                      <div class="col-lg-12">
                        <section class="panel">
                          <div class="panel-body">
                            <div class="form">
                                <div class="form-group ">
                                  <label class="control-label col-lg-2">Stmpserver:<span class="required">*</span></label>
                                  <div class="col-lg-10">
                                    <input class=" form-control" name="stmpserver" value="<?=$veri[0]->stmpserver?>" type="number">
                                  </div>
                                </div>
                                <div class="form-group ">
                                  <label class="control-label col-lg-2">Stmpmail:<span class="required">*</span></label>
                                  <div class="col-lg-10">
                                    <input class=" form-control" name="stmpmail" value="<?=$veri[0]->stmpmail?>" type="text">
                                  </div>
                                </div>
                                <div class="form-group ">
                                  <label class="control-label col-lg-2">Port:<span class="required">*</span></label>
                                  <div class="col-lg-10">
                                    <input class="form-control" name="stmpport" value="<?=$veri[0]->stmpport?>" type="number">
                                  </div>
                                </div>
                                <div class="form-group ">
                                  <label  class="control-label col-lg-2">Şifre:<span class="required">*</span></label>
                                  <div class="col-lg-10">
                                    <input class="form-control" name="password" value="<?=$veri[0]->password?>" type="password">
                                  </div>
                                </div>
                            </div>
                          </div>
                        </section>
                      </div>
                    </div>
                    </div>
                    <div id="hakkimizda" class="tab-pane">
                      <div class="form-group">
                          <label>Hakkımızda:<span class="required">*</span></label><br>
                          <textarea class="form-control ckeditor" name="description" rows=10 cols=80 > <?=$veri[0]->description?> </textarea>
                      </div>
                    </div>
                    <div id="iletisim" class="tab-pane">
                      <div class="form-group">
                          <label>İletişim:<span class="required">*</span></label><br>
                          <textarea class="form-control ckeditor" name="iletisim" rows=10 cols=80 > <?=$veri[0]->iletisim?> </textarea>
                      </div>
                    </div>
                      <div class="col-lg-10">
                        <button class="btn btn-primary" type="submit">Güncelle</button>
                    </div>
                  </form>
                  </div>
              </section>
            </section>
          </section>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
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
  <script type="text/javascript" src="<?=base_url()?>assets/admin/assets/ckeditor/ckeditor.js"></script>
  <script src="<?=base_url()?>assets/admin/js/jquery.hotkeys.js"></script>
  <script src="<?=base_url()?>assets/admin/js/bootstrap-wysiwyg.js"></script>
  <script src="<?=base_url()?>assets/admin/js/bootstrap-wysiwyg-custom.js"></script>
  <script src="<?=base_url()?>assets/admin/js/form-component.js"></script>
  <script src="<?=base_url()?>assets/admin/js/scripts.js"></script>
