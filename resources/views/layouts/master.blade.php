<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NVT5894');</script>
    <!-- End Google Tag Manager -->

    <link rel="canonical" href="/" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferso Software House | Jasa Pembuatan Website</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
     <!-- Meta Tag -->
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Diferso - Software House and Web Development" />
    <meta name="description" content="Diferso adalah Software House yang Ada untuk Memenuhi kebutuhan Website dan Software Development sesuai dengan permintaan Anda" />
	<meta property="og:description" content="Diferso adalah Software House yang Ada untuk Memenuhi kebutuhan Website dan Software Development sesuai dengan permintaan Anda" />
	<meta property="og:url" content="/" />
	<meta property="og:site_name" content="Diferso Agency" />
	<meta property="og:image" content="{{asset('assets/images/dumy.jpg')}}" />
</head>
<body class="bg-[#DDDDDD] overflow-x-hidden">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVT5894"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
