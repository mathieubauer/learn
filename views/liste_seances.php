<div class="col-sm-8 offset-sm-2 pt-1">

<h1>Séances</h1>
    
<div class="row mb-2">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_seance" >
        <span class="fa fa-files-o fa-lg"></span>&nbsp;  Ajouter une séance
        </button>

</div>

<table class="table table-condensed table-hover">
    
    <tr class="active">
        <th class="">Id</th>
        <th class="">Nom</th>
        <th class="">Code</th>
        <th class="">Fichier</th>
        <th class="">Edition</th>
    </tr>
    
    <?php foreach ($seances as $uneSeance) { ?>
        
    <tr>
        <td><?= $uneSeance->getId(); ?></td>
        <td><a href="index.php?seance=<?= $uneSeance->getId(); ?>"><?= $uneSeance->getNom(); ?></a></td>
        <td><?= $uneSeance->getCode(); ?></td>
        <td><a href="<?= $uneSeance->getFichier(); ?>"><?= $uneSeance->getFichier(); ?></a></td>
        <td>
            <a class="" data-toggle="modal" data-target="#modification<?= $uneSeance->getId(); ?>">
                <span class="fa fa-pencil style_lien icon_action"></span>
            </a>
            <a class="" data-toggle="modal" data-target="#suppression<?= $uneSeance->getId(); ?>">
                <span class="fa fa-trash style_lien icon_action"></span>
            </a>
        </td>
    </tr>
    
    
    <!-- Modal modification -->
    <div class="modal fade" id="modification<?= $uneSeance->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="card connexion_form">
    <div class="card-block">

        <form method="post" action="index.php?action=update&type=seance&seance=<?= $uneSeance->getId(); ?>" class="form-horizontal">
        <legend>Modifier la séance</legend>

        <div class="input-group">
        <span class="input-group-addon"><span class="fa fa-file-o fa-lg"></span></span>
        <input type="text" name="nom" id="nom" class="form-control" value="<?= $uneSeance->getNom(); ?>" />
        </div>
        <br>

        <div class="input-group">
        <span class="input-group-addon"><span class="fa fa-file-o fa-lg"></span></span>
        <input type="text" name="code" id="titreCourt" class="form-control" value="<?= $uneSeance->getCode(); ?>" />
        </div>
        <br>
            
        <div class="input-group">
        <span class="input-group-addon"><span class="fa fa-file-o fa-lg"></span></span>
        <input type="text" name="fichier" id="titreLong" class="form-control" value="<?= $uneSeance->getFichier(); ?>" />
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
    <div class="modal fade" id="suppression<?= $uneSeance->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="modalLabel">Supprimer</h4>
    </div>
    <div class="modal-body">
        Vous allez supprimer la séance <?= $uneSeance->getNom(); ?>.<br>Cette action est irréversible. Êtes-vous sûr ?
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
    <a class="btn btn-primary" href="index.php?action=delete&type=seance&seance=<?= $uneSeance->getId(); ?>" role="button" >Confirmer</a>
    </div>
    </div>
    </div>
    </div>
    
    <?php } ?>      

</table> 

<br>
    
</div>

<!-- Modal création -->
<div class="modal fade" id="modal_seance" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="card connexion_form">
<div class="card-block">
    
    <form method="post" action="index.php?action=create&type=seance" class="form-horizontal" enctype="multipart/form-data"> <!-- pour fichier -->
    <legend>Créer une séance</legend>

    <div class="input-group">
    <span class="input-group-addon"><span class="fa fa-files-o fa-lg"></span></span>
    <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom de la séance" />
    </div>
    <br>
        
    <div class="input-group">
    <span class="input-group-addon"><span class="fa fa-files-o fa-lg"></span></span>
    <input type="text" name="code" id="code" class="form-control" placeholder="Code de la séance" />
    </div>
    <br>
        
    <input type="hidden" name="MAX_FILE_SIZE" value="12582912" /> <!-- Valeur en octets = 12 Mo -->
    <input type="file" name="fichier" id="fichier" class="form-control-file" aria-describedby="fileHelp"> <!-- Upload de fichier -->
    <small id="fileHelp" class="form-text text-muted">Le fichier sera accessible aux étudiants après avoir renseigné le feedback.</small>
    
    <div class="row mt-2"> 
    <div class="text-xs-center">
    <input type="submit" value="OK !" class="btn btn-primary" />
    </div>
    </div>

    </form> 
    
</div>
</div>
</div>
</div>