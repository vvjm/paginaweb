$(document).ready(function() {
    $("button").on('click', function(event) {
        var id = "t" + this.id;
        if (id.indexOf("m") != -1) {
            var id_modificar = document.getElementById(id).value;
            /* alert("a php modificar");*/
            $.ajax({
                type: "POST",
                url: "modificar.html",
                success: function() {
                    window.location.href = "modificar.html?id=" + id_modificar;
                }
            });
        }
        if (id.indexOf("e") != -1) {
            var id_eliminar = document.getElementById(id).value;
            if (confirm("Eliminar el registro")) {
                $.ajax({
                    type: "POST",
                    url: "eliminar.php",
                    success: function() {
                        window.location.href = "eliminar.php?id=" + id_eliminar;
                    }
                });
            }
        }
        if (id.indexOf("n") != -1) {
            /*var id_modificar = document.getElementById(id).value;*/
            $.ajax({
                type: "POST",
                url: "Nregistro.html",
                success: function() {
                    window.location.href = "Nregistro.html";
                }
            });
        }
    });
   
});