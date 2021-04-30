@extends('layouts.index')
@include('layouts.flash')


@section('content')
    <div class="container mt-5">
        <h1 class="section-title text-primary">Ajouter un nouveau service </h1>

        <form action={{route('ad.services.store')}} method="POST">
            @csrf

            <div class="row">

                <div class="col-2">
                    <label for="icon">Icon (nom):</label>
                </div>
                <div class="col-10">
                    <input type="text" name="icon" value="{{old('icon')}} " />
                    @error('icon')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>


                <div class="col-2">
                    <label for="title">Titre:</label>
                </div>
                <div class="col-10">
                    <input type="text" name="title" value="{{old('title')}}" class="w-100" />
                    @error('title')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-2">
                    <label for="desc">description:</label>
                </div>
                <div class="col-10">
                    <textarea name="desc" class="w-100" > {{old('desc')}} </textarea>
                    @error('desc')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>

            </div>

            <div class="col-12 text-center"><button class="btn btn-success" type="submit">Ajouter >> </button></div>
        </form>
    </div>
@endsection