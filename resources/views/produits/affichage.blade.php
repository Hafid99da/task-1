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

        .container {
            margin: 20px;
        }

        .container h1 {
            color: #333;
        }

        .container ul {
            list-style-type: none;
            padding: 0;
        }

        .container ul li {
            margin-bottom: 10px;
        }

        .container ul li:last-child {
            margin-bottom: 0;
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        thead {
            background-color: #333;
            color: #fff;
        }

        thead td {
            padding: 10px;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody td {
            padding: 10px;
        }

        tbody td:first-child {
            font-weight: bold;
        }

        tbody tr:hover {
            background-color: #ddd;
        }

    </style>
</head>
<body>
    <ul class="nav">
        <li><a href="/produits">liste des produit</a></li>
        <li><a href="/produits/ajouter">ajouter un produit</a></li>
    </ul>
    <div class="container">
        <h1>Liste des Produits</h1>
        <table>
            <thead>
                <tr>
                    <td>nom</td>
                    <td>Prix</td>
                </tr>
            </thead>
            <tbody>
            @foreach($produits as $produit)
                <tr>
                <td>{{ $produit->nom }}</td>
                <td>{{ $produit->prix }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="/produits/ajouter">Ajouter un produit</a>
    </div>
</body>
</html>