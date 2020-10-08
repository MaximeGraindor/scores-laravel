@extends('layouts.main')

@section('pathCss')
    <link rel="stylesheet" href="../../css/app.css">
@endsection

<x-header></x-header>

@section('content')
    <h1 class="mt-4 mb-4">Modification de l'équipe {{$team->name}}</h1>
    <div class="d-flex justify-content-between">
        <form action="/team/{{$team->id}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label for="name">Entrez le nom de l’équipe</label>
                <input type="text" id="name" name="name" value="{{$team->name}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="slug">Entrez un slug (3 lettres, ni plus, ni moins)</label>
                <input type="text" id="slug" name="slug" value="{{$team->slug}}" class="form-control">
            </div>

            <div class="form-group">
                <p class="alert-info font-weight-bold">Ne rien fournir si un logo est déjà présent</p>
                <label for="logo">Fournissez un logo (un png d’au moins 400px et au plus 1600px de large et de haut)</label>
                <br>
                <img src="{{asset('images/'.$team->logo)}}" alt="">
                <input type="file" id="logo" name="logo" value="" class="form-control-file">
            </div>

            <input type="submit" value="Enregistrer cette équipe">
        </form>
    </div>

@endsection