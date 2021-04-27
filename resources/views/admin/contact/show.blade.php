
@extends('layouts.index')
@include('layouts.flash')


@section('content')
    <div class="container">

        <h1 class="section-title text-primary">
            Apperçu de la page Contact: 
        </h1>

        <h5 class="text-primary">Titre: </h5> 
        <p> {{ $cont->title }} </p>

        <h5 class="text-primary">Location:  <span class="text-dark">{{ $cont->location}} </span></h5>
        <h5 class="text-primary">Email:  <span class="text-dark">{{ $cont->email}}</span> </h5>
        <h5 class="text-primary">Tel:   <span class="text-dark">{{ $cont->tel}} </span></h5>

        <br/> 
        <a href={{route('ad.contact.edit')}} class="btn btn-warning">Modifier</a>
    </div>
@endsection

