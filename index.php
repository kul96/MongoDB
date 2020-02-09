<?php 
 $mongo= new MongoClient("mongodb://127.0.0.1:27017");
  
 $db = $mongo->php;
 $collection = $db->createCollection("user");
 //echo "string";
 ?>
 <?php 
  
 //echo "<br>collection selected";
 if(isset($_POST['submit']))
 {   //echo "<br>collection selected";
 $doc = array('name' => $_POST['name'],
               'email' =>$_POST['email'] ,
               'mobile' => $_POST['mobile'] 
               );
if($collection->insert($doc)){
  
   ?>
     <script>
     // window.alert("data inserted");
     </script>

   <?php  
   //header('location:index.php'); 
 }else{
  echo "error in query";
 }
} 
//else header("location:index.php");
?>
  
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MongoDB</title>
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
	<div class="container " >
	  <h1 class="text-success text-center">This is Connectivity of PHP and MongoDB : ) </h1>
      
       <form action="index.php" method="post" class="container justify-content-center">
       	   <div class="form-group">
       	   <lable >Name</lable>
       	   <input type="text" placeholder="name" name="name" class="form-control" required>
       	   </div>
       	   
       	   <div class="form-group">
       	   <lable>Email</lable>
       	   <input type="email" placeholder="email" name="email" class="form-control" required>
           </div>
           
           <div class="form-group">
       	   <lable>mobile Number</lable>
       	   <input type="number" placeholder="number" name="mobile" class="form-control" required>
       	   </div>
           
           <div class="form-group"> 
       	   <input type="submit" class="btn btn-success" name="submit" value="Submit">

           <a href="search.php" class="btn btn-success">Search</a>
       	   </div>
       </form>
	</div>


  	
</body>
</html>