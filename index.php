<?php

  // todo-php main file - version 1.0.0
  require('src/settings.php');
  require('src/dbconn.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>TO-DO</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="./">To-Do</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav"></ul>
        </div> <!--/nav-collapse -->
      </div> <!-- /container -->
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <ul class="list-group">
            <li class="list-group-item">
              <div class="btn-group btn-group-xs pull-right" role="group">
                <button class="btn btn-default" aria-label="Set as done">
                  Set as done
                </button>
                <button class="btn btn-danger" aria-label="Remove">
                  Delete
                </button>
              </div> <!-- /btn-group -->

              Lorem ipsum dolor sit amet
            </li>
          </ul>

        </div> <!-- /col-sm-10 -->
      </div> <!-- /row -->

      <form>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-1">
            <input type="text" class="form-control" placeholder="Title" required="required" />
          </div>
          <div class="col-sm-2">
            <button type="submit" class="btn btn-block btn-default">Add</button>
          </div>
        </div> <!-- /row -->
      </form>

    </div>
  </body>
</html>
