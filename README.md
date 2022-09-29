# Tutorial de HTML

HTML o HyperText Markup Language (lenguaje de marcado para hipertexto) define una manera para codificar y estructurar un documento que se usará como una página web. Html es el lenguaje en el que la gran mayoría de los sitios web están definidos en la actualidad.

Un lenguaje de marcado permite definir el contenido y la estructura de la información en un documento mediante elementos organizados en un árbol. Estos elementos están formados de etiquetas o *marcas* que delimitan el contenido del elemento (entre otras cosas). Un elemento puede tener como contenido otros elementos, siempre formando un árbol. A continuación un ejemplo de un documento html muy simple pero completo:

```html
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Título de página</title>
    </head>
    <body>
        <p>Un párrafo.</p>
    </body>
</html>
```

Las etiquetas que definen los elementos las verá indicadas por los símbolos `< >`, y generalmente vienen en pares, delimitando el elemento: una que indica el inicio y otra el final
-   `<html> ... </html>`, por ejemplo, es el elemento raíz del árbol. Se abre con `<html>` y se cierra con `</html>`.
    - A su interior irán todos los demás elementos del documento formando el árbol
- Muchos elementos contienen texto solamente (en este caso `title` y `p`) y otros pueden tener una combinación de elementos y texto
- Ciertos elementos sin contenido explícito (ni texto ni otros elementos) pueden abrirse y cerrarse en la misma etiqueta con los símbolos `< ... />`.
    - En la etiqueta `meta` tiene un ejemplo.
- Las etiquetas pueden tener también elementos especiales, llamados atributos, que brindan información adicional. Los atributos son pares `clave=valor`, separados por espacios si hay más de uno.
    - En `meta` tiene también un ejemplo de esto con el atributo `charset`.

A continuación una representación del árbol del documento en este ejemplo:

```mermaid
flowchart TB
    A(html) --- B(head);
    A --- C(body);
    B --- M(meta);
    M --- N[[charset='UTF-8']]
    B --- D(title);
    D --- E([texto: Título de la página])
    C --- F(p);
    F --- G([texto: Un párrafo]);
```
> La etiqueta `<!DOCTYPE html>`, no forma parte del árbol estríctamente. Es lo que se llama una "meta etiqueta", que proporciona información general sobre el documento. En este caso indica que es un documento html.

Se han visto hasta el momento ciertos elementos html de base:

- `html` define la raíz del árbol del documento. Todo el resto de elementos y contenido deberá estar contenido aquí.
- `head` proporciona información general del documento, la cual no se verá en la página web misma pero ayuda a su confuiguración.
- `meta` es una etiqueta genérica que permite brindar configuraciones varias dependiendo de los atributos que utilice. No es una etiqueta requerida, sin embargo en este caso se la usa para especificar el tipo de caracteres que se usarán, gracias al atributo `charset="UTF-8"`.
    - Dado que el texto de la página de ejemplo usa caracteres especiales (tildados), esto garantiza que el browser los renderice correctamente.
- `title` proporciona un título general para la página, el cual se visualizará generalmente en la etiqueta del browser destinada a la página
- `body` define el contenido que se visualizará en la página web.
- `p` es un párrafo. Con este elemento se separan los párrafos (texto generalmente) con un espacio adicional entre ellos.

