# Guía de funcionamiento para ATM v2

### Instalación
El proyecto se encuentra estructura bajo los siguientes directorios:
* css: Archivos que guardan los estilos
* js: Archivos que almacenan las funcionalidades
* img: imagenes utilizadas en el proyecto
* index.html: contenedor principal de la estructura del proyecto.

En css/main.css verificar el siguiente código
```css
body {
    margin: 0%;
    height: 100%;
    background-position: center;
    background-image: url(./../img/fondo.jpg); /* colocar la ruta de la imagen de fondo */
    background-repeat-y: repeat;
    background-repeat-x: no-repeat;
    background-size: cover;
}
```