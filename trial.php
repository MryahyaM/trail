<?php
    
        include('../conn.php');
 
    ?>



<?php
  if(isset($_GET['delete']))
  {
    $id =$_GET['delete'];
 
  $query = "DELETE  FROM manager WHERE managerId ='$id';";
  $query_run= mysqli_query($db,$query);
  if($query_run)
  {
      $_SESSION['success'] = "YOUR DATA is DELETED";
      header('Location:manager.php');
  }
  }


 ?>


