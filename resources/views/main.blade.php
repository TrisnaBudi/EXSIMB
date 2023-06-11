<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    
    {{-- External Assets --}}
    @yield('external_assets')
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    

</head>
<body class="">
    @yield('main_section')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
<script>
    const toggleBtn = document.getElementById('sidebar-toggle-btn');
    const sidebar = document.getElementById('sidebar-nav');
    
    toggleBtn.addEventListener('click', function() {
        sidebar.classList.toggle('active');
    });
    
    window.addEventListener('resize', function() {
        if (window.innerWidth <= 767) {
            sidebar.classList.remove('active');
        } else {
            sidebar.classList.add('active');
        }
    });
    
    // Tambahkan kode berikut
    if (window.innerWidth <= 767) {
        sidebar.classList.remove('active');
    } else {
        sidebar.classList.add('active');
    }
    </script>
    
@yield('js_external_assets')
</body>
</html>
