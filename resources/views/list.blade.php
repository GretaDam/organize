@extends('layout.app')

@section('content')

<nav>
    <div class="addTask">
        <a href="">
            <img class="navBtn" src="{{asset('assets/img/addT.svg')}}" alt="ajouter une tâche">
            Ajouter une tâche
        </a>
    </div>

    <div class="logOut">         
        <form id="formLogout" action="{{route('logoutPost')}}" method="POST">
            @csrf
        </form>

        <a href="" id="linkLogout">
            <img class="navBtn" src="{{asset('assets/img/logOut.svg')}}" alt="se déconnecter">Déconnexion
        </a>
        
    </div>

</nav>

<main>
    
    <div id="listTitle">
        
        <ul class ="navList">
            <li class="check"><a href="">Check</a></li>
            <li class="task"><a href="">Tâche <img src="{{asset('assets/img/arrowD.svg')}}"></a></li>
            <li class="priority"><a href="">Priorité</a></li>
            <li class="endDate"><a href="">Date et heure de fin</a></li>
        </ul>

        <div class="listBar"></div>

    </div>

    <div class="container">
    </div>

@endsection