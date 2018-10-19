<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      @foreach($movies as $oneMovie)
      <li>
      <a href="/movies/detail/{{ $oneMovie->id }}">  {{ $oneMovie->getTitleAndRating() }}  </a>
      </li>
      @endforeach
    </ul>
  </body>
</html>
