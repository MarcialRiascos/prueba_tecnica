$(document).ready(function() {
    $("#formEmpleado").validate({
        rules: {
            nombre: {
                required: true,
                minlength: 3
            },
        },
        messages: {
            nombre: {
                required: "El nombre es obligatorio",
                minlength: "El nombre debe tener al menos 3 caracteres"
            },
        }
    });
});