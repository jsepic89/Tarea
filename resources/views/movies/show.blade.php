<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detalles</title>
  </head>
  <body>
    <h2>Detalles de la película:</h2>
      <ul>
        <h3>Título: {{ $moviesId->title }}</h3>
        <h3>Duración: {{ $moviesId->length }}</h3>
        <h3>Rating: {{ $moviesId->rating }}</h3>
        <h3>Premios: {{ $moviesId->awards }}</h3>
        <a href="/movies">Volver al listado</a>
      </ul>
  </body>
</html>
