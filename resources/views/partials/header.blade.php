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
        <div class="logo" style="background-image: url(@asset('images/treme-logo.png')"></div>
      </a>
    </div>
    <ul class="menu__list">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </ul>
    <div class="menu__social">
      <ul>
        <li class="menu__item">
          <a href="https://www.facebook.com/hideawayentertainment1" target="_blank" class="menu__link menu__link--social"><i class="fa fa-facebook-f"></i></a>
        </li>
        <li class="menu__item">
          <a href="https://www.instagram.com/tremehideaway/?hl=en" target="_blank" class="menu__link menu__link--social">
            <i class="fa fa-instagram"></i></a>
        </li>
        <li class="menu__item">
          <a href="https://www.yelp.com/biz/treme-hideaway-new-orleans" target="_blank" class="menu__link menu__link--social">
            <i class="fa fa-yelp"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>
