<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        form {
            display: grid;
            grid-gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
        .nav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #333;
            overflow: hidden;
        }

        .nav li {
            float: left;
        }
        .nav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .nav li a:hover {
            background-color: #111;
        }
    </style>
</head>
<body>
<ul class="nav">
    <li><a href="/produits">liste des produit</a></li>
    <li><a href="/produits/ajouter">ajouter un produit</a></li>
</ul>
    <div class="container">
        <h1>Ajouter un Produit</h1>
        <form action="/produits/ajouter" method="post">
            @csrf
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom"><br>

            <label for="description">Description :</label><br>
            <textarea id="description" name="description"></textarea><br>

            <label for="prix">Prix :</label>
            <input type="text" id="prix" name="prix"><br>

            <button type="submit">Ajouter</button>
        </form>
    </div>
</body>
</html>