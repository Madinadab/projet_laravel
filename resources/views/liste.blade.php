<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Formulaire</title>
</head>

<body>
    @if (session('status'))
    <a href="#" class="bottom-text-w3ls"> {{session('status')}} </a>
    @endif
    <div class="container tableau">
        <table class="table table-striped table-bordered pad text-center tableau">
            <thead class="table-dark">
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">NOM</th>
                    <th scope="col">PRENOM</th>
                    <th scope="col">Email</th>
                    <th scope="col">Numéro de téléphone</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $clients)
                <tr>
                    <td>{{$clients->id}}</td>
                    <td>{{$clients->nom}}</td>
                    <td>{{$clients->prenom}}</td>
                    <td>{{$clients->email}}</td>
                    <td>{{$clients->numero}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>