@extends('layout.app')

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
                <label for="email">Email :</label>
                <input id="email" name="email" type="email" value="{{ old('email') ?? null }}">
                @if ($errors->has('email'))
                    <div class="alert">{{ $errors->first('email') }}</div>                    
                @endif
            </div>
            
            <div class="formInput">
                <label for="password">Mot de passe :</label>
                <input id="password" name="password" type="password">
                @if ($errors->has('password'))
                    <div class="alert">{{ $errors->first('password') }}</div>                    
                @endif
            </div>

            <div class="formInput">
                <label for="password_confirmation">Confirmation Mot de passe :</label>
                <input id="password_confirmation" name="password_confirmation" type="password">
            </div>

            <div class="inputSubmit">
                <input class="btn" type="submit" value="Créer mon compte">
            </div>

        </form>

    </div>

</main>

@endsection