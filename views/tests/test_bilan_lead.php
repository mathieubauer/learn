<?php 
    
    function AfficheScore($nom_score, $code_score) {
        echo '<div class="row">
        
                <div class="col-md-7">   
                <p>' . $nom_score . ' : ' . $code_score . '</p>
                </div>

                <div class="col-md-5">
                <progress class="progress progress-primary" value="' . $code_score . '" max="18"></progress>   
                </div>
                
            </div>';
    }
    
    ?>
    
<div class="row">
<div class="offset-md-2 col-md-8"> 
    
    <h1>Vos résultats</h1>
        
    <div class="card">
        <div class="card-block">
            <h3>Leader...</h3>
    
            <?php
            AfficheScore('Visionnaire', $vi);
            AfficheScore('Motivateur', $mo);
            AfficheScore('Analyste', $an);
            AfficheScore('Maître de tâches', $mt);
            ?>
              
        </div>
    </div>
    <br>
  
    <h3>Vos résultats sont sauvegardés</h3>
    <p>Vous pouvez fermer cette fenêtre ou <a href="index.php">revenir à l'accueil</a></p> 
    
    <form method="post" action="index.php?action_user=delete&type=resultat">
        <input type="hidden" name="idUser" value="<?= $user->getId(); ?>">
        <input type="hidden" name="idTest" value="<?= $test->getId(); ?>">
        <input type="submit" value="Effacer les résultats" class="btn btn-link pl-0" />
    </form>
    
</div> 
</div>