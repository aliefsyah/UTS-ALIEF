<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
      <h1 class="text-center mt-5">{{ $text }}</h1>
      <div class="container">
          <hr>
      </div>
      <br>
      <div class="container mt-2 text-center">
        <a href="{{ URL::to('mahasiswa/pendaftaran') }}" type="button" class="btn btn-primary">Pendaftaran</a>
        
        <a href="{{ URL::to('mahasiswa/ujian') }}" type="button" class="btn btn-primary">Ujian</a>
        
        <a href="{{ URL::to('mahasiswa/nilai') }}" type="button" class="btn btn-primary">Nilai</a>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>