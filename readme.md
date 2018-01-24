<p align="center">
    <img src="http://www.metodika.mx/img/logo.png" />
</p>

## Acerca de la Plantilla

La plantilla para proyectos web de MetodikaTI emplea las tecnologías de vanguardia dentro de la industria web:

- [Bootstrap](http://getbootstrap.com/).
- [AngularJS](https://angularjs.org/).
- [JQuery](https://jquery.com/).
- [Bootbox](http://bootboxjs.com/).

## Estructura de carpetas

La estructra de carpetas permite la encapsulación de código de una manera más semantica, dividiendo la logica de presentación con la de modelos de datos:

<ul>
    <li>
        <b>app</b>
        <ul>
            <li>controller</li>
            <li>directive</li>
            <li>lib</li>
            <li>service</li>
        </ul>
    </li>
    <li>
        <b>assets</b>
        <ul>
            <li>css</li>
            <li>fonts</li>
            <li>img</li>
            <li>js</li>
        </ul>
    </li>
    <li>
        <b>src</b>
        <ul>
            <li>app</li>
            <li>
                partial
                <ul>
                    <li>seo</li>
                </ul>
            </li>
        </ul>
    </li>
    <li>
        <b>vendor</b>
    </li>
</ul>

## Clonación e instalación de plantilla

Cada vez que iniciemos un proyecto web deberemos actualizar antes que nada el repositorio `metodika-web-theme` una concluida dicha tarea copiaremos  y renombraremos la carpeta con el nombre del proyecto o en su defecto con el nombre asignado en el repositorio.

Por medio de la terminal ingresamos a la carpeta recien crea del proyecto y ejecutaremos el siguiente comando: `composer install` con esto ya tendremos instalada de manera correcta el proyecto, es después de estas tareas que podemos dar el primer commit y push dentro del sistema de versiones