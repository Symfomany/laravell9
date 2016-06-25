@extends('layout')

@section('titrePage')
  @parent  - Il parlent de nous
@endsection

@section('arianne')
  @parent
    <li>Presse</li>
@show

@section('descPage')
  @parent  kit presse
@endsection

@section('css')
  @parent
  <link rel="stylesheet" href="{{ asset('css/presse.css') }}" media="screen" title="no title" charset="utf-8">
@endsection

@section('js')
  @parent
  <script type="text/javascript" src=" {{ asset('js/presse.js')}}"></script>
@endsection

@section('content')

  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h1 class="page-title"><span class="fa fa-file-pdf-o"></span> Kit de presse</h1>
        <ul class="nav navbar-right panel_toolbox">
          <li><a href="http://restaurant-lyonnais.com/images/pm1.pdf">Paris Match</a></li>
          <li><a href="http://restaurant-lyonnais.com/images/pm3.pdf">VSD</a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
          Add content to the page ...
      </div>
    </div>
  </div>






@endsection
