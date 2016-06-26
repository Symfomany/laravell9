@extends('layout')

@section('arianne')
  @parent
    <li>Liste de mes films</li>
@endsection
@section('css')
  @parent
  <link rel="stylesheet" href="{{ asset('css/list.css') }}" media="screen" title="no title" charset="utf-8">
@endsection
@section('content')
  <h1><span class="fa fa-film"></span> Liste de mes films <span class="badge">{{ count($movies) }} films</span></h1>


  <hr />
<div class="row">
  <a href="{{ route('movies.creer') }}" class="pull-right btn btn-success btn-sm">
    <span class="fa fa-plus"></span> Ajouter un film
  </a>
  <hr />
</div>

@if(session('success'))
    <div class="alert alert-success">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      {{ session('success') }}
    </div>
@endif

  <div class="x_panel">
    <div class="x_content">
      <table class="table-responsive ">
        <thead>

        <tr class="headings">

          <th class="column-title">
            Image
          </th>
          <th class="column-title">
            Titre
          </th>
          <th class="column-title">
            Langue
          </th>
          <th class="column-title">
            Visible
          </th>
          <th class="column-title">
            Cover
          </th>
          <th class="column-title">
            Budget
          </th>
          <th class="column-title">
            Durée
          </th>
          <th class="column-title">
            Sortie
          </th>
          <th class="column-title">
            Presse
          </th>
          <th class="column-title">
            Synopsis
          </th>
          <th class="column-title">
            Action
          </th>
        </tr>
      </thead>

      <tbody>

        @foreach($movies as $key => $movie)
        <tr >

            <td>

              @if(!in_array($movie->id, session('likes', [])))

                <a href="{{ route('movies.like', [
                    'id' => $movie->id,
                    'action' => 'like'
                ]) }}">
                    <span class="fa fa-heart"></span>
                </a>
                @else
                    <a href="{{ route('movies.like', [
                    'id' => $movie->id,
                    'action' => 'dislike'
                ]) }}">
                        <span class="fa fa-heart-o"></span>
                    </a>
                @endif

              <img class="img-responsive img-circle" src="{{ $movie->image }}" alt="" /></td>
            <td><h4><a>{{ $movie->title }}</a></h4></td>
            <td><b><span class="label label-success">{{ $movie->languages }}</span></b></td>
            <td><b>
              @if($movie->visible == true)
                <span class="fa fa-eye"></span>
              @else
                <span class="fa fa-eye-slash"></span>
              @endif
            </b></td>
            <td><b>
              @if($movie->cover == 1)
                <span class="fa fa-star text-success"></span>
              @else
                <span class="fa fa-star-o text-danger"></span>
              @endif
            </b></td>
            <td>
                <p><b>{{ number_format($movie->budget, 2, ',', ' ') }}€</b></p>
            </td>
            <td>
                <p><b class="fa fa-clock-o">{{ $movie->duree }}h.</b></p>
            </td>
            <td style="word-break: break-all; width: 400px;font-size: 11px;"><p><i>{{ str_limit(strip_tags($movie->synopsis) , 400,  '...')}}</i></p> </td>
            <td>
              <h5 class="label label-info"><i>{{ date('d/m/Y', strtotime($movie->date_release)) }}</i></h5>
            </td>
            <td>
              {!! str_repeat("<span class='fa fa-star'></span>", $movie->note_presse) !!}</i></h5>
            </td>
            <td>
                <li><a href="#" class="btn btn-xs btn-primary"><span class="fa fa-search"></span> Voir</a></li>
                <li><a href="#" class="btn btn-xs btn-warning"><span class="fa fa-pencil"></span> Editer</a></li>
                <li><a href="#" class="btn btn-xs btn-danger"><span class="fa fa-times"></span> Suprimmer</a></li>
                @if($movie->visible == 1)
                  <li><a href="{{ route('movies.activation', ['id' => $movie->id, 'action' => 0]) }}" class="btn btn-xs btn-success"><span class="fa fa-times"></span> Inactiver</a></li>
                @else
                  <li><a href="{{ route('movies.activation', ['id' => $movie->id, 'action' => 1]) }}" class="btn btn-xs btn-warning"><span class="fa fa-check"></span> Activer</a></li>
                @endif
            </td>

          </tr>
        @endforeach


      </tbody>

      </table>
  </div>
</div>

@endsection
