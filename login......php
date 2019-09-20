<?php include('logincontroller.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Canteen Food Ordering Systems</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
    body {
      background-color: skyblue
    }
  </style>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>

  <div class="container" style="margin-top: 5%;">
    <div class="row">
      <div class="col-sm-4"> </div>
      <div class="col-md-4">

        <h1 class="text-center text-success">Register page</h1>
        <br />

        <div class="col-sm-12">

          <ul class="nav nav-pills">

            <li class="" style="width:50%"><a class="btn btn-lg btn-default" data-toggle="tab" href="#home">Admin</a></li>

            <li class=" " style="width:48%"><a class=" btn btn-lg btn-default" data-toggle="tab" href="#menu1">User</a></li>

          </ul>

          <br />


          <div class="tab-content">
            <div id="home" class="tab-pane fade in active">

              <form action="login.php" method ="POST">

                <div class="form-group">
                  <label for="Admin name">Admin name</label>
                  <input type="text" class="form-control" id="email">
                </div>

                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" id="email">
                </div>

                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd">
                </div>

                <div class="form-group">
                  <label for="pwd">Confirm Password:</label>
                  <input type="password" class="form-control" id="pwd">
                </div>



                <button type="submit" class="btn btn-default btn-lg"><a href="www.google.com"> Submit </a> </button>
                <button type="submit" class=" pull-right btn-link"><a href="www.google.com">Forget password</a></button>

              </form>
              <br />
              <a href="#" class="pull-right btn btn-block btn-danger"><a href="www.gooogle.com"> Already Registered? </a>



            </div>

            <div id="menu1" class="tab-pane fade">

              <form action="#">

                <div class="form-group">
                  <label for="User name">User name</label>
                  <input type="text" class="form-control" id="email">
                </div>

                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" id="email">
                </div>

                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd">
                </div>

                <div class="form-group">
                  <label for="pwd">Confirm Password:</label>
                  <input type="password" class="form-control" id="pwd">
                </div>



                <button  type="submit" class="pull-right btn-link"><a href="www.google.com"> Submit </a> </button>

                <button type="submit" class=" pull-right btn-link"><a href="www.google.com">Forget password</a></button>

              </form>

              <br />

              <a href="#" class="pull-right btn btn-block btn-success"> Already Registered? </a>

            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>