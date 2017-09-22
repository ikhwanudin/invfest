<nav class="navbar is-transparent">
    <div class="container">  
      <div class="navbar-brand">
        <a class="navbar-item" href="/">
          <img src="" alt="INVFEST 2.0" width="112" height="28">
        </a>

        {{-- <a class="navbar-item is-hidden-desktop" href="https://github.com/jgthms/bulma" target="_blank">
          <span class="icon" style="color: #333;">
            <i class="fa fa-github"></i>
          </span>
        </a>

        <a class="navbar-item is-hidden-desktop" href="https://twitter.com/jgthms" target="_blank">
          <span class="icon" style="color: #55acee;">
            <i class="fa fa-twitter"></i>
          </span>
        </a> --}}

        <div class="navbar-burger burger" data-target="navMenuTransparentExample">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <div id="navMenuTransparentExample" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item " href="/#about">
            {{-- <span class="bd-emoji">🎨</span> --}}
            About
          </a>
          <a class="navbar-item " href="/#competition">
            {{-- <span class="bd-emoji">🎨</span> --}}
            Competition
          </a>
          <a class="navbar-item " href="/#timeline">
            {{-- <span class="bd-emoji">🎨</span> --}}
            Timeline
          </a>
          <a class="navbar-item " href="/#contact">
            {{-- <span class="bd-emoji">🎨</span> --}}
            Contact
          </a>
          
        </div>

        <div class="navbar-end">
          {{-- <a class="navbar-item is-hidden-desktop-only" href="https://github.com/jgthms/bulma" target="_blank">
            <span class="icon" style="color: #333;">
              <i class="fa fa-github"></i>
            </span>
          </a>
          <a class="navbar-item is-hidden-desktop-only" href="https://twitter.com/jgthms" target="_blank">
            <span class="icon" style="color: #55acee;">
              <i class="fa fa-twitter"></i>
            </span>
          </a> --}}
          @if(Auth::guest())
          <div class="navbar-item">
            <div class="field is-grouped">
              <p class="control">
                <a class="bd-tw-button button" href="{{ route('login')}}">
                  {{-- <span class="icon">
                    <i class="fa fa-twitter"></i>
                  </span> --}}
                  <span>
                    Login
                  </span>
                </a>
              </p>
              <p class="control">
                <a class="button is-primary" href="{{ route('register')}}">
                  {{-- <span class="icon">
                    <i class="fa fa-download"></i>
                  </span> --}}
                  <span>Register</span>
                </a>
              </p>
            </div>
          </div>
          @else
          <div class="navbar-item has-dropdown dropdown is-right is-hoverable">
            <div class="navbar-link">
              @if(isset(Auth::user()->nama_tim))
                {{ Auth::user()->nama_tim }}
              @else
                {{ Auth::user()->ketua_tim }}
              @endif
            </div>
            <div id="moreDropdown" class="navbar-dropdown is-boxed">
              <a class="navbar-item " href="{{ route('dashboard') }}">
                Dashboard
              </a>
              <a class="navbar-item " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Log Out
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
</nav>