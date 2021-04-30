@extends('layouts.index')
@include('layouts.flash')


@section('content')
    <div class="container mt-5">
        <h1 class="section-title text-primary">Modification de la page {{$page->name}} </h1>

        <form action={{route('ad.pages.update', $page->id)}} method="POST">
            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-2">
                    <label for="title">Titre:</label>
                </div>
                <div class="col-10">
                    <input type="text" value="{{$page->name}}" disabled class="w-100" />
                </div>


                <div class="col-2">
                    <label for="description">Description:</label>
                </div>
                <div class="col-10">
                    <textarea name="description" class="w-100" rows="7">{{$page->description}}</textarea>
                </div>


                <div class="col-2">
                    <label for="desc1">Desc1:</label>
                </div>
                <div class="col-10">
                    {{-- <input type="text" name="{{$page->desc1}}" value="{{$page->desc1}}" class="w-100" /> --}}
                    <textarea name="desc1" class="w-100" rows="7" placeholder="{{ $page->desc3 === null ? "ceci est vide par défaut dans cette section" : ''}}">{{$page->desc1}}</textarea>
                </div>


                <div class="col-2">
                    <label for="desc2">Desc2:</label>
                </div>
                <div class="col-10">
                    {{-- <input type="text" name="{{$page->desc2}}" value="{{$page->desc2}}" class="w-100"/> --}}
                    <textarea name="desc2" class="w-100" rows="7" placeholder="{{ $page->desc3 === null ? "ceci est vide par défaut dans cette section" : ''}}">{{$page->desc2}}</textarea>
                </div>


                <div class="col-2">
                    <label for="desc3">Desc3:</label>
                </div>

                <div class="col-10">
                    {{-- <input type="text" name="{{$page->desc3}}" value="{{$page->desc3}}" class="w-100" /> --}}
                    <textarea name="desc3" class="w-100" rows="7" placeholder="{{ $page->desc3 === null ? "ceci est vide par défaut dans cette section" : ''}}">{{$page->desc3}}</textarea>
                </div>


                <div class="col-12 text-center">
                    <button class="btn btn-success" type="submit">Modifer > </button>
                </div>
            </div>
        </form>
    </div>
@endsection 