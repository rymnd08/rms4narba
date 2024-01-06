@include('partials.header')

    @include('partials.admin-wrapper')
        {{ $slot }}
    @include('partials.endwrapper')

@include('partials.footer')