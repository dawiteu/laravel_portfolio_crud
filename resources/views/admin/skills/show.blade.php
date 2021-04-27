@extends('layouts.index')
@include('layouts.flash')


@section('content')
    <div class="container mt-5">
        <h1 class="text-primary">Les skills actuels: </h1>

        <table class="table table-dark table-stripped text-center">
            <tr><td>Technologie:</td><td>Connaissances</td><td>Action</td></tr>
            @foreach ($skills as $skill)
                <tr>
                    <td>{{$skill->technologie}}</td>
                    <td>{{$skill->value}}</td>
                    <td><a href={{route('ad.skills.edit', $skill->id)}} class="btn btn-warning">M</a>
                        <form action={{route('ad.skills.destroy', $skill->id)}} class="d-inline" method="POST">
                        @csrf
                        @method('DELETE')
                            <input type="submit" value="X" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        <a href={{route('ad.skills.add')}} class="btn btn-success">++Ajouter un skills</a>
    </div>
@endsection