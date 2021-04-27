@extends('layouts.index')
@include('layouts.flash')


@section('content')
    <div class="container mt-5">
        <h1 class="section-title text-primary">Admin:: Mailbox </h1>

        @if (!isset($mails))
            <h5>Lecture mail numéro: {{ $mail->id }} </h5> 

            <div class="container">
                <div class="row">
                    <div class="col-2">Auteur: <span class="font-italic font-weight-bold">{{$mail->name}}</span></div> 
                    <div class="col-3">Sujet: <span>{{$mail->subject}}</span> </div>
                    <div class="col-7 border">Message: <p>{{$mail->message}}</p></div>
                </div>
            </div>

        @else
            <h5>Messages au total: {{ $mails->count() }} </h5> 

            <table class="table table-stripped table-hover text-center">
                <tr><td>ID</td><td>Email: </td><td>Nom:</td><td>Titre:</td><td>Action</td></tr>
                @foreach ($mails as $mail)
                    <tr class="thead">
                        <td class={{$mail->lu == 0 ? 'font-weight-bold' : ''}}>{{ $mail->id }}</td>
                        <td class={{$mail->lu == 0 ? 'font-weight-bold' : ''}}>{{$mail->email}}</td>
                        <td class={{$mail->lu == 0 ? 'font-weight-bold' : ''}}> {{$mail->name}} </td>
                        <td class={{$mail->lu == 0 ? 'font-weight-bold' : ''}}>{{$mail->subject}}</td>
                        <td>
                            <a href={{route('ad.mailbox.mailshow', $mail->id)}}>
                                <button class="btn btn-success">Lire</button>
                            </a> 
                            <button class="btn btn-danger">X</button>
                        </td>
                        </tr>
                @endforeach
            </table>

            {{ $mails->links() }}     
        @endif



    </div>
@endsection