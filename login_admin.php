<?php
    session_start();
    if(isset($_SESSION['username'])){
        if($_SESSION['username']=="admin")
            header("location:http://localhost/ead/admin/");
        else
            header("location:http://localhost/ead/");
    }
?>
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            </div>
              <ul class="nav navbar-nav navbar-right">
              </ul>
          </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default signup">
                      <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                      </div>
                      <div class="panel-body">
                        <form action="system/login.php" method="post" class="form-horizontal">
                            <div id="userName" class="form-group">
                                <label for="userName" class="col-sm-4 control-label">User Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="username" id="userName" placeholder="User Name">
                                </div>
                            </div>
                            <div id="password" class="form-group">
                                <label for="password" class="col-sm-4 control-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                            </div>
                            <button id="submit" type="submit" name="submit" value="submit" class="btn btn-primary col-md-12" disabled>SIGN IN</button>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $("input").keyup(function(){
                if($("input#userName").val().length < 1 || $("input#password").val().length < 1){
                    $("#submit").prop("disabled");
                }
                else{
                    $("#submit").removeProp("disabled");
                }
            });
        });
    </script>
    </body>
</html>