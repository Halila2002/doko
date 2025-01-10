<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Dokotoro -</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <h1 class="text-primary m-0">Dokotoro</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Acceuil</a>
                        <a href="about.php" class="nav-item nav-link">A propos</a>
                       <!-- Dropdown for "S'informer" -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="sInformerDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        S'informer
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="sInformerDropdown">
                        <li><a href="encyclopedie.php" class="dropdown-item">Encyclopédie</a></li>
                        <li><a href="rubrique.php" class="dropdown-item">Rubrique</a></li>
                        <li><a href="actualite.php" class="dropdown-item">Actualité</a></li>
                    </ul>
                </div>
                        <a href="hopital.php" class="nav-item nav-link">Se soigner</a>
                        <a href="formation.php" class="nav-item nav-link">Se former</a>
                        </div>
                        <a href="#" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="rdv.php" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Reservez un Rdv</a>
                    <div class="icone" style="margin-left:20px">
                    <a href="#" class="nav-item nav-link"> <i class="fas fa-user"></i></a>
        
                </div>
                  </div>
            </nav>

        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">S'informer</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
                    <li class="breadcrumb-item active text-primary">S'informer</li>
                    <li class="breadcrumb-item active text-primary">Encyclopédie</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Contenu principal -->
<div class="container mt-4" >
    <h2 style="text-align:center;">Bienvenue dans l'Encyclopédie Médicale</h2>
    <p style="text-align:center;">Explorez les grandes sections de la médecine ci-dessus.</p>
</div>

<style>
    .nav-bar {
        background-color: #007bff; /* Couleur bleue */
        padding: 10px 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .nav-bar a {
        color: #fff;
        text-decoration: none;
        margin: 0 15px;
        padding: 5px 10px;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }



    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1;
        min-width: 200px;
    }

    .dropdown-content a {
        color: #333;
        padding: 10px 15px;
        text-decoration: none;
        display: block;
        font-size: 14px;
    }

    .dropdown-content a:hover {
        background-color: #007bff;
        color: #fff;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>
<div class="nav-bar bg-primary text-white">
    <a href="#" class="nav-link ">Dictionnaire médical</a>
    <div class="dropdown">
        <a href="#" class="nav-link  dropdown-toggle">Maladies</a>
        <div class="dropdown-content">
            <a href="#" class="dropdown-item">Maladies de A à Z</a>
            <a href="#" class="dropdown-item">Maladies chez l'adulte</a>
            <a href="#" class="dropdown-item">Maladies chez l'enfant</a>
            <a href="#" class="dropdown-item">Maladies neurologiques</a>
            <a href="#" class="dropdown-item">Maux et maladies de grossesse</a>
            <a href="#" class="dropdown-item">Maladies rares</a>
        </div>
    </div>
    <div class="dropdown">
        <a href="#" class="nav-link  dropdown-toggle">Santé des patients</a>
        <div class="dropdown-content">
            <a href="#" class="dropdown-item">Agir pour ma Santé</a>
            <a href="#" class="dropdown-item">Examens, tests et Analyses</a>
            <a href="#" class="dropdown-item">Médecine thermale</a>
            <a href="#" class="dropdown-item">Grossesse</a>
            <a href="#" class="dropdown-item">Voyage</a>
            <a href="#" class="dropdown-item">Nutrition</a>
        </div>
    </div>
    <a href="#" class="nav-link ">Pharmacologie</a>
    <a href="#" class="nav-link ">Pratiques médicales</a>
    <a href="#" class="nav-link ">Santé mentale</a>
</div>

 <!-- Liste des lettres (A-Z) disposée horizontalement -->
 <div class="alphabet-list">
        <span class="alphabet bg-primary text-white" data-letter="A">A</span>
        <span class="alphabet bg-primary text-white" data-letter="B">B</span>
        <span class="alphabet bg-primary text-white" data-letter="C">C</span>
        <span class="alphabet bg-primary text-white" data-letter="D">D</span>
        <span class="alphabet bg-primary text-white" data-letter="E">E</span>
        <span class="alphabet bg-primary text-white" data-letter="F">F</span>
        <span class="alphabet bg-primary text-white" data-letter="G">G</span>
        <span class="alphabet bg-primary text-white" data-letter="H">H</span>
        <span class="alphabet bg-primary text-white" data-letter="I">I</span>
        <span class="alphabet bg-primary text-white" data-letter="J">J</span>
        <span class="alphabet bg-primary text-white" data-letter="K">K</span>
        <span class="alphabet bg-primary text-white" data-letter="L">L</span>
        <span class="alphabet bg-primary text-white" data-letter="M">M</span>
        <span class="alphabet bg-primary text-white" data-letter="N">N</span>
        <span class="alphabet bg-primary text-white" data-letter="O">O</span>
        <span class="alphabet bg-primary text-white" data-letter="P">P</span>
        <span class="alphabet bg-primary text-white" data-letter="Q">Q</span>
        <span class="alphabet bg-primary text-white" data-letter="R">R</span>
        <span class="alphabet bg-primary text-white" data-letter="S">S</span>
        <span class="alphabet bg-primary text-white" data-letter="T">T</span>
        <span class="alphabet bg-primary text-white" data-letter="U">U</span>
        <span class="alphabet bg-primary text-white" data-letter="V">V</span>
        <span class="alphabet bg-primary text-white" data-letter="W">W</span>
        <span class="alphabet bg-primary text-white" data-letter="X">X</span>
        <span class="alphabet bg-primary text-white" data-letter="Y">Y</span>
        <span class="alphabet bg-primary text-white" data-letter="Z">Z</span>
    </div>
  <!-- Section principale -->
  <div class="main-content">
        <!-- Sidebar des maladies -->
        <div class="sidebar">
            <h3>Liste des Maladies</h3>
            <ul id="disease-list">
                <!-- Les maladies seront listées ici selon la lettre sélectionnée -->
            </ul>
        </div>

        <!-- Détails de la maladie -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Détails de la maladie -->
                    <div class="disease-details">
                        <img id="disease-image" src="img/female.jpg" alt="Asthme" class="img-fluid">
                        <div class="description">
                            <h2 id="disease-title">Asthme</h2>
                            <p id="disease-description">L'asthme est une maladie chronique des voies respiratoires qui provoque des difficultés respiratoires. Elle est souvent causée par des allergies, des infections ou des facteurs environnementaux.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  

    <!-- Script pour gérer les clics sur les alphabets et les maladies -->
   
    <script>
        // Liste des maladies par lettre
        const diseases = {
            A: [
                { name: "Asthme", image: "img/female.jpg", description: "L'asthme est une maladie chronique des voies respiratoires." },
                { name: "Acné", image: "images/acne.jpg", description: "L'acné est une affection de la peau caractérisée par des boutons." },
                { name: "Arthrite", image: "images/arthritis.jpg", description: "L'arthrite est une inflammation des articulations." },
                { name: "Anémie", image: "images/anemia.jpg", description: "L'anémie est un trouble sanguin où il manque de globules rouges." },
            ],
            B: [
                { name: "Bronchite", image: "images/bronchitis.jpg", description: "La bronchite est l'inflammation des bronches, souvent causée par des infections virales." },
            ],
            // Ajoutez d'autres lettres avec leurs maladies
        };

        const alphabetList = document.querySelectorAll('.alphabet');
        const diseaseListElement = document.getElementById('disease-list');
        const diseaseTitle = document.getElementById('disease-title');
        const diseaseImage = document.getElementById('disease-image');
        const diseaseDescription = document.getElementById('disease-description');

        // Clic sur une lettre de l'alphabet
        alphabetList.forEach(letter => {
            letter.addEventListener('click', function () {
                const letterClicked = this.getAttribute('data-letter');
                displayDiseases(letterClicked);
            });
        });

        // Fonction pour afficher les maladies de la lettre sélectionnée
        function displayDiseases(letter) {
            const diseasesForLetter = diseases[letter] || [];
            diseaseListElement.innerHTML = ''; // Vide la liste des maladies

            diseasesForLetter.forEach(disease => {
                const listItem = document.createElement('li');
                listItem.textContent = disease.name;
                listItem.addEventListener('click', function () {
                    displayDiseaseDetails(disease);
                });
                diseaseListElement.appendChild(listItem);
            });

            // Afficher par défaut les détails de la première maladie
            if (diseasesForLetter.length > 0) {
                displayDiseaseDetails(diseasesForLetter[0]);
            }
        }

     
       // Initialiser la page avec les maladies de la lettre A
         window.onload = function () {
    displayDiseases('A'); // Affiche toutes les maladies de la lettre "A" avec images et descriptions
    };

    </script>

    

<style>
      /* Styles généraux */
body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f8f8;
}

