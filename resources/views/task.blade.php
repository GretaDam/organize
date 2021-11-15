@extends('layout.app')

@section('content')

<main>

    <div id="listTitle">
        <p>Status de la tâche : {{$task->getCheckedString()}}</p>
        <div class="listBar"></div>
    </div>

    <div class="container">
        <div class="taskForm"> 
            <div class="formInput">
                <p class="label">Titre :</p>
                <p class="pTask">{{$task->title}}</p>
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
                <a class="taskImg" href="{{Storage::url($task->image)}}" target="_blank">  
                    <img src="{{Storage::url($task->image) }}">
                </a>
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
                    <p><button class="btn red"><a href="{{route('delTask', $task->id)}}">Oui</a></button>
                    <button id="exitBtn" class="btn">Non</button></p>             

                </div>
            </div>

        </div>
    </div> 

</main>

@endsection