<div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-1">
    
    <div class="col-md-8 offset-md-2">

    <h1><?= $module->getNom(); ?></h1>
        
    <div class="card">
        <div class="card-header">
            <h1 class="my-1"><?= $module->getTitreLong(); ?></h1>
        </div>
        
        <?php foreach ($ressourcesByModule as $ressource) { ?>
        <div class="card-block">
            <?= $ressource->getReference(); ?>
        </div>
        <hr class="hr_thin">
        <?php } ?>
        
        <div class="card-footer">                 
            <a href="#" data-toggle="modal" data-target="#modalAdd">Attacher une ressource</a>
        </div>
        <div class="card-footer">                 
            <a href="#" data-toggle="modal" data-target="#modalDelete">Détacher une ressource</a>
        </div>
        
    </div>    
    
</div>
    
    
    
<!-- Modal attacher -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="card connexion_form">
<div class="card-block">
    
    <form method="post" action="index.php?action=bind&type=module&module=<?= $module->getId(); ?>" class="form-horizontal">
    <legend>Attacher une ressource</legend>

    <div class="input-group">
        <select class="form-control" name="idRessource" id="idRessource">
            
            <option value="0">Sélectionner une ressource</option>
            <?php foreach ($ressources as $ressource) { ?>
            <option value="<?= $ressource->getId(); ?>"> <?= $ressource->getNom(); ?></option>
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
    
    <form method="post" action="index.php?action=unbind&type=module&module=<?= $module->getId(); ?>" class="form-horizontal">
    <legend>Détacher une ressource</legend>

    <div class="input-group">
        <select class="form-control" name="idRessource" id="idRessource">
            
            <option value="0">Sélectionner une ressource</option>
            
            <?php foreach ($ressourcesByModule as $ressource) { ?>
            <option value="<?= $ressource->getId(); ?>"> <?= $ressource->getNom(); ?></option>
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


