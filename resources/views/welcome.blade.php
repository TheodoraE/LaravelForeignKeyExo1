<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foreign Key exo1</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <section class="container mt-5">
        <h1 class="my-3">Formulaires</h1>

        <div>
            <h3 class="my-2">Ajouter les genres</h3>
            <form action="/genres" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Genre :</label>
                    <input type="text" name="genre">
                </div>
                <button type="submit" class="btn btn-success">Ajouter</button>
            </form>
        </div>
        <div>
            <h3 class="mt-5">Créer les membres</h3>
            <form action="/membres" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Nom :</label>
                    <input type="text" name="nom">
                </div>
                <div class="form-group">
                    <label for="">Prénom :</label>
                    <input type="text" name="prenom">
                </div>
                <div class="form-group">
                    <label for="">Genre :</label>
                    <select name="genre_id">
                        @foreach ($genres as $genre)
                            <option value="{{$genre->id}}">{{$genre->genre}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Ajouter</button>
            </form>
        </div>

        <div>
            <h4 class="mt-5">Les Membres</h4>
            <div class="container mt-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nom</th>
                            <th scope="col">prenom</th>
                            <th scope="col">genre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($membres as $membre)
                            <tr>
                                <th scope="row">{{$membre->id}}</th>
                                <td>{{$membre->nom}}</td>
                                <td>{{$membre->prenom}}</td>
                                <td>{{$membre->genres->genre}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <h4 class="mt-5">Les Genres</h4>
            <div class="container mt-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">genre</th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($genres as $genre)
                            <tr>
                                <th scope="row">{{$genre->id}}</th>
                                <td>{{$genre->genre}}</td>
                                <td>
                                    @foreach ($genre->membres as $item)
                                        <p>{{$item->nom}} {{$item->prenom}}</p>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>