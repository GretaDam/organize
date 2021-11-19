<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> {{-- Injection de la feuille de style --}}
    <title>organize - @yield('title')</title> {{-- Intégration du titre de chaque page --}}
</head>
<body>
    
    @include('partials.header') {{-- Intégration de l'entête commune à chaque page --}}

    @yield('content') {{-- Intégration du contenu de chaque page --}}

    <script src="{{asset('js/app.js')}}"></script> {{-- Injection du javascript --}}

</body>
</html>