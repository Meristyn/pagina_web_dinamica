<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Página web dinámica</title>
    <link href="reset.css" rel="stylesheet" type="text/css" />
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/f90b906b94.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</head>

<body>
<header>
    <div>
        <h1>Página web dinámica</h1>
    </div>
</header>
<main>
    <form id="cvForm" action="datos.php" method="post">
        <div class="contenedor">
            <h2>Información personal</h2>
            <label for="nombre_apellidos" class="campo">Nombre y Apellidos</label>
            <input type="text" id="nombre_apellidos" name="nombre_apellidos" required onblur="verificarFormulario()"><br>

            <label for="fecha_nacimiento" class="campo">Fecha de Nacimiento</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required onblur="verificarFormulario()"><br>

            <label for="ocupaciones" class="campo">Ocupación</label>
            <div id="ocupaciones-container">
                <input type="text" name="ocupaciones[]" required><br>
            </div>
            <button onclick="agregarOcupacion()">Agregar Ocupación</button>


            <label for="nacionalidad" class="campo">Nacionalidad</label>
            <select id="nacionalidad" name="nacionalidad" required>
                <option value="">Seleccione...</option>
                <option value="Perú">Perú</option>
                <option value="México">México</option>
                <option value="Argentina">Argentina</option>
            </select><br>
        </div>
        <div class="contenedor">
            <h2>Contacto</h2>
            <label for="contacto" class="campo">Email</label>
            <input type="email" id="email" name="email" required><br>
            <label for="contacto" class="campo">Teléfono</label>
            <input type="tel" id="telefono" name="telefono" required><br>
        </div>

        <div class="contenedor">
            <h2>Experiencia Laboral</h2>
            <div id="experiencia-laboral-container">
                <label for="experiencia_laboral" class="campo">Nombre de la empresa</label>
                <input type="text" id="nombre_empresa" name="nombre_empresa[]" required><br>
                <label for="puesto" class="campo">Puesto</label>
                <input type="text" id="puesto" name="puesto[]" required><br>
                <label for="fecha_inicio" class="campo">Fecha de inicio</label>
                <input type="date" id="fecha_inicio" name="fecha_inicio[]" required><br>
                <label for="fecha_fin" class="campo">Fecha de fin</label>
                <input type="date" id="fecha_fin" name="fecha_fin[]"><br>
                <label for="descripcion" class="campo">Descripción de las responsabilidades</label>
                <textarea id="descripcion" name="descripcion[]" rows="4" cols="50" required></textarea><br>
            </div>
            
            <button type="button" onclick="agregarExperiencia()">Agregar Experiencia Laboral</button>
        </div>

        <div class="contenedor">
            <h2>Formación</h2>
            <div id="formacion-container">
                <label for="institucion" class="campo">Institución educativa</label>
                <input type="text" id="institucion" name="institucion[]" required><br>
                <label for="titulo_certificacion" class="campo">Título o certificación</label>
                <input type="text" id="titulo_certificacion" name="titulo_certificacion[]" required><br>
                <label for="fecha_inicio_formacion" class="campo">Fecha de inicio</label>
                <input type="date" id="fecha_inicio_formacion" name="fecha_inicio_formacion[]" required><br>
                <label for="fecha_fin_formacion" class="campo">Fecha de fin</label>
                <input type="date" id="fecha_fin_formacion" name="fecha_fin_formacion[]"><br>
            </div>
            <button type="button" onclick="agregarFormacion()">Agregar Formación</button>
        </div>

        <div class="contenedor">
            <h2>Idiomas</h2>
            <div id="idiomas-container">
                <label for="idioma_0" class="campo">Idioma</label>
                <input list="lista-idiomas" name="idiomas[]" id="idioma_0" required>
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
                    <input type="radio" id="basico_0" name="nivel_idioma_0[]" value="Básico">
                    <label for="basico_0">Básico</label><br>
                    <input type="radio" id="intermedio_0" name="nivel_idioma_0[]" value="Intermedio">
                    <label for="intermedio_0">Intermedio</label><br>
                    <input type="radio" id="avanzado_0" name="nivel_idioma_0[]" value="Avanzado">
                    <label for="avanzado_0">Avanzado</label><br>
                    <input type="radio" id="fluido_0" name="nivel_idioma_0[]" value="Fluido">
                    <label for="fluido_0">Fluido</label><br>
                </fieldset>
            </div>
            <button type="button" onclick="agregarIdioma();">Agregar Idioma</button>
        </div>


        <div class="contenedor">
            <h2>Habilidades y Aptitudes</h2>
            <label for="lenguajes_programacion" class="campo">Lenguajes de programación</label>
            <select id="lenguajes_programacion" name="lenguajes_programacion[]" multiple>
                <option value="C++">C++</option>
                <option value="Python">Python</option>
                <option value="JavaScript">JavaScript</option>
                <option value="Java">Java</option>
                <option value="C#">C#</option>
                <option value="PHP">PHP</option>
                <option value="Ruby">Ruby</option>
                <option value="Swift">Swift</option>
                <option value="Kotlin">Kotlin</option>
                <option value="Go">Go</option>
                <option value="R">R</option>
                <option value="TypeScript">TypeScript</option>
                <option value="SQL">SQL</option>
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
            </select><br>

            <label for="aptitudes" class="campo">Aptitudes</label>
            <div id="aptitudes-container">
                <input list="lista-aptitudes" name="aptitudes[]" id="aptitudes" required>
                <datalist id="lista-aptitudes">
                    <option value="Trabajo en equipo"></option>
                    <option value="Creatividad"></option>
                    <option value="Adaptabilidad"></option>
                    <option value="Organización"></option>
                    <option value="Pensamiento crítico"></option>
                    <option value="Toma de decisiones"></option>
                    <option value="Gestión del tiempo"></option>
                </datalist>
            </div>
            <button type="button" onclick="agregarAptitud()">Agregar Aptitud</button>

            <label for="habilidades">Habilidades</label><br>
            <div id="habilidades-container">
                <input type="checkbox" id="comunicacion_efectiva" name="habilidades[]" value="Comunicación efectiva">
                <label for="comunicacion_efectiva">Comunicación efectiva</label><br>
                <input type="checkbox" id="resolucion_de_problemas" name="habilidades[]" value="Resolución de problemas">
                <label for="resolucion_de_problemas">Resolución de problemas</label><br>
                <input type="checkbox" id="liderazgo" name="habilidades[]" value="Liderazgo">
                <label for="liderazgo">Liderazgo</label><br>
            </div>

            <button type="button" onclick="agregarHabilidad()">Agregar Habilidad</button>

        </div>
        
        <div class="contenedor">
            <h2>Perfil</h2>
            <label for="perfil">Perfil</label><br>
            <textarea id="perfil" name="perfil" rows="4" cols="50" required></textarea><br>

            <input type="submit" value="Enviar" id="submitBtn">
        </div>
    </form>
</main>

</body>
</html>
