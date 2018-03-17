<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Gallery Furniture</title>

  <!-- Bootstrap CSS -->
   <link rel="shortcut icon" type="image/ico" href="{{asset('ha.jpg')}}">
  <link href="{{asset('baru/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{asset('baru/css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{asset('baru/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{asset('baru/css/font-awesome.min.css" rel="stylesheet')}}" />
  <!-- full calendar css-->
  <link href="{{asset('baru/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
  <link href="{{asset('baru/assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{asset('baru/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{asset('baru/css/owl.carousel.css')}}" type="text/css">
  <link href="{{asset('baru/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="{{asset('baru/stylesheet')}}" href="css/fullcalendar.css">
  <link href="{{asset('baru/css/widgets.css')}}" rel="stylesheet">
  <link href="{{asset('baru/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('baru/css/style-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('baru/css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="{{asset('baru/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
   <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/jquery.dataTables.css" rel="stylesheet">
    <link href="/css/dataTables.bootstrap.css" rel="stylesheet">


    <link href="/css/app.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="" class="logo">Gallery <span class="lite">Furniture</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">Admin Gallery</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li>
                <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="/home">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li>
            <a class="" href="{{ route('modelis.index')}}">
                          <i class="icon_desktop"></i>
                          <span>Model</span>

                      </a>
          <li>
            <a class="" href="{{ route('jenis.index')}}">
                          <i class="icon_table"></i>
                          <span>Jenis Barang</span>

                      </a>
          <li>
            <a class="" href="{{ route('barangs.index')}}">
                          <i class="icon_genius"></i>
                          <span>Barang</span>

                      </a>

          </li>

            <li>
            <a class="" href="{{ route('transaksis.index')}}">
                          <i class="icon_piechart"></i>
                          <span>Transaksi</span>

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
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
           
          </div>
        </div>
        <!-- project team & activity end -->

        @yield('content')

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->


  <script src="{{asset('baru/js/jquery.js')}}"></script>
  <script src="{{asset('baru/js/jquery-ui-1.10.4.min.js')}}"></script>
  <script src="{{asset('baru/js/jquery-1.8.3.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('baru/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <!-- bootstrap -->
  <script src="{{asset('baru/js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{asset('baru/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('baru/s/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{asset('baru/assets/jquery-knob/js/jquery.knob.js')}}"></script>
  <script src="{{asset('baru/js/jquery.sparkline.js')}}" type="text/javascript"></script>
  <script src="{{asset('baru/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
  <script src="{{asset('baru/js/owl.carousel.js')}}"></script>
  <!-- jQuery full calendar -->
  <<script src="{{asset('baru/js/fullcalendar.min.js')}}"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{asset('baru/assets/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
    <!--script for this page only-->
    <script src="{{asset('baru/js/calendar-custom.js')}}"></script>
    <script src="{{asset('baru/s/jquery.rateit.min.js')}}"></script>
    <!-- custom select -->
    <script src="{{asset('baru/js/jquery.customSelect.min.js')}}"></script>
    <script src="{{asset('baru/assets/chart-master/Chart.js')}}"></script>

    <!--custome script for all page-->
    <script src="{{asset('baru/js/scripts.js')}}"></script>
    <!-- custom script for this page-->
    <script src="{{asset('baru/js/sparkline-chart.js')}}"></script>
    <script src="{{asset('baru/js/easy-pie-chart.js')}}"></script>
    <script src="{{asset('baru/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('baru/js/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('baru/js/xcharts.min.js')}}"></script>
    <script src="{{asset('baru/js/jquery.autosize.min.js')}}"></script>
    <script src="{{asset('baru/js/jquery.placeholder.min.js')}}"></script>
    <script src="{{asset('baru/s/gdp-data.js')}}"></script>
    <script src="{{asset('baru/js/morris.min.js')}}"></script>
    <script src="{{asset('baru/js/sparklines.js')}}"></script>
    <script src="{{asset('baru/js/charts.js')}}"></script>
    <script src="{{asset('baru/js/jquery.slimscroll.min.js')}}"></script>
    
 <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables.bootstrap.min.js"></script>
    <script src="/js/dataTables.bootstrap.min.js"></script>
    <script src="/js/custom.js"></script>
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
    <script src="/js/app.js"></script>
    {{-- <script src="{{asset('/js/bootstrap.min.js')}}"></script> --}}
     <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables.bootstrap.min.js"></script>
    <script src="/js/dataTables.bootstrap.min.js"></script>
    <script src="/js/custom.js"></script>
   @yield('scripts')

</body>

</html>
