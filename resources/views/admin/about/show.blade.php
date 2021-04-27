
@extends('layouts.index')
@extends('layouts.flash')

@section('content')
    <div class="container">

        <h1 class="section-title text-primary">
            Apperçu de la page about: 
        </h1>

        <h5 class="text-primary">Titre: </h5> 
        <p> {{ $abouts[0]->title }} </p>

        <h5 class="text-primary">Profil: </h5>
        <p> {{ $abouts[0]->descprofil }} </p>

        <h5 class="text-primary">Description 1: </h5>
        <p> {{ $abouts[0]->desc1 }} </p>

        <h5 class="text-primary">Description 2: </h5>
        <p> {{ $abouts[0]->desc2 }} </p>

        {{-- <h3 class="text-primary">Infos personnelles: </h3> 

        <div class="row">
            <div class="col-6">
                Prénom: {{ $user->prenom }} <br/>
                Nom : {{ $user->nom }} <br/>
                DDN: {{ $user->date}} <br/>
                SITE : {{ $user->website }} <br/> 
                Ville: {{$user->city }} 
            </div>
            <div class="col-6">
                études (niveau) : {{$user->degree}} <br/>
                email: {{$user->email}} <br/> 
                Disponibilitée: {{$user->freelance}} <br/> 
            </div>
        </div> --}}
        <br/> 
        <a href={{route('ad.about.edit')}} class="btn btn-warning">Modifier</a>
    </div>
@endsection

