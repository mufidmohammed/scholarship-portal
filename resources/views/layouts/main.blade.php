<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-starter.css') }}">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

    @livewireStyles
</head>
<body class="">
    <div class="se-pre-con"></div>
    <section>
        <!-- sidebar menu start -->

        @if (auth()->user()->type == 'admin')
            @include('partials.sidebar-admin')
        @elseif (auth()->user()->type == 'reviewer')
            @include('partials.sidebar-reviewer')
        {{-- @else --}}
            {{-- @include('partials.sidebar-applicant') --}}
        @endif

        <!-- //sidebar menu end -->
        <!-- header-starts -->

        @unless (auth()->user()->type == 'applicant')
            @include('partials.header')
        @endunless

        <!-- //header-ends -->
        <!-- main content start -->
        <div class="main-content">

            {{ $slot }}

        </div>
        <!-- main content end-->
    </section>
    <button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>

    @include('partials.scripts')

    @livewireScripts

</body>

</html>
