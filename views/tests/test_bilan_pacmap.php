<div class="row">
<div class="offset-md-2 col-md-8">
    
    <h1>Vos résultats</h1>
    
    <div class="card">
        
        <table class="table table-bordered">
            <tr>
                <td class="col-md-6 text-xs-center">
                    Exploration et conception du projet <br> 
                    <span class="lead"><?php echo $axe1; ?> / 100</span></td>
                <td class="col-md-6 text-xs-center">
                    Management d'équipe projet <br> 
                    <span class="lead"><?php echo $axe2; ?> / 100</span></td>
            </tr>
            <tr>
                <td class="col-md-6 text-xs-center">
                    Pilotage <br> 
                    <span class="lead"><?php echo $axe3; ?> / 100</span></td>
                <td class="col-md-6 text-xs-center">
                    Portage <br> 
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
            <h3>Exploration et conception</h3>
    
            <?php
            AfficheScore('Analyse des besoins', $ab);
            AfficheScore('Analyse d\'impacts et des risques', $ai);
            AfficheScore('Analyse fonctionnelle', $af);
            AfficheScore('Analyse stratégique', $as);
            ?>
              
        </div>
    
    </div>
    <br>
    
    
    <div class="card">
        <div class="card-block">
    <h3>Management d'équipe projet</h3>
    
    <?php
    AfficheScore('Mobilisation des équipes projet', $mo);
    AfficheScore('Animation de réunion', $ar);
    AfficheScore('Argumentation, négociation', $an);
    AfficheScore('Gestion des conflits', $gc);
    ?>
        </div>
    </div>
    <br>
        
    
    <div class="card">
    <div class="card-block">
    <h3>Pilotage</h3>
    
    <?php
    AfficheScore('Conception de plan d\'action et décomposition structurée', $pa);
    AfficheScore('Planification', $pl);
    AfficheScore('Animation des instances de pilotage', $ip);
    AfficheScore('Mise en place et suivi des tableaux de bord projet', $tb);
    ?>
    </div>
    </div>
    <br>
    
    
    <div class="card">
    <div class="card-block">
    <h3>Portage</h3>
    
    <?php
    AfficheScore('Articulation management hiérarchique / projet', $mg);
    AfficheScore('Contractualisation', $co);
    AfficheScore('Prise de décision', $pd);
    AfficheScore('Communication et représentation externe du projet', $rp);
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