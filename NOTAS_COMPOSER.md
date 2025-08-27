# Resumen: Composer y Autoload en PHP

Si buscas estructurar proyectos PHP con técnicas profesionales utilizadas en la industria del software, **Composer** es la herramienta clave.  
Esta tecnología permite delegar la **autocarga de clases de forma automática**, evitando constantes incorporaciones manuales y mejorando al máximo la calidad y limpieza del código.

---

## ¿Cómo funciona Composer para la autocarga de clases?

Utilizar Composer implica trabajar con un archivo **composer.json**.  
Este archivo incluye un apartado llamado `autoload` para configurar dónde estarán disponibles las clases propias del proyecto.  
Este estándar se denomina **PSR-4**, ampliamente usado en aplicaciones profesionales:

```json
{
  "autoload": {
    "psr-4": {
      "App\\": "src/"
    }
  }
}
```

Aquí, cada vez que se referencia `App`, Composer dirige automáticamente al sistema hacia una carpeta llamada `src`.  
Este esquema es flexible: se puede personalizar la ruta y añadir **nombres de proveedores** para evitar conflictos e impulsar la colaboración con código abierto.

---

## ¿Qué debo hacer para que Composer genere la autocarga?

Tras configurar el archivo `composer.json`, solo se necesita ejecutar un comando en terminal para activar la autocarga:

```bash
composer dump-autoload
```

Esto genera automáticamente una carpeta `vendor` con un fichero `autoload.php` responsable de la autocarga.  
De esta forma, el sistema identifica automáticamente nuestras clases y sus rutas, sin que el programador tenga que preocuparse por rutas relativas o incorporaciones repetitivas.

---

## ¿Cómo usar estas clases automáticamente en el código PHP?

En el archivo principal, típicamente `index.php`, es necesario importar únicamente el archivo autoload generado por Composer:

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Curso;
use App\Tipo;

$curso = new Curso(new Tipo('pago'));
```

Cada clase alojada dentro de `src` debe contar con un **espacio de nombres (namespace)** adecuado al configurado en Composer (`App` en el ejemplo):

```php
<?php

namespace App;

class Curso
{
    // Código de la clase
}
```

De esta forma, Composer es capaz de gestionar automáticamente la ubicación e inclusión de cada archivo dentro del proyecto.

---

## ¿Cómo mantener limpio el repositorio con respecto a Composer?

En un entorno de control de versiones como Git, es importante **no subir la carpeta generada `vendor/`**.  
Para ello se utiliza un archivo `.gitignore`:

```
vendor/
```

Esto mantiene limpio y ligero el repositorio, dejando la responsabilidad de instalación y generación de archivos automáticamente a Composer.
