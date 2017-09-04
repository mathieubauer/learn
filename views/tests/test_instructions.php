<div class="row">
    <div class="offset-md-3 col-md-6">
        
        <?= $test->getInstructions(); ?>
        
        <form method="post" action="index.php?action_user=create_init&type=resultat">
            <input type="hidden" name="idUser" value="<?= $user->getId(); ?>">
            <input type="hidden" name="idTest" value="<?= $test->getId(); ?>">
            <input type="submit" value="Débuter le questionnaire" class="btn btn-primary" />
        </form>
        
    </div>
</div>