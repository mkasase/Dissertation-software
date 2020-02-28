<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Upload system</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

	<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Short video feedback</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="category.php">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="upload.php">Upload</a>
          </li>
        </ul>
		<ul class="nav navbar-nav navbar-right">
		<<button type="button" class="btn btn-primary"onclick="window.location.href ='login.php'" >login</button>
		</ul>
      </div>
    </div>
  </nav>
  
  <!-- Page Content -->
  <div class="container">
    	   <div id="main-body">
	   		<div id="uploadbody">
		   		<div class="uploadpage">
		   			<form method="POST" action="upload.php" enctype="multipart/form-data">
		   			<input type="file" name="video" value="1000000">
		   			<br>
					</form>
					<br>
					<form action="upload.php">
						<fieldset>
							<legend>Insert video details</legend>
							<label>Enter title</label>
							<input type="text" name="title" />
							<br>
							<label>Select Genre</label> <select name ="genre" value>
								<option value="nature">nature</option>
								<option value="education">educational</option>
								<option value="orginal">Original</option>
								<option value="other">Other</option>
							</select> 
							<br>
  
							<label>Description</label>
							<br>
							<textarea name="desc" rows="3" cols="30" type="text"
							placeholder="Description of the video"></textarea>
							<br>
						</fieldset>
						<br>
					<button type="submit" name="upload">POST</button>
				</form>
			</div>
		</div>
	</div>
  </div>

  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
