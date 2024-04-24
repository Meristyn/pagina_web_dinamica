# Página web dinámica
---
Esta página es un formulario de Curriculum Vitae con campos dinámicos con conexión a servidor MySQL usando PHP.
## Estructura de mi base de datos
1. Tabla datos_registrados: Almacena los datos personales.
  - id (clave primaria, autoincremental)
  - nombre_apellidos
  - fecha_nacimiento
  - nacionalidad
  - email
  - telefono
  - ocupaciones
  - idiomas
  - lenguajes_programacion
  - aptitudes
  - habilidades
  - perfil
2. Tabla idiomas: Almacena los idiomas y sus niveles de dominio.
  - id (clave primaria, autoincremental)
  - datos_registrados_id (clave foránea referenciando id en datos_registrados)
  - idioma
  - nivel
3. Tabla experiencia_laboral: Almacena la experiencia laboral.
  - id (clave primaria, autoincremental)
  - datos_registrados_id (clave foránea referenciando id en datos_registrados)
  - nombre_empresa
  - puesto
  - fecha_inicio
  - fecha_fin
  - descripcion
