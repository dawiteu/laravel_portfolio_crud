@extends('layouts.index')


@section('content')
    <div class="container">
        <h1 class="section-title text-primary">Edit project id: {{ $proj->id }} </h1>

        <form action={{route('ad.projects.update', $proj->id)}} method="POST">
            @csrf

            <label for="image">Image: </label>
                <input type="text" name="img" class="w-75" value="{{$proj->img}} "> <br/> 

            <label for="link">Link: </label>
                <input type="text" name="link" class="w-75" value="{{$proj->link }} "> <br/> 

            <label for="cat">Categorie? </label>


            <select name="cat">

                <option value="app" {{ $proj->cat === 'app' ? 'selected=selected' : ''}}>app</option>
                <option value="card" {{ $proj->cat === 'card' ? 'selected=selected' : ''}}>card</option>
                <option value="web" {{ $proj->cat === 'web' ? 'selected=selected' : ''}}>web</option>

            </select> 
            <br/> 
            <input type="submit" value="Modifier >> ">
        </form>
    </div>
    
@endsection