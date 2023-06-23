    <nav
      class="
        navbar navbar-expand-lg navbar-light navbar-rental
        fixed-top
        navbar-fixed-top
      "
      data-aos="fade-down"
    >
      <div class="container">
        <a href="{{ route('home')}}" class="navbar-brand">
          <img src="/images/logo.svg" alt="Logo" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="{{ route('home')}}" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}">Home</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('cars')}}" class="nav-link {{ (request()->is('cars')) ? 'active' : '' }}">Mobil</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('rentals')}}" class="nav-link {{ (request()->is('rentals')) ? 'active' : '' }}">Rental</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('faq')}}" class="nav-link {{ (request()->is('faq')) ? 'active' : '' }}">FAQ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
