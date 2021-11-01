@extends('layout.app')

@section('content')

<main>

    <div id="listTitle">
       <p>Se connecter à votre compte</p>
       <div class="listBar"></div>
   </div>

    <div class="container">
               
        <form id="userConnect" method="POST" action="">
            
            <div class="formInput">
                <label for="userEmail">Email :</label>
                <input class= "inputLong" name="userEmail" type="text">
            </div>
            
            <div class="formInput">
                <label for="userPwd">Mot de passe :</label>
                <input name="userPwd" type="password">
            </div>

            <div class="inputSubmit">
                <input class="btn" type="submit" value="Se connecter">
            </div>

        </form>

    </div>
    
</main>

@endsection