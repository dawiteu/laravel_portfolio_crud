@extends('layouts.index')
@extends('layouts.flash')

@section('content')
    <div class="container">
        <h1 class="section-title text-primary">Appercu de la page Portfolio.</h1>

        <h3 class="text-primary">Titre:</h3>
            <p> {{ $portf->title }} </p>

            <div class="mx-auto my-2"><a href={{route('ad.portfolio.edititle')}}><button class="btn btn-primary">Changer le titre</button></a></div>
        Liste des projects: 

        <table class="table text-center table-striped ">
            <tr><th>Action</th><th>ID</th><th>IMG:</th><th>Link:</th><th>Categorie</th></tr>

            @foreach ($projs as $proj)
                <tr>
                    <td>
                        <a href={{route('ad.projects.edit', $proj->id)}}><button class="btn btn-warning">E</button></a>
                        <form class="d-inline" action={{route('ad.projects.destroy', $proj->id)}} method="POST">@csrf @method('DELETE')<button type="submit" class="btn btn-danger">X</button></form>
                    </td>
                    <td>{{$proj->id}}</td>
                    <td>{{$proj->img}}</td>
                    <td>{{ $proj->link}}</td>
                    <td>{{$proj->cat}} </td>
                </tr>
            @endforeach

        </table>

        {{-- <div class="mx-auto">{{ dd($projs->links()) }}</div>  --}}


        <div class="text-center mt-5"><a href={{route('ad.projects.add')}}><button class="btn btn-success">+++ Ajouter un projet +++</button></a></div>
    </div>
@endsection