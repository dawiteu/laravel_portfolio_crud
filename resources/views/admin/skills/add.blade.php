@extends('layouts.index')
@include('layouts.flash')


@section('content')
    <div class="container mt-5">
        <h1 class="text-primary">Ajouter un  skill: </h1>

        <form action={{route('ad.skills.store')}} method="POST">
            @csrf

            <h5 class="text-primary">Nom: </h5> 
            <p><input type="text" name="technologie" /></p>
            @error('technologie')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror

            <h5 class="text-primary">Value: </h5> 
            <p><input type="number" name="value" min="0" max="100" value="50" /></p>
        @error('value')
            <span class="text-danger">
                <strong>{{$message}}</strong>
            </span>
        @enderror

            <br/><input type="submit" value="Ajouter > "/>
        </form>
    </div>
@endsection