<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<br><br>
	<div class="container">
		<h2 class="text-success"> this is search page</h2>
		<form action="searchresult.php" method="post" class="container text-justify justify-content-center ">
		   <div class="form-group">
       	   <lable>Name</lable>
       	   <input type="text" placeholder="name" name="name" class="form-control" required>
       	   </div>
           <div class="form-group"> 
       	   <input type="submit" class="btn btn-success" value="Submit" name="submit">
           <a href="index.php" class="btn btn-success">Home</a>
       	   <a href="searchresult.php" class="btn btn-success">Find ALL</a>
       	   </div>

		</form>
	</div>

</body>
</html>