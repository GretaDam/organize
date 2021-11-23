@extends('layout.app')

@section('title','Modifier une tâche')

@section('content')

<main>

    <div id="listTitle">
        <p>Modifier une tâche</p>
        <div class="listBar"></div>
    </div>

    <div class="container">
        <form enctype="multipart/form-data" class="taskForm" method="POST" action="{{route('editTaskPost', $task->reference)}}">
        @csrf   
            <div class="formInput">
                <label class="label" for="title">Titre :</label>
                <input id="title" name="title" type="text" maxlenght="20" value ="{{$task->title}}" required>
            </div>

            <div class="formInput status">
                <p class="label">Status :</p>
                <input name="checked_or_not" type="hidden" value="0">
                <input class="box dNone" id="checked_or_not" name="checked_or_not" type="checkbox" value ="1" {{$task->getChecked()}}>
                <label class="labelCheck" for="checked_or_not"></label>
            </div>
            
            <div class="formInput">
                <label class="label for="start_date">Date et heure de début :</label>
                <input id= "start_date" name="start_date" type="datetime-local" value ="{{ date('Y-m-d\TH:i', strtotime($task->start_date)) }}" required>
            </div>

            <div class="formInput">
                <label class="label" for="end_date">Date et heure de fin :</label>
                <input id= "end_date" name="end_date" type="datetime-local" value="{{ date('Y-m-d\TH:i', strtotime($task->end_date)) }}" required>
            </div>

            <div class="formInput">
                <label class="label" for="priority">Priorité :</label>
                <select id= "priority" name="priority" required>
                    <option value="{{$task->priority}}" selected>{{$task->getPriorityString()}}</option>
                    
                    @if ($task->priority != "2")
                    <option value="2">Normale</option>
                    @endif

                    @if ($task->priority != "3")
                    <option value="3">Haute</option>
                    @endif

                    @if ($task->priority != "1")
                    <option value="1">Basse</option>
                    @endif

                </select>  
            </div>

            <div class="formInput area">
                <label class="label" for="description">Description :</label>
                <textarea id="description" name="description" rows = "5" required>{{$task->description}}</textarea>
            </div>

            <div class="inputButton">
                <input class="btn" type="button" id="btnfile" onclick="image.click()" value="Modifier le fichier...">
                <input class="dNone" id="image" name="image" type="file">
            </div>

            <div class="inputSubmit">
                <input class="btn" type="submit" value="Valider">
                <button class="btn"><a href="{{route ('task', $task->reference)}}">Annuler</a></button>
            </div>

        </form>
    </div> 

</main>

@endsection