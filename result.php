<?php 
  
  // check for submit click or not 
   if(isset($_POST['submit'])){
        //echo "submit click";
        ?>
        <script>
          window.alert("submit click");
        </script>
        <?php
     }else{
        echo "please click submit button";
        header('location:search.php');
    }
 
 // make object of mongoDB
echo extension_loaded("mongo") ? "loaded\n" : "not loaded\n";


 $mongo= new MongoClient("mongodb://127.0.0.1:27017");
  
 $db = $mongo->php;
 $collection = $db->user;
 echo "<br>collection selected";
 
 $doc = array('name' => $_POST['name'],
               'email' =>$_POST['email'] ,
               'mobile' => $_POST['mobile'] 
               );
if($collection->insert($doc)){
   //echo "\n<br>data inserted";

   ?>
     <script >
     	window.alert("data inserted");
     </script>

   <?php  
   //header('location:index.html');	
}else{
	echo "error in query";
}
?>
 