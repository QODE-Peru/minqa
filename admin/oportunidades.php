<?php
  include_once(dirname(__DIR__) . '/Fw/config.php');

  $prepareEmprendimiendo = $sql->query('select * from mp_emprendimiento as em left join mq_empresa as ep on em.emd_emp_id = ep.emp_id where 1');

  //var_dump($sql->array_result($prepareEmprendimiendo));
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Minqa</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">


      <header class="header bcp-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">minQa</a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">

            </div>

            <div class="top-nav notification-row">
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">

                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <span class="username">Jenifer Smith</span>
                          <b class="caret"></b>
                          <span class="profile-ava">
                              <img alt="" src="img/avatar1_small.jpg">
                          </span>

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
                                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
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
                <!--  search form start -->
                <ul class="nav pull-right top-menu">
                    <li >
                        <a >
                          <div class = "boton-aux">Publicar Proyecto
                          </div>
                        </a>
                    </li>
                </ul>
                <!--  search form end -->

            </div>
      </header>
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                <li class="">
                    <a class="" href="index.html">
                        <img class = "dashboard_icon" src = "assets/dashboard-icon.png">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="">
                    <a class="" href="misinversiones.html">
                        <img class = "dashboard_icon" src = "assets/misinversiones-icon.png">
                        <span>Mis Inversiones</span>
                    </a>
                </li>
                <li class="active">
                    <a class="" href="oportunidades.html">
                        <img class = "dashboard_icon" src = "assets/oportunidades-icon-active.png">
                        <span>Oportunidades</span>
                    </a>
                </li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">

      <section class="wrapper">
        <div class = "row" style = "padding:10px 0px;">
          <nav>
            <div class = "pull-left">Oportunidades</div>

            <ul class="nav pull-right top-menu">

                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <span class="">Categoría : <strong>Todos</strong></span>
                      <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <div class="log-arrow-up"></div>
                        <li class="eborder-top">
                            <a href="#"> MQ Conservadora</a>
                        </li>
                        <li>
                            <a href="#"> MQ Balanceada</a>
                        </li>
                        <li>
                            <a href="#"> MQ Crecimiento</a>
                        </li>
                        <li>
                            <a href="#"> MQ Alto Crecimiento</a>
                        </li>

                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <ul class="nav pull-right top-menu">

                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <span class="username">Rubro : <strong>Todos</strong></span>
                      <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <div class="log-arrow-up"></div>
                        <li class="eborder-top">
                            <a href="#"> Educación</a>
                        </li>
                        <li>
                            <a href="#"> Tecnología</a>
                        </li>
                        <li>
                            <a href="#"> Comercio</a>
                        </li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
          </nav>
        </div>
              <!--overview start-->



      <div class="row">

        <?php 
          while ($rs = $sql->array_result($prepareEmprendimiendo)) {
            echo '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="info-box foto-proyecto">
            <div class = "foto" style = "background-image: url(assets/bl.jpg); background-size:cover;"></div>
            <div class = "contenido">
              <div class="title"><a href = "oportunidades_bl.html">'.utf8_encode($rs['emd_nombre']).'</a></div>
              <div class="desc">'.utf8_encode($rs['emd_descripcion']).'</div>
              <div class="meter">
                <div class="meter-content"></div>
              </div>
              <div class="opciones">
                <div>Educación</div>
                <div>Moderado</div>
              </div>
            </div>
          </div><!--/.info-box-->
        </div><!--/.col-->';
          }
        ?>

        



          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
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
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>

  </body>
</html>
