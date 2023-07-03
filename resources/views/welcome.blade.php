<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Formulaire</title>
</head>

<body>
    <div class="container form">
        <h2>Formulaire d'inscription</h2><br>

        <form action="/register/traitement" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Saisir votre nom" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prenom</label>
                <input type="text" name="prenom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Saisir votre prenom" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Saisir votre email" required>
            </div>
            @error('email')
            <p>Cet email existe déja </p>
            @enderror('email')
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Numéro de téléphone</label>
                <input type="int" name="numero" class="form-control" id="exampleInputPassword1" placeholder="Saisir votre numéro de téléphone" required>
            </div>
            @error('email')
            <p>Veillez saisir obligatoirement 8 caractère </p>
            @enderror('email')
            <div class="col-md-12 text-center">
                <button class="button" type="submit" name="submit" class="btn-primary ">Envoyer</button>
            </div>

        </form>
       
    </div>
</body>

</html>