@include('frontend.partials.header')
    <div id="app">
        @include('frontend.partials.nav')
            
        @yield('content')
           
    </div><!--app-->

@include('frontend.partials.footer')