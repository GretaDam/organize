@extends('layout.app')

@section('title','Visualiser une tâche')

@section('content')

<main>

    <div id="listTitle">
        <p>Tâche ref : {{$task->reference}}</p>
        <div class="listBar"></div>
    </div>

    <div class="container">
        <div class="taskForm"> 
            
            <div class="formInput">
                <p class="label">Titre :</p>
                <p class="pTask">{{$task->title}}</p>
            </div>

            <div class="formInput">
                <p class="label">Statut :</p>
                <p class="pTask">{{$task->getCheckedString()}}</p>
            </div>

            <div class="formInput">
                <p class="label">Date et heure de début :</p>
                <p class="pTask">{{ date('d/m/Y H:i', strtotime($task->start_date)) }}</p>
            </div>

            <div class="formInput">
                <p class="label">Date et heure de fin :</p>
                <p class="pTask">{{ date('d/m/Y H:i', strtotime($task->end_date)) }}</p>
            </div>

            <div class="formInput">
                <p class="label">Priorité :</p>
                <p class="pTask">{{$task->getPriorityString()}}</p>
            </div>

            <div class="formInput area">
                <p class="label">Description :</p>
                <p class="pTask">{{$task->description}}</p>
            </div>

            @if ($task->image)

            <div class="formInput area">
                <p class="label">Image jointe :</p>
                
                @if (substr($task->image, 0, 4 ) === "http")
                <a class="taskImg" href="{{$task->image}}" target="_blank">  
                    <img src="{{$task->image}}">
                </a>
                    @else
                    <a class="taskImg" href="{{Storage::url($task->image)}}" target="_blank">  
                        <img src="{{Storage::url($task->image) }}">
                    </a>
                @endif
            </div>

            @endif

            <div class="inputSubmit">
                <button class="btn"><a href="{{route('editTask', $task->id)}}">Modifier</a></button>
                <button id="delBtn" class="btn red">Supprimer</button>
                <button class="btn"><a href="{{route ('list')}}">Annuler</a></button>
            </div>

            <div id="delModal" class="modal">
                <div class="modalContent">
                    
                    <p>Supprimer la tâche ?</p>
                    <form id="formDel" action="{{route('delTask', $task->id)}}" method="POST">
                        @csrf
                    </form>
                    <p><a class="btn red" id="linkDel" href="">Oui</a>
                    <button id="exitBtn" class="btn">Non</button></p>             

                </div>
            </div>

        </div>
    </div> 

</main>

@endsection