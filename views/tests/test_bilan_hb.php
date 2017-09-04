<div class="offset-md-3 col-md-6">
    
    <h1>Vos résultats</h1>

    <div class="hb_scores">
            
        <h3>Flexibilité : <?php echo $flex; ?> / 30</h3>
        <p>La flexibilité correspond à votre capacité à faire varier vos comportements managériaux entre les différents registres.</p>
        <progress class="progress progress-primary" value="<?php echo $flex; ?>" max="30"></progress>
        
    </div>
    <br>
        

<!-- Essais (Adéquation) ----------------------- -->

    <div class="hb_adequation">  
        
        <h3>Adéquation : <?php echo $adeq; ?> / 80</h3>
        <p>L'adéquation correspond à votre capacité à choisir l'option correspondant au comportement le plus approprié, selon les informations fournies dans les intitulés des situations.</p>
        <progress class="progress progress-primary" value="<?php echo $adeq; ?>" max="80"></progress>

    </div>  
    <br>
    

<!-- Profil ----------------------- -->
        
    <h3>Votre profil</h3>
    <p>Le profil indique votre ou vos style(s) préférentiel(s). Les styles totalisant des scores supérieurs à 7 points sont considérés comme primaires, entre 4 et 6 points comme secondaires et inférieurs à 3 points comme à développer.</p>
    <p>L'interprétation des résultats vous sera fournie lors de votre échange avec le formateur / coach.</p>
                
    <div class="row">           
        <div class="col-md-4">   
            <p>Style 1 : <?php echo $s1; ?> / 20</p>
        </div>

        <div class="col-md-8">
            <progress class="progress progress-primary" value="<?php echo $s1; ?>" max="20"></progress>
        </div>
    </div>
    
    <div class="row">           
        <div class="col-md-4">   
            <p>Style 2 : <?php echo $s2; ?> / 20</p>
        </div>

        <div class="col-md-8">
            <progress class="progress progress-primary" value="<?php echo $s2; ?>" max="20"></progress>
        </div>
    </div>
    
    <div class="row">           
        <div class="col-md-4">   
            <p>Style 3 : <?php echo $s3; ?> / 20</p>
        </div>

        <div class="col-md-8">
            <progress class="progress progress-primary" value="<?php echo $s3; ?>" max="20"></progress>
        </div>
    </div>
    
    <div class="row">           
        <div class="col-md-4">   
            <p>Style 4 : <?php echo $s4; ?> / 20</p>
        </div>

        <div class="col-md-8">
            <progress class="progress progress-primary" value="<?php echo $s4; ?>" max="20"></progress>
        </div>
    </div>
    <br>
    
                         
    <!-- Fin des tableaux de scores -->
    
    <h3>Vos résultats sont sauvegardés</h3>
    <p>Vous pouvez fermer cette fenêtre ou <a href="index.php">revenir à l'accueil</a></p> 
    
    <form method="post" action="index.php?action_user=delete&type=resultat">
        <input type="hidden" name="idUser" value="<?= $user->getId(); ?>">
        <input type="hidden" name="idTest" value="<?= $test->getId(); ?>">
        <input type="submit" value="Effacer les résultats" class="btn btn-link pl-0" />
    </form>
    
</div>