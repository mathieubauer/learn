/*$(document).ready(function() {

    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var $container = $('div#dsw_quizbundle_question_answers');

    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = $container.find(':input').length;

    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    $('#add_category').click(function(e) {
        addCategory($container);

        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
    });

    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index == 0) {
        addCategory($container);
    } else {
        // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
        $container.children('div').each(function() {
        addDeleteLink($(this));
        });
    }

    // La fonction qui ajoute un formulaire CategoryType
    function addCategory($container) {
        // Dans le contenu de l'attribut « data-prototype », on remplace :
        // - le texte "__name__label__" qu'il contient par le label du champ
        // - le texte "__name__" qu'il contient par le numéro du champ
        var template = $container.attr('data-prototype')
        . replace(/__name__label__/g, 'Catégorie n°' + (index + 1))
        . replace(/__name__/g,        index)
        ;

        // On crée un objet jquery qui contient ce template
        var $prototype = $(template);

        // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
        addDeleteLink($prototype);

        // On ajoute le prototype modifié à la fin de la balise <div>
        $container.append($prototype);

        // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
        index++;
    }

    // La fonction qui ajoute un lien de suppression d'une catégorie
    function addDeleteLink($prototype) {
        // Création du lien
        var $deleteLink = $('<a href="#" class="btn btn-danger btn-sm mb-4">Supprimer</a>');

        // Ajout du lien
        $prototype.append($deleteLink);

        // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
        $deleteLink.click(function(e) {
        $prototype.remove();

        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
        });
    }
    
}); */


$( function() { 

    $('#feedbackCheck').on('click', function() {
        if ( $('#feedbackCheck').prop('checked') ) { $('.quiz_feedback').show();
        } else { $('.quiz_feedback').hide();
        }
    });
    
    $('#axeCheck').on('click', function() {
        if ( $('#axeCheck').prop('checked') ) { $('.quiz_axe').show();
        } else { $('.quiz_axe').hide();
        }
    });
    
    $('#scoreCheck').on('click', function() {
        if ( $('#scoreCheck').prop('checked') ) { $('.quiz_score').show();
        } else { $('.quiz_score').hide();
        }
    });
    
});

function checkChecks () {
    
    if ( $('#feedbackCheck').prop('checked') == false ) { $('.quiz_feedback').hide(); }
    if ( $('#axeCheck').prop('checked') == false ) { $('.quiz_axe').hide(); }
    if ( $('#scoreCheck').prop('checked') == false ) { $('.quiz_score').hide(); }
    
}


// AJOUT DE REPONSE LORS DE LA CREATION DE QUESTION

// setup an "add a tag" link
var $addTagLink = $('<a href="#" class="add_tag_link btn btn-primary btn-sm mb-3">Ajouter une réponse</a>');
var $newLinkLi = $('<div></div>').append($addTagLink);

jQuery(document).ready(function() {
    // Get the ul that holds the collection of tags
   var $collectionHolder = $('div.answers');
    
    // add the "add a tag" anchor and li to the tags ul
    $collectionHolder.append($newLinkLi);
    
    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    $collectionHolder.data('index', $collectionHolder.find(':input').length);
    
    $addTagLink.on('click', function(e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();
        
        // add a new tag form (see code block below)
        addTagForm($collectionHolder, $newLinkLi);
        checkChecks();
        
    });
    
    
});

function addTagForm($collectionHolder, $newLinkLi) {
    // Get the data-prototype explained earlier
    var prototype = $collectionHolder.data('prototype');
    
    // get the new index
    var index = $collectionHolder.data('index');
    
    // Replace '$$name$$' in the prototype's HTML to
    // instead be a number based on how many items we have
    var newForm = prototype.replace(/__name__/g, index);
    
    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);
    
    // Display the form in the page in an li, before the "Add a tag" link li
    var $newFormLi = $('<div></div>').append('<div class="card"><div class="card-body">' + newForm + '<a href="#" class="remove-tag btn btn-danger btn-sm mb-1">Supprimer la réponse</a></div></div>');
    
    // also add a remove button, just for this example
    //$newFormLi.append('<a href="#" class="remove-tag btn btn-danger btn-sm mb-1">Supprimer la réponse</a>');
    
    $newLinkLi.before($newFormLi);
    
    // handle the removal, just for this example
    $('.remove-tag').click(function(e) {
        e.preventDefault();
        
        $(this).parent().remove();
        
        return false;
    });
}



// AJOUT DE CATEGORIE LORS DE LA CREATION D'ESPACE

// setup an "add a tag" link
var $addCategorieLink = $('<a href="#" class="add_tag_link btn btn-secondary btn-sm mb-3">Ajouter une catégorie</a>');
var $newCategorieLink = $('<div></div>').append($addCategorieLink);

jQuery(document).ready(function() {
    // Get the ul that holds the collection of tags
   var $collectionHolder = $('div.categories');
    
    // add the "add a tag" anchor and li to the tags ul
    $collectionHolder.append($newCategorieLink);
    
    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    $collectionHolder.data('index', $collectionHolder.find(':input').length);
    
    $addCategorieLink.on('click', function(e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();
        
        // add a new tag form (see code block below)
        addCategorieForm($collectionHolder, $newCategorieLink);
    });
    
    
});

function addCategorieForm($collectionHolder, $newCategorieLink) {
    // Get the data-prototype explained earlier
    var prototype = $collectionHolder.data('prototype');
    
    // get the new index
    var index = $collectionHolder.data('index');
    
    // Replace '$$name$$' in the prototype's HTML to
    // instead be a number based on how many items we have
    var newForm = prototype.replace(/__name__/g, index);
    
    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);
    
    // Display the form in the page in an li, before the "Add a tag" link li
    var $newCategorieForm = $('<div></div>').append('<div class="card"><div class="card-body">' + newForm + '<a href="#" class="remove-tag btn btn-danger btn-sm mb-1">Supprimer la catégorie</a></div></div>');
    
    // also add a remove button, just for this example
    //$newFormLi.append('<a href="#" class="remove-tag btn btn-danger btn-sm mb-1">Supprimer la réponse</a>');
    
    $newCategorieLink.before($newCategorieForm);
    
    // handle the removal, just for this example
    $('.remove-tag').click(function(e) {
        e.preventDefault();
        
        $(this).parent().remove();
        
        return false;
    });
}


