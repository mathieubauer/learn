<div class="row">
<div class="offset-md-2 col-md-10">
    <div class="my-2 mx-auto" style="width: 200px;">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_parcours" style="width: 200px;">
        <span class="fa fa-file-o fa-lg"></span>&nbsp;  Ajouter une ressource
        </button>

    </div>
</div>
</div>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modal_parcours" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="card connexion_form">
<div class="card-block">
    
    <form method="post" action="index.php?action=create&type=ressource" class="form-horizontal">
    <legend>Créer une ressource</legend>

    <div class="input-group">
    <span class="input-group-addon"><span class="fa fa-file-o fa-lg"></span></span>
    <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom de la ressource" />
    </div>
    <br>
        
    <div class="input-group">
    <span class="input-group-addon"><span class="fa fa-file-o fa-lg"></span></span>
    <input type="text" name="titre" id="titre" class="form-control" placeholder="Titre de la ressource (affiché)" />
    </div>
    <br>
        
    <div class="input-group">
    <span class="input-group-addon"><span class="fa fa-code fa-lg"></span></span>
    <textarea name="reference" id="reference" class="form-control typo_code" rows="6" placeholder="Référence de la ressource (html)"></textarea>
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


    
