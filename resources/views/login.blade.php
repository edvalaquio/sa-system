<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="/css/style.css">
  	<link rel="stylesheet" type="text/css" href="/css/filesLog.css">
    <style media="screen">
      .img-responsive{
        height: 60px;
        display: block;
        margin-left: auto;
        margin-right: auto;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-mod">
      <img class="img-responsive" src="{{ asset('/images/logo.png') }}" alt="">
  	</nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              Login
            </div>
            <div class="panel-body">
              <form class="form-horizontal" action="index.html" method="post">
                <div class="form-group">
                  <label for="username " class="control-label col-md-4">Username: </label>
                  <div class="col-md-6">
                    <input type="text" name="username" value="" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label for="password" class="control-label col-md-4">Password: </label>
                  <div class="col-md-6">
                    <input type="text" name="password" class="form-control">
                  </div>
                </div>

                <div class="row">
                  <div class="text-center">
                    <a href="#" class="btn btn-default btn-sm">Login</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
