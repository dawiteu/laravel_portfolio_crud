
@extends('layouts.index')


@section('content')
    <div class="container">

        <h1 class="section-title text-primary">
            Apperçu de la page facts: 
        </h1>

        <h5 class="text-primary">Titre: </h5> 
        <p> {{ $facts->title }} </p>

        <h5 class="text-primary">Fact (1):  <span class="text-dark">{{ $facts->fact_1}} </span></h5>
        <h5 class="text-primary">Fact (2):   <span class="text-dark">{{ $facts->fact_2}}</span> </h5>
        <h5 class="text-primary">Fact (3):   <span class="text-dark">{{ $facts->fact_3}} </span></h5>
        <h5 class="text-primary">Fact (4):   <span class="text-dark">{{ $facts->fact_4}} </span></h5>

        <br/> 
        <a href={{route('ad.facts.edit')}} class="btn btn-warning">Modifier</a>
    </div>
@endsection

