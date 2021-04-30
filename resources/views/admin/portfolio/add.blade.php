@extends('layouts.index')
@include('layouts.flash')

@section('content')
    <div class="container">
        <h1 class="section-title text-primary">Ajouter un nouveau projet</h1>

        <form action={{route('ad.projects.add2')}} method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-4">
                    <label for="image">Image: </label>
                </div>
                <div class="col-6">
                    {{-- <input type="text" name="img" class="w-75" value="{{old("img")}}"> <br/> --}}
                    <input type="file" name="img" />
                </div>
                <div class="col-12">
                    @error('img')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror                    
                </div>

                <div class="col-4">
                    <label for="link">Link: </label>
                </div>
                <div class="col-6">
                    <input type="text" name="link" class="w-75" value="{{old("link")}}"> <br/> 
                </div>
                <div class="col-12">
                    @error('link')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>


                <div class="col-4">
                    <label for="cat">Categorie? </label>
                </div>
                <div class="col-6">
                    <select name="cat" selected="{{old('cat')}}">

                        <option value="app" >app</option>
                        <option value="card">card</option>
                        <option value="web" >web</option>
        
                    </select> 
                </div>
                <div class="col-6 offset-3">
                    @error('cat')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror      
                </div>

                <div class="col-12">
                    <input type="submit" value="Ajouter >> ">
                </div>
            </div>
            
                
        </form>
    </div>
    
@endsection