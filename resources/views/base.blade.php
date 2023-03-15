<!DOCTYPE html>
<html lang="de">

@yield('head', \View::make('layout.head'))

<body class="bg-dark text-white @yield('className')">
<div id="app">
@yield('header', \View::make('layout.header.header'))
@yield('navigation', \View::make('layout.navigation.navigation'))
@yield('content')
    @yield('footer', \View::make('layout.footer.footer'))
</div>
@yield('script')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
