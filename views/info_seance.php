<div class="col-sm-8 offset-sm-2 pt-1">
    
    <div class="col-md-8 offset-md-2">

    <h1><?= $seance->getNom(); ?> - <?= $seance->getCode(); ?></h1>       
        
        <table class="table table-condensed table-hover">
    
            <tr class="active">
                <th class="">Score</th>
                <th class="">Explication</th>
                <th class="">Amélioration</th>
            </tr>

            <?php foreach ($feedbacksBySeance as $feedback) { ?>

            <tr>
                <td><?= $feedback->getScore(); ?></td>
                <td><?= $feedback->getExplication(); ?></td>
                <td><?= $feedback->getAmelioration(); ?></td>
            </tr>

            <?php } ?>      

        </table> 
        
</div>
    
