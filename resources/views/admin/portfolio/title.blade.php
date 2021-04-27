@extends('layouts.index')
@include('layouts.flash')
  


@section('content')
    <div class="container">
        <h1 class="section-title text-primary">Modification du titre "Portfolio"</h1>

        <form action={{route('ad.portfolio.et2')}} method="POST">
        @csrf
            <h3 class="text-primary">Titre:</h3>
            <textarea name="title" style="width:100%;" rows="3">{{ $titre->title }} </textarea>

            @error('title')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror

            <br/><input type="submit" value="Modifer >> ">        
        </form>


    </div>
@endsection