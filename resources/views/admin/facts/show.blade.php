
@extends('layouts.index')
@include('layouts.flash')

@section('content')
    <div class="container">

        <h1 class="section-title text-primary">
            Apperçu de la page facts: 
        </h1>

        <div class="container row">
            @foreach ($facts as $fact)
                <div class="col-3 m-2 border">
                    <p class="text-center">Title: <br/> {{$fact->title}} </p>
                    <p class="text-center">Description: <br/> {{$fact->desc}}</p>
                    <p class="text-center">Icon: <i class="{{$fact->icon}}"></i></p>
                    <p class="text-center">
                        <a href={{route('ad.facts.edit', $fact->id)}}>
                            <button class="btn btn-warning">M</button>
                        </a>
                    </p>
                </div>
            @endforeach
        </div>

        <br/>
    </div>
@endsection

