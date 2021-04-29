@extends('layouts.index')
@include('layouts.flash')

@section('content')
<div class="container mt-5">
        <h3 class="text-primary">Infos personnelles: xx</h3> 
    <form action={{route('ad.infop.update')}} method="POST" enctype="multipart/form-data">
        
    @csrf
    @method('PUT')

        <div class="row">
            <div class="col-6 ">
                <div class="row">
                    <div class="col-2">
                        <label for="prenom">Prénom:</label>
                    </div>
                    <div class="col-9">
                        <input type="text" name="prenom" value="{{$user->prenom }}"><br/> 
                        @error('prenom')
                            <span class="text-danger">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-2">
                        <label for="nom">Nom:</label>
                    </div>
                    <div class="col-9">
                        <input type="text" name="nom" value="{{ $user->nom }}"> <br/>
                        @error('nom')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="col-2">
                        <label for="ddn">DDN:</label>
                    </div>

                    <div class="col-9">
                        <input type="date" name="date" value="{{$user->date}}"> <br/>
                        @error('date')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="col-2">
                        <label for="site">WWW:</label>
                    </div>
                    <div class="col-9">
                        <input type="text" name="website" value="{{ $user->website }}"> <br/>
                        @error('website')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="col-2">
                        <label for="ville">Ville:</label>
                    </div>
                    <div class="col-9">
                        <input type="text" name="city" value="{{ $user->city }}"> <br/> 
                        @error('city')
                            <span class="text-danger">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="col-6 ">
                <div class="row">
                    <div class="col-2">
                        <label for="ville">Etudes:</label>
                    </div>
                    <div class="col-9">
                        <input type="text" name="degree" value="{{$user->degree}}"/> <br/>
                        @error('degree')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="col-2">
                        <label for="email">Email:</label>
                    </div>
                    <div class="col-9">
                        <input type="email" name="email" value="{{$user->email}}"/> <br/> 
                        @error('email')
                            <span class="text-danger">
                            <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-2">
                        <label for="freelance">Disponib:</label>
                    </div>
                    <div class="col-9">
                        <input type="text" name="freelance" value="{{$user->freelance}}"/> <br/> 
                        @error('freelance')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-2">
                        <label for="img">Image:</label>
                        <button 
                            type="button"
                            class="btn btn-secondary" 
                            onclick="javascript:document.querySelector('input[name=actimg]').value='';return false;"
                            data-toggle="tooltip" 
                            data-placement="bottom" 
                            title="Attention! vider seulement si vous uploader une nouvelle image!"
                            >vider
                        </button>
                    </div>
                    <div class="col-9">
                        {{-- <input type="text" name="actimg" value="{{$user->img}}" placeholder="nouveau link"/><br/> --}}
                        <input type="file" name="fileimg" /> <br/>

                        @error('fileimg')
                        <span class="text-danger">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                </div>
            </div>
        
            <div class="col-12 text-center mt-5">
                <input type="submit" class="btn btn-success" value="Valider la modification > " />
            </div>
        </div>
    </form>
</div>

@endsection

