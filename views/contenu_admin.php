<div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-2">
        
    <h1>Voir le parcours :</h1> 
    
    <div class="row flex_row"> 
        
        <?php foreach ($parcours as $unParcours) { ?>
        
        <div class="col-xl-3 col-lg-4 col-md-6 mt-1">
        <div class="card">
        <img class="card-img-top img-fluid" src="img/parcours.png" alt="parcours">

        <div class="card-block" style="min-height: 120px;">
            <h4 class="card-title"><?= $unParcours->getNom(); ?></h4>
        </div>

        <div class="card-block">
            <a href="index.php?parcours=<?= $unParcours->getId(); ?>" class="btn btn-primary">Voir le parcours</a>
        </div>

        </div>
        </div>
        
        <?php } ?>
    
        <div class="col-xl-3 col-lg-4 col-md-6 mt-1">
        <div class="card">
        <img class="card-img-top img-fluid" src="img/parcours_new.png" alt="parcours_new">
        <div class="card-block">
        <h4 class="card-title">Nouveau parcours</h4>
        <a href="index.php?section=nouveau_parcours" class="btn btn-primary" style="position: absolute; bottom: 20px; left: 20px;">Créer le parcours</a>
        </div>
        </div>
        </div> 
        
    </div>

  <br>          
</div>

        