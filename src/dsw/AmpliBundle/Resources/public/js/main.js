$( function() {
    
    $('#form_new_unit #unit_create_content').hide();
    $('#form_new_unit #cke_unit_create_content').hide();
    $('#form_new_unit #unit_create_imageFile').hide();
    $('#form_new_unit #unit_create_name').hide();

    $('#form_new_unit input').on('change', function() {
        
        var typeUnit = $("#form_new_unit input[type='radio']:checked").val();
        
        if (typeUnit == 'title' ) { 
            
            // inactif
            var consigne = "Saisir le titre";
            $('#form_new_unit #unit_create_content').show();
            $('#form_new_unit #cke_unit_create_content').show();
            $('#form_new_unit #unit_create_imageFile').hide();
            $('#form_new_unit #unit_create_name').hide();
            
        } else if (typeUnit == 'text' ) { 
            
            var consigne = "Saisir le texte";
            $('#form_new_unit #unit_create_imageFile').hide();
            $('#form_new_unit #cke_unit_create_content').show();
            // $('#form_new_unit #unit_create_content').show();
            $('#form_new_unit #unit_create_name').hide();
            
        } else if (typeUnit == 'doc' ) { 
            
            var consigne = "Saisir un titre, une description et sélectionner le document";
            $('#form_new_unit #unit_create_imageFile').show();
            $('#form_new_unit #cke_unit_create_content').show();
            // $('#form_new_unit #unit_create_content').show();
            $('#form_new_unit #unit_create_name').show();
            
        } else if (typeUnit == 'image' ) { 
            
            var consigne = "Saisir un titre et sélectionner l'image";
            $('#form_new_unit #unit_create_imageFile').show();
            $('#form_new_unit #cke_unit_create_content').show();
            // $('#form_new_unit #unit_create_content').show();
            $('#form_new_unit #unit_create_name').hide();
            
        } else if (typeUnit == 'image_url' ) { 
            
            // inactif
            var consigne = "Saisir un titre et l'url de l'image";
            $('#form_new_unit #unit_create_content').show();
            $('#form_new_unit #unit_create_name').show();
            $('#form_new_unit #unit_create_imageFile').hide();
            
        } else if (typeUnit == 'video' ) { 
            
            // inactif
            var consigne = "Saisir le code source de la vidéo<br>(ex Vimeo : https://player.vimeo.com/video/181501053)<br>(ex Youtube : https://www.youtube.com/embed/jH1Zy9eNXr8)";
            $('#form_new_unit #unit_create_content').show();
            $('#form_new_unit #unit_create_imageFile').hide();
            $('#form_new_unit #unit_create_name').hide();
            
        } else if (typeUnit == 'video_upload' ) { 
            
            var consigne = "Saisir une description et sélectionner la vidéo";
            // $('#form_new_unit #unit_create_content').hide();
            $('#form_new_unit #cke_unit_create_content').show();
            $('#form_new_unit #unit_create_imageFile').show();
            $('#form_new_unit #unit_create_name').hide();
            
        } else if (typeUnit == 'html' ) {
            
            // inactif
            var consigne = "Saisir du code html avec des balises";
            $('#form_new_unit #unit_create_content').show();
            $('#form_new_unit #unit_create_imageFile').hide();
            $('#form_new_unit #unit_create_name').hide();
            
        }
        
        $('#consigne strong').html(consigne);
        
       //alert($('input[name=unit_create[type]]:checked', '#form_new_unit').val()); 
        //alert(zob);
    });

});


/* TOOLTIP JS */

// $(function () {
//   $('[data-toggle="tooltip"]').tooltip()
// })

/* PROGRESS BAR */


$(document).on('load', '.progress_circle', function() {
    $(this).html('<i class="fa fa-times" aria-hidden="true"></i>');
    
});

$( function() {
    
    var value_a = $("#bilan_a").data("value") / 100;
    var value_b = $("#bilan_b").data("value") / 100;
    var value_c = $("#bilan_c").data("value") / 100;
    var value_d = $("#bilan_d").data("value") / 100;
    
    progress_circle ('#bilan_a', value_a);
    progress_circle ('#bilan_b', value_b);
    progress_circle ('#bilan_c', value_c);
    progress_circle ('#bilan_d', value_d);
    
    function progress_circle ($container_circle, $bilan_value) {
        
        var container_circle = $container_circle;
        var bilan_value = $bilan_value;
        
        var circle = new ProgressBar.Circle(container_circle, {
            color: '#083A7D',
            fill: '#ffab91',
            duration: 1200,
            easing: 'easeInOut',
            strokeWidth: 8,
            // trailColor: '#f4f4f4',
            text: {
                value: Math.round(bilan_value * 100),
            },
        });

        circle.text.style.fontFamily = '"Arvo", Helvetica, sans-serif';
        circle.text.style.fontWeight = 'bold';
        circle.text.style.fontSize = '2rem';

        circle.animate(bilan_value);
        
    }
    
});

$( function() {
    
	$('.skillbar').each(function(){
		$(this).find('.skillbar-bar').animate({
			width:$(this).attr('data-percent')
		}, 4000);
	});
    
});



/* FORMULAIRE DE CONNEXION */

/*
* Expérimental : faire un slider entre login et register
* Utilise jQuery UI (seul endroit où c'est utilisé, je crois)
* 11/02/2018 - Désactivé
*/

/*
$( function() {
    $( "#sign_up" ).hide();
});

$('#test_slide').click(function(e) {
	e.preventDefault();    
    
    $("#sign_up").toggle('slide',{direction:'right'},400, function() {
        $("#sign_in").toggle('slide',{direction:'left'},400);
    });
    
});
*/






/* COMPTEUR DE CARACTERES */

var maxLength = 140;

$('.limit_140').keyup(function() {
    var length = $(this).val().length;
    var length = maxLength-length;
    $('#chars').text(length);
});





/**
 * jTinder initialization
 */
$("#tinderslide").jTinder({
	// dislike callback
    onDislike: function (item) {
	    // set the status text
        $('#status').html('Dislike image ' + (item.index()+1));
    },
	// like callback
    onLike: function (item) {
	    // set the status text
        $('#status').html('Like image ' + (item.index()+1));
    },
	animationRevertSpeed: 200,
	animationSpeed: 400,
	threshold: 1,
	likeSelector: '.like',
	dislikeSelector: '.dislike'
});

/**
 * Set button action to trigger jTinder like & dislike.
 */
$('.actions .like, .actions .dislike').click(function(e){
	e.preventDefault();
	$("#tinderslide").jTinder($(this).attr('class'));
});




