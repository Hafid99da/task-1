<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Liste des Produits</h1>
    <ul>
        @foreach($produits as $produit)
            <li>{{ $produit->nom }} - {{ $produit->prix }}</li>
        @endforeach
    </ul>
    <a href="/produits/ajouter">Ajouter un produit</a>
</body>
</html>