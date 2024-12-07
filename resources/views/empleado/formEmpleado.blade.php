<div class="mb-3 row">
    <label for="nombre" class="col-sm-3 text-end" style="font-weight: bold;">Nombre completo *</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="nombre" name="nombre"
            value="{{ isset($empleado->nombre) ? $empleado->nombre : old('nombre') }}"
            placeholder="Nombre completo del empleado" required>
        <small id="nombreError" class="text-danger d-none">
            El nombre debe tener al menos 5 letras.
        </small>
    </div>
</div>

{{-- <script>
    document.getElementById("nombre").addEventListener("input", function() {
        const nombreInput = this.value.trim();
        const nombreError = document.getElementById("nombreError");

        if (nombreInput.length < 5) {
            nombreError.classList.remove("d-none");
        } else {
            nombreError.classList.add("d-none");
        }
    });
</script> --}}

<div class="mb-3 row">
    <label for="email" class="col-sm-3 text-end" style="font-weight: bold;">Correo electrónico *</label>
    <div class="col-sm-9">
        <input type="email" class="form-control" id="email" name="email"
            value="{{ isset($empleado->email) ? $empleado->email : old('email') }}" placeholder="Correo electrónico"
            required>
        <small id="emailError" class="text-danger d-none">Por favor, ingrese un correo electrónico válido (ejemplo@example.com).</small>
    </div>
</div>

{{-- <script>
    // Escuchar los cambios en el campo de correo electrónico
    document.getElementById("email").addEventListener("input", validateEmail);

    function validateEmail() {
        const emailInput = document.getElementById("email").value;
        const emailError = document.getElementById("emailError");
        // Expresión regular para validar la estructura ejemplo@example.com
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/;

        // Si el correo no coincide con el patrón, mostrar el mensaje de error
        if (!emailPattern.test(emailInput)) {
            emailError.classList.remove("d-none");  // Mostrar error
        } else {
            emailError.classList.add("d-none");  // Ocultar error
        }
    }
</script> --}}


<div class="mb-3 row">
    <label for="sexo" class="col-sm-3 text-end" style="font-weight: bold;">Sexo *</label>
    <div class="col-sm-9">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sexo" id="sexoF" value="F"
                {{ isset($empleado) && $empleado->sexo == 'F' ? 'checked' : '' }} required>
            <label class="form-check-label" for="sexoF">Femenino</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sexo" id="sexoM" value="M"
                {{ isset($empleado) && $empleado->sexo == 'M' ? 'checked' : '' }} required>
            <label class="form-check-label" for="sexoM">Masculino</label>
        </div>
        <small id="sexoError" class="text-danger d-none">
            Por favor, selecciona una opción.
        </small>
    </div>
</div>

{{-- <script>
    document.querySelectorAll('input[name="sexo"]').forEach(radio => {
        radio.addEventListener("change", validateSexo);
    });

    function validateSexo() {
        const radios = document.querySelectorAll('input[name="sexo"]');
        const sexoError = document.getElementById("sexoError");
        const isChecked = Array.from(radios).some(radio => radio.checked);

        if (isChecked) {
            sexoError.classList.add("d-none");
        } else {
            sexoError.classList.remove("d-none");
        }
    }

    // Validar al enviar el formulario
    document.querySelector("form").addEventListener("submit", function(event) {
        validateSexo();
        const sexoError = document.getElementById("sexoError");
        if (!sexoError.classList.contains("d-none")) {
            event.preventDefault();
        }
    });
</script> --}}

<div class="mb-3 row">
    <label for="area_id" class="col-sm-3 text-end" style="font-weight: bold;">Área *</label>
    <div class="col-sm-9">
        <select class="form-select" name="area_id" id="area_id" required>
            <option value="">Seleccione un área</option>
            @foreach ($areasAll as $area)
                <option value="{{ $area->id }}"
                    {{ isset($empleado) && $area->id == $empleado->area_id ? 'selected' : '' }}>
                    {{ $area->nombre }}
                </option>
            @endforeach
        </select>
        <small id="areaError" class="text-danger d-none">Por favor, selecciona un área válida.</small>
    </div>
</div>

{{-- <script>
    const areaSelect = document.getElementById("area_id");
    const areaError = document.getElementById("areaError");

    // Validar al cambiar la selección
    areaSelect.addEventListener("change", function() {
        validateArea();
    });

    function validateArea() {
        if (areaSelect.value === "") {
            areaError.classList.remove("d-none");
        } else {
            areaError.classList.add("d-none");
        }
    }

    // Validar al enviar el formulario
    document.querySelector("form").addEventListener("submit", function(event) {
        validateArea();
        if (areaSelect.value === "") {
            event.preventDefault();
        }
    });
</script> --}}


