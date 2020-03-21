<link rel="stylesheet" href="style/admin.css">
<?php
        include('include/header.php');
        include('../conn.php');
    if (isset($_POST['registerM'])) {
      registerM();
     }
    
?>
 

<div class="bg-modal">
	<div class="modal-contents">

		<div class="close">+</div>
		
		<form action="manager.php" method="POST">
      <h2 >Register</h2>
      <?php include('../errors.php'); ?>
      <input type="text1" placeholder="Firstname" class="input" name="firstname" required>
      <input type="text" placeholder="Lastname" class="input" name="lastname"required>
      <input type="text" placeholder="Username" class="input" name="username"required>
      <input type="text" placeholder="E-mail" class="input" name="email"required>
      <input type="password" placeholder="Password" class="input" name="passward_1"required>
      <input type="password" placeholder=" Confirm Password" class="input" name="passward_2"required>
			<input type="submit" href="#" name="registerM" class="btn-success" value="Submit">
		</form>

	</div>
</div>

<div class="manager">
<div class="header1">UPDATE MANAGER</div>
<button  type="submit" name="edit_btn" id="button" class="btn-success1"> Add New Manager</button>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
              <th> ID </th>
              <th> Firstname </th>
              <th> Lastname </th> 
              <th> Username </th>
              <th>Email </th>
              <th>Password</th>
              <th>Edit </th>
              <th>Delete </th>
            </tr>
              <?php
                $query = "SELECT * FROM `manager`;";
                $result = mysqli_query($db,$query);

                while($row = mysqli_fetch_assoc($result)){
                
                    $managerId = $row['managerId'];
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $username = $row['username'];
                    $email = $row['email'];
                    $passward = $row['passward'];
                    ?>
                    <tr>
                    <td><?php echo $managerId ?></td>
                    <td><?php echo $firstname ?></td>
                    <td> <?php echo $lastname ?></td>
                    <td><?php echo $username ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $passward ?></td>
                    <td>
                        <a href="update.php?edit=<?php echo $managerId ?>" type="submit" name="edit_btn" class="btn-success"> EDIT</a>
                      </td>
                      <td>
                        <a href="trial.php?delete=<?php echo $managerId ?>" type="submit" name="edit_btn" class="btn-danger"> DELETE</a>
                      </td>

                    <?php
                }
                ?>
            </tr>
        
      </table>
</div>
<script>
  document.getElementById('button').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});

</script>
 



