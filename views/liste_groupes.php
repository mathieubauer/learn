<div class="offset-md-2 col-md-10 my-2">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_inscription">
        <span class="fa fa-users fa-lg"></span>&nbsp;  Ajouter un groupe
        </button>

</div>


<!-- Modal création -->
<div class="modal fade" id="modal_inscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="card connexion_form">
<div class="card-block">
    
    <form method="post" action="index.php?action=create&type=groupe" class="form-horizontal">
    <legend>Créer un groupe</legend>

    <div class="input-group">
    <span class="input-group-addon"><span class="fa fa-users fa-lg"></span></span>
    <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom du groupe" />
    </div>
    <br>
        
    <div class="input-group">
    <span class="input-group-addon"><span class="fa fa-code fa-lg"></span></span>
    <input type="text" name="code" id="code" class="form-control" placeholder="Code de la séance" />
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

<div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-1">

<h1>Groupes</h1>

<table class="table table-condensed table-hover">
    
    <tr class="active">
        <th class="">Id</th>
        <th class="">Nom du groupe</th>
        <th class="">Code</th>
        <th class="">Edition</th>
    </tr>
    
    <?php foreach ($groupes as $groupe) { ?>
        
    <tr>
        <td><?= $groupe->getId(); ?></td>
        <td><a href="index.php?groupe_modif=<?= $groupe->getId(); ?>"><?= $groupe->getNom(); ?></a></td>
        <td><?= $groupe->getCode(); ?></td>
        <td>
            <a class="" data-toggle="modal" data-target="#modification<?= $groupe->getId(); ?>">
                <span class="fa fa-pencil style_lien icon_action"></span>
            </a>
            <a class="" data-toggle="modal" data-target="#suppression<?= $groupe->getId(); ?>">
                <span class="fa fa-trash style_lien icon_action"></span>
            </a>
        </td>  
    </tr>
    
    
    <!-- Modal modification -->
    <div class="modal fade" id="modification<?= $groupe->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="card connexion_form">
    <div class="card-block">

        <form method="post" action="index.php?action=update&type=groupe&groupe=<?= $groupe->getId(); ?>" class="form-horizontal">
        <legend>Modifier le groupe</legend>

        <div class="input-group">
        <span class="input-group-addon"><span class="fa fa-users fa-lg"></span></span>
        <input type="text" name="nom" id="nom" class="form-control" value="<?= $groupe->getNom(); ?>" />
        </div>
        <br>
            
        <div class="input-group">
        <span class="input-group-addon"><span class="fa fa-code fa-lg"></span></span>
        <input type="text" name="code" id="code" class="form-control" value="<?= $groupe->getCode(); ?>" />
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
    <div class="modal fade" id="suppression<?= $groupe->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="modalLabel">Supprimer</h4>
    </div>
    <div class="modal-body">
        Vous allez supprimer le groupe <?= $groupe->getNom(); ?>.<br>Cette action est irréversible. Êtes-vous sûr ?
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
    <a class="btn btn-primary" href="index.php?action=delete&type=groupe&groupe=<?= $groupe->getId(); ?>" role="button" >Confirmer</a>
    </div>
    </div>
    </div>
    </div>
    
    <?php } ?>      

</table> 

<br>
    
</div>