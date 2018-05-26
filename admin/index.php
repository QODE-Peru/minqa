<?php
  include_once(dirname(__DIR__) . '/Fw/config.php');

  /*$res = $sql->query("SELECT * FROM `mq_inversion` ORDER BY `inv_id` DESC;"); 
  while($row = $sql->array_result($res)) 
  { 
      echo($row['spalte']."<br />\n"); 
  } */

$rs = $sql->query("select * from mq_inversion as iv left join mp_emprendimiento as em on iv.inv_emd_id = em.emd_id where inv_cli_id = " . $idCliente);

$rsTotales = $sql->query("select sum(inv_inversion) as inversion, sum(inv_ganancia) as ganancia, sum(inv_capital_actual) as capital_actual, sum(inv_diferencia) as diferencia from mq_inversion where inv_cli_id = ". $idCliente);
//var_dump($sql->array_result($rsTotales));

$rsTotalesRow = $sql->row_result($rsTotales);


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
                  <li class="active">
                      <a class="" href="index.html">
                          <img class = "dashboard_icon" src = "assets/dashboard-icon-active.png">
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="">
                      <a class="" href="misinversiones.html">
                          <img class = "dashboard_icon" src = "assets/misinversiones-icon.png">
                          <span>Mis Inversiones</span>
                      </a>
                  </li>
                  <li class="">
                      <a class="" href="oportunidades.html">
                          <img class = "dashboard_icon" src = "assets/oportunidades-icon.png">
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
              <!--overview start-->


      <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="info-box white-bg">
            <div class="title">Mis Inversiones</div>
            <div class="count">S/ <?php echo $rsTotalesRow[0] ?></div>
					</div><!--/.info-box-->
				</div><!--/.col-->

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="info-box white-bg">
            <div class="title">Mis Ganancias</div>
            <div class="count">S/ <?php echo $rsTotalesRow[1] ?></div>
					</div><!--/.info-box-->
				</div><!--/.col-->
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="info-box white-bg">
            <div class="title">Mis Capital Actual</div>
            <div class="count">S/ <?php echo $rsTotalesRow[2] ?></div>
          </div><!--/.info-box-->
				</div><!--/.col-->

				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <div class="info-box white-bg">
            <div class="title">Resumen General de Inversiones</div>
            <div class="tabla-bcp-marco">
              <table class = "tabla-bcp">
                <tr>
                  <th>
                    Proyectos
                  </th>
                  <th>
                    Inversiones (S/.)
                  </th>
                  <th>
                    Ganancias
                  </th>
                  <th>
                    Capital Actual
                  </th>
                  <th>
                    Diferencia %
                  </th>
                </tr>
                <?php
                while($row = $sql->array_result($rs)) 
                  { 
                      echo '<tr>
                            <td>'.$row['emd_nombre'].'   </td><td>S/. '.$row['inv_inversion'].'</td><td>S/. '.$row['inv_ganancia'].'</td><td>S/. '.$row['inv_capital_actual'].'</td><td>+ '.$row['inv_diferencia'].'%</td>
                            </tr>';
                  } 
                ?>
                <!--<tr>
                  <td>Laboratorios digitales   </td><td>S/. 1500</td><td>S/.350</td><td>S/. 1 850</td><td>+ 20%</td>
                </tr>
                <tr>
                  <td>Baños Portatiles         </td><td>S/. 800</td><td>S/. 50</td><td>S/. 850</td><td>+ 5%</td>
                </tr>
                <tr>
                  <td>Laboratorios digitales   </td><td>S/. 1500</td><td>S/.350</td><td>S/. 1 850</td><td>+ 20%</td>
                </tr>
                <tr>
                  <td>Baños Portatiles         </td><td>S/. 800</td><td>S/. 50</td><td>S/. 850</td><td>+ 5%</td>
                </tr>
                <tr class ="spacer"></tr>-->
                <tr>
                  <td>Total         </td><td>S/. 6 500</td><td>S/. 3 500</td><td>S/. 10 000</td><td>+ 55%</td>
                </tr>
                <?php
                  while ($totales = $sql->array_result($rsTotales))
                  {
                    echo '<tr>
                  <td>Total         </td><td>S/. '.$totales['inversion'].'</td><td>S/. '.$totales['ganancia'].'</td><td>S/. '.$totales['capital_actual'].'</td><td>+ '.$totales['diferencia'].'%</td>
                </tr>';
                  }
                ?>
              </table>
            </div>
          </div><!--/.info-box-->
        </div><!--/.col-->

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="info-box white-bg">
            <div class="title">Resumen Visual</div>
            <div class="bcp-tabla-imagen"><img src="img/tabla.png"></div>
					</div><!--/.info-box-->
				</div><!--/.col-->




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
