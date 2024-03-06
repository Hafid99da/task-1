<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .nav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #333;
            overflow: hidden;
        }

        .nav li {
            float:inline-start;
        }

        .nav li a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #fff;
        }

        .nav li a:hover {
            background-color: #555;
        }
        .container a {
            display: block;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            margin-top: 10px;
            border-radius: 5px;
            width:fit-content;
        }

        .container a:hover {
            background-color: #0056b3;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .container-item {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }

        .container-item h2 {
            margin-top: 0;
        }

        .container-item button {
            background-color: #d9534f;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .container-item button:hover {
            background-color: #c9302c;
        }

    </style>
</head>
<body>
    <ul class="nav">
        <li><a href="/produits">liste des produit</a></li>
        <li><a href="/produits/ajouter">ajouter un produit</a></li>
    </ul>
    <h1>Liste des Produits</h1>
    <div class="container">
        @foreach ($produits as $produit)
        <div class = "container-item">
            <h2>{{ $produit->nom }}</h2>
            <p>{{ $produit->description }}</p>
            <p>Prix: {{ $produit->prix }}</p>
            <h3>Commentaires :</h3>
            <ul>
                @if(!$produit->commentaires->isEmpty())
                    @foreach($produit->commentaires as $commentaire)
                        <li>{{ $commentaire->contenu }}</li>
                    @endforeach
                @else
                    <p>Aucun commentaire pour ce produit.</p>
                @endif
            </ul>
            <form action="{{ route('produits.delete', $produit->id) }}" method="post">
                @csrf
                @method("DELETE")
                <button type="submit">Supprimer</button>
            </form>
        </div>
        @endforeach
        <a href="/produits/ajouter">Ajouter un produit</a>
    </div>
</body>
</html>