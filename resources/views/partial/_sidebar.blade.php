<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title animated fadeInUp" style="border: 0;">
        <a href="index.html" class="site_title"><i class="fa fa-html5"></i> <span><b>Laravel</b> L9</span></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile">
        <div class="profile_pic">
          <img src="https://cloudinary-a.akamaihd.net/hopwork/image/upload/t_bigprofile/fqywhpejolfwi4fslkkw.jpg" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Bienvenue,</span>
          <h2>Julien Boyer</h2>
        </div>
      </div>
      <!-- /menu profile quick info -->

      <br>

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section active">
          <h3>General</h3>
          <ul class="nav side-menu">

            <li @if(Route::getCurrentRoute()->getActionName() == "welcome") class="active" @endif>
              <a href="{{ url('/')}}">
                <i class="fa fa-home"></i> Home
              </a>
            </li>

            <li @if(Request::is() == "/") class="active" @endif>
              <a>
                <i class="fa fa-film"></i> Gestion des films
                  <span class="fa fa-chevron-down"></span>
              </a>
              <ul class="nav child_menu">
                <li><a href="{{ route('movies.index')}}"><i class="fa fa-list"></i> Lister les films</a></li>
                <li><a href="{{ route('movies.creer')}}"><i class="fa fa-plus"></i> Créer un film </a></li>
              </ul>
            </li>

            <li><a><i class="fa fa-plus"></i> Créer un catégorie </a>
            </li>
            <li><a><i class="fa fa-plus"></i> Créer un acteur </a>
            </li>
            <li><a><i class="fa fa-plus"></i> Créer un réalisateur </a>
            </li>
            <li><a><i class="fa fa-search"></i> Recherche avancée </a>
            </li>
            <li><a><i class="fa fa-unlock"></i> Se connecter </a>
            </li>
            <li><a href="{{ url('ils-parlent-de-nous') }}">
              <i class="fa fa-unlock"></i> Ils parlent de nous </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- /sidebar menu -->


      <!-- /menu footer buttons -->
      <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
          <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
          <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
      </div>
      <!-- /menu footer buttons -->
    </div>

  </div>
