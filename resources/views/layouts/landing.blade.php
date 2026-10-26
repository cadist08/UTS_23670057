<!DOCTYPE html>
<html lang="en">

    {{-- HEAD --}}
    @include('landing.partials.head')

    <body>

        {{-- HEADER / MENUBAR (spinner, navbar, modal pencarian) --}}
        @include('landing.partials.header')

        {{-- MAIN CONTENT --}}
        @yield('content')

        {{-- FOOTER (footer, copyright, tombol back-to-top) --}}
        @include('landing.partials.footer')

        {{-- SCRIPTS --}}
        @include('landing.partials.scripts')

    </body>

</html>
