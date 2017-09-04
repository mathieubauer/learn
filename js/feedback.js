$('#explication').hide();
$('#amelioration').hide();
$('#fin').hide();

$(function() {



var score = 0;
var feedback_explication = "";
var feedback_amelioration = "";


$(document).one('click', '.vote', function() {
    
    score = $(this).attr('alt');
    
    $('#explication').show();
    
    if (score >= 3) { $('.intitule_explication').html('Tant mieux ! Pourquoi ?'); }
    else { $('.intitule_explication').html('Oh ! Pourquoi ?'); }  
        
});


$('.envoi_explication').on('click', function() {
    
    feedback_explication = $(this).parent().children().val();
    $('.contenu_explication').html(feedback_explication);
    
    $('#amelioration').show();
    
    if (score >= 3) { $('.intitule_amelioration').html('Comment faire aussi bien (ou mieux) la prochaine fois ?'); }
    else { $('.intitule_amelioration').html('Comment faire mieux la prochaine fois ?'); }
    
});


$('.envoi_amelioration').on('click', function() {
    
    feedback_amelioration = $(this).parent().children().val();
    $('.contenu_amelioration').html(feedback_amelioration);
    
    $('#fin').show();
    
    $('#form_feedback').append('<input type="hidden" name="score" value="' + score + '">');
    $('#form_feedback').append('<input type="hidden" name="explication" value="' + feedback_explication + '">');
    $('#form_feedback').append('<input type="hidden" name="amelioration" value="' + feedback_amelioration + '">');
    
}); 
    
});