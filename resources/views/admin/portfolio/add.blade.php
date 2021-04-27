@extends('layouts.index')


@section('content')
    <div class="container">
        <h1 class="section-title text-primary"></h1>

        <form action={{route('ad.projects.add2')}} method="POST">
            @csrf

            <label for="image">Image: </label>
                <input type="text" name="img" class="w-75"> <br/> 

            <label for="link">Link: </label>
                <input type="text" name="link" class="w-75"> <br/> 

            <label for="cat">Categorie? </label>


            <select name="cat">

                <option value="app" >app</option>
                <option value="card">card</option>
                <option value="web" >web</option>

            </select> 
            <br/> 
            <input type="submit" value="Ajouter >> ">
        </form>
    </div>
    
@endsection