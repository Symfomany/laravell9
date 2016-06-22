@extends('layout')

@section('titrePage')
  @parent  - Concept
@endsection

@section('arianne')
  @parent
    <li>Concept</li>
@show

@section('descPage')
  @parent  page concept
@endsection

@section('css')
  @parent
  <link rel="stylesheet" href="{{ asset('css/concept.css') }}" media="screen" title="no title" charset="utf-8">
@endsection

@section('js')
  @parent
  <script type="text/javascript" src=" {{ asset('js/concept.js')}}"></script>
@endsection

@section('content')
  <h1 class="page-title"><span class="fa fa-envira"></span> Concept</h1>
@endsection
