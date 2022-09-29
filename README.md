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

# Otro material

## Presentación

Revise este link: [https://bit.ly/3b3oCD6](https://bit.ly/3b3oCD6)

### Semantic HTML

![SemanticHtml.png](assets/SemanticHtml.png)

Familiarísese con los [elementos semánticos](https://www.w3schools.com/html/html5_semantic_elements.asp)

### Ejemplos

- [Un sitio personal](http://daoc.ml/ejs/EjSite)

## Complementario

Revise este video, contiene otra forma de enfocar el tema: [https://youtu.be/rbuYtrNUxg4](https://youtu.be/rbuYtrNUxg4)
