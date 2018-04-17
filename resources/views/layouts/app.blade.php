<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
  @include('partials.loader')
  <div class="main-container" style="display: none;">
    @php(do_action('get_header'))
    @include('partials.header')
    <div class="wrap container" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
        <aside class="sidebar">
          @include('partials.sidebar')
        </aside>
        @endif
      </div>
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </div>
  </body>
</html>
