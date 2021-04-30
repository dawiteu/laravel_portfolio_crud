@extends('layouts.index')
@include('layouts.flash')


@section('content')
    <div class="container mt-5">
        <h1 class="section-title text-primary"><i class="bx bx-cog"></i> Liste des services: </h1>

        <table class="table table-light text-center table-striped table-bordered">
            <tr>
                <td>Icon</td>
                <td>title</td>
                <td>Description</td>
                <td>Action</td>
            </tr>

            @foreach ($services as $service)
                <tr>
                    <td><div class="icon"><i class="{{$service->icon}}"></i></div> </td>
                    <td>{{$service->title}}</td>
                    <td>{{$service->desc}}</td>
                    <td class="d-flex">
                        <a href={{route('ad.services.edit', $service->id)}} class="btn btn-warning">M</a>
                        <form action={{route('ad.services.destroy', $service->id)}} method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">X</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            
        </table>

        <p>xxx</p>
        <div class="w-50 mx-auto">{{ $services->links() }}</div> 


        <div class="text-center mt-5"><a href={{route('ad.services.add')}}><button class="btn btn-success">+++ Ajouter un service +++</button></a></div>
    </div>
@endsection