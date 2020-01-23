<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" id="home-section">
<div id="overlayer"></div>
<div class="loader">
  <div class="spinner-border text-primary" role="status">
	<span class="sr-only">Loading...</span>
  </div>
</div>

<div class="site-wrap">

  <div class="site-mobile-menu site-navbar-target">
	<div class="site-mobile-menu-header">
	  <div class="site-mobile-menu-close mt-3">
		<span class="icon-close2 js-menu-toggle"></span>
	  </div>
	</div>
	<div class="site-mobile-menu-body"></div>
  </div>


  <header class="site-navbar js-sticky-header site-navbar-target" role="banner" >

	<div class="container">
	  <div class="row align-items-center">

		<div class="col-6 col-xl-2">
		  <h1 class="mb-0 site-logo"><a href="index.html" class="h6 mb-0">GISTDA-CAREER<span class="text-primary"></span> </a></h1>
		</div>

		<div class="col-12 col-md-10 d-none d-xl-block">
		  <nav class="site-navigation position-relative text-right" role="navigation">

			<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
			  <li><a href="/#home-section" class="nav-link">Home</a></li>
			  <li><a href="/#job-available-section" class="nav-link">JOB AVAILABLE</a></li>
			  <li><a href="/#intership-section" class="nav-link">INTERSHIP</a></li>
			  <li><a href="/#welfare-benefit-section" class="nav-link">WELFARE & BENEFIT</a></li>
			  <li><a href="/#contact-section" class="nav-link">CONTACT</a></li>
      @guest
			  <li><a href="{{ route('login') }}#" class="nav-link">LOGIN</a></li>
        <ul class="navbar-nav ml-auto">
                      </li>
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->email }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
        </li>
			</ul>
		  </nav>
		</div>


		<div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

	  </div>
	</div>

  </header>
