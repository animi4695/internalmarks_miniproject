<?php
session_start();
$check=$_SESSION['loginid'];
if(!isset($check))
{
    header("Location:index.html");
} 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
	<style>
	input[type=text] {
		color: black;
	}
	select {
		color:black;
	}
</style>
  </head>

  <body id="body">

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner" id="main">
              <h3 class="masthead-brand">MVGR</h3>
              <nav>
                <ul class="nav masthead-nav">
				<li class="active"><a href="hello.php">HOME</a></li>
                  <li class="active"><a href="#">view results</a></li>
                  <li><a href="resultupdate.php">update database</a></li>
                  <li><a href="logout.php">Logout</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover" id="main">
            <form action="databaseupdate.php" method="post">
				<table>
					<tr>
						<td><h4>Registration id:</h4><br></td>
						<td><input type="text" color="black" name="id" id="id" required /><br><br>
						</td>
					</tr>
					<tr>
						<td><h4>subject name:</h4><br></td>
						<td><input type="text" name="subject" id="subject" required /><br><br>
						</td>
					</tr>
					<tr>
						<td><h4>Internal marks:</h4><br></td>
						<td><input type="text" name="marks" id="marks" required /><br><br>
						</td>
					</tr>
					<tr>
						<td><h4>Year of study:</h4><br></td>
						<td><select name="year" id="year">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option></select><br><br>
						</td>
					</tr>
					<tr>
						<td><h4>sem:</h4><br></td>
						 <td><select name="year" id="year">
								<option value="1">1</option>
								<option value="2">2</option>
							</select><br><br>
						</td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" class="btn btn-success btn-block btn-md" value="Update" id="Update">
						</td>
					</tr>
				</table>				
			</form>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>it's an animi production &copy 2016</p>
            </div>
          </div>

        </div>

      </div>

    </div>
  </body>
</html>