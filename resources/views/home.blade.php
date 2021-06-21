<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <title>Laravel Primi Passi</title>
</head>
<body>
  <div class="container">

    <h1>Hello {{ $name }} {{ $lastname }} </h1>

    @if($name === 'Pietro' && $lastname === 'Visconti')
      <span> Sei in lista, puoi accedere! </span>
    @else
      <span> Non sei in lista, non puoi proseguire! </span>
    @endif

    <hr>

    <h3>Canzoni preferite:</h3>

    <ul>

      @foreach ($songs as $song)

        @if($loop->first)
          <li>Prima canzone: {{$song}} </li>
        @elseif($loop->last)
          <li>Ultima canzone: {{$song}} </li>
        @else
          <li> {{$song}} </li>
        @endif

      @endforeach
      
    </ul>

  </div>
</body>
</html>