<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Flatten - Flatten any JSON string.</title>
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/flatten.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
      <form class="form-signin" action="index.php" method="POST">
        <h2 class="form-signin-heading">Flatten - Flatten any JSON string.</h2>
        <label for="oldFile" class="sr-only">File Location</label>
        <input type="text" id="oldFile" name="oldfile" class="form-control" placeholder="File Location" required autofocus>
		<br />
        <label for="newFile" class="sr-only">New Flattened File Location</label>
        <input type="text" id="newFile" name="newfile" class="form-control" placeholder="New Flattened File Location" required>
		<div class="checkbox">
          <label>
            <input type="checkbox" name="returnValue" value="true"> Return Flattened Array?
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Flatten</button>
      </form>
    </div>
	
  <center>
  </body>
</html>