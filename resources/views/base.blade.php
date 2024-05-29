<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simulación</title>
    <link rel="stylesheet" href="{{ asset('lib/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap-5.3.0-dist/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href=" {{ asset('lib/DataTables/datatables.min.css') }}" rel="stylesheet">
    @stack('css')
</head>

<body>
    @routes
    @yield('body')

</body>
<script></script>
<script src="{{ asset('lib/fontawesome/js/all.min.js') }}"></script>
<script src="{{ asset('lib/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('lib/Jquery-3.7.0.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src=" {{ asset('lib/DataTables/datatables.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

@stack('js')

</html>
