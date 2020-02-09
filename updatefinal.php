 <?php
 $mongo= new MongoClient("mongodb://127.0.0.1:27017");
  
 $db = $mongo->php;
 $collection = $db->user;

 if(isset($_POST['submit']))
{   //echo "<br>collection selected";
 $doc = array('name' => $_POST['name'],
               'mobile' => $_POST['mobile'] 
               );

 $mail = array('email' => $_POST['email'] );
 
if($collection->update($mail,array('$set'=>($doc) ) )) 
  {
   ?>
     <script>
      window.alert("successfuly updated");
     </script>

   <?php   
    
 }else{
  echo "error in query";
 }
 header('location:search.php');
}
?>