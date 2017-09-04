<div class="offset-md-2 col-md-10 my-2">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_inscription">
        <span class="fa fa-question fa-lg"></span>&nbsp;  Ajouter une question
        </button>

</div>

<!-- Modal création -->
<div class="modal fade" id="modal_inscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="card connexion_form">
<div class="card-block">
    
    <form method="post" action="index.php?action=create&type=question" class="form-horizontal">
    <legend>Créer une question</legend>

    <div class="input-group">
        <span class="input-group-addon">Type</span>
        <select class="form-control" name="type" id="type">
            <option value="QCM">QCM</option>
            <option value="Ouverte">Ouverte</option>
        </select>
    </div>
    <br>
        
    <div class="input-group">
    <span class="input-group-addon"><span class="fa fa-question fa-lg"></span></span>
    <textarea name="question" id="question" class="form-control" rows="4" placeholder="Intitulé de la question"></textarea>
    </div>
    <br>
        
    <div class="input-group">
    <span class="input-group-addon"><span class="fa fa-book fa-lg"></span></span>
    <input type="text" name="description" id="description" class="form-control" placeholder="Description (facultative)" />
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

<h1>Questions</h1>

<table class="table table-condensed table-hover">
    
    <tr class="active">
        <th class="">Id</th>
        <th class="">Type</th>
        <th class="">Question</th>
        <th class="">Description</th>
        <th class="">Edition</th>
    </tr>
    
    <?php foreach ($questions as $question) { ?>
        
    <tr>
        <td><?= $question->getId(); ?></td>
        <td><?= $question->getType(); ?></td>
        <td><?= $question->getQuestion(); ?></td>
        <td><?= $question->getDescription(); ?></td>
        <td>
            <a class="" data-toggle="modal" data-target="#modification<?= $question->getId(); ?>">
                <span class="fa fa-pencil style_lien icon_action"></span>
            </a>
            <a class="" data-toggle="modal" data-target="#suppression<?= $question->getId(); ?>">
                <span class="fa fa-trash style_lien icon_action"></span>
            </a>
        </td>    
    </tr>
    
    
    <!-- Modal modification -->
    <div class="modal fade" id="modification<?= $question->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="card connexion_form">
    <div class="card-block">

        <form method="post" action="index.php?action=update&type=question&question=<?= $question->getId(); ?>" class="form-horizontal">
        <legend>Modifier la question</legend>

        <div class="input-group">
        <span class="input-group-addon"><span class="fa fa-book fa-lg"></span></span>
        <input type="text" name="type" id="type" class="form-control" value="<?= $question->getType(); ?>" />
        </div>
        <br>

        <div class="input-group">
        <span class="input-group-addon"><span class="fa fa-book fa-lg"></span></span>
        <input type="text" name="question" id="question" class="form-control" value="<?= $question->getQuestion(); ?>" />
        </div>
        <br>
            
        <div class="input-group">
        <span class="input-group-addon"><span class="fa fa-book fa-lg"></span></span>
        <input type="text" name="description" id="description" class="form-control" value="<?= $question->getDescription(); ?>" />
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
    <div class="modal fade" id="suppression<?= $question->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="modalLabel">Supprimer</h4>
    </div>
    <div class="modal-body">
        Vous allez supprimer la question <?= $question->getQuestion(); ?>.<br>Cette action est irréversible. Êtes-vous sûr ?
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
    <a class="btn btn-primary" href="index.php?action=delete&type=question&question=<?= $question->getId(); ?>" role="button" >Confirmer</a>
    </div>
    </div>
    </div>
    </div>
    
    <?php } ?>      

</table> 

<br>
    
</div>