<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      @section('titrePage')
        BackOffice
      @show
    </title>
    <meta name="description"
    content="@section('descPage') backoffice  @show">



    @section('css')
          <!-- Bootstrap -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://bootswatch.com/lumen/bootstrap.min.css">
          <link rel="stylesheet" href="{{ asset('css/main.css') }}">
            <!-- Bootstrap -->
           <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
           <!-- Font Awesome -->
           <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
           <!-- iCheck -->
           <link href="{{ asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
           <!-- bootstrap-progressbar -->
           <link href="{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
           <!-- jVectorMap -->
           <link href="{{ asset('css/maps/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet"/>

           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" media="screen" title="no title" charset="utf-8">

           <!-- Custom Theme Style -->
          <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">
          <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
          <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
          <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->
    @show

  </head>
  <body class="nav-md">

    <div class="container body">
      <div class="main_container">
            @include('partial/_sidebar')
            @include('partial/_topmenu')

            <div class="right_col" role="main" style="min-height: 1381px;">

                <ol class="breadcrumb">
                  @section('arianne')
                    <li><a href="{{ url('/')}}">Accueil</a></li>
                  @show
                </ol>


                @section('content')
                @show
            </div>
        </div>
      </div>

    <footer>
      <div class="pull-right">
        Laravel Project M9 by <a href="https://colorlib.com">@Symfomany</a>
      </div>
      <div class="clearfix"></div>
    </footer>

  @section('js')

    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('vendors/bernii/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('vendors/skycons/skycons.js') }}"></script>

    <script src="{{ asset('build/js/custom.min.js') }}"></script>
    <script src="{{ asset('js/general.js') }}"></script>
    
    <script src="{{ asset('vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>

    <script>
      $(function() {
        $('.chart').easyPieChart({
          easing: 'easeOutElastic',
          delay: 3000,
          barColor: '#26B99A',
          trackColor: '#fff',
          scaleColor: false,
          lineWidth: 20,
          trackWidth: 16,
          lineCap: 'butt',
          onStep: function(from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
          }
        });
      });
    </script>
  @show

  </body>
  </html>
