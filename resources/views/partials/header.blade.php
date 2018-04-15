<header class="banner">
  <div class="container">
    <div class="brand-container">
      <a class="brand" href="{{ home_url('/') }}" alt="{{ get_bloginfo('name', 'display') }}"><img src="@asset('images/treme-logo.png')"></a>
    </div>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>

<header class="mobile">
  <div class="burger">
    <div class="burger__patty"></div>
    <div class="burger__patty"></div>
    <div class="burger__patty"></div>
  </div>

  <nav class="menu">
    <div class="menu__brand">
      <a href="">
        <div class="logo" style="background: url(@asset('images/treme-logo.png')"></div>
      </a>
    </div>
    <ul class="menu__list">
      <li class="menu__item"><a href="" class="menu__link">Work</a></li>
      <li class="menu__item"><a href="" class="menu__link">About</a></li>
      <li class="menu__item">
        <a href="https://twitter.com/ettrics" target="_blank" class="menu__link menu__link--social"><i class="fa fa-twitter"></i></a>
      </li>
      <li class="menu__item">
        <a href="https://dribbble.com/ettrics" target="_blank" class="menu__link menu__link--social">
          <i class="fa fa-dribbble"></i></a>
      </li>
    </ul>
  </nav>
</header>
