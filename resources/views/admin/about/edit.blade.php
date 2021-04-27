
@extends('layouts.index')
@extends('layouts.flash')


@section('content')
    <div class="container">

        <h1 class="section-title text-primary">
            Modification de la page about: 
        </h1>

        <form action={{route('ad.about.update')}} method="POST">
        @csrf
        <div>
            <h5 class="text-primary">Titre: </h5> 
            <p> <textarea name="title" style="width:100%;" rows="3">{{ $abouts->title }} </textarea></p>
            @error('title')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror  
        </div>

        <div>
        <h5 class="text-primary">Profil: </h5>
        <p> <input type="text" name="descprofil" value="{{ $abouts->descprofil }}" class="w-50"> </p>
        @error('descprofil')
            <span class="text-danger">
                <strong>{{$message}}</strong>
            </span>
        @enderror 
        </div>

        <div>
        <h5 class="text-primary">Description 1: </h5>
        <p> <input type="text" name="desc1" value="{{ $abouts->desc1 }}" class="w-100"> </p>
        @error('desc1')
            <span class="text-danger">
                <strong>{{$message}}</strong>
            </span>
        @enderror 
        </div>

        <div>
        <h5 class="text-primary">Description 2: </h5>
        <p> <textarea name="desc2" class="w-100" rows="3">{{ $abouts->desc2 }}</textarea> </p>
        @error('desc2')
            <span class="text-danger">
                <strong>{{$message}}</strong>
            </span>
        @enderror 
        </div>
        <br/> 
        <input type="submit" class="btn btn-success" value="Envoyer la modification "/>
    </form>
    </div>
@endsection

