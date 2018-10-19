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
        {{ $oneMovie->getTitleAndRating() }}
      </li>
      @endforeach
    </ul>
  </body>
</html>
