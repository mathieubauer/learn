<div class="row mt-3">
<div class="col-md-6 offset-md-3">

    <div class="card">
        <div class="card-header mb-1">
            <h1 class="my-1"><?= $module->getTitre(); ?></h1>
        </div>
             
        <?php foreach ($ressources as $ressource) { ?>
            <div class="card-block">
                <?= $ressource->getReference(); ?>
            </div>
            <hr>
        <?php } ?>
    
    </div>
    
    <br>
    <br>
          
    <!-- Automatiser logos -->
    <div class="offset-md-3 col-md-3 col-xs-6">
        <a href="#">
            <img src="img/if.png" alt="Interface" class="img-thumbnail img-fluid">
        </a>
    </div>

    <div class="col-md-3 col-xs-6">
        <a href="#">
            <img src="img/cdc.jpg" alt="Caisse des Dépôts" class="img-thumbnail img-fluid">
        </a>
    </div>

</div>
</div>