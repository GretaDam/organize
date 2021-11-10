@extends('layout.app')

@section('content')

<main>

    <div id="listTitle">
        <p>Ajouter une tâche</p>
        <div class="listBar"></div>
    </div>

    <div class="container">
        <form enctype="multipart/form-data" class="taskForm" method="POST" action="{{ route('addTaskStore') }}">
        @csrf   
            <div class="formInput">
                <label for="title">Titre :</label>
                <input id="title" name="title" type="text" maxlenght="20" required>
            </div>

            <div class="formInput">
                <label for="start_date">Date et heure de début :</label>
                <input id= "start_date" name="start_date" type="datetime-local" required>
            </div>

            <div class="formInput">
                <label for="end_date">Date et heure de fin :</label>
                <input id= "end_date" name="end_date" type="datetime-local" required>
            </div>

            <div class="formInput">
                <label for="priority">Priorité :</label>
                <select id= "priority" name="priority" required>
                    <option value="" selected disabled>Choisir une priorité</option>
                    <option value="2">Normale</option>
                    <option value="3">Haute</option>
                    <option value="1">Basse</option>
                </select>  
            </div>

            <div class="formInput area">
                <label for="description">Description :</label>
                <textarea id="description" name="description" rows = "5" required></textarea>
            </div>

            <div class="inputButton">
                <input class="btn" type="button" id="btnfile" onclick="joined_file.click()" value="Joindre un fichier...">
                <input class="dNone" id="joined_file" name="joined_file" type="file">
            </div>

            <div class="inputSubmit">
                <input class="btn" type="submit" value="Valider">
                <input class="btn" onclick="window.location.href = '{{route ('list')}}'" type="button" value="Annuler">
            </div>

        </form>
    </div> 

</main>

@endsection