# template-2026 Wordpress FSE (Full Site Editting)

## English Instructions

## Requirements
- Docker
- Docker Compose


## Docker Container Name (docker-compose.yalm)

Make sure the `container_name` used for phpMyAdmin is unique for each project.

Example:

```yaml
phpmyadmin:
    image: phpmyadmin/phpmyadmin
    restart: always
    container_name: phpmyadmintemplate2026
    depends_on:
        - db
```

To start WordPress installation run the next command:

```bash
docker-compose up
```

Import the `database.sql` file for an existing project, or create a new database using the WordPress installation assistant when starting a new project.

You can do that from phpMyAdmin in the URL:

```text
http://localhost:8081/
```

To enter the website use the URL:

```text
http://localhost:8000
```

To edit the theme run the command inside the folder `custom_theme`:

```bash
yarn install
```

To start observing the modified files:

```bash
yarn watch
```

To build for production:

```bash
yarn build
```


## Gutenberg + ACF Blocks

This theme uses Gutenberg only to manage editable sections inside the content area of pages or custom templates.

The header, footer, PHP templates, SCSS and JavaScript continue working with the normal classic WordPress theme structure.

```text
blocks/
├── banner/
│   ├── block.json
│   └── render.php
│
├── informacion-general/
│   ├── block.json
│   └── render.php
│
└── nuestras-empresas/
    ├── block.json
    └── render.php
```

### Example structure for each block

#### block.json

```json
{
    "apiVersion": 2,
    "name": "acf/nuestras-empresas",
    "title": "Nuestras Empresas",
    "description": "Sección para mostrar nuestras empresas",
    "category": "design",
    "icon": "building",
    "keywords": [
        "empresas",
        "marcas"
    ],
    "acf": {
        "mode": "preview",
        "renderTemplate": "render.php"
    },
    "supports": {
        "align": false,
        "anchor": true,
        "multiple": true
    }
}
```

#### render.php

```php
<?php

$section = get_field('content');

?>

<section class="content">

    <div class="container">

        <!-- $section content -->

    </div>

</section>
```

## Note

If you see a critical issue (JS or PHP) after running and activating the theme in WordPress, install and activate the ACF plugin from the `requirements` folder.

Some theme elements depend on ACF fields and may crash or show errors if the plugin is not installed or active.


Enjoy editing :)


---

# Instrucciones en Español

## Requisitos
- Docker
- Docker Compose


## Nombre del contenedor Docker (docker-compose.yaml)

Asegúrate de que el `container_name` utilizado para phpMyAdmin sea único para cada proyecto.

Ejemplo:

```yaml
phpmyadmin:
    image: phpmyadmin/phpmyadmin
    restart: always
    container_name: phpmyadmintemplate2026
    depends_on:
        - db
```

Para iniciar la instalación de WordPress ejecuta el siguiente comando:

```bash
docker-compose up
```

Importa el archivo `database.sql` para un proyecto existente, o crea una nueva base de datos utilizando el asistente de instalación de WordPress cuando estés iniciando un nuevo proyecto.

Puedes hacerlo desde phpMyAdmin en la URL:

```text
http://localhost:8081/
```

Para ingresar al sitio web utiliza la URL:

```text
http://localhost:8000
```

Para editar el tema ejecuta el siguiente comando dentro de la carpeta `custom_theme`:

```bash
yarn install
```

Para comenzar a observar los archivos modificados:

```bash
yarn watch
```

Para compilar el proyecto para producción:

```bash
yarn build
```


## Gutenberg + Bloques ACF

Este tema utiliza Gutenberg únicamente para administrar las secciones editables dentro del área de contenido de las páginas o templates personalizados.

El header, footer, templates PHP, SCSS y JavaScript continúan funcionando con la estructura clásica de un tema de WordPress.

```text
blocks/
├── banner/
│   ├── block.json
│   └── render.php
│
├── informacion-general/
│   ├── block.json
│   └── render.php
│
└── nuestras-empresas/
    ├── block.json
    └── render.php
```

### Ejemplo de estructura para cada bloque

#### block.json

```json
{
    "apiVersion": 2,
    "name": "acf/nuestras-empresas",
    "title": "Nuestras Empresas",
    "description": "Sección para mostrar nuestras empresas",
    "category": "design",
    "icon": "building",
    "keywords": [
        "empresas",
        "marcas"
    ],
    "acf": {
        "mode": "preview",
        "renderTemplate": "render.php"
    },
    "supports": {
        "align": false,
        "anchor": true,
        "multiple": true
    }
}
```

#### render.php

```php
<?php

$section = get_field('content');

?>

<section class="content">

    <div class="container">

        <!-- contenido de $section -->

    </div>

</section>
```

## Nota

Si ves algún error crítico de JS o PHP después de ejecutar y activar el tema en WordPress, instala y activa el plugin ACF desde la carpeta `requirements`.

Algunos elementos del tema dependen de los campos de ACF y pueden fallar o mostrar errores si el plugin no está instalado o activo.


¡Disfruta editando! :)