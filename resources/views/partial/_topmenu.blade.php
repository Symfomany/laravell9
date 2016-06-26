<div class="top_nav">
  <div class="nav_menu">
              <nav class="" role="navigation">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>

                <ul class="nav navbar-nav navbar-right animated fadeInRight">
                  <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <img src="https://cloudinary-a.akamaihd.net/hopwork/image/upload/t_bigprofile/fqywhpejolfwi4fslkkw.jpg" alt="">Julien B.
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li></li>
                      <li><a href="javascript:;"> Profile</a></li>
                      <li>
                        <a href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                      </li>
                      <li><a href="javascript:;">Help</a></li>
                      <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                  </li>


                  <li role="presentation">
                    <a class="nfo-number" aria-expanded="false">
                      <i class="fa fa-film"></i>
                    </a>
                  </li>
                  <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">{{ count(session('likes', [])) }}</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">

                     @forelse(session("likes", []) as $like)
                        <li>
                          <a>
                            <span class="image"><img src="{{ \App\Http\Models\Movies::find($like)->image }}" alt="Profile Image"></span>
                            <span>
                              <span>{{ \App\Http\Models\Movies::find($like)->title }}</span>
                              <span class="time">{{ date('d/m/Y', strtotime($movie->date_release)) }}</span>
                            </span>
                            <span class="message">
                              {{ str_limit(\App\Http\Models\Movies::find($like)->synopsis, 100, '...') }}
                            </span>
                          </a>
                        </li>
                      @empty
                        <li>
                          <div class="alert alert-danger">
                              <span class="fa fa-warning"></span> Aucun film en panier
                          </div>
                        </li>
                      @endforelse

                  </ul>
                </li>
                  <li role="presentation">
                    <a class="nfo-number" aria-expanded="false">
                      <i class="fa fa-list"></i>
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="{{ route('about')}}" class="nfo-number" aria-expanded="false">
                      <i class="fa fa-users"></i>
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="{{ route('faq')}}" class="nfo-number" aria-expanded="false">
                      <i class="fa fa-headphones"></i>
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="{{ route('concept') }}"  data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
</div>
