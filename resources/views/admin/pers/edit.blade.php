@extends('layouts.index')


@section('content')
<div class="container mt-5">
        <h3 class="text-primary">Infos personnelles: </h3> 
    <form action={{route('ad.infop.update')}} method="POST">
        
    @csrf

        <div class="row">
            <div class="col-6">
                Prénom: <input type="text" name="prenom" value="{{ $user->prenom }}"> <br/>
                Nom : <input type="text" name="nom" value="{{ $user->nom }}"> <br/>
                DDN: <input type="date" name="date" value="{{$date}}"> <br/>
                SITE : <input type="text" name="website" value="{{ $user->website }}"> <br/> 
                Ville: <input type="text" name="city" value="{{ $user->city }}"> <br/> 
            </div>
            <div class="col-6">
                études (niveau) : <input type="text" name="degree" value="{{$user->degree}}"/> <br/>
                email: <input type="email" name="email" value="{{$user->email}}"/> <br/> 
                Disponibilitée: <input type="text" name="freelance" value="{{$user->freelance}}"/> <br/> 
            </div>
        
        </div>
    
        <br/> 
    
        <input type="submit" class="btn btn-success" value="Valider la modification > " />
    </form>
</div>

@endsection

