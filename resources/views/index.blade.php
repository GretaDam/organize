@extends('layout.app')

@section('title','Accueil')

@section('content')

    <main>
        <div id="presentation">
            <h1>Organisez votre quotidien</h1>
            <p>Gardez l'esprit tranquille en ajoutant toutes vos tâches à votre to-do list, où que vous soyez et quel que soit l'appareil utilisé grâce à votre compte personnel.</p>
        </div>
        <div id="index">
            <div class="indexButton btn">
                <a href="{{route('login')}}">Se connecter</a>
            </div>
            <div class="indexButton btn">
                <a href="{{route('register')}}">Créer un compte</a>
            </div>
        </div>
    </main>

@endsection
