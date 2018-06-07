<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
  	<link rel="stylesheet" type="text/css" href="/css/login.css">
  </head>
  <body>
    <nav class="navbar navbar-mod navbar-fixed-top">
      <img class="img-responsive" src="{{ asset('/images/logo.png') }}" alt="">
  	</nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <form class="form-horizontal" action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="username " class="control-label col-md-4">Username: </label>
              <div class="col-md-6">
                <input id="username" type="text" name="username" value="" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}">
                @if ($errors->has('username'))
                  <span class="invalid-feedback">
                    <strong>{{ $errors->first('username') }}</strong>
                  </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="control-label col-md-4">Password: </label>
              <div class="col-md-6">
                <input id="password" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                @if ($errors->has('password'))
                  <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong
                  </span>
                @endif
              </div>
            </div>

            <div class="row">
              <div class="text-center">
                <input type="submit" name="submit" class="btn btn-default btn-sm" value="LOGIN"/>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </body>
</html>
