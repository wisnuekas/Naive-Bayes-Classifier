<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Result</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/animate.css">
    <style>
      body{
        font: 100%/1.5 "Roboto", Verdana, sans-serif;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="col-sm-4" id="input">
        <h3 class="animated fadeInLeft" id="age">
          <script>
            if ({{ $age }} == 1) age.innerHTML = "Age : Young";
            if ({{ $age }} == 2) age.innerHTML = "Age : Pre-presbyopic";
            if ({{ $age }} == 3) age.innerHTML = "Age : Presbyopic";
          </script>
        </h3>
        <h3 class="animated fadeInLeft" id="spectacle">
          <script>
            if ({{ $spectacle }} == 1) spectacle.innerHTML = "Spectacle : Myope";
            if ({{ $spectacle }} == 2) spectacle.innerHTML = "Spectacle : Hypermetrope";
          </script>
        </h3>
        <h3 class="animated fadeInLeft" id="asigmatic">
          <script>
            if ({{ $asigmatic }} == 1) asigmatic.innerHTML = "Asigmatic : No";
            if ({{ $asigmatic }} == 2) asigmatic.innerHTML = "Asigmatic : Yes";
          </script>
        </h3>
        <h3 class="animated fadeInLeft" id="tear">
          <script>
            if ({{ $tear }} == 1) tear.innerHTML = "Tear : Reduced";
            if ({{ $tear }} == 2) tear.innerHTML = "Tear : Normal";
          </script>
        </h3>

      </div>
      <div class="col-sm-8">
        <h1 class="animated fadeInUp" id="output">
          We recomend you {{$output}}
        </h1>
      </div>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
