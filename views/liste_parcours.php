<div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-1">

<h1>Parcours</h1>

<table class="table table-condensed table-hover">
    
    <tr class="active">
        <th class="">Id</th>
        <th class="">Réf. parcours</th>
        <th class="">Titre</th>
        <th class="">Sous-titre</th>
        <th class="">Edition</th>
    </tr>
    
    <?php foreach ($parcours as $unParcours) { ?>
        
    <tr>
        <td><?= $unParcours->getId(); ?></td>
        <td><a href="index.php?parcours_modif=<?= $unParcours->getId(); ?>"><?= $unParcours->getNom(); ?></a></td>
        <td><?= $unParcours->getTitre(); ?></td>
        <td><?= $unParcours->getSoustitre(); ?></td>
        <td>
            <a class="" data-toggle="modal" data-target="#modification<?= $unParcours->getId(); ?>">
                <span class="fa fa-pencil style_lien icon_action"></span>
            </a>
            <a class="" data-toggle="modal" data-target="#suppression<?= $unParcours->getId(); ?>">
                <span class="fa fa-trash style_lien icon_action"></span>
            </a>
        </td>    
    </tr>
    
    
    <!-- Modal modification -->
    <div class="modal fade" id="modification<?= $unParcours->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="card connexion_form">
    <div class="card-block">

        <form method="post" action="index.php?action=update&type=parcours&parcours=<?= $unParcours->getId(); ?>" class="form-horizontal">
        <legend>Modifier le parcours</legend>

        <div class="input-group">
        <span class="input-group-addon"><span class="fa fa-book fa-lg"></span></span>
        <input type="text" name="nom" id="nom" class="form-control" value="<?= $unParcours->getNom(); ?>" />
        </div>
        <br>

        <div class="input-group">
        <span class="input-group-addon"><span class="fa fa-book fa-lg"></span></span>
        <input type="text" name="titre" id="titre" class="form-control" value="<?= $unParcours->getTitre(); ?>" />
        </div>
        <br>
            
        <div class="input-group">
        <span class="input-group-addon"><span class="fa fa-book fa-lg"></span></span>
        <input type="text" name="soustitre" id="soustitre" class="form-control" value="<?= $unParcours->getSoustitre(); ?>" />
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
    
    <!-- Modal suppression -->
    <div class="modal fade" id="suppression<?= $unParcours->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="modalLabel">Supprimer</h4>
    </div>
    <div class="modal-body">
        Vous allez supprimer le parcours <?= $unParcours->getNom(); ?>.<br>Cette action est irréversible. Êtes-vous sûr ?
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
    <a class="btn btn-primary" href="index.php?action=delete&type=parcours&parcours=<?= $unParcours->getId(); ?>" role="button" >Confirmer</a>
    </div>
    </div>
    </div>
    </div>
    
    <?php } ?>      

</table> 

<br>
    
</div>