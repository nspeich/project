<!DOCTYPE html>

<html lang="en">
<link rel="stylesheet" href="public/css/produit.css">


<head>
    <meta charset="UFT8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<h1>Ajouter des articles</h1>

<div class="Produit">
    <p>Ajouter un nouveau produit au catalogue</p>

    <form action="/page-traitement-donnees" method="post">
        <div>
            <label for="nom">Produit</label>
            <input type="text" id="nom" name="nom" placeholder="Produit" required>
        </div>
        <div>
            <label for="prix">Votre prix</label>
            <input type="prix" id="prix" name="prix" placeholder="€" required>
        </div>
        <div>
            <label for="sujet">Catégory</label>
            <select name="sujet" id="sujet" required>
                <option value="" disabled selected hidden>Choisir</option>
                <option value="probleme-compte">Cat 1</option>
                <option value="question-produit">Cat 2</option>
                <option value="autre">Autre...</option>
            </select>
        </div>
        <div>
            <label for="message">Déscription produit</label>
            <textarea id="message" name="message" placeholder="Déscription produit" required></textarea>
        </div>
        <div>
            <button type="submit">Publier mon produit</button>
        </div>
    </form>
</div>

</body>

</html>