<div class="mb-3 row">
    <label for="descripcion" class="col-sm-3 text-end" style="font-weight: bold;">Descripción *</label>
    <div class="col-sm-9">
        <textarea class="form-control" id="descripcion" name="descripcion"
            placeholder="Descripción de la experiencia del empleado" style="height: 100px" required>{{ isset($empleado->descripcion) ? $empleado->descripcion : '' }}</textarea>
        <small id="descripcionError" class="text-danger d-none">La descripción debe tener más de 10 caracteres.</small>
        <div class="form-check mb-4 mt-2">
            <input class="form-check-input" {{ isset($empleado) && $empleado->boletin == 1 ? 'checked' : '' }}
                type="checkbox" value="1" id="boletin" name="boletin">
            <p class="form-check-label" for="boletin">
                Deseo recibir boletín informativo
            </p>
        </div>
    </div>
</div>

{{-- <script>
    const descripcionInput = document.getElementById("descripcion");
    const descripcionError = document.getElementById("descripcionError");

    // Validar al escribir
    descripcionInput.addEventListener("input", function() {
        validateDescripcion();
    });

    function validateDescripcion() {
        if (descripcionInput.value.length <= 10) {
            descripcionError.classList.remove("d-none");
        } else {
            descripcionError.classList.add("d-none");
        }
    }

    // Validar al enviar el formulario
    document.querySelector("form").addEventListener("submit", function(event) {
        validateDescripcion();
        if (descripcionInput.value.length <= 10) {
            event.preventDefault(); // Detener el envío si no cumple con la validación
        }
    });
</script>
 --}}
<div class="row">
    <label for="role_id" class="col-sm-3 text-end" style="font-weight: bold;">Roles *</label>
    <div class="col-sm-9">
        @foreach ($rolesAll as $role)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="role_id[]" value="{{ $role->id }}"
                    id="role_{{ $role->id }}"
                    {{ isset($empleado) && in_array($role->id, $empleado->role) ? 'checked' : '' }}>
                <label class="form-check-label" for="role_{{ $role->id }}">{{ $role->nombre }}</label>
            </div>
        @endforeach
        <small id="roleError" class="text-danger d-none">Por favor, selecciona al menos un rol.</small>
    </div>
</div>

<script>
$(document).ready(function() {
    // Inicializamos la validación en el formulario
    $("#formEmpleado").validate({
        rules: {
            nombre: {
                required: true,
                minlength: 5
            },
            email: {
                required: true,
                email: true
            },
            sexo: {
                required: true
            },
            area_id: {
                required: true
            },
            descripcion: {
                required: true,
                minlength: 10
            },
            'role_id[]': {
                required: true,
                minlength: 1
            }
        },
        messages: {
            nombre: {
                required: "El nombre es obligatorio.",
                minlength: "El nombre debe tener al menos 5 caracteres."
            },
            email: {
                required: "El correo electrónico es obligatorio.",
                email: "Por favor ingrese un correo electrónico válido."
            },
            sexo: {
                required: "Por favor, selecciona el sexo."
            },
            area_id: {
                required: "Por favor, selecciona un área."
            },
            descripcion: {
                required: "La descripción es obligatoria.",
                minlength: "La descripción debe tener al menos 10 caracteres."
            },
            'role_id[]': {
                required: "Por favor, selecciona al menos un rol.",
                minlength: "Debe seleccionar al menos un rol."
            }
        },
        errorPlacement: function(error, element) {
            // Colocamos el mensaje de error debajo del campo correspondiente
            if (element.attr("name") == "nombre") {
                error.appendTo(element.closest('.col-sm-9'));
            } else if (element.attr("name") == "email") {
                error.appendTo(element.closest('.col-sm-9'));
            } else if (element.attr("name") == "sexo") {
                error.appendTo(element.closest('.col-sm-9'));
            } else if (element.attr("name") == "area_id") {
                error.appendTo(element.closest('.col-sm-9'));
            } else if (element.attr("name") == "descripcion") {
                error.appendTo(element.closest('.col-sm-9'));
            } else if (element.attr("name") == "role_id[]") {
                error.appendTo(element.closest('.col-sm-9'));
            }
        }
    });
});
</script>

<div class="row mt-3">
    <span class="col-sm-3"></span>
    <div class="col-sm-9">
        <button type="submit" class="btn btn-primary">{{ $mode }}</button>
    </div>
</div>
