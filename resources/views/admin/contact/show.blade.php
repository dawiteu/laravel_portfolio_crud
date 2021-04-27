
@extends('layouts.index')
@include('layouts.flash')


@section('content')
    <div class="container">

        <h1 class="section-title text-primary">
            Apperçu de la page Contact: 
        </h1>

        <table class="table text-center">
            <tr>
                <td>Icone</td>
                <td>Class (css)</td>
                <td>Moyen contact:</td>
                <td>Valeur: </td>
                <td>Action</td>
            </tr>

            @foreach ($cont as $con)
                <tr> 
                    <td>
                        <i class={{$con->icon}}></i>
                    </td>
                    <td>
                        {{$con->class}}
                    </td> 
                    <td>
                        {{$con->method}}
                    </td>
                    <td>
                        {{$con->value}}
                    </td>
                    <td><a href={{route('ad.contact.edit', $con->id)}} class="btn btn-warning">M</a>
                        {{-- <form action={{route('ad.contact.destroy', $con->id)}} class="d-inline" method="POST">
                        @csrf
                        @method('DELETE')
                            <input type="submit" value="X" class="btn btn-danger">
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </table>


        <br/> 
        {{-- <a href={{route('ad.contact.edit')}} class="btn btn-warning">Modifier</a> --}}
    </div>
@endsection

