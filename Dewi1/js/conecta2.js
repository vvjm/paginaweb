$(document).ready(function() {
    /*=============================boton para modificar registro===========================================*/
    $("#Bmodif").on('click', function(event) {
        event.preventDefault();
        var id = $("#idM").val();
        var nombre = $("#nombre").val();
        var apellidoP = $("#apellioP").val();
        var apellidoM = $("#apellioM").val();
        $.ajax({
            type: "POST",
            url: "modificar.php",
            success: function() {
                window.location.href = "modificar.php?id=" + id + "&nombre=" + nombre + "&apellidoP=" + apellidoP + "&apellidoM=" + apellidoM;
            }
        });
    });
    /*=============================boton para ingresar un nuevo registro===========================================*/
    $("#Bnv").on('click', function(event) {
        event.preventDefault();
        var nombre = $("#nombre").val();
        var apellidoP = $("#apellidoP").val();
        var apellidoM = $("#apellidoM").val();
        $.ajax({
            type: "POST",
            /*  url: "nuevoR.php",*/
            success: function() {
                window.location.href = "nuevoR.php?nombre=" + nombre + "&apellidoP=" + apellidoP + "&apellidoM=" + apellidoM;
            }
        });
    });
});