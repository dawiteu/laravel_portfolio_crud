
@extends('layouts.index')
@include('layouts.flash')

@section('content')
    <div class="container">

        <h1 class="section-title text-primary">
            Modification du moyen de  Contact: 
        </h1>
        <form action={{route('ad.contact.update', $cont->id)}} method="POST">
        @csrf
        @method('PUT')
        
            
            <h5 class="text-primary">Icon:  <input type="text" class="w-50" name="icon" value="{{ $cont->icon}}" /> </h5>
            <h5 class="text-primary">Class:  <input type="text" name="class" value="{{ $cont->class}}" />  </h5>
            <h5 class="text-primary">Method:   <input type="text" name="method" value="{{ $cont->method}}" /> </h5>
            
            <h5 class="text-primary">Valeur: </h5> 
            <p> <textarea name="value" style="width:100%;" rows="3">{{ $cont->value }} </textarea> </p>

            <br/> 
            <input type="submit" class="btn btn-warning" value="Valider Modifier >> ">    
        </form>

    </div>
@endsection

