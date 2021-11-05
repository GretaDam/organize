@extends('layout.app')

@section('content')

<main>

    <div id="listTitle">
        <p>Ajouter une tâche</p>
        <div class="listBar"></div>
    </div>

    <div class="container">
        <form enctype="multipart/form-data" class="taskForm" method="POST" action="">
        @csrf   
            <div class="formInput">
                <label for="taskTitle">Titre :</label>
                <input id="taskTitle" name="taskTitle" type="text" maxlenght="20" required>
            </div>

            <div class="formInput">
                <label for="taskStart">Date et heure de début :</label>
                <input id= "taskStart" name="taskStart" type="datetime-local" required>
            </div>

            <div class="formInput">
                <label for="taskEnd">Date et heure de fin :</label>
                <input id= "taskEnd" name="taskEnd" type="datetime-local" required>
            </div>

            <div class="formInput">
                <label for="taskPriority">Priorité :</label>
                <select id= "taskPriority" name="taskPriority" required>
                    <option value="" selected disabled>Choisir une priorité</option>
                    <option value="2">Normale</option>
                    <option value="3">Haute</option>
                    <option value="1">Basse</option>
                </select>  
            </div>

            <div class="formInput area">
                <label for="taskDescription">Description :</label>
                <textarea id="taskDescription" name="taskDescription" rows = "5" required></textarea>
            </div>

            <div class="formInput">
                <label for="taskTitle">Tag(s) :</label>
                <input id="taskTags" name="taskTags" placeholder="Séparez vos tags par une virgule" type="text" required>
            </div>

            <div class="inputButton">
                <button onclick="jointFiles.click()" class="btn" id="btnfile">Joindre un fichier...</button>
                <input class="dNone" id="jointFiles" name="jointFiles" type="file">
            </div>

            <div class="inputSubmit">
                <input class="btn" type="submit" value="Valider">
            </div>

        </form>
    </div> 

</main>

@endsection