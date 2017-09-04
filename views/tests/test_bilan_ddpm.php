<div class="row">
<div class="offset-md-2 col-md-8">
    
    <h1>Vos résultats</h1>
    
    <div class="card">
        
        <table class="table table-bordered">
            <tr>
                <td class="col-md-6 text-xs-center">
                    Organisation de l’activité <br> 
                    <span class="lead"><?php echo $axe1; ?> / 100</span></td>
                <td class="col-md-6 text-xs-center">
                    Efficacité personnelle <br> 
                    <span class="lead"><?php echo $axe2; ?> / 100</span></td>
            </tr>
            <tr>
                <td class="col-md-6 text-xs-center">
                    Animation d’équipe <br> 
                    <span class="lead"><?php echo $axe3; ?> / 100</span></td>
                <td class="col-md-6 text-xs-center">
                    Management de son environnement <br> 
                    <span class="lead"><?php echo $axe4; ?> / 100</span></td>
            </tr>
        </table>  

    </div>    
    
    
    <?php 
    
    function AfficheScore($nom_score, $code_score) {
        echo '<div class="row">
        
                <div class="col-md-7">   
                <p>' . $nom_score . ' : ' . $code_score . '</p>
                </div>

                <div class="col-md-5">
                <progress class="progress progress-primary" value="' . $code_score . '" max="100"></progress>   
                </div>
                
            </div>';
    }
    
    ?>
    


    <br>
        
    <h1>Bilan détaillé</h1>
    
    <div class="card">
        <div class="card-block">
            <h3>Organisation de l’activité</h3>
    
            <?php
            AfficheScore('Développement et acquisition de compétences', $comp);
            AfficheScore('Planification, attribution et suivi de l\'activité', $plan);
            AfficheScore('Production d’une communication  de qualité (écrite et orale)', $comm);
            ?>
              
        </div>
    </div>
    <br>
    
    
    <div class="card">
        <div class="card-block">
            <h3>Efficacité personnelle</h3>

            <?php
            AfficheScore('Créativité / Innovation', $crea);
            AfficheScore('Organisation personnelle', $orga);
            AfficheScore('Adaptabilité / Flexibilité', $flex);
            ?>
            
        </div>
    </div>
    <br>
        
    
    <div class="card">
        <div class="card-block">
            <h3>Animation d'équipe</h3>

            <?php
            AfficheScore('Résolution de problème / Prise de décision', $reso);
            AfficheScore('Leadership', $lead);
            AfficheScore('Gestion de conflits', $conf);
            ?>

        </div>
    </div>
    <br>
    
    
    <div class="card">
        <div class="card-block">
            <h3>Management de son environnement</h3>

            <?php
            AfficheScore('Pilotage de projets', $proj);
            AfficheScore('Gestion de réseaux et de partenariats', $part);
            AfficheScore('Relations clients internes / externes', $clie);
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