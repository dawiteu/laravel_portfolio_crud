@extends('layouts.index')
@include('layouts.flash')


@section('content')
    <section id="admin">
        <div class="container">

            <h1 class="section-title">
                contenu admin. 
            </h1>


            <p>Bienvenu au centre de commandement. <br/> 
            Ici, vous pouvez modifier et consulté les données. </p>

            <p>Liste des pages: </p>

            <ul>
                @foreach ($pages as $page)
                    <li>
                        <h3 class="text-primary">({{$page->id}}): {{$page->name}}</h3>
                        <p class="border my-3 py-1">{{$page->description}} </p>
                        <div class="text-right">
                            <a href="{{route('ad.pages.edit', $page->id)}}" class="btn btn-warning">Modifier</a>
                        </div>
                    </li>
                @endforeach
            </ul>

            
        </div>
    </section>
@endsection