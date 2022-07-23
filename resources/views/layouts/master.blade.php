<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferso Web Development | Jasa Pembuatan Website</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body class="bg-[#DDDDDD] overflow-x-hidden">
    @include('layouts.navbar')
    
    @yield('content')

    @include('layouts.footer')
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>