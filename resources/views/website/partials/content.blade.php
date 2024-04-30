<div>
    @include('website.partials.navbar')

    <div class=" lg:min-h-[90vh] md:min-h-[90vh] sm:min-h-[90vh] min-h-0">
        @yield('content')
    </div>

    @include('website.partials.footer')
</div>
