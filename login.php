<?php
session_start();
if(!empty($_SESSION['loginid']))
{
header('Location: hello.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>

  </head>
  <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header" id="main">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Home</a>
        </div>
      </div>
    </nav>

    <div class="modal-content col-md-8">
          <div class="modal-header">
            <h4 class="modal-title"><i class="icon-paragraph-justify2"></i> User Login</h4>
          </div>
           <form method="post" autocomplete="off" id="login_form">
              <div class="modal-body with-padding">                             
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-10">
                      <label>Username *</label>
                      <input type="text" id="username" name="username"  class="form-control required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-10">
                      <label>Password *</label>
                      <input type="password" id="password" name="password"  class="form-control required" value="">
                    </div>
                  </div>
                </div> 
              </div>
           <div class="error" id="logerror"></div> 
            
           <!-- end Add popup  -->  
            <div class="modal-footer">
              <input type="hidden" name="id" value="" id="id">
              <button type="submit" id="btn-login" class="btn btn-primary">Submit</button>              
            </div>
          </form>          
        </div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
