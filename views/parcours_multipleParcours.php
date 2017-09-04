<div class="offset-lg-1 col-lg-10">
        
    <h1 class="mt-3">Veuillez choisir votre parcours</h1> 
    
    <div class="row flex_row">   
    
        
    <?php foreach ($parcoursByGroupe as $parcours) { ?>
        
        <div class="col-xl-3 col-lg-4 col-md-6 mt-1">
        <div class="card">
        <img class="card-img-top img-fluid" src="img/parcours.png" alt="parcours">

        <div class="card-block" style="min-height: 120px;">
            <h4 class="card-title"><?= $parcours->getNom(); ?></h4>
        </div>

        <div class="card-block">
            <a href="index.php?parcours=<?= $parcours->getId(); ?>" class="btn btn-primary">Aller au parcours</a>
        </div>

        </div>
        </div>
        
    <?php } ?>
        
        
    </div>

  <br>          
</div>