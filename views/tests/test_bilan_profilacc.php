<div class="offset-md-3 col-md-6">
    
    <h1>Vos résultats</h1>

    <div class="hb_scores">

        <!-- Profil -->

        <h3>Votre profil</h3>
        <p>L'interprétation des résultats vous sera fournie lors de votre échange avec le formateur / coach.</p>

        <div class="row">           
            <div class="col-md-4">   
                <p>Style 1 - Pilote : <?php echo ($s1); ?></p>
            </div>
            <div class="col-md-8">
                <progress class="progress progress-primary" value="<?php echo $s1; ?>" max="100"></progress>
            </div>
        </div>

        <div class="row">           
            <div class="col-md-4">   
                <p>Style 2 - Jardinier : <?php echo ($s2); ?></p>
            </div>
            <div class="col-md-8">
                <progress class="progress progress-primary" value="<?php echo $s2; ?>" max="100"></progress>
            </div>
        </div>

        <div class="row">           
            <div class="col-md-4">   
                <p>Style 3 - Ingénieur : <?php echo ($s3); ?></p>
            </div>
            <div class="col-md-8">
                <progress class="progress progress-primary" value="<?php echo $s3; ?>" max="100"></progress>
            </div>
        </div>

        <div class="row">           
            <div class="col-md-4">   
                <p>Style 4 - Artisan : <?php echo ($s4); ?></p>
            </div>
            <div class="col-md-8">
                <progress class="progress progress-primary" value="<?php echo $s4; ?>" max="100"></progress>
            </div>
        </div>

        <br>

    </div> <!-- Fin des tableaux de scores -->
              
    <h3>Vos résultats sont sauvegardés</h3>
    <p>Vous pouvez fermer cette fenêtre ou <a href="index.php">revenir à l'accueil</a></p> 
    
    <form method="post" action="index.php?action_user=delete&type=resultat">
        <input type="hidden" name="idUser" value="<?= $user->getId(); ?>">
        <input type="hidden" name="idTest" value="<?= $test->getId(); ?>">
        <input type="submit" value="Effacer les résultats" class="btn btn-link pl-0" />
    </form>
    
</div>