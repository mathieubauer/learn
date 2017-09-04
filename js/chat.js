// ######### Pour LMS light  ######### 


$(function() {
    
     $('#container_chat').scrollTop(9999);

});


$('#submit').on('click', function() {
    
    var message = $("#chat_message").val();
    var idUser = $("#idUser").val();
    var idModule = $("#idModule").val();
    var username = $("#username").val();
    $("#chat_message").val("");
    
    var url = 'controleur/chat_add.php';

    $.ajax({
        
        url: url,
        type: 'POST',
        data: 'message=' + message + '&idUser=' + idUser + '&idModule=' + idModule + '&username=' + username,
        dataType: 'json',
        success: function(json) {
            
            var nom = json.nom;
            var message = json.message;
            var nouveauMessage = 
                '<div class="card-block"><p>' 
                + message 
                + '</p><p class="info_message text-xs-right mb-0">' 
                + username 
                + '</p></div><hr class="hr_thin">';
   
            $('#container_chat').append(nouveauMessage);
            $('#container_chat').scrollTop(9999);
            
        },
        error: function () {
            alert('La requete n\'a pas abouti');
        }
        
    });
    
});


// ne fonctionne pas encore
$('#submit').keyup(function(touche) {
    
    var appui = touche.which || touche.keyCode; // le code est compatible tous navigateurs grâce à ces deux propriétés
    if(appui == 13) {
        
        var message = $("#chat_message").val();
        $("#chat_message").val("");


        var url = 'controleur/chat_add.php';

        $.ajax({

            url: url,
            type: 'POST',
            data: 'message=' + message,
            dataType: 'json',
            success: function(json) {

                var nom = json.nom;
                var message = json.message;
                var nouveauMessage = '<div class="card-block"><strong>' + nom + ' :</strong> ' + message + '</div><hr class="hr_thin">';

                $('#container_chat').prepend(nouveauMessage);

            },
            error: function () {
                alert('La requete n\'a pas abouti');
            }


        });

        };
    
});