<div class="jumbotron jumbotron-fluid bandeau_cours text-xs-center">
<div class="container">
<h1><?= $parcours->getTitre(); ?></h1>
<h3><?= $parcours->getSoustitre(); ?></h3>
</div>
</div>

<!-- Pas de row  -->  
    
    <!-- Colonne de gauche  -->  
    <div class="col-lg-2">
        <div class="card">
            <?php $i = 1; ?>
            <?php foreach ($modulesByParcours as $unModule) { ?>
                <a class="list-group-item" href="index.php?module=<?= $unModule->getId(); ?>">
                    <?php if ($i == $unModule->getId()) {  ?>
                        <span class="fa fa-chevron-right"></span>&nbsp;
                    <?php } ?>                  
                    <?= $unModule->getNom(); ?>
                    <?php $i++; ?>
                </a>
            <?php } ?>
        </div>
    </div>

     <!-- Colonne du milieu  -->  
    <div class="col-lg-7">
        <div class="card">

            <div class="card-header">
                <h1 class="my-1"><?= $module->getTitre(); ?></h1>           
            </div>
            
            <?php foreach ($ressourcesByModule as $ressource) { ?>
                <div class="card-block">
                    <?= $ressource->getReference(); ?>
                </div>
                <hr>
            <?php } ?>            

        </div>
    </div>     <!-- Fin colonne -->
    
    <!-- Colonne de droite  -->  
    <div class="col-lg-3">
        <div class="card">
        
        <div class="card-header">
            <h1 class="my-1">Fil de discussion</h1>
        </div>
        <div id="container_chat">

                <?php while ($donnees = $requete->fetch()) { ?>
                
                    <div class="card-block block_chat">
                    <strong><?php echo $donnees['nom']; ?> :</strong>
                    <?php echo $donnees['message']; ?>

                    </div>
                <hr class="hr_thin">
                
                <?php }
                $requete->closeCursor() ?>  
                
        </div>
           
        <div class="card-footer">
            
            <div class="input-group">
                <input class="form-control" name="message" id="chat_message" placeholder="Votre message"></textarea>
                <span class="input-group-btn">
                    <button id="submit" class="btn btn-primary center-block">Envoyer</button>
                </span>
            </div>
            
        </div>
        
    </div>
    </div>