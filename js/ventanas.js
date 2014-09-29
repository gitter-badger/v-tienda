$(document).ready(function() {
    $('#btnNuevoCliente').click(function() {
        abrir_nuevoCliente();
    });
    $('#btnNuevoProducto').click(function() {
        abrir_nuevoProducto();
    });
    $('#btnNuevaVenta').click(function() {
        abrir_nuevoVenta();
    });
    $('#btnNuevoServicio').click(function() {
        abrir_nuevoServicio();
    });
    $('#btnNuevaNota').click(function() {
        abrir_nuevaNota();
    });
    $('#btnNuevaTienda').click(function() {
        abrir_Tienda();
    });
    $('#Descripcion').click(function() {
        editar_Tienda();
    });
    $('editarCliente').attr("id").click(function() {
        
        editar_Cliente();
    });
   
    
});



function abrir_nuevoCliente() {

    $("#dialogCliente").dialog({modal: true});

}
;

function abrir_nuevoProducto () {

    $("#dialogProducto").dialog({modal: true});

}
;

function abrir_nuevoVenta() {

    $("#dialogVenta").dialog({modal: true});

}
;

function abrir_nuevoServicio() {

    $("#dialogServicio").dialog({modal: true});

}
;

function abrir_nuevaNota() {

    $("#dialogNota").dialog({modal: true});

}
;

function abrir_nuevaTienda() {

    $("#dialogTienda").dialog({modal: true});

}
;

function editar_Tienda() {

    $("#EditarTienda").dialog({modal: true});

}
;

function editar_Cliente() {

    $("#dialogEditarCliente").dialog({modal: true});

}
;