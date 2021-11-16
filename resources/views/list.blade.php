@extends('layout.app')

@section('content')

<nav>
    
    <div class="addTask">
        <a href="{{route('addTask')}}">
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
    <div id="userTitle">
        <h2>Liste de <span>{{$userName}}</span></h2>
    </div>

    <div id="listTitle">

        <ul class ="navList">
            <li class="check"><a href="">Terminée</a></li>
            <li class="task"><a href="">Tâche</a></li>
            <li class="priority"><a href="">Priorité</a></li>
            <li class="endDate"><a href="">Date de fin</a></li>
        </ul>

        <div class="listBar"></div>

    </div>

    <div class="container">

        @foreach (Auth::user()->tasks->sortByDesc('id') as $task)
        <a class="listLink" href="{{route('task',$task->id)}}">
            <ul class ="mainList">
                <li class="check"><p><img src="{{asset('assets/img/' . $task->getCheckedImg())}}" alt=""></p></li>
                <li class="task"><p>{{ $task->title }}</p></li>
                <li class="priority"><p><img src="{{asset('assets/img/' . $task->getPriorityImg())}}" alt=""></p></li>
                <li class="endDate"><p>{{ date('d/m/Y', strtotime($task->end_date)) }}</p></li>
            </ul>
        </a>

        @endforeach
        
    </div>

@endsection