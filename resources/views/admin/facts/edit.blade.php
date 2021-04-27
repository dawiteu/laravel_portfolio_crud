@extends('layouts.index')

@section('content')
    <div class="container">
        <h1 class="section-title text-primary">
            Modification des  facts: 
        </h1>


        <form action={{route('ad.facts.update')}} method="POST">
        @csrf
    
        <h5 class="text-primary">Titre: </h5> 
        <p> <textarea name="title" style="width:100%;" rows="3">{{ $fact->title }} </textarea></p>

        <h3>
            Fact 1: <input type="number" name="fact_1" value="{{$fact->fact_1}}" min="0" />
        </h3>

        <h3>
            Fact 2: <input type="number" name="fact_2" value="{{$fact->fact_2}}" min="0" />
        </h3>

        <h3>
            Fact 3: <input type="number" name="fact_3" value="{{$fact->fact_3}}" min="0" />
        </h3>

        <h3>
            Fact 4: <input type="number" name="fact_4" value="{{$fact->fact_4}}" min="0" />
        </h3>


        <input type="submit" class="btn btn-success" value="Envoyer la modification "/>

        </form>
    </div>
@endsection