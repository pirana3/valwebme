<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pedros home page</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

   
    <!-- Custom styles for this template -->
    <link href="assets/css/cover.css" rel="stylesheet">

  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">My Web Page</h3>
              <?php 
				include("function.php");
				include("navigation.php");
				?>
            </div>
          </div>

          <?php
			
			$dblink=db_connect("content");
			if (!isset($_GET['page']))
				$page="index";
			else
				$page=$_GET['page'];
			$pageClean=addslashes($page);
		
					$sql="Select * from `pages` where `page_name`='$page'";
					$result=$dblink->query($sql) or
						die("<p>Something went wrong with: $sql</p>".$dblink->error);
					$data=$result->fetch_array(MYSQLI_ASSOC);
					if($data['content_type']=="data")
						echo $data['content_data'];
					else
						include $data['content_data'];
					
			?>

          <div class="mastfoot">
            <div class="inner">
              <p>Web.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="file:///C|/Users/piran/Documents/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="file:///C|/Users/piran/Documents/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
