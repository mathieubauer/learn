<div class="row">
<div class="offset-md-2 col-md-10">
    <div class="my-2 mx-auto" style="width: 200px;">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_parcours" style="width: 200px;">
        <span class="fa fa-files-o fa-lg"></span>&nbsp;  Ajouter un module
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
    
    <form method="post" action="index.php?action=create&type=module" class="form-horizontal">
    <legend>Créer un module</legend>

    <div class="input-group">
    <span class="input-group-addon"><span class="fa fa-files-o fa-lg"></span></span>
    <input type="text" name="nom" id="nom" class="form-control" placeholder="Référence du module (pour administration)" />
    </div>
    <br>
        
    <div class="input-group">
    <span class="input-group-addon"><span class="fa fa-files-o fa-lg"></span></span>
    <input type="text" name="titreCourt" id="titreCourt" class="form-control" placeholder="Titre court du module (affiché dans le menu)" />
    </div>
    <br>
        
    <div class="input-group">
    <span class="input-group-addon"><span class="fa fa-files-o fa-lg"></span></span>
    <input type="text" name="titreLong" id="titreLong" class="form-control" placeholder="Titre long du module (affiché en haut du module)" />
    </div>
    <br>
        
    <label class="custom-control custom-checkbox">
    <input type="hidden" name="hasChat" value="0" class="custom-control-input">
    <input type="checkbox" name="hasChat" value="1" class="custom-control-input">
    <span class="custom-control-indicator"></span>
    <span class="custom-control-description">Ajouter un chat</span>
    </label>
        
    <label class="custom-control custom-checkbox">
    <input type="hidden" name="ouvert" value="0" class="custom-control-input">
    <input type="checkbox" name="ouvert" value="1" class="custom-control-input" checked>
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


    
