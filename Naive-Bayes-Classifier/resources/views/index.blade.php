<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data Tester</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
  </head>
  <body>
    <div class="container">
      <div class="col-md-6">
        <div class="form-primary">
          <form class="form-horizontal" action="/result" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
              <label for="age">Age</label>
              <select class="form-control" required name="age">
                <option value=""></option>
                <option value="1">young : 00 - 00</option>
                <option value="2">pre-presbyopic : 00 - 00</option>
                <option value="3">presbyopic : 00 - 00</option>
              </select>
            </div>
            <div class="form-group row">
              <label for="spectacle">Spectacle prescription</label>
              <select class="form-control" required name="spectacle">
                <option value=""></option>
                <option value="1">myope</option>
                <option value="2">hypermetrope</option>
              </select>
            </div>
            <div class="form-group row">
              <label for="asigmatic">Asigmatic</label>
              <select class="form-control" required name="asigmatic">
                <option value=""></option>
                <option value="1">no</option>
                <option value="2">yes</option>
              </select>
            </div>
            <div class="form-group row">
              <label for="tear">Tear production rate</label>
              <select class="form-control" required name="tear">
                <option value=""></option>
                <option value="1">reduced</option>
                <option value="2">normal</option>
              </select>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-lg btn-danger">Submit</button>
                  or press enter
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
