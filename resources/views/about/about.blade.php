@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9 col-sm-offset-2">
            <br>
            <div class="jumbotron">
                <h2 align="center" style="margin-top: 80px"><b>Bienvenue sur l'application Laravel 5.5.</b></h2>
                <hr class="my-4" />
                <p align="center">Vous êtes sur la page <b>About</b> de l'application.</p>
                <p class="lead" align='center'>
                <a href="/" class="btn btn-primary btn-sm">Acceuil</a>
                <a href="/contact" class="btn btn-warning btn-sm">Contact</a>
                </p>
            </div>
        </div>
    </div>
@endsection