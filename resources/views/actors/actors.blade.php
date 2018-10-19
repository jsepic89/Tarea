<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      @foreach ($actors as $oneActor)
      <li>
        {{ $oneActor->getFullName() }}
      </li>
      @endforeach
    </ul>
  </body>
</html>
