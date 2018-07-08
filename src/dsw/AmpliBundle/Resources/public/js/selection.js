$( function() {
    
    // $('.item_0').show('fade');
    
    var current = 0;

    var $draggable = $('.draggable2').draggabilly({
        //containment: '.idee_liste_selection'
    })

    $draggable.on( 'dragEnd', function( event, pointer ) {

        var relache = $('.item_' + current).position().left;
        
        if (relache != 0) {
            
            if (current != 0) {
                
                var id_button = $('.item_' + current).attr("id");
                var id_split = id_button.split("_");
                var id = id_split[1];

                var url1 = location.href.split("espace");
                
                if (relache < -70) {
                    
                    var url = url1[0] + 'idee/coeur/remove/' + id;
                    
                    $('.item_' + current).fadeOut(200);
                    current ++;
                    
                    setTimeout(function() {
                        $('.item_' + current).fadeIn(200);
                    }, 200 );
                    
                } else if (relache > 70) {
                    
                    var url = url1[0] + 'idee/coeur/add/' + id;
                    
                    $('.item_' + current).fadeOut(200);
                    current ++;
                    
                    setTimeout(function() {
                        $('.item_' + current).fadeIn(200);
                    }, 200 );
                    
                } else {
                    
                    $('.item_' + current).animate({top: 0, left: 0});
                    
                }

                $.ajax({

                    url: url,

                    error: function () {
                        alert('La requete n\'a pas abouti');
                    }

                });
                    
                
            } else {
                
                if (relache < -70) {
                    
                    $('.item_' + current).fadeOut(200);
                    current ++;
                    
                    setTimeout(function() {
                        $('.item_' + current).fadeIn(200);
                    }, 200 );
                    
                } else if (relache > 70) {
                    
                    $('.item_' + current).fadeOut(200);
                    current ++;
                    
                    setTimeout(function() {
                        $('.item_' + current).fadeIn(200);
                    }, 200 );
                    
                } else {
                    
                    $('.item_' + current).animate({top: 0, left: 0});
                    
                }
                
            }
            
        }
        
    })
    
    
    
    
    
    function runEffect(cible, sens, suivant) {

        // plusieurs types d'effets disponibles
        var selectedEffect = 'slide';
        var options = { direction: sens };
        
        // Run the effect
        $( cible ).hide( selectedEffect, options, 500 );
        
        setTimeout(function() {
            //$('.item_' + suivant).removeClass('hidden');
            $('.item_' + suivant).show('fade');
        }, 500 );

    };
    
    function runEffectDrop(id_card, suivant) {
        
        // plusieurs types d'effets disponibles
        // var selectedEffect = 'slide';
        // var options = { direction: sens };
        
        // Run the effect
        $( '#card_' + id_card ).hide( 500 );
        
        setTimeout(function() {
            //$('.item_' + suivant).removeClass('hidden');
            $('.item_' + suivant).show('fade');
        }, 500 );

    };
    
    function getIdCard(card) {
        
        var id_card = card.attr("id");
        var id_split = id_card.split("_");
        return id_split[1];
        
    }
    
    function getItemSuivant(id_card) {
        
        var id_item = $('#card_' + id_card).attr("class");
        var item_split = id_item.split("_");
        return parseInt(item_split[1]) + 1;
        
    }

    $(document).on('click', '.croix', function() {
        
        var id_button = $('.item_' + current).attr("id");
        var id_split = id_button.split("_");
        var id = id_split[1];
        
        if (id) {
            
            var url1 = location.href.split("espace");
            var url = url1[0] + 'idee/coeur/remove/' + id;
            
            $.ajax({

                url: url,

                error: function () {
                    alert('La requete n\'a pas abouti');
                }

            });
            
        }
        
        $('.item_' + current).fadeOut(200);
        current ++;
        
        setTimeout(function() {
            $('.item_' + current).fadeIn(200);
        }, 200 );

    });
    
    $(document).on('click', '.coeur', function() {
        
        var id_button = $('.item_' + current).attr("id");
        var id_split = id_button.split("_");
        var id = id_split[1];
        
        if (id) {
            
            var url1 = location.href.split("espace");
            var url = url1[0] + 'idee/coeur/add/' + id;
            
            $.ajax({

                url: url,

                error: function () {
                    alert('La requete n\'a pas abouti');
                }

            });
            
        }
        
        $('.item_' + current).fadeOut(200);
        current ++;
        
        setTimeout(function() {
            $('.item_' + current).fadeIn(200);
        }, 200 );

    });
    
    // Drag and drop
    
    /*
    $( ".draggable" ).draggable({ 
        revert: "invalid",
        containment: "document"
    });
    
    $( "#like_area" ).droppable({
        classes: {
            "ui-droppable-active": "ui-state-active",
            "ui-droppable-hover": "ui-state-hover"
        },
        drop: function( event, ui ) {
            
            var id_card = getIdCard(ui.draggable);
            var suivant = getItemSuivant(id_card);
            runEffectDrop(id_card, suivant);
            
        }
    });
    
    $( "#dislike_area" ).droppable({
        classes: {
            "ui-droppable-active": "ui-state-active",
            "ui-droppable-hover": "ui-state-hover"
        },
        drop: function( event, ui ) {
            
            var id_card = getIdCard(ui.draggable);
            var suivant = getItemSuivant(id_card);
            runEffectDrop(id_card, suivant);
            
        }
    });
    
    */
    
    
    
    
    
    
    
    
    
    
    
});

/*
var $carousel = $('.main-carousel').flickity({
    // options
    cellAlign: 'left',
    contain: true,
    imagesLoaded: true,
    pageDots: false,
    prevNextButtons: false,
    wrapAround: true
    // dragThreshold: 100,
    // selectedAttraction: 0.2,
    // friction: 0.8
    // higher attraction and higher friction
    // faster transitions
});

// var $carousel = $('.main-carousel').flickity();
var flkty = $carousel.data('flickity');
*/

/* 
$carousel.on( 'dragEnd.flickity', function( event, pointer, progress ) {
    // alert(pointer.pageX);
    var relache = pointer.pageX;
    var center = $(window).width() / 2;
    var diff = center - relache; // - 200 ou 200
    
    alert(progress);
});
*/

/*
$carousel.on( 'scroll.flickity', function( event, progress ) {
    alert(progress);
});
*/

/*
var previous = flkty.selectedIndex;

$carousel.on( 'settle.flickity', function() {
    
    if (flkty.selectedIndex != previous) {
        
        if (flkty.selectedIndex > previous) {
            alert('suivant');
        } 
        
        if (flkty.selectedIndex < previous) {
            alert('précédent');
        }
        
        previous = flkty.selectedIndex;
        
    }
    
})
*/


/*
$carousel.on( 'pointerUp.flickity', function( event, pointer ) {
    var relache = pointer.pageX;
    var center = $(window).width() / 2;
    var diff = relache - center; // - 200 ou 200
    
    if (diff <= -200) {
        alert('non');
    } else if (diff >= 200) {
        alert('oui');
    }
    
})
*/




/*
$(".box").animate({
            width: "300px",
            height: "300px",
            marginLeft: "150px",
            borderWidth: "10px",
            opacity: 0.5
        });*/

