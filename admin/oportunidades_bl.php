<?php
  include_once(dirname(__DIR__) . '/Fw/config.php');

  $prepareEmprendimiendo = $sql->query('select * from mp_emprendimiento where emd_id = '. $_GET['emprendimiento']);

  $rsEmprendimiento = $sql->object_result($prepareEmprendimiendo);

  if($rsEmprendimiento)
  {
    $prepareTotalInversionista = $sql->query('select count(inv_cli_id) as totalInversionista from mq_inversion where inv_emd_id = '. $rsEmprendimiento->emd_id);

    $rsTotalInversionista = $sql->object_result($prepareTotalInversionista);
  }


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
          <div class = "pull-right tarjeta-costado">Mi Capital Actual: <strong>S/<?php echo $rsEmprendimiento->emd_monto; ?></strong></div>
          <p class = "">MQ Balanceado</p>
          <h2><?php echo $rsEmprendimiento->emd_nombre; ?></h2>
        </div>
              <!--overview start-->

      <div class="row" class = "portada">
        <img class = "portada" src = "assets/bl.jpg" style = "width:100%;">
			</div><!--/.row-->

      <div class="row" class = "" style = "margin-top:10px; margin-bottom:10px;position:relative;">
        <div class = "col-lg-4 col-md-4 col-sm-12 col-xs-12 box-red">
          <div class = "title">Alcanzado</div>
          <div class = "meter"><div class = "meter-content"></div></div>
          <div class = "count">79 000 de 100 000</div>
        </div>
        <div class = "col-lg-2 col-md-2 col-sm-6 col-xs-12 box">
          <div class="title">Inversionistas</div>
          <div class="count"><?php echo $rsTotalInversionista->totalInversionista; ?></div>
        </div>
        <div class = "col-lg-2 col-md-2 col-sm-6 col-xs-12 box">
          <div class="title">Participacion Promedio</div>
          <div class="count">2%</div>
        </div>
        <div class = "col-lg-2 col-md-2 col-sm-6 col-xs-12 box">
          <div class="title">Ganancia Estimada</div>
          <div class="count">4.5%</div>
        </div>
        <div class = "globo chat"><img src = "assets/misinversiones-icon-active.png"></div>
        <div class = "globo invertir"><img src = "assets/misinversiones-icon-active.png"></div>
        <div class = "globo contenido"></div>
			</div><!--/.row-->

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


      //carousel
      $(document).ready(function() {
        $('.globo.invertir').on('click',function(){
          $('.globo.contenido').empty();
          $('.globo.contenido').css('display','block');
          $('.globo.contenido').append('\
          <div  class= "titulo-contenido-globo">\
            <p>Monto a invertir</p>\
          </div>\
          <div  class= "input-contenido-globo">\
            <input type = "text" value = "" placeholder="S/ 5.00">\
          </div>\
          <div style= "text-align:center">\
            <div id= "montar-cargo" class= "btn-invertir">invertir</div>\
          </div>\
          ');

          var d = document.getElementById('montar-cargo');
          $(d).on('click',function(){
            $('body').append('<div class = "tapa"></div>\
            <div class = "bcp-cargar"><h3 >Escoge una cuenta o método de pago</h3><p>monto: <strong>s/. 5<strong></p>\
            <ul><li><p>Cuenta ahorros bcp</p><p>10010-1902210991129</p></li>\
            <li><p>Cuenta VISA</p><p>10010-1902210991129</p></li>\
            </ul></div>');

          });

        });

        $('.globo.chat').on('click',function(){
          $('.globo.contenido').empty();
          $('.globo.contenido').css('display','block');
          $('.globo.contenido').append('\
          <div  class= "titulo-contenido-globo">\
            <p>Mensaje</p>\
          </div>\
          <div  class= "input-contenido-globo">\
            <textarea type = "text" value = "" placeholder="S/ 5.00"></textarea>\
          </div>\
          <div style= "text-align:center">\
            <div class= "btn-invertir">enviar</div>\
          </div>\
          ');



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
