<div class="panel_gauche"></div>
<div class="panel_droite"></div>

<div class="col-md-4 offset-md-1 mt-2">

    <h1 class="blanc">Question <?= $noQuestion; ?> / <?= $test->getNbQuestions(); ?></h1>
    <p class="question"><?php echo $resultat['question']; ?></p>

</div>

<div class="col-md-4 offset-md-2 mt-2">
    
        <form method="post" action="index.php?action_user=create&type=resultat">

            <div class="" data-toggle="buttons">

                <label class="btn btn-primary reponse">
                <input type="radio" name="reponse" id="A" value="A"><?php echo $resultat['r1']; ?>
                </label>
                <hr class="hr_thin">

                <label class="btn btn-primary reponse">
                <input type="radio" name="reponse" id="B" value="B"><?php echo $resultat['r2']; ?>
                </label>
                <hr class="hr_thin">

                <label class="btn btn-primary reponse">
                <input type="radio" name="reponse" id="C" value="C"><?php echo $resultat['r3']; ?>
                </label>
                <hr class="hr_thin">

                <label class="btn btn-primary reponse">
                <input type="radio" name="reponse" id="D" value="D"><?php echo $resultat['r4']; ?>
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