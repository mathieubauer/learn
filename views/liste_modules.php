<div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-1">

<h1>Modules</h1>

<table class="table table-condensed table-hover">
    
    <tr class="active">
        <th class="">Id</th>
        <th class="">Réf. module</th>
        <th class="">Titre court</th>
        <th class="">Titre long</th>
        <th class="">Chat</th>
        <th class="">Ouvert</th>
        <th class="">Edition</th>
    </tr>
    
    <?php foreach ($modules as $module) { ?>
        
    <tr>
        <td><?= $module->getId(); ?></td>
        <td><a href="index.php?module_modif=<?= $module->getId(); ?>"><?= $module->getNom(); ?></a></td>
        <td><?= $module->getTitreCourt(); ?></td>
        <td><?= $module->getTitreLong(); ?></td>
        <td><?= $module->getHasChat(); ?></td>
        <td><?= $module->getOuvert(); ?></td>
        <td>
            <a class="" data-toggle="modal" data-target="#modification<?= $module->getId(); ?>">
                <span class="fa fa-pencil style_lien icon_action"></span>
            </a>
            <a class="" data-toggle="modal" data-target="#suppression<?= $module->getId(); ?>">
                <span class="fa fa-trash style_lien icon_action"></span>
            </a>
        </td>
    </tr>
    
    
    <!-- Modal modification -->
    <div class="modal fade" id="modification<?= $module->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="card connexion_form">
    <div class="card-block">

        <form method="post" action="index.php?action=update&type=module&module=<?= $module->getId(); ?>" class="form-horizontal">
        <legend>Modifier le module</legend>

        <div class="input-group">
        <span class="input-group-addon"><span class="fa fa-file-o fa-lg"></span></span>
        <input type="text" name="nom" id="nom" class="form-control" value="<?= $module->getNom(); ?>" />
        </div>
        <br>

        <div class="input-group">
        <span class="input-group-addon"><span class="fa fa-file-o fa-lg"></span></span>
        <input type="text" name="titreCourt" id="titreCourt" class="form-control" value="<?= $module->getTitreCourt(); ?>" />
        </div>
        <br>
            
        <div class="input-group">
        <span class="input-group-addon"><span class="fa fa-file-o fa-lg"></span></span>
        <input type="text" name="titreLong" id="titreLong" class="form-control" value="<?= $module->getTitreLong(); ?>" />
        </div>
        <br>
            
        <label class="custom-control custom-checkbox">
        <input type="hidden" name="hasChat" value="0" class="custom-control-input">
        <input type="checkbox" name="hasChat" value="1" class="custom-control-input" <?php if($module->getHasChat() == 1) echo 'checked'; ?> >
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Ajouter un chat</span>
        </label>
            
        <label class="custom-control custom-checkbox">
        <input type="hidden" name="ouvert" value="0" class="custom-control-input">
        <input type="checkbox" name="ouvert" value="1" class="custom-control-input" <?php if($module->getOuvert() == 1) echo 'checked'; ?> >
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Ouvert</span>
        </label>

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
    
    <!-- Modal suppression -->
    <div class="modal fade" id="suppression<?= $module->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="modalLabel">Supprimer</h4>
    </div>
    <div class="modal-body">
        Vous allez supprimer le module <?= $module->getNom(); ?>.<br>Cette action est irréversible. Êtes-vous sûr ?
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
    <a class="btn btn-primary" href="index.php?action=delete&type=module&module=<?= $module->getId(); ?>" role="button" >Confirmer</a>
    </div>
    </div>
    </div>
    </div>
    
    <?php } ?>      

</table> 

<br>
    
</div>