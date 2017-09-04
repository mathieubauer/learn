<div class="panel_gauche"></div>
<div class="panel_droite"></div>

<div class="col-md-4 offset-md-1 mt-2">

    <h1 class="blanc">Question <?= $noQuestion; ?> / <?= $test->getNbQuestions(); ?></h1>
    <p class="question"><?php echo $resultat['question']; ?></p>

</div>

<div class="col-md-4 offset-md-2 mt-2">
    
    <form method="post" action="index.php?action_user=create&type=resultat">

        <div class="" data-toggle="buttons">

            <label class="btn btn-primary reponse reponse_scale">
            <input type="radio" name="reponse" id="1" value="1">1. En complet désaccord
            </label>
            <hr class="hr_thin">

            <label class="btn btn-primary reponse reponse_scale">
            <input type="radio" name="reponse" id="2" value="2">2. Moyennement en désaccord
            </label>
            <hr class="hr_thin">

            <label class="btn btn-primary reponse reponse_scale">
            <input type="radio" name="reponse" id="3" value="3">3. Un peu en désaccord
            </label>
            <hr class="hr_thin">

            <label class="btn btn-primary reponse reponse_scale">
            <input type="radio" name="reponse" id="4" value="4">4. Un peu en accord
            </label>
            <hr class="hr_thin">

            <label class="btn btn-primary reponse reponse_scale">
            <input type="radio" name="reponse" id="5" value="5">5. Plutôt en accord
            </label>
            <hr class="hr_thin">

            <label class="btn btn-primary reponse reponse_scale">
            <input type="radio" name="reponse" id="6" value="6">6. Tout à fait d'accord
            </label>

        </div>
        <br>

        <input type="hidden" name="idUser" value="<?= $user->getId(); ?>">
        <input type="hidden" name="idTest" value="<?= $test->getId(); ?>">
        <input type="hidden" name="noQuestion" value="<?= $noQuestion; ?>">

        <input type="submit" class="btn btn-primary pull-right" value="Valider la réponse" />

    </form>

</div>

<nav class="navbar navbar-light bg-faded navbar-fixed-bottom">
    <ul class="nav navbar-nav">
        <li class="nav-item float-md-right ml-2">
            <a href="index.php">Retour à l'accueil</a>
        </li>
        <li class="nav-item float-md-right">
            <!-- <a href="#">Remise à zéro</a> -->
        </li> 
    </ul>  
</nav>