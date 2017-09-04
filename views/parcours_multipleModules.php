<div class="jumbotron jumbotron-fluid bandeau_cours text-xs-center">
<div class="container">
<h1><?= $parcours->getTitre(); ?></h1>
<h3><?= $parcours->getSoustitre(); ?></h3>
</div>
</div>

<div class="row">
    
    <!-- Colonne de gauche - Menu  -->  
    
    <?php if ($module->getHasChat() == 1) { ?>
        <div class="col-lg-2">
    <?php } else { ?>
        <div class="col-lg-2 offset-lg-1">
    <?php } ?>
            
        <div class="card">
            <?php foreach ($modulesByParcours as $unModule) { ?>
                <a class="list-group-item <?php if ($unModule->getOuvert() == 0) { echo 'disabled'; } ?>" href="index.php?module=<?= $unModule->getId(); ?>">
                    <?= $unModule->getTitreCourt(); ?>
                </a>
            <?php } ?>
        </div>
            
    </div>     <!-- Fin colonne -->

     <!-- Colonne 2 --> 
            
    <?php if ($module->getHasChat() == 1) { ?>
        <div class="col-lg-7">
    <?php } else { ?>
        <div class="col-lg-8">
    <?php } ?>
            
        <div class="card">

            <div class="card-header">
                <h1 class="my-1"><?= $module->getTitreLong(); ?></h1>           
            </div>
            
            <?php foreach ($ressourcesByModule as $ressource) { ?>
                <div class="card-block">
                    <?= $ressource->getReference(); ?>
                </div>
            <?php } ?>            

        </div>
            
    </div>     <!-- Fin colonne -->
    
    <!-- Colonne de chat si définie  --> 

    <?php if ($module->getHasChat() == 1) { ?>

    <div class="col-lg-3">   
    <div class="card fil">
        
        <div class="card-header">
            <h1 class="my-1"><i class="fa fa-comments-o fa-fw"></i>&nbsp; Messages</h1>
        </div>
        
        <div id="container_chat">
            
            <?php foreach ($messagesByModule as $message) { ?>
            
                <div class="card-block">
                    <!-- <div class="col-xs-2">
                        <img src="img/favicon.png" class="rounded-circle" width="12px" />
                    </div> -->

                    
                    <div class="">
                        <p><?= $message->getMessage(); ?></p>
                        <p class="info_message text-xs-right mb-0">
                            
                            <?php if ($user->getId() == $message->getIdUser()) { ?>
                            
                                <a class="" data-toggle="modal" data-target="#modification<?= $message->getId(); ?>">
                                <span class="fa fa-pencil"></span>&nbsp;
                                </a>
                            
                                <a class="" data-toggle="modal" data-target="#suppression<?= $message->getId(); ?>">
                                <span class="fa fa-trash"></span>&nbsp;
                                </a>
                                
                            <?php } ?>                    
                                
                            <?= $message->getUsername() . " • " . date_format(date_create($message->getDate()), 'd/m'); ?>
                            
                        </p>
                    </div>

                    </div>
                <hr class="hr_thin">
            
            <!-- Modal modification -->
            <div class="modal fade" id="modification<?= $message->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="modalLabel">Modifier le message</h4>
            </div>
            <div class="modal-body">
                
                <form method="post" action="index.php?action_user=update&type=message&message=<?= $message->getId(); ?>" class="form-horizontal">

                <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-file-o fa-lg"></span></span>
                <input type="text" name="message" id="message" class="form-control" value="<?= $message->getMessage(); ?>" />
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
            <div class="modal fade" id="suppression<?= $message->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="modalLabel">Supprimer</h4>
            </div>
            <div class="modal-body">
                Vous allez supprimer le message : <?= $message->getMessage(); ?>.<br>Cette action est irréversible. Êtes-vous sûr ?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
            <a class="btn btn-primary" href="index.php?action_user=delete&type=message&message=<?= $message->getId(); ?>" role="button" >Confirmer</a>
            </div>
            </div>
            </div>
            </div>

            <?php } ?>
              
        </div>       
        
        
        <div class="card-footer">

            <textarea class="form-control" rows="2" name="message" id="chat_message" placeholder="Votre message"></textarea><br>
            <input type="hidden" id="idUser" name="idUser" value="<?= $user->getId(); ?>">
            <input type="hidden" id="username" name="username" value="<?= $user->getUsername(); ?>">
            <input type="hidden" id="idModule" name="idModule" value="<?= $module->getId(); ?>">
            <button id="submit" class="btn btn-primary center-block">Envoyer</button>

        </div>
        
    </div>
    </div>     <!-- Fin Chat -->

    <?php } ?>
    
</div>