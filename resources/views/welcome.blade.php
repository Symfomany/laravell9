{{-- Heritage --}}
@extends('layout')


@section('css')
  @parent
  <link rel="stylesheet" href="/css/welcome.css" media="screen" title="no title" charset="utf-8">
@endsection

{{-- Content --}}
@section('content')
  <h3 class="page-title"><span class="fa fa-dashboard"></span>
     Dashboard</h3>
  <hr class="clear">


  <div class="row">
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-film"></i>
        </div>
        <div class="count">15</div>

        <h3>Films</h3>
        <p>Film actif et visibles</p>
      </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-comments-o"></i>
        </div>
        <div class="count">28</div>

        <h3>Commentaires</h3>
        <p>Commentaires publiés</p>
      </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-users"></i>
        </div>
        <div class="count">29</div>

        <h3>Utilisateur actifs</h3>
        <p>Utilisatur connecté il y a moin de 3 mois</p>
      </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-home"></i>
        </div>
        <div class="count">21</div>

        <h3>Cinemé</h3>
        <p>Cinémas sur Lyon</p>
      </div>
    </div>
  </div>

      <div class="row">
        <div class="col-md-6 col-xs-12">
          <div class="x_panel fixed_height_390">
            <div class="x_title">
              <h2>Répartition par catégories</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <div style="text-align: center; margin-bottom: 17px">
                <ul class="verticle_bars list-inline">
                  <li>
                    <div class="progress vertical progress_wide bottom">
                      <div class="progress-bar progress-bar-dark" role="progressbar" data-transitiongoal="65" aria-valuenow="65" style="height: 65%;"></div>
                    </div>
                  </li>
                  <li>
                    <div class="progress vertical progress_wide bottom">
                      <div class="progress-bar progress-bar-gray" role="progressbar" data-transitiongoal="85" aria-valuenow="85" style="height: 85%;"></div>
                    </div>
                  </li>
                  <li>
                    <div class="progress vertical progress_wide bottom">
                      <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="45" aria-valuenow="45" style="height: 45%;"></div>
                    </div>
                  </li>
                  <li>
                    <div class="progress vertical progress_wide bottom">
                      <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="75" aria-valuenow="75" style="height: 75%;"></div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="divider"></div>

              <ul class="legend list-unstyled">
                <li>
                  <p>
                    <span class="icon"><i class="fa fa-square dark"></i></span> <span class="name">Fantastique</span>
                  </p>
                </li>
                <li>
                  <p>
                    <span class="icon"><i class="fa fa-square grey"></i></span> <span class="name">Action / Aventure</span>
                  </p>
                </li>
                <li>
                  <p>
                    <span class="icon"><i class="fa fa-square blue"></i></span> <span class="name">Art Martiaux</span>
                  </p>
                </li>
                <li>
                  <p>
                    <span class="icon"><i class="fa fa-square green"></i></span> <span class="name">Dramatique</span>
                  </p>
                </li>
              </ul>

            </div>
          </div>
        </div>

        <div class="col-md-3 col-xs-12 widget widget_tally_box">
            <div class="x_panel ui-ribbon-container fixed_height_390">
              <div class="ui-ribbon-wrapper">
                <div class="ui-ribbon">
                  30% off
                </div>
              </div>
              <div class="x_title">
                <h2>Film visible français</h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <div style="text-align: center; margin-bottom: 17px">
                  <span class="chart" data-percent="56">
                                      <span class="percent">56</span>
                  <canvas height="110" width="110"></canvas></span>
                </div>

                <h3 class="name_title">Godzilla</h3>
                <p>Synopsis</p>

                <div class="divider"></div>

                <p>If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.</p>

              </div>
            </div>
          </div>

          <div class="col-md-3 col-xs-12 widget widget_tally_box">
            <div class="x_panel fixed_height_390">
              <div class="x_content">

                <div class="flex">
                  <ul class="list-inline widget_profile_box">
                    <li>
                      <a>
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <img src="images/user.png" alt="..." class="img-circle profile_img">
                    </li>
                    <li>
                      <a>
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>

                <h3 class="name"><b>Julien</b></h3>

                <div class="flex">
                  <ul class="list-inline count2">
                    <li>
                      <h3>5</h3>
                      <span>Actifs</span>
                    </li>
                    <li>
                      <h3>2</h3>
                      <span>En cours</span>
                    </li>
                    <li>
                      <h3>4</h3>
                      <span>Inactifs</span>
                    </li>
                  </ul>
                </div>
                <p>
                  If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.
                </p>
              </div>
            </div>
          </div>
      </div>

@endsection
