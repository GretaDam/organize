@extends('layout.app')

@section('title','Création de compte')

@section('content')

<main>
    
    <div id="listTitle">
       <p>Créer votre compte</p>
       <div class="listBar"></div>
   </div>

    <div class="container">
               
        <form id="userAdd" method="POST" action="{{ route('registerPost') }}">
            @csrf
            
            <div class="formInput">
                <label for="name">Nom :</label>
                <input id="name" name="name" type="text" value="{{ old('name') ?? null }}" placeholder="Votre nom (3 caractères minimum)">
            </div>
            <div class="alert">
                @if ($errors->has('name'))
                <p>{{ $errors->first('name') }}</p>                
                @endif
            </div>

            <div class="formInput">
                <label class="label" for="email">Email :</label>
                <input id="email" name="email" type="email" value="{{ old('email') ?? null }}" placeholder="Votre adresse email">
            </div>
            <div class="alert">
                @if ($errors->has('email'))
                    <p>{{ $errors->first('email') }}</p>                
                @endif
            </div>

            <div class="formInput">
                <label class="label" for="password">Mot de passe :</label>
                <input id="password" name="password" type="password" placeholder="Mot de passe (8 caractères minimum)">
            </div>
            <div class="alert">
                @if ($errors->has('password'))
                    <p>{{ $errors->first('password') }}</p>                
                @endif
            </div>

            <div class="formInput">
                <label class="label" for="password_confirmation">Confirmation :</label>
                <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirmation du mot de passe">
            </div>

            <div class="inputSubmit">
                <input class="btn" type="submit" value="Créer mon compte">
            </div>

        </form>

    </div>

</main>

@endsection