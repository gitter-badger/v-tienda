$(document).ready(function() {
    $('#username').bind('blur', function() {
        var usuario = $(this).val();
        var datos = {
            nombre_usuario: usuario
        };
        $.ajax({
            url: "/users/username_check_ajax",
            type: "POST",
            data: datos,
            success: function(msg) {
                if(msg == 'TRUE'){
                    $('.usernamep').removeClass('username_taken');
                    $('.usernamep').addClass('username_notaken');
                }else if(msg == 'FALSE'){
                    $('.usernamep').removeClass('username_notaken');
                    $('.usernamep').addClass('username_taken');
                }
            }
        });
    });
});