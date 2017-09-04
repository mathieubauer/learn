
<div class="row">
<div class="col-lg-6 offset-lg-3">
    
<div class="card">
<div class="card-header">
    Comment se sont passées ces séances pour vous ? (c'est anonyme)
</div>

    
<!-- QUESTION 1 -->

<div class="card-block">
    
    <div class="col-xs-2 px-05" >
    <img src="img/icon5.svg" alt="5" width="100%" id="vote5" class="vote" />
    </div>
    
    <div class="col-xs-2 px-05" >
    <img src="img/icon4.svg" alt="4" width="100%" id="vote4" class="vote" />
    </div>
    
    <div class="col-xs-2 px-05" >
    <img src="img/icon3.svg" alt="3" width="100%" id="vote3" class="vote" />
    </div>

    <div class="col-xs-2 px-05" >
    <img src="img/icon2.svg" alt="2" width="100%" id="vote2" class="vote" />
    </div>

    <div class="col-xs-2 px-05" >
    <img src="img/icon1.svg" alt="1" width="100%" id="vote1" class="vote" />
    </div>
    
    <div class="col-xs-2 px-05" >
    <img src="img/icon0.svg" alt="0" width="100%" id="vote0" class="vote" />
    </div>
    
</div>
</div>

<!-- QUESTION 2 -->

<div class="card" id="explication">
<div class="card-header intitule_explication"></div>

<div class="card-block contenu_explication">
    <textarea class="form-control" rows="4" name="ideatext" id="ideatext"></textarea><br>
    <button type="submit" class="btn btn-primary envoi_explication">Envoyer</button>
</div>
</div>


<!-- QUESTION 3 -->
    
<div class="card" id="amelioration">
<div class="card-header intitule_amelioration"></div>

<div class="card-block contenu_amelioration">
    <textarea class="form-control" rows="4" name="ideatext" id="ideatext"></textarea><br>
    <button type="submit" class="btn btn-primary envoi_amelioration">Envoyer</button>
</div>
</div>
    
<!-- FIN -->
<div class="card" id="fin">
<div class="card-header">Merci !</div>

<div class="card-block">
    <form method="post" action="index.php?action_user=create&type=feedback" class="form-horizontal" id="form_feedback">
        <input type="hidden" value="<?= $seance->getId(); ?>" name="idSeance" />
        <input type="submit" value="Télécharger" class="btn btn-primary" name="connexion" />
    </form>
</div>
</div>
