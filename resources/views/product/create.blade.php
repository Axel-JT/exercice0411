<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Produit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 600px;
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        textarea {
            min-height: 100px;
            resize: vertical;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Ajouter un Produit</h1>
    
    <form action="{{route('products.store')}}" method="POST">
        <!-- TODO: Ajouter un token CSRF -->
        @csrf

        <label for="name">Nom</label>
        <input type="text" id="name" name="name" placeholder="Entrez le nom du produit" value="mon nom" required>
        
        <!-- TODO: Ajouter un input pour la description -->
        <label for="description">Description</label>
        <input type="text" id="description" name="description" placeholder="Entrez la description" value="mon nom"required>
        
        <!-- TODO: Ajouter un input pour le prix -->
        <label for="price">Prix</label>
        <input type="text" id="price" name="price" placeholder="Entrez le prix" value="19" required>
        
        <!-- TODO: Ajouter un input pour le stock -->
        <label for="stock">Stock</label>
        <input type="text" id="stock" name="stock" placeholder="Entrez le stock" value="20"required>
        
        <!-- TODO: Ajouter un input pour la catégorie -->
        <label for="category">Categorie</label>
        <input type="text" id="category" name="category" placeholder="Entrez la catégorie" value="mon nom" required>
        
        <button type="submit">Ajouter</button>
    </form>
    
    <a href="{{route('products.index')}}">Retour à la liste</a>
    
</body>
</html>