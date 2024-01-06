@include('partials.header')

    @include('partials.wrapper')
        {{ $slot }}
    @include('partials.endwrapper')

@include('partials.footer')