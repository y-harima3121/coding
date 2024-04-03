<!DOCTYPE html>
<html lang="ja">
  @include('codepen.layouts._head')
  <body class="@yield('page_class')" id="top">
    <div class="l-base" id="l-base">
      <main class="l-main">
       {{--  start_ページ内コンテンツ ==============================  --}}
        @yield('content')
       {{--  end_ページ内コンテンツ ==============================  --}}
        @include('codepen.layouts._footer')
      </main>
    </div>
    <!-- <script src="{{asset('js/scriptDefault.js')}}"></script> -->
  </body>
</html>
