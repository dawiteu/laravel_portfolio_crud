
@extends('layouts.index')
@include('layouts.flash')

@section('content')
    <div class="container">

        <h1 class="section-title text-primary">
            Apperçu de la page facts: 
        </h1>

        <table class="table table-dark table-stripped text-center">
            <tr><td>Titre du fait:</td><td>Nombre </td><td>Description</td><td>Icon</td><td>Action</td></tr>
            @foreach ($facts as $fact)
            <tr>
                <td>{{$fact->title}}</td>
                <td>{{$fact->value}}</td>
                <td> {{$fact->desc}}</td>
                <td><i class="{{$fact->icon}}"></i></td>
                <td>
                    <a href={{route('ad.facts.edit', $fact->id)}}>
                            <button class="btn btn-warning">M</button>
                    </a>
                </td>
            </tr> 
            @endforeach
        </table>
        <br/>
        
    </div>
@endsection

