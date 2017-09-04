<div class="row">
<div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-1">

<h1>Messages</h1>

<table class="table table-condensed table-hover table_utilisateurs">
        
    <tr class="active">
        <th class="">Id</th>
        <th class="">User</th>
        <th class="">Module</th>
        <th class="">Message</th>
        <th class="">Date</th>
        <th class="">Username</th>
        <th class="">Edition</th>
      </tr>
            
    <?php foreach ($messages as $message) { ?>
        
    <tr>
        <td><?= $message->getId(); ?></td>
        <td><?= $message->getIdUser(); ?></td>
        <td><?= $message->getIdModule(); ?></td>
        <td><?= $message->getMessage(); ?></td>
        <td><?= $message->getDate(); ?></td>
        <td><?= $message->getUsername(); ?></td>
        
        
        
        
        <td>
            <a class="" data-toggle="modal" data-target="#modification<?= $message->getId(); ?>">
                <span class="fa fa-pencil style_lien icon_action"></span>
            </a>
            <a class="" data-toggle="modal" data-target="#suppression<?= $message->getId(); ?>">
                <span class="fa fa-trash style_lien icon_action"></span>
            </a>
        </td> 
    </tr>
    
    <!-- Modal modification -->
    <div class="modal fade" id="modification<?= $message->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="card connexion_form">
    <div class="card-block">

        <form method="post" action="index.php?action=update&type=message&message=<?= $message->getId(); ?>" class="form-horizontal">
        <legend>Modifier le message</legend>

        <div class="input-group">
        <span class="input-group-addon"><span class="fa fa-file-o fa-lg"></span></span>
        <input type="text" name="message" id="message" class="form-control" value="<?= $message->getMessage(); ?>" />
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
    <div class="modal fade" id="suppression<?= $message->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="modalLabel">Supprimer</h4>
    </div>
    <div class="modal-body">
        Vous allez supprimer le message : <?= $message->getMessage(); ?>.<br>Cette action est irréversible. Êtes-vous sûr ?
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
    <a class="btn btn-primary" href="index.php?action=delete&type=message&message=<?= $message->getId(); ?>" role="button" >Confirmer</a>
    </div>
    </div>
    </div>
    </div>
    
    <?php } ?>

</table> 

<br>
    
</div>
</div>