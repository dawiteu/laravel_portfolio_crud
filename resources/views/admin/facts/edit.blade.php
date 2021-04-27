@extends('layouts.index')
@include('layouts.flash')

@section('content')
    <div class="container mt-5">
        <h1 class="section-title text-primary">
            Modification d'un facts (id: {{$fact->id}}): 
        </h1>


        <form action={{route('ad.facts.update', $fact->id)}} method="POST">
        @csrf
    
        <h5 class="text-primary">Titre: </h5> 
        <p> <input name="title" style="width:100%;" value="{{ $fact->title }}"/> </p>

        @error('title')
            <span class="text-danger">
                <strong>{{$message}}</strong>
            </span>
        @enderror


        <h5 class="text-primary">Icon: </h5> 
        <p><input type="text" name="icon" value="{{$fact->icon}}" /> </p>

        @error('icon')
            <span class="text-danger">
                <strong>{{$message}}</strong>
            </span>
        @enderror


        <h5 class="text-primary"> Description: </h5>
            <p><input type="text" name="desc" value="{{$fact->desc}}" /></p>

            @error('desc')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror


        <h5 class="text-primary"> Value: </h5>
            <p><input type="number" name="value" value="{{$fact->value}}" /></p>

            @error('value')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror



        <input type="submit" class="btn btn-success" value="Envoyer la modification "/>

        </form>
    </div>
@endsection