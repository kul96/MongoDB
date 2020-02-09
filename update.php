<?php 
 $mongo= new MongoClient("mongodb://127.0.0.1:27017");
  
 $db = $mongo->php;
 $collection = $db->user;
 //echo "string";
 
  //echo "<br>collection selected";
 
// if(isset($_GET['edit']))
  //{
      
  //}else header("location:index.php");
 //}
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
  <?php 
    // fatch details of user
     if(isset($_GET['edit'])){
         $email=$_GET['edit'];
         //echo $email;
         // pass array as argument in the find method
         $arr = array('email' => $email );
         $result =  $collection->find($arr);
       
         foreach ($result as $key ) {
           # code...
           $name = $key['name'];
           // $key['email'];
           $mobile =  $key['mobile'];
         }

         //$name= $result['name'] -> value;
         //$mobile = $result['mobile'];

       //echo $name;
       //echo $email;
       //echo $mobile;

     }

  ?>
	<br><br>	
	<div class="container " >
	  <h1 class="text-success text-center">Update : ) </h1>
      
       <form action="updatefinal.php" method="post" class="container justify-content-center">
       	   <div class="form-group">
       	   <lable >Name</lable>
       	   <input value="<?php echo $name ?>" type="text" name="name" class="form-control" required>
       	   </div>
       	   
       	   <div class="form-group">
       	   <lable>Email</lable>
       	   <input value="<?php echo $email ?>" type="email"    class="form-control " disabled>
           </div>
           
           <div class="form-group">
            
           <input value="<?php echo $email ?>" type="email"  name="email" class="form-control " hidden>
           </div>
           

           <div class="form-group">
       	   <lable>mobile Number</lable>
       	   <input value="<?php echo $mobile ?>" type="number" name="mobile" class="form-control" required>
       	   </div>
           
           <div class="form-group"> 
       	   <input type="submit" class="btn btn-success" name="submit" value="Update">

           <a href="search.php" class="btn btn-success">Search</a>
       	   </div>
       </form>
	</div>
  	
</body>
</html>