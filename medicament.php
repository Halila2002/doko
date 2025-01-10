<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartes Horizontales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            flex: 1;
            margin: 15px;
            height: auto; /* Hauteur ajustée au contenu */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre légère pour effet de profondeur */
        }
        .card-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap; /* Pour permettre aux cartes de se replier sur les petits écrans */
        }
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: flex-start; /* Aligne les éléments en haut de la carte */
            padding: 20px;
        }
        .btn {
            width: 48%;
            margin-top: 10px;
        }
        .links-container {
            list-style: none;
            padding: 0;
        }
        .links-container li {
            margin: 5px 0;
        }
        .links-container a {
            color: black; /* Change la couleur des liens en noir */
            text-decoration: none;
        }
        .links-container a:hover {
    color: #ff6347; /* Couleur rouge au survol */
}
        .links-container hr {
            border: 0;
            border-top: 1px solid #ddd; /* Barre horizontale réelle entre les liens */
            margin: 10px 0;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="card-container">
        <!-- Première carte : Professionnels de santé -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Professionnels de santé</h5>
                <p class="card-text">Accédez aux contenus qui vous sont réservés !</p>
                <div class="btn-container">
                    <button class="btn btn-primary">S'inscrire</button>
                    <button class="btn btn-secondary">Se connecter</button>
                </div>
                <h6 class="mt-3">VIDAL Recos :</h6>
                <ul>
                    <li>Par domaine thérapeutique</li>
                    <li>Par ordre alphabétique</li>
                </ul>
            </div>
        </div>

        <!-- Deuxième carte : Patient & proches -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Patient & proches</h5>
                <ul class="links-container">
                    <li><a href="#">Maladies chez l'adulte</a></li>
                    <hr>
                    <li><a href="#">Maladies chez l'enfant</a></li>
                    <hr>
                    <li><a href="#">J'ai mal à...</a></li>
                    <hr>
                    <li><a href="#">Mon enfant a...</a></li>
                    <hr>
                    <li><a href="#">Maux et maladies chez la femme enceinte</a></li>
                    <hr>
                </ul>
            </div>
        </div>

        <!-- Troisième carte : Maladies les + consultées -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Maladies les + consultées</h5>
                <ul class="links-container">
                    <li><a href="#">Comprendre les taux de cholestérol dans le sang</a></li>
                    <hr>
                    <li><a href="#">Maladie de Crohn</a></li>
                    <hr>
                    <li><a href="#">Hémorroïdes</a></li>
                    <hr>
                    <li><a href="#">Hypertension artérielle (HTA)</a></li>
                    <hr>
                    <li><a href="#">Goutte</a></li>
                    <hr>
                    <li><a href="#">Calculs biliaires</a></li>
                    <hr>
                    <li><a href="#">Infection urinaire</a></li>
                    <hr>
                    <li><a href="#">Mycose vaginale</a></li>
                    <hr>
                    <li><a href="#">Otite et douleur d’oreille de l'adulte</a></li>
                    <hr>
                    <li><a href="#">Les symptômes des poussées de la maladie de Crohn</a></li>
                    <hr>
                    <li><a href="#">Êtes-vous dépressif ?</a></li>
                    <hr>
                    <li><a href="#">Hernie discale</a></li>
                    <hr>
                    <li><a href="#">Mal de dos (lombalgie)</a></li>
                    <hr>
                    <li><a href="#">Zona</a></li>
                    <hr>
                    <li><a href="#">Fibromyalgie</a></li>
                    <hr>
                    <li><a href="#">Gale</a></li>
                    <hr>
                    <li><a href="#">Troubles bipolaires</a></li>
                    <hr>
                    <li><a href="#">Ballonnement, flatulence et aérophagie</a></li>
                    <hr>
                    <li><a href="#">Les médicaments de l’HTA</a></li>
                    <hr>
                    <li><a href="#">Maladie de Raynaud</a></li>
                    <hr>
                </ul>
            </div>
        </div>
    </div>
</div>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise en Page Deux Colonnes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 20px;
        }

        .main-content {
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .sidebar {
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .row > div {
            margin-bottom: 20px; /* Ajoute de l'espace sous chaque section */
        }

        .row > .col-md-8 {
            margin-right: 20px; /* Ajoute de l'espace entre les deux colonnes */
        }

        .sidebar img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .sidebar p {
            font-size: 0.9rem;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Section principale -->
            <div class="col-md-8 main-content">
                <h3>Descriptions des Maladies</h3>
                <p>
                    Cette section contient les descriptions détaillées des maladies, les symptômes, les causes et les traitements.
                    Par exemple, pour l'asthme, on peut inclure les déclencheurs, les médicaments disponibles, et les conseils pour la prévention.
                </p>
                <p>
                    Vous pouvez aussi ajouter des informations sur les maladies les plus courantes, leurs facteurs de risque et les conseils
                    pour un mode de vie sain afin d'éviter les complications.
                </p>
            </div>

            <!-- Sidebar -->
            <div class="col-md-3 sidebar">
                <h5>Actualités</h5>
                <div class="news-item">
                    <img src="https://via.placeholder.com/150" alt="Image Actualité">
                    <p>Découvrez les dernières avancées dans le domaine de la santé, y compris les nouvelles thérapies et les médicaments récemment approuvés.</p>
                </div>
                <div class="news-item">
                    <img src="https://via.placeholder.com/150" alt="Image Actualité">
                    <p>Participez à des événements locaux et apprenez-en davantage sur les initiatives de santé communautaire près de chez vous.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
