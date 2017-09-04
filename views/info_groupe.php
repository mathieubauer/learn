<div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-1">
    
    <h1><?= $groupe->getNom(); ?></h1>
    
    
    <div class="row flex_row"> 
        
        <?php foreach ($parcoursByGroupe as $unParcours) { ?>
        
        <div class="col-xl-3 col-lg-4 col-md-6 mt-1">
        <div class="card">
        <img class="card-img-top img-fluid" src="img/parcours.png" alt="parcours">

        <div class="card-block" style="min-height: 120px;">
            <h4 class="card-title"><?= $unParcours->getNom(); ?></h4>
        </div>

        <div class="card-block">
            <a href="index.php?section=change_groupe&id_groupe=<?= $unParcours->getId(); ?>" class="btn btn-primary">Voir le parcours</a>
        </div>

        </div>
        </div>
        
        <?php } ?>
        
    </div>
    
    <a class="list-group-item fond_gris" href="#" data-toggle="modal" data-target="#modalAdd">Attacher un parcours</a>
    <a class="list-group-item fond_gris" href="#" data-toggle="modal" data-target="#modalDelete">Détacher un parcours</a>
    
      
<!-- Modal attacher -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="card connexion_form">
<div class="card-block">
    
    <form method="post" action="index.php?action=bind&type=groupe&groupe=<?= $groupe->getId(); ?>" class="form-horizontal">
    <legend>Attacher un parcours</legend>

    <div class="input-group">
        <select class="form-control" name="idParcours" id="idParcours">
            
            <option value="0">Sélectionner un parcours</option>
            <?php foreach ($parcours as $unParcours) { ?>
            <option value="<?= $unParcours->getId(); ?>"> <?= $unParcours->getNom(); ?></option>
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
    
    <form method="post" action="index.php?action=unbind&type=groupe&groupe=<?= $groupe->getId(); ?>" class="form-horizontal">
    <legend>Détacher un parcours</legend>

    <div class="input-group">
        <select class="form-control" name="idParcours" id="idParcours">
            
            <option value="0">Sélectionner un parcours</option>
            
            <?php foreach ($parcoursByGroupe as $unParcours) { ?>
            <option value="<?= $unParcours->getId(); ?>"> <?= $unParcours->getNom(); ?></option>
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


