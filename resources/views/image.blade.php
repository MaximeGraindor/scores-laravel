<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>
            Ajouter une partie
        </h1>
        <form action="/imgs" method="post" enctype="multipart/form-data">
            @csrf
            <label for="image">Ajouter l'image</label>
            <input type="file" id="image" name="image">
            <input type="submit" value="Envoyer">
        </form>
        
        @if(!is_null($imageName))
        <div>
            <img src="{{asset('images/'.$imageName)}}" alt="img">
        </div>
        @endif
    </body>
</html>