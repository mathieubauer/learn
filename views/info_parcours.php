<div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-1">
    
        <h1 class="mb-3"><?= $parcours->getNom(); ?></h1>
    
        <div class="jumbotron jumbotron-fluid bandeau_cours text-xs-center">
        <div class="container">
        <h1><?= $parcours->getTitre(); ?></h1>
        <h3><?= $parcours->getSoustitre(); ?></h3>
        </div>
        </div>
        
        <div class="row"> 
            
            <!-- Colonne de gauche  -->  
            <div class="col-lg-2">
                <div class="card">
                    <?php foreach ($modulesByParcours as $module) { ?>
                        <a class="list-group-item" href="#"><?= $module->getNom(); ?></a>
                    <?php } ?>
                        <a class="list-group-item fond_gris" href="#" data-toggle="modal" data-target="#modalAdd">Attacher un module</a>
                        <a class="list-group-item fond_gris" href="#" data-toggle="modal" data-target="#modalDelete">Détacher un module</a>
                </div>
            </div>
            
            <!-- Colonne de droite  -->  
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h1 class="my-1">Contenu</h1>
                    </div>
                    <div class="card-block">
                        <p>Affichage du contenu du module</p>
                        <p>La navigation s'affiche à gauche</p>
                    </div>
                    
                </div>
            </div>

        </div>
    
      
<!-- Modal attacher -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="card connexion_form">
<div class="card-block">
    
    <form method="post" action="index.php?action=bind&type=parcours&parcours=<?= $parcours->getId(); ?>" class="form-horizontal">
    <legend>Attacher un module</legend>

    <div class="input-group">
        <select class="form-control" name="idModule" id="idModule">
            
            <option value="0">Sélectionner un module</option>
            <?php foreach ($modules as $module) { ?>
            <option value="<?= $module->getId(); ?>"> <?= $module->getNom(); ?></option>
            <?php } ?>
            
        </select>
    </div>
    <br>
    
    <div class="row"> 
    <div class="text-xs-center">
    <input type="submit" value="OK !" class="btn btn-primary" />
    </div>
    </div>

    </form> 
    
</div>
</div>
</div>
</div>
    
    
<!-- Modal détacher -->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="card connexion_form">
<div class="card-block">
    
    <form method="post" action="index.php?action=unbind&type=parcours&parcours=<?= $parcours->getId(); ?>" class="form-horizontal">
    <legend>Détacher un module</legend>

    <div class="input-group">
        <select class="form-control" name="idModule" id="idModule">
            
            <option value="0">Sélectionner un module</option>
            
            <?php foreach ($modulesByParcours as $module) { ?>
            <option value="<?= $module->getId(); ?>"> <?= $module->getNom(); ?></option>
            <?php } ?>
            
        </select>
    </div>
    <br>
    
    <div class="row"> 
    <div class="text-xs-center">
    <input type="submit" value="OK !" class="btn btn-primary" />
    </div>
    </div>

    </form> 
    
</div>
</div>
</div>
</div>


