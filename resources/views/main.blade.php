<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EXSIMB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">


        <!-- Web Fonts
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900"
    rel="stylesheet" />
    <link
    href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet" />

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('landing/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('landing/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('landing/css/bootstrap.min.css.map')}}" />
    <link rel="stylesheet" href="{{asset('landing/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('landing/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('landing/css/colors/color.css')}}" />
    <link rel="stylesheet" href="{{asset('landing/css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('landing/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('landing/css/owl.transitions.css')}}" />


    <link rel="icon" type="image/png" href="kerusakan-assets/favicon.png">
<style>
	/* this is needed to make the content scrollable on larger screens */
        @media (min-width: 576px) {
            .h-sm-100 {
                height: 100%;
            }
        }

</style>

    {{-- External Assets --}}
    @yield('external_assets')

</head>

<body class="">
    @yield('main_section')

        @include('includes.footer')

    @yield('js_external_assets')
</body>

</html>
