<div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-1">
    
    <div class="col-md-8 offset-md-2">

    <h1><?= $ressource->getNom(); ?></h1>
        
    <div class="card">
        <div class="card-header mb-1">
            <h1 class="my-1"><?= $ressource->getTitre(); ?></h1>
        </div>
        <div class="card-block">
            <?= $ressource->getReference(); ?>
        </div>
    </div>    
    
    <hr class="mt-3">
    
    <h2>Code html : </h2>
    <samp><?php echo htmlspecialchars($ressource->getReference()); ?></samp>

    
</div>


