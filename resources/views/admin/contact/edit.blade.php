
@extends('layouts.index')
@include('layouts.flash')

@section('content')
    <div class="container">

        <h1 class="section-title text-primary">
            Modification de la page Contact: 
        </h1>
        <form action={{route('ad.contact.update')}} method="POST">
        @csrf
        @method('PUT')
        
            <h5 class="text-primary">Titre: </h5> 
            <p> <textarea name="title" style="width:100%;" rows="3">{{ $cont->title }} </textarea> </p>

            <h5 class="text-primary">Location:  <input type="text" class="w-50" name="location" value="{{ $cont->location}}" /> </h5>
            <h5 class="text-primary">Email:  <input type="text" name="email" value="{{ $cont->email}}" />  </h5>
            <h5 class="text-primary">Tel:   <input type="text" name="tel" value="{{ $cont->tel}}" /> </h5>

            <br/> 
            <input type="submit" class="btn btn-warning" value="Valider Modifier >> ">    
        </form>

    </div>
@endsection

