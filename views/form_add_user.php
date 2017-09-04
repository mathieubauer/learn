<div class="row">
<div class="offset-md-2 col-md-10">
    <div class="my-2 mx-auto" style="width: 200px;">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_inscription" style="width: 200px;">
        <span class="fa fa-user fa-lg"></span>&nbsp;  Inscrire un utilisateur
        </button>

    </div>
</div>
</div>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modal_inscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="card connexion_form">
<div class="card-block">
    
    <form method="post" action="index.php?action=create&type=user" class="form-horizontal">
    <legend>Inscription</legend>

    <div class="input-group">
    <span class="input-group-addon"><span class="fa fa-user fa-lg"></span></span></span>
    <input type="text" name="username" id="username" class="form-control" placeholder="Identifiant" />
    </div>
    <br>

    <div class="input-group">
    <span class="input-group-addon"><span class="fa fa-lock fa-lg"></span></span></span>
    <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe" />
    </div>
    <br>
    
    <div class="input-group">
    <span class="input-group-addon"><span class="fa fa-lock fa-lg"></span></span></span>
    <input type="password" name="password2" id="password2" class="form-control" placeholder="Confirmer le mot de passe" />
    </div>
    <br>
    
    <div class="input-group">
        <span class="input-group-addon">Groupe</span>
        <select class="form-control" name="idGroupe" id="idGroupe">
            
            <option value="0">Sélectionner un groupe</option>
            <?php foreach ($groupes as $groupe) { ?>
            <option value=" <?= $groupe->getId(); ?>"> <?= $groupe->getNom(); ?></option>
            <?php } ?>
            
        </select>
    </div>
    <br>

    <div class="row"> 
    <div class="text-xs-center">
    <input type="submit" value="Inscription" class="btn btn-primary" />
    </div>
    </div>

    </form>
    
</div>
</div>
</div>
</div>


    
