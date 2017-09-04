<header>
<nav class="navbar navbar-default bg-faded navbar-fixed-top">

    <!-- Toggle Button -->
    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#nav-content">
    ☰
    </button>

    <!-- Nav Content -->
    <div class="collapse navbar-toggleable-md" id="nav-content">

        <a class="navbar-brand" href="index.php">
            <i class="fa fa-home"></i>
        </a>

        <ul class="nav navbar-nav">

            <?php if (isset($nom_test)) { ?> 
                <li class="nav-item">
                <a class="nav-link" href="index.php">Accueil</a>
                </li> 
                <li class="nav-item">
                <a class="nav-link active" href="#"><?php echo $nom_test ?></a>
                </li> 
            <?php } ?>

            <?php if (isset($user)) { ?>
                <li class="nav-item dropdown float-lg-right">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Bienvenue <?= $user->getUsername(); ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Preview">
                    
                    <a class="dropdown-item" data-toggle="modal" data-target="#confirm">Se déconnecter</a>
                    
                    <?php if (isset($_SESSION['parcours'])) { ?>
                        <a class="dropdown-item" href="index.php?destroy_parcours=1">Changer de parcours</a>
                    <?php } ?> 
                </div>
                </li>
            <?php } ?>

        </ul>
    </div>

</nav>
</header>

<section>

<?php if (isset($user)) { ?>
<!-- Modal -->
<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    <h4 class="modal-title" id="modalLabel">Déconnexion</h4>
</div>
<div class="modal-body">
    Vous allez quitter votre session. Êtes-vous sûr ?
    <?php if ($user->getUsername() == 'anonyme') { ?>
        <br>Vous êtes connecté anonymement. Toutes les données seront perdues.
    <?php } ?>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
<a class="btn btn-primary" href="index.php?deconnexion=1" role="button" >Confirmer</a>
</div>
</div>
</div>
</div>
<?php } ?>