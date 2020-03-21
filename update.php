<link rel="stylesheet" href="style/admin.css">
<?php
        include('include/header.php');
        include('../conn.php');
        

    ?>
    <?php
      if(isset($_GET['edit']))
{
  $id =$_GET['edit'];

  $query =
  $result =$mysqli->query("SELECT * FROM manager WHERE id = '$id'");
  while($row = mysqli_fetch_assoc($result1))
  {
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $username = $row['username'];
    $email = $row['email'];
    $passward = $row['passward'];
  }
}
?>
<div class="header2">UPDATE MANAGER</div>
<div class="bg-modal1">
	<div class="modal-contents1">
  <form action="trial.php" method="POST">
    <h2 >Update Details</h2>
      <input type="text1" placeholder="Firstname" value="<?php  $firstname; ?>" class="input" name="firstname" required>
      <input type="text" placeholder="Lastname" value="<?php ?>" class="input" name="lastname"required>
      <input type="text" placeholder="Username"value="<?php  ?>" class="input" name="username"required>
      <input type="text" placeholder="E-mail" value="<?php  ?>" class="input" name="email"required>
      <input type="password" placeholder="Password" value="<?php  ?>" class="input" name="passward_1"required>
    <button  href="#" name="Update" class="btn1" value="Update">Update</button>
    <button  href="#" name="close" class="btn2" value="Update">Close</button>
		</form>
  <?php
//   }
// }
?>
	</div>
</div>

