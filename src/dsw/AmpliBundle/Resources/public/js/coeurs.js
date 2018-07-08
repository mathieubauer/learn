// SELECTION IDEE

$(document).on('click', '.unselected', function() {
    
    var id_button = $(this).attr("id");                 // récupère un id de type idee_00
    var id_split = id_button.split("_");                // coupe la chaîne à "_" ; le chiffre est la seconde valeur de l'array
    var id = id_split[1];                               // récupère le nombre
    
    var url = '../../idee/selection/toggle/' + id;
    
    $.ajax({
        
        url: url,
        success: function() {
            
            $('#' + id_button).html('<i class="fa fa-check" aria-hidden="true"></i>');
            $('#' + id_button).removeClass("unselected");
            $('#' + id_button).addClass('selected');
            
        },
        
        error: function () {
            alert('La requete n\'a pas abouti');
        }
        
    });
      
});

$(document).on('click', '.selected', function() {
    
    var id_button = $(this).attr("id");                 // récupère un id de type idee_00
    var id_split = id_button.split("_");                // coupe la chaîne à "_" ; le chiffre est la seconde valeur de l'array
    var id = id_split[1];                               // récupère le nombre
    
    var url = '../../idee/selection/toggle/' + id;
    
    $.ajax({
        
        url: url,
        success: function() {
            
            $('#' + id_button).html('<i class="fa fa-times" aria-hidden="true"></i>');
            $('#' + id_button).removeClass("selected");
            $('#' + id_button).addClass('unselected');
            
        },
        
        error: function () {
            alert('La requete n\'a pas abouti');
        }
        
    });
      
}); 


// COEURS 

$(document).on('click', '.unliked', function() {
    
    var id_button = $(this).attr("id");                 // récupère un id de type coeur_00
    var id_split = id_button.split("_");                // coupe la chaîne à "_" ; le chiffre est la seconde valeur de l'array
    var id = id_split[1];                               // récupère le nombre
        
    var url1 = location.href.split("espace");
    var url = url1[0] + 'idee/coeur/toggle/' + id;
    
       
    $.ajax({
        
        url: url,
        success: function(data) {
            
            // $('#nblikes_' + id).html(data);
            $('#' + id_button).removeClass('unliked');
            $('#' + id_button).addClass('liked text-tertiary');
            $('#' + id_button).html('<span class="cliquable fa fa-heart fa-2x"></span>');
            $('#nblikes_' + id).html(data + " J'aime");
            
        },
        
        error: function () {
            alert('La requete n\'a pas abouti');
        }
        
    });
      
});

$(document).on('click', '.liked', function() {
    
    var id_button = $(this).attr("id");                 // récupère un id de type coeur_00
    var id_split = id_button.split("_");                // coupe la chaîne à "_" ; le chiffre est la seconde valeur de l'array
    var id = id_split[1];                               // récupère le nombre
        
    var url1 = location.href.split("espace");
    var url = url1[0] + 'idee/coeur/toggle/' + id;
       
    $.ajax({
        
        url: url,
        success: function(data) {
            
            $('#nblikes_' + id).html(data + " J'aime");
            $('#' + id_button).removeClass('liked text-tertiary');
            $('#' + id_button).addClass('unliked');
            $('#' + id_button).html('<span class="cliquable fa fa-heart-o fa-2x"></span>');
            
        },
        
        error: function () {
            alert('La requete n\'a pas abouti');
        }
        
    });
      
});