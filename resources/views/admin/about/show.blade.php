
@extends('layouts.index')
@include('layouts.flash')

@section('content')
    <div class="container">

        <h1 class="section-title text-primary">
            Apperçu de la page about: 
        </h1>

    
        <h5 class="text-primary">Titre: </h5> 
        <p> {{ $abouts->name }} </p>

        <h5 class="text-primary">Description1: </h5>
        <p> {{ $abouts->description }} </p>

        <h5 class="text-primary">Description 1 (desc1): </h5>
        <p> {{ $abouts->desc1 }} </p>

        <h5 class="text-primary">Description 2 (desc2): </h5>
        <p> {{ $abouts->desc2 }} </p>


        <br/> 
        <a href={{route('ad.about.edit')}} class="btn btn-warning">Modifier</a>
    </div>
@endsection

