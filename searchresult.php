<?php  
 $mongo= new MongoClient("mongodb://127.0.0.1:27017");
 $db = $mongo->php;
 $collection = $db->user;
    //$con=  new MongoClient("mongo://127.0.0.1:27017");
    //$db= $con->php;
   // $collection=$db->user;
/*
    if(isset($_POST['submit'])){
        //echo "submit click";
        
       // <script>
        //  window.alert("submit click");
      //  </script>
          
          echo $_POST['name']."<br>";
          

        
    }else{
 
       // <script>
         // window.alert("All data");
        //</script>
 
        $cu=$collection->find();
          foreach ($cu as $key) {
            # code...
            echo "name: ".$key["name"]."<br>";
            //echo "<br>";
            echo "email: ".$key["email"]."<br>";
            ///echo "<br>";
            echo "mobile no : ".$key["mobile"]."<br>";
            echo "<br>";
          }

       // header('location:search.php');
    }*/
 ?>

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
	<div class="container text-center">
		<h1 class="text-success text-center"> 
    This is search result page</h1>
   <div class="form-group"> 
       <div class="container text-secondary text-lg-center">
      
      <?php
        if(isset($_POST['submit'])){
          echo "<h4 class='text-danger text-center'>".$_POST['name']."</<h4><br>";
           $arr = array('name' => $_POST['name'] );
            
            $cu=$collection->find($arr);
          //$cu=$collection->find('name':{'$eq'  'amit' });

             echo "<table class='table table-bordered text-center table-hover table-striped table-responsive-sm'>";
             echo "<tr><th>Name</th>";
             echo "<th>email</th>";
             echo "<th>mobile</th>";
             echo "<th>edit</th>";
             echo "<th>delete</th></tr>";
           foreach ($cu as $key) {
             # code...
             echo "<tr>";
             echo "<td>".$key["name"]."</td>";
             //echo "<br>";
             echo  "<td>".$key["email"]."</td>";
             ///echo "<br>";
             echo  "<td>".$key["mobile"]."</td>";
             echo " <td><a href='update.php?edit=".$key['email'] ."' class='btn btn-sm btn-secondary rounded btn-outline-info text-white'>Edit</a></td>";

             echo " <td><a href='searchresult.php?edit=".$key['email'] ."' class='btn btn-sm btn-secondary rounded btn-outline-info text-white'>Delete</a></td>";
             echo "<tr>"; 
           }
            echo "<br></table>";

        }else{ 
            
         echo "<table class='table table-bordered text-center table-hover table-striped table-responsive-sm'>";
          echo "<tr><th>Name</th>";
          echo "<th>email</th>";
          echo "<th>mobile</th>";
          echo "<th>edit</th>";
          echo "<th>delete</th></tr>";
          

          $cu=$collection->find();
           foreach ($cu as $key) {
            # code...
           echo "<tr>";
             echo "<td>".$key["name"]."</td>";
             //echo "<br>";
             echo  "<td>".$key["email"]."</td>";
             ///echo "<br>";
             echo  "<td>".$key["mobile"]."</td>";
             echo " <td><a href='update.php?edit=".$key['email'] ."' class='btn btn-sm btn-secondary rounded btn-outline-info text-white'>Edit</a></td>";

             echo " <td><a href='searchresult.php?del=".$key['email'] ."' class='btn btn-sm btn-secondary rounded btn-outline-info text-white'>Delete</a></td>";
            echo "<tr>";
          }

         echo "</table>";
        }

      // delete buttom working
        if(isset($_GET['del'])){
              $id=$_GET['del'];
              $arr = array('email' => $id );
             $collection->remove($arr);
          header("location:searchresult.php");
        }
       // edit button work 
        if(isset($_GET['edit'])){
             header("location:update.php");
                 
              //$id=$_GET['edit'];
             // $arr = array('email' => $id );
            // $collection->update($arr);
          //header("location:searchresult.php");
        }


      ?>

       </div>
    <div>
     <a href="index.php" class="btn btn-success">Home</a>
     <a href="search.php" class="btn btn-success">Search</a>
   </div>
   </div>
   
	</div>
	
</body>
</html>