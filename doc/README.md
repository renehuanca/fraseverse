## Models

### Mass Assignment

Se desactiva la protección a nivel de modelo de la asignación masiva:

```php
protected $guarded = []; 
```

Razones:

- Se controla la asignación masiva mediante las validaciones o RequestValidation.
- Facilita la codificación
- IMPORTANTE: siempre realizar validaciones antes de crear un recurso.

## Databases

### table: favorite

La tabla favorite es un pivote pero lo tomamos como modelo considerando lo siguiente: 
- Puede contener a futuro algun atributo
- Se puede requerir un listado de los favoritos 

### table: phrase_tag 

La relacion phrase_tag es una tabla pivote por lo tanto no cuenta con un modelo.
La relacion phrase_tag tiene un seeder que a todas las frases agrega aleatoriamente 1 a 4 tags.
