@extends('layouts.index')
@extends('layouts.flash') 


@section('content')
    <div class="container">
        <h1 class="section-title text-primary">Informations personnelles: </h1>


        <div class="row">
            <div class="col-6">
                Prénom: {{ $user->prenom }} <br/>
                Nom : {{ $user->nom }} <br/>
                DDN: {{ $user->date }} <br/> 
                SITE : {{ $user->website }} <br/> 
                Ville: {{$user->city }} 
            </div>
            <div class="col-6">
                études (niveau) : {{$user->degree}} <br/>
                email: {{$user->email}} <br/> 
                Disponibilitée: {{$user->freelance}} <br/> 
            </div>
        </div>


        <a href={{route('ad.infop.edit')}} class="btn btn-warning">Modifier</a>
        </div>
@endsection