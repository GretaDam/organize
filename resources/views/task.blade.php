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

            <div class="formInput area">
                <p class="label">Image jointe :</p>
                <a class="taskImg" href="{{Storage::url($task->image)}}" target="_blank">
                    
                        <img src="{{Storage::url($task->image) }}">
                  
                </a>
            </div>

            <div class="inputSubmit">
                <button class="btn"><a href="{{route('editTask', $task->id)}}">Modifier</a></button>
                <button class="btn red"><a href="">Supprimer</a></button>
                <button class="btn"><a href="{{route ('list')}}">Annuler</a></button>
            </div>

        </div>
    </div> 

</main>

@endsection