header {
    background-color: #007BFF;
    color: white;
    text-align: center;
    padding: 20px;
}

header h1 {
    margin: 0;
}

/* Liste des Alphabets */
.alphabet-list {
    text-align: center;
    margin: 20px 0;
}

.alphabet {
    display: inline-block;
    background-color: #007BFF;
    color: white;
    padding: 10px 15px;
    margin: 5px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
    transition: background-color 0.3s;
}

.alphabet:hover {
    background-color: #0056b3;
}

/* Contenu principal */
.main-content {
    display: flex;
    margin: 20px;
}

.sidebar {
    width: 250px;
    background-color: #fff;
    padding: 20px;
    border-right: 2px solid #ddd;
}

.sidebar h3 {
    margin-top: 0;
}

#disease-list {
    list-style-type: none;
    padding: 0;
}

#disease-list li {
    cursor: pointer;
    padding: 10px;
    border: 1px solid #ddd;
    margin-bottom: 10px;
    transition: background-color 0.3s;
}

#disease-list li:hover {
    background-color: #f1f1f1;
}

/* Détails de la maladie */
.disease-details {
    flex: 1;
    padding: 20px;
    background-color: #fff;
    border-left: 2px solid #ddd;
}

.disease-details h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.disease-details img {
    max-width: 100%;
    height: 100px;
    margin-bottom: 20px;
}

.disease-details p {
    font-size: 16px;
}

/* Pied de page */
footer {
    text-align: center;
    padding: 15px;
    background-color: #007BFF;
    color: white;
}
.disease-details {
    display: flex;
    flex-direction: row;  /* Assure que l'image et la description sont alignées horizontalement */
    align-items: flex-start;  /* Aligne verticalement au début pour éviter des décalages */
    gap: 20px;  /* Espacement entre l'image et la description */
    margin-top: 20px;
    max-width: 100%;  /* Assure que le conteneur ne dépasse pas la largeur de l'écran */
}

.disease-details img {
    width: 200px;  /* Limite la largeur de l'image */
    height: auto;  /* Garde les proportions de l'image */
    max-width: 100%;  /* Permet à l'image de s'adapter à la largeur du conteneur */
    border-radius: 8px;  /* Bordure arrondie pour l'image */
}

.disease-details .description {
    flex-grow: 1;  /* Prend tout l'espace restant dans le conteneur */
}

.disease-details h2 {
    font-size: 1.8rem;  /* Taille du titre */
    margin-bottom: 10px;  /* Espacement sous le titre */
}

.disease-details p {
    font-size: 1rem;  /* Taille du texte */
    color: #555;  /* Couleur du texte */
}


    </style>
</body>
</html>

</style>