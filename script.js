function agregarOcupacion() {
    var container = document.getElementById("ocupaciones-container");
    var nuevoInput = document.createElement("input");
    nuevoInput.type = "text";
    nuevoInput.name = "ocupaciones[]"; // Agregamos corchetes para enviarlo como array
    nuevoInput.required = true;
    container.appendChild(nuevoInput);
    container.appendChild(document.createElement("br"));
}

function agregarHabilidad() {
    var container = document.getElementById("habilidades-container");
    var nuevaHabilidad = prompt("Ingrese la nueva habilidad:");
    if (nuevaHabilidad) {
        var checkbox = document.createElement("input");
        checkbox.type = "checkbox";
        checkbox.name = "habilidades[]";
        checkbox.value = nuevaHabilidad;
        var label = document.createElement("label");
        label.textContent = nuevaHabilidad;
        container.appendChild(checkbox);
        container.appendChild(label);
        container.appendChild(document.createElement("br"));
    }
}

function agregarAptitud() {
    var container = document.getElementById("aptitudes-container");
    var input = document.createElement("input");
    input.type = "text";
    input.name = "aptitudes[]";
    input.required = true;
    var dataList = document.getElementById("lista-aptitudes");
    input.setAttribute("list", "lista-aptitudes");
    var lineBreak = document.createElement("br");
    container.appendChild(input);
    container.appendChild(dataList);
    container.appendChild(lineBreak);
}

function agregarExperiencia() {
    const contenedor = document.getElementById("experiencia-laboral-container");
    
    const nuevaExperiencia = document.createElement("div");
    nuevaExperiencia.innerHTML = `
        <label for="nombre_empresa" class="campo">Nombre de la empresa</label>
        <input type="text" name="nombre_empresa[]" required><br>
        <label for="puesto" class="campo">Puesto</label>
        <input type="text" name="puesto[]" required><br>
        <label for="fecha_inicio" class="campo">Fecha de inicio</label>
        <input type="date" name="fecha_inicio[]" required><br>
        <label for="fecha_fin" class="campo">Fecha de fin</label>
        <input type="date" name="fecha_fin[]"><br>
        <label for="descripcion" class="campo">Descripción</label>
        <textarea name="descripcion[]" rows="4" cols="50" required></textarea><br>
    `;
    
    contenedor.appendChild(nuevaExperiencia);
}

function agregarFormacion() {
    const contenedor = document.getElementById("formacion-container");
    
    const nuevaFormacion = document.createElement("div");
    nuevaFormacion.innerHTML = `
        <label for="titulo" class="campo">Título</label>
        <input type="text" name="titulo[]" required><br>
        <label for="institucion" class="campo">Institución</label>
        <input type="text" name="institucion[]" required><br>
        <label for="fecha_inicio" class="campo">Fecha de inicio</label>
        <input type="date" name="fecha_inicio[]" required><br>
        <label for="fecha_fin" class="campo">Fecha de fin</label>
        <input type="date" name="fecha_fin[]"><br>
    `;
    
    contenedor.appendChild(nuevaFormacion);
}

let key = 1; // Variable global para mantener un contador

function agregarIdioma() {
    const contenedor = document.getElementById("idiomas-container");
    
    const nuevoIdioma = document.createElement("div");
    nuevoIdioma.innerHTML = `
    <input type="hidden" name="key" value="${key}">
    <label for="idioma_${key}" class="campo">Idioma</label>
    <input list="lista-idiomas" name="idiomas[]" id="idioma_${key}" required>
    <datalist id="lista-idiomas">
        <option value="Español"></option>
        <option value="Inglés"></option>
        <option value="Francés"></option>
        <option value="Alemán"></option>
        <option value="Italiano"></option>
        <option value="Portugués"></option>
    </datalist>

    <fieldset>
        <legend>Nivel</legend>
        <input type="radio" id="basico_${key}" name="nivel_idioma_${key}[]" value="Básico">
        <label for="basico_${key}">Básico</label><br>
        <input type="radio" id="intermedio_${key}" name="nivel_idioma_${key}[]" value="Intermedio">
        <label for="intermedio_${key}">Intermedio</label><br>
        <input type="radio" id="avanzado_${key}" name="nivel_idioma_${key}[]" value="Avanzado">
        <label for="avanzado_${key}">Avanzado</label><br>
        <input type="radio" id="fluido_${key}" name="nivel_idioma_${key}[]" value="Fluido">
        <label for="fluido_${key}">Fluido</label><br>
    </fieldset>
    `;
    
    contenedor.appendChild(nuevoIdioma);
    key++; // Incrementar el contador
    
}
