<?php ob_start(); 
require '../utile/formatage.php';
?>

<!-- Présentation de ma personne -->
<div class="container text-center" id="accueil">
    <?= formatageTitre("Andoni Lalanne-Berdouticq") ?>
    <div class="m-5 container text-center">
        <div class="row">
            <div class="col-6">  
                <div class="card" style="width: 20rem;">
                    <img src="../source/images/card1.jpg" class="card-img-top" height="165px" alt="...">
                </div>  
            </div>
            <div class="col-6">
                <div class="card" style="width: 18rem;">
                    <img src="../source/images/card1.jpg" class="card-img-top" height="165px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Portfolio</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>          
            </div>
        </div>
    </div>
</div>

<div class="text-center mt-3">
    <a class="btn btn-success rounded-pill monBouton" href="../source/pdf/Lalanne_Berdouticq_CV.pdf" download="Lalanne-Berdouticq-Andoni">Télécharger mon CV</a>
</div>


<!-- Progress bar -->
<div class="container text-center" id="competences">
    <?= formatageTitre("Mes compétences") ?>
    <div class="row">
        <div class="col-12 col-md-6 perso_colorYellow">
            HTML/CSS
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 50%">50%</div>
            </div>
        </div>
        <div class="col-12 col-md-6 perso_colorYellow">
            PHP / POO
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 25%">25%</div>
            </div>
        </div>
        <div class="col-12 col-md-6 perso_colorYellow">
            Javascript / Node.js
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 5%">5%</div>
            </div>
        </div>
        <div class="col-12 col-md-6 perso_colorYellow">
            SQL / PDO
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 50%">50%</div>
            </div>
        </div>
    </div>
</div>


<!-- Card -->
<div class="container text-center" id="mesProjets">
    <?= formatageTitre("Mes projets") ?>
    <div class="m-5 container text-center">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="../source/images/card1.jpg" class="card-img-top" height="165px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Portfolio</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cours1">Détails</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="../source/images/card2.jpg" class="card-img-top" height="165px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ITwatchdog</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cours2">Détails</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="../source/images/card3.jpg" class="card-img-top" height="165px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Je ne sais pas encore</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cours3">Détails</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    

    <!-- Modal (Fenêtre qui apparaît quand on clique sur le bouton de la card) -->
    <div class="modal fade" id="cours1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Portfol.io</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../source/images/card1.jpg" class="card-img-top" alt="...">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel fugit nemo libero ipsa blanditiis earum unde, neque eum modi obcaecati repellendus odio quos deserunt sunt quia nobis reprehenderit! Laboriosam, optio.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal (Fenêtre qui apparaît quand on clique sur le bouton de la card) -->
    <div class="modal fade" id="cours2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="cours2">ITwatchdog</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../source/images/card2.jpg" class="card-img-top" alt="...">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel fugit nemo libero ipsa blanditiis earum unde, neque eum modi obcaecati repellendus odio quos deserunt sunt quia nobis reprehenderit! Laboriosam, optio.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal (Fenêtre qui apparaît quand on clique sur le bouton de la card) -->
    <div class="modal fade" id="cours3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="cours2">ITwatchdog</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="../source/images/card3.jpg" class="card-img-top" alt="...">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel fugit nemo libero ipsa blanditiis earum unde, neque eum modi obcaecati repellendus odio quos deserunt sunt quia nobis reprehenderit! Laboriosam, optio.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Intégration du jquery pour que le main.js fonctionne -->
    <script src="../js/main.js"></script>

<?php
    $content = ob_get_clean();
    require "commons/template.php";
?>