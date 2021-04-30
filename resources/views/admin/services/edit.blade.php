@extends('layouts.index')
@include('layouts.flash')


@section('content')
    <div class="container mt-5">
        <h1 class="section-title text-primary">Modification du service {{$serv->id}} ({{$serv->title}}) </h1>

        <form action={{route('ad.services.update', $serv->id)}} method="POST">
            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-2">
                    <i class="{{$serv->icon}}"></i> 
                    <label for="icon">Icon:</label>
                </div>
                <div class="col-10">
                    <input type="text" name="icon" value="{{$serv->icon}}" />
                    @error('icon')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>


                <div class="col-2">
                    <i class="{{$serv->title}}"></i> 
                    <label for="title">Titre:</label>
                </div>
                <div class="col-10">
                    <input type="text" name="title" value="{{$serv->title}}" class="w-100" />
                    @error('title')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-2">
                    <i class="{{$serv->desc}}"></i> 
                    <label for="desc">description:</label>
                </div>
                <div class="col-10">
                    <textarea name="desc" class="w-100" > {{$serv->desc}}</textarea>
                    @error('desc')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>

            </div>

            <div class="col-12 text-center"><button class="btn btn-success" type="submit">Modifier >> </button></div>
        </form>
    </div>
@endsection