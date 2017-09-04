<div class="row mt-2">
<div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-1">

<h1>Utilisateurs récemment ajoutés</h1>

<table class="table table-condensed table-hover table_utilisateurs">
    
    <tr class="active">
        <th class="">Id</th>
        <th class="">Nom d'utilisateur</th>
        <th class="">Email</th>
        <th class="">Date d'inscription</th>
        <th class="">Date de dernière connexion</th>
        <th class="">No Groupe</th>
        <th class="">Supprimer</th>
    </tr>
    
    <tr> 
    <?php foreach ($users as $unUser) { ?>
        
    <tr>
        <td><?= $unUser->getId(); ?></td>
        <td><?= $unUser->getUsername(); ?></td>
        <td></td>
        <td><?= $unUser->getDateInscription(); ?></td>
        <td><?= $unUser->getDateConnexion(); ?></td>
        <td><?= $unUser->getIdGroupe(); ?></td>
        <td><a class="" data-toggle="modal" data-target="#confirmation<?= $unUser->getId(); ?>"><span class="fa fa-trash style_lien"></span></a></td>    
    </tr>
    
    <!-- The modal -->
    <div class="modal fade" id="confirmation<?= $unUser->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="modalLabel">Supprimer</h4>
    </div>
    <div class="modal-body">
        Vous allez supprimer l'utilisateur <?= $unUser->getUsername(); ?>.<br>Cette action est irréversible. Êtes-vous sûr ?
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
    <a class="btn btn-primary" href="index.php?action=delete&type=user&user=<?= $unUser->getId(); ?>" role="button" >Confirmer</a>
    </div>
    </div>
    </div>
    </div>
        
    <?php } ?>    
    </tr>
    
    </table> 

    <br>
    
</div>
</div>


<!-- Button trigger modal 
href="index.php?action=delete&type=user&user=<?= $unUser->getId(); ?>"
-->

