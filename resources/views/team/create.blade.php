<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création d’une équipe</title>
</head>
<body>

<a href="/">Retour au dashboard</a>

<h1>Création d’un équipe</h1>
<form action="/" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="MAX_FILE_SIZE" value="32000000">
    <div>
        <label for="name">Entrez le nom de l’équipe</label>
        <input type="text" id="name" name="name" value="{{old('name')}}">
    </div>
    @error('name')
    <p>
        {{$message}}
    </p>
    @enderror
    <div>
        <label for="slug">Entrez un slug (3 lettres, ni plus, ni moins)</label>
        <input type="text" id="slug" name="slug" value="{{old('slug')}}">
    </div>
    @error('slug')
    <p>
        {{$message}}
    </p>
    @enderror
    <input type="hidden" name="action" value="store">
    <input type="hidden" name="resource" value="team">
    <input type="submit" value="Enregistrer cette équipe">
</form>
</body>
</html>