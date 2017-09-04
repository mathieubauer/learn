<?php 

if (isset($user)) {
    
    if ($user->getIdGroupe() == 1) {
        
        // admin
        echo '<div class="alert alert-warning alert-dismissable offset-md-2 col-md-10 sticky-top">';
        
    } else {
        
        // normal
        echo '<div class="alert alert-warning alert-dismissable col-md-12 sticky-top">';
        
    }
    
} else {
    
   // normal
    echo '<div class="alert alert-warning alert-dismissable col-md-12 sticky-top">';
    
}

?>


  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo $alerte; ?>
    
</div>