Mire esta página de ejemplo en su navegador: [EjsBase/simple.html](https://htmlpreview.github.io/?https://github.com/dordonez-ute-apweb/html/blob/main/EjsBase/simple.html)

## Normas o reglas sintácticas

Html es bastante permisivo en cuanto a su sintaxis, y los browsers hacen un gran trabajo interpretando el contenido incluso cuando hay inconsistencias. Sin embargo, hay un par de reglas que conviene tener en cuenta para evitar problemas, especialmente si se trabaja en un ambiente más estructurado como por ejemplo [XHTML](https://es.wikipedia.org/wiki/XHTML).

- Las etiquetas (tag, elemento) deben cerrarse apropiadamente
    - Incorrecto
        - `<p>Ejemplo 1`
        - `<p>Ejemplo 2`
    - Correcto
        - `<p>Ejemplo 1</p>`
        - `<p>Ejemplo 2</p>`
    - Incorrecto
        - `Salto de línea<br>`
    - Correcto
        - `Salto de línea<br/>`
- Etiquetas y atributos deben estar en minúsculas
    - Incorrecto
        - `<P ID="p1">Ejemplo 1</P>`
        - `<P ID="p2">Ejemplo 2</P>`
    - Correcto
        - `<p id="p1">Ejemplo 1</p>`
        - `<p id="p2">Ejemplo 2</p>`
- Valores de atributos deben ir entre comillas, simples o dobles
    - Incorrecto
        - `<p id=p1>Ejemplo 1</p>`
        - `<p id=p2>Ejemplo 2</p>`
    - Correcto
        - `<p id="p1">Ejemplo 1</p>`
        - `<p id='p2'>Ejemplo 2</p>`
- Etiquetas deben estar anidadas correctamente
    - Incorrecto
        - `<p><b>Párrafo 1</p></b>`
        - `<i><p>Párrafo 2</i><p>`
        - `<p><b><i>Párrafo 3</p></i></b>`
    - Correcto
        - `<p><b>Párrafo 1</b></p>`
        - `<p><i>Párrafo 2</i></p>`
        - `<p><b><i>Párrafo 3</i></b></p>`

## Elementos típicos

HTML tiene una infinidad de elementos, unos más usados que otros, dependiendo del tipo de interfaz que generemos. 

Cabe aclarar que html se usa para estructurar, más no para formatear (o diseñar si prefiere). Si desea que su página web se *vea bien*, los elementos de formato se deben incluir usando CSS (Cascading Style Sheets), que se verá más adelante.

Vamos a revisar aquí algunos de los elementos HTML más comunes:

- Comentario
    ```html
    <!-- Comentario en una línea -->
    <!-- Comentario en
      varias líneas -->
    ```
- Párrafo
    ```html
    <p>Párrafo 1</p>
    <p>Párrafo 2</p>
    ```
- Salto de línea (sin separación adicional!)
    ```html
    <p>
    Línea 1<br/>
    Línea 2
    </p>
    ```
- Línea horizontal
    ```html
    <p>Párrafo 1</p>
    <hr/>
    <p>Párrafo 2</p>
    <hr width="50%"/>
    ```
- Títulos (Headings)
    ```html
    <body>
        <h1>Nivel 1 Heading</h1>
        <h2>Nivel 2 Heading</h2>
        <h3>Nivel 3 Heading</h3>
        <h4>Nivel 4 Heading</h4>
        <h5>Nivel 5 Heading</h5>
        <h6>Nivel 6 Heading</h6>
    </body>
    ```
- Estilos de fuente
    ```html
    <p>
        <b>Negrita</b><br/>
        <i>Cursiva</i><br/>
        <b><i>Negrita y cursiva</i></b><br/>
        <small>Pequeña</small><br/>
        <big>Grande</big><br/>
        <em>Enfatizada</em><br/>
        <strong>Strong</strong>
    </p>
    ```
- Listas desordenadas (bulleted)
    ```html
    <ul>
        <li>Primera opción</li>
        <li>Segunda opción</li>
    </ul>
    ```
- Listas ordenadas (numbered)
    ```html
    <ol>
        <li>Primera opción</li>
        <li>Segunda opción</li>
    </ol>
    ```
- Imágenes
    ```html
    <img src="smile.gif" alt="Smile" height="62" width="60" />
    ```
- Tablas
    ```html
    <table>
        <tr>
            <td>Cell A</td>
            <td>Cell B</td>
        </tr>
        <tr>
            <td>Cell C</td>
            <td>Cell D</td>
        </tr>
    <table>
    ```
- Links (hyperlinks)
    - El elemento `a` presenta un hipervínculo con el texto definido como elemento interno (`Ir a...` en el ejemplo) subrayado y en color azul brillante (generalmente, pero se puede cambiar el formato). Si se da click sobre este hipervínculo, el browser cargará la página definida como valor del atributo `href` (`simple.html` en el ejemplo).
        ```html
        <a href="simple.html">Ir a...</a>
        ```
- Bookmarks (marcadores o anclas)
    - El elemento `a`, en conjunto con el atributo `id`, permiten definir un hipervínculo dentro de la misma página. Al dar click en el link la página desplazará su presentación para que se pueda visualizar el elemento con el atributo `id` igual al definido en el atributo `href` del elemento `a`. En `href` se debe definir el marcador con el símbolo `#`.
        ```html
        <p id="par">Un párrafo</p>
        ...
        <a href="#par">Ir a "Un párrafo"</a>
        ```
- División o sección genérica
    - El elemento `div` se usa como un contenedor genérico para definir una sección del documento. `div` no tiene ningún formato ni ocupa espacio en el documento: por defecto no se renderiza. Sin embargo, facilita el posterior formateo y organización mediante CSS
        ```html
        <div id="header">
            <h1>Título</h1>
            <p>Párrafo</p>
        </div>
        <div id="content">
            <h2>Capítulo 1</h2>
            <p>Párrafo</p>
        </div>
        <div id="footer">
            <h4>Copyright</h4>
            <p>Párrafo</p>
        </div>
        ```    
- Style (CSS)
    - El elemento `style` permite incluir instrucciones CSS para formateo, directamente en la página. Este elemento puede únicamente estar dentro de `head`.
        ```html
        <style>
            h1 {color:red;}
            p {color:blue;}
        </style>
        ```
- Link (CSS principalmente!)
    - El elemento `link` permite relacionar la página web con un archivo adicional donde se definan otros elementos. Generalmente es usado para indicar dónde están las instrucciones CSS que formatearán la página. El atributo `rel` indica la relación, y `href` la URL del archivo. Este elemento puede únicamente estar dentro de `head`.
        ```html
        <link rel="stylesheet" href="estilo.css"/>
        ```
- Script (JavaScript)
    - El elemento `script` permite incluir código JavaScript que se cargará y utilizará en la pagina web. Hay dos modos: incluir el código directamente (si no es mucho) o la referencia a un archivo con el código mediante el atributo `src`, y el atributo `defer` (opcional) para que se ejecute solo cuando todo se haya cargado.
        ```html
        <script>
            function mensaje() {
                alert("hola");
                return true;
            }
        </script>

        <script src="codigo.js" defer />
        ```

> Para revisar más elementos puede seguir [este link](https://www.w3schools.com/tags/).

## Elementos semánticos

Los elementos típicos HTML no llevan ninguna información acerca del contenido que incluyen. A partir de HTML5 se incluyeron elementos que indican el tipo de información que incluyen.

Estos elementos semánticos pueden facilitar la mejor comprensión del contenido de una página web, tanto para desarrolladores, como para programas de análisis automático. Su contenido no es obligatorio pero es muy recomendado.

A continuación algunos de los más relevantes:

![SemanticHtml.png](assets/SemanticHtml.png)

- `main` permite incluir la información principal del documento. No debe contener cosas que se repitan en otras páginas, sino contenido único. Internamente puede estar compuesto de secciones y artículos, pero no debe estar dentro de otros elementos semánticos. Es de "primer nivel".
- `section` define una sección (parte o capítulo) de la información en el documento. Generalmente se lo encuentra dentro de  `main`, pero puede ser independiente. Internamente puede estar compuesto de artículos.
- `article` define una parte de información que es independiente del resto: incluso se debería poder mover a otro lado sin afectar la comprensión del todo. Puede estar dentro de `main` o de `section`, y puede estar compuesto de elementos `section`.
- `aside` incluye información que se relaciona de manera indirecta con la información principal: no es tan importante, pero brinda datos adicionales. Es como una nota al costado.
- `nav` define una barra de navegación o un menú. Contiene un set de vínculos de navegación.
- `header` presenta información introductoria general.
- `footer` presenta información de pié de página, por ejemplo con datos de los autores o información de contacto.

Familiarísese con los [elementos semánticos](https://www.w3schools.com/html/html5_semantic_elements.asp)

## Formularios

Los formularios permiten recolectar información del usuario, que generalmente es enviada a un programa en el backend o servidor para su procesamiento.



Familiarísese con los [formularios](https://www.w3schools.com/html/html_forms.asp).

# Otro material

## Presentación

Revise este link: [https://bit.ly/3b3oCD6](https://bit.ly/3b3oCD6)

### Ejemplos

- [Un sitio personal](http://daoc.ml/ejs/EjSite)

## Complementario

Revise este video. Contiene otro enfoque sobre el mismo tema: [https://youtu.be/rbuYtrNUxg4](https://youtu.be/rbuYtrNUxg4)
