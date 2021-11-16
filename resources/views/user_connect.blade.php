@extends('layout.app')

@section('content')

<main>

    <div id="listTitle">
       <p>Se connecter à votre compte</p>
       <div class="listBar"></div>
   </div>

    <div class="container">
               
        <form id="userConnect" method="POST" action="">
            @csrf
            <div class="formInput">
                <label class="label" for="email">Email :</label>
                <input name="email" type="text" placeholder="Votre adresse email">            
            </div>
            
            <div class="formInput">
                <label class="label" for="password">Mot de passe :</label>
                <input name="password" type="password" placeholder="Mot de passe">                
            </div>

            <div id="alertLog">
                @if ($errors->any())
                    <p class="alert">{{ $errors->first('auth') }}</p>
                @endif
            </div>
            
            <div class="inputSubmit">
                <input class="btn" type="submit" value="Se connecter">               
            </div>

        </form>      

    </div>
    
</main>

@endsection