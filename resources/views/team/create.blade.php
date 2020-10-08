@extends('layouts.main')

@section('pathCss')
    <link rel="stylesheet" href="../css/app.css">
@endsection

<x-header></x-header>

@section('content')
    <h1 class="mt-4 mb-4">Création d’un équipe</h1>
    <div class="d-flex justify-content-between">
        <section>
            <h2>
                Les Équipes déja listées
            </h2>
            <ul>
                @foreach($teams as $team)
                    <li>
                        <a href="/team/{{$team->id}}/edit">
                            <img src="{{asset('images/'.$team->logo)}}" alt="">
                            <span>{{$team->name}} - [{{$team->slug}}]</span>
                        </a>

                    </li>
                @endforeach
            </ul>
            <p>
                L'équipe fait déjà partie de la liste -> <a href="/match/create">Ajouter un match</a>
            </p>
        </section>
        <form action="/team" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="MAX_FILE_SIZE" value="32000000">

            <div class="form-group">
                <label for="name">Entrez le nom de l’équipe</label>
                <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control">
            </div>
            @error('name')
            <p>
                {{$message}}
            </p>
            @enderror

            <div class="form-group">
                <label for="slug">Entrez un slug (3 lettres, ni plus, ni moins)</label>
                <input type="text" id="slug" name="slug" value="{{old('slug')}}" class="form-control">
            </div>
            @error('slug')
            <p>
                {{$message}}
            </p>
            @enderror

            <div class="form-group">
                <label for="logo">Fournissez un logo (un png d’au moins 400px et au plus 1600px de large et de haut)</label>
                <input type="file" id="logo" name="logo" value="" class="form-control-file">
            </div>
            @error('logo')
            <p>
                {{$logo}}
            </p>
            @enderror
            <input type="hidden" name="action" value="store">
            <input type="hidden" name="resource" value="team">
            <input type="submit" value="Enregistrer cette équipe">
        </form>
    </div>

@endsection