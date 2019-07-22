<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
        <div class="container">

          <div class="navbar-translate">

            <a class="navbar-brand" href="{{url('/')}}">
              Carsler. </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
              <span class="navbar-toggler-icon"></span>
            </button>

          </div>

          <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">

              {{-- <li class="nav-item">
                <a class="btn btn-outline-warning btn-round" href="javascript:void(0)" onclick="scrollToDownload()">
                    Sale My Car
                </a>
              </li> --}}
              
              <li class="dropdown nav-item  nav-link ">
                <a href="#" class="dropdown-toggle btn btn-outline-warning btn-round" data-toggle="dropdown">
                  <i class="material-icons">apps</i> Sale My Car
                <div class="ripple-container"></div>
              </a>

                <div class="dropdown-menu dropdown-with-icons">
                  <a href="{{route('frontend.create','car')}}" class="dropdown-item">
                    <i class="fa fa-car material-icons" aria-hidden="true"> </i> sell car
                  </a>
                  <a href="" class="dropdown-item">
                    <i class="fa fa-motorcycle material-icons" aria-hidden="true"> </i> sell bike
                  </a>
                  <a href="" class="dropdown-item">
                      <img class=" material-icons" src="http://localhost/carsler-2/public/frontend/carbody/rickshaw.svg" alt="" height="30"> sell rickshaw
                  </a>
                  <a href="" class="dropdown-item">
                    <i class="fa fa-bicycle material-icons" aria-hidden="true"> </i> sell bicycle 
                  </a>
                  <a href="" class="dropdown-item">
                    <i class="fa fa-ship material-icons" aria-hidden="true"> </i> sell boat
                  </a>
                  <a href="" class="dropdown-item">
                    <i class="fa fa-plane material-icons" aria-hidden="true"> </i> sell aircraft
                  </a>
                  

               

                </div>
              </li>
              {{-- ============== --}}
             

          @auth
            {{--  @if (Auth::user()->roles[0]->name==='administrator')  --}}
              <li class="nav-item"><a href="{{route('frontend.user.dashboard')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.user.dashboard')) }}"> @lang('navs.frontend.dashboard') </a></li>
            {{--  @endif  --}}
          @endauth
            
         @guest
             <li class="nav-item"><a href="{{route('frontend.auth.login')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.auth.login')) }}">@lang('navs.frontend.login')</a></li>

             @if(config('access.registration'))
                 <li class="nav-item"><a href="{{route('frontend.auth.register')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.auth.register')) }}">@lang('navs.frontend.register')</a></li>
             @endif
         @else
             <li class="nav-item dropdown">
                 <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuUser" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">{{ $logged_in_user->name }}</a>

                 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuUser">
                     @can('view backend')
                         <a href="{{ route('admin.dashboard') }}" class="dropdown-item">@lang('navs.frontend.user.administration')</a>
                     @endcan

                     <a href="{{ route('frontend.user.account') }}" class="dropdown-item {{ active_class(Active::checkRoute('frontend.user.account')) }}">@lang('navs.frontend.user.account')</a>
                     <a href="{{ route('frontend.auth.logout') }}" class="dropdown-item">@lang('navs.general.logout')</a>
                 </div>
             </li>
         @endguest

         @if(config('locale.status') && count(config('locale.languages')) > 1)
         <li class="nav-item dropdown">
             <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownLanguageLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">@lang('menus.language-picker.language') ({{ strtoupper(app()->getLocale()) }})</a>

             @include('includes.partials.lang')
         </li>
        @endif
              {{-- ============== --}}

            </ul>
          </div>
        </div>
      </nav>