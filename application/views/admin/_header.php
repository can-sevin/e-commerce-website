<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?=base_url()?>assets/admin/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?=base_url()?>assets/admin/css/bootstrap-theme.css" rel="stylesheet">
    <!-- font icon -->
    <link href="<?=base_url()?>assets/admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?=base_url()?>assets/admin/css/font-awesome.min.css" rel="stylesheet" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/css/owl.carousel.css" type="text/css"/>
	<link href="<?=base_url()?>assets/admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet"/>
    <!-- Custom styles -->
    <link href="<?=base_url()?>assets/admin/css/style.css" rel="stylesheet"/>
    <link href="<?=base_url()?>assets/admin/css/style-responsive.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet"/>
  </head>
  <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">Nice <span class="lite">Admin</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>
                </ul>
                <!--  search form end -->
            </div>

            <div class="top-nav notification-row">
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">

                    <!-- task notificatoin start -->
                    <li id="task_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-task-l"></i>
                            <span class="badge bg-important">6</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 6 pending letter</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Design PSD </div>
                                        <div class="percent">90%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                            <span class="sr-only">90% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">
                                            Project 1
                                        </div>
                                        <div class="percent">30%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                            <span class="sr-only">30% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Digital Marketing</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Logo Designing</div>
                                        <div class="percent">78%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                            <span class="sr-only">78% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Mobile App</div>
                                        <div class="percent">50%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar"  role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="<?=base_url()?>assets/admin/./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="<?=base_url()?>assets/admin/./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="<?=base_url()?>assets/admin/./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="<?=base_url()?>assets/admin/./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span>
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span>
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?=base_url()?>uploads/a.jpg" height="40">
                            </span>
                            <span class="username"> <?=$this->session->admin_session["adsoy"]?> </span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>admin/login/login_cik"><i class="icon_key_alt"></i> Çıkış</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i> Documentation</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>
      <!-- javascripts -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
      <script src="<?=base_url()?>assets/admin/js/jquery.js"></script>
      <script src="<?=base_url()?>assets/admin/js/jquery-ui-1.10.4.min.js"></script>
      <script src="<?=base_url()?>assets/admin/js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="<?=base_url()?>assets/admin/js/jquery-ui-1.9.2.custom.min.js"></script>
      <!-- bootstrap -->
      <script src="<?=base_url()?>assets/admin/js/bootstrap.min.js"></script>
      <!-- nice scroll -->
      <script src="<?=base_url()?>assets/admin/js/jquery.scrollTo.min.js"></script>
      <script src="<?=base_url()?>assets/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
      <!-- charts scripts -->
      <script src="<?=base_url()?>assets/admin/assets/jquery-knob/js/jquery.knob.js"></script>
      <script src="<?=base_url()?>assets/admin/js/jquery.sparkline.js" type="text/javascript"></script>
      <script src="<?=base_url()?>assets/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
      <script src="<?=base_url()?>assets/admin/js/owl.carousel.js"></script>
      <!-- jQuery full calendar -->
      <<script src="<?=base_url()?>assets/admin/js/fullcalendar.min.js"></script>
        <!-- Full Google Calendar - Calendar -->
        <script src="<?=base_url()?>assets/admin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
        <!--script for this page only-->
        <script src="<?=base_url()?>assets/admin/js/calendar-custom.js"></script>
        <script src="<?=base_url()?>assets/admin/js/jquery.rateit.min.js"></script>
        <!-- custom select -->
        <script src="<?=base_url()?>assets/admin/js/jquery.customSelect.min.js"></script>
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
              'draw': function() {
                $(this.i).val(this.cv + '%')
              }
            })
          });

          //carousel
          $(document).ready(function() {
            $("#owl-slider").owlCarousel({
              navigation: true,
              slideSpeed: 300,
              paginationSpeed: 400,
              singleItem: true

            });
          });

          //custom select box

          $(function() {
            $('select.styled').customSelect();
          });

          /* ---------- Map ---------- */
          $(function() {
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
              onLabelShow: function(e, el, code) {
                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
              }
            });
          });
        </script>
  </html>
