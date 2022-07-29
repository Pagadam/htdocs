<?php include "includes/admin_header.php" ?>
<?php include "functions.php" ?>

<?php if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $query = "SELECT * FROM users WHERE username = '{$username}' ";
    $select_user_profile_query = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($select_user_profile_query)){
        $user_id = $row['user_id'];
        $username = $row['username'];
        $user_password = $row['user_password'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_email = $row['user_email'];
        // $user_image = $row['user_image'];
        $user_role = $row['user_role'];

    }
}
?>

<?php
     if(isset($_POST['update_profile'])){
    
        $username = $_POST['username'];
        $user_password = $_POST['user_password'];
        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];
        $user_email = $_POST['user_email'];
        $user_role = $_POST['user_role'];
        


        
        $query = "UPDATE users SET ";
        $query .= "user_firstname = '{$user_firstname}', ";
        $query .= "user_lastname = '{$user_lastname}', ";
        $query .= "user_role = '{$user_role}', ";
        $query .= "username = '{$username}', ";
        $query .= "user_email = '{$user_email}', ";
        $query .= "user_password = '{$user_password}' ";
        $query .= "WHERE username = '{$username}' ";
     

        $update_users = mysqli_query($connection, $query);

        confirm($update_users);
        }



?>



<div id="wrapper">
   <?php include "includes/admin_navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                    <h1 class = "page-header">
                        Welcpome to admin
                        <small>Author</small>
                    </h1>



<form action ="" method = "post"  enctype="multipart/form-data">
  
  <div class = "form-group">
      <label for = "user_firstname">Firstname</label>
      <input value = "<?php echo $user_firstname ?>"type = "text" class = "form-control" name = "user_firstname">
  </div>

  <div class = "form-group">
      <label for = "user_lastname">Lastname</label>
      <input value = "<?php echo $user_lastname ?>" type= "text" class = "form-control" name = "user_lastname">
  </div>

  <div class = "form-group">
      <select name = "user_role" id = "">
          <option value = "subscriber">Select Options</option>
          <option value = "admin">Admin</option>
          <option value="subscriber">Subscriber</option>
      </select>
  </div>


  <div class = "form-group">
      <label for = "username">Username</label>
      <input value = "<?php echo $username ?>" type = "text" class = "form-control" name = "username">
  </div>


  <div class= "form-group">
      <label for = "email"> Email</label>
      <input value = "<?php echo $user_email ?>" type = "text" class = "form-control" name = "user_email">
  </div>

  <div class = "form-group">
      <label for = "password"> Password</label>
      <input value = " <?php echo $user_password ?>" type = "text" class = "form-control" name = "user_password">
   
  </div>

  <div class = "form-group">
      <input class = "btn btn-primary" type = "submit" name = "update_profile" value = "Update Profile">
  </div>

</form>

                   
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>

<?php include "includes/admin_footer.php" ?>