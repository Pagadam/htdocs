
<?php 
    if(isset($_GET['userid'])){
        $user_id = $_GET['userid'];
        
    


    $query = "SELECT * FROM users WHERE user_id = $user_id ";
    $select_users_by_id = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_users_by_id)){
        $username = $row['username'];
      
        $userpassword = $row['user_password'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_email = $row['user_email'];
        $user_role = $row['user_role'];

    }

    if(isset($_POST['update_user'])){
        echo "Hello WOlrd";
        $username = $_POST['username'];
      
        $userpassword = $_POST['user_password'];
        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];
        $user_email = $_POST['user_email'];
        $user_role = $_POST['user_role'];
        

        
        $query = "UPDATE users SET ";
        $query .= "username = '{$username}', ";
        $query .= "user_password = '{$userpassword}', ";
        $query .= "user_firstname = '{$user_firstname}', ";
        $query .= "user_lastname = '{$user_lastname}', ";
        $query .= "user_email = '{$user_email}', ";
        $query .= "user_role = '{$user_role}', ";
        $query .= "WHERE user_id = {$user_id} ";



  



         $update_users = mysqli_query($connection, $query);

         confirm($update_users);



    }
}
?>





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
        <input value = " <?php echo $userpassword ?>" type = "text" class = "form-control" name = "user_password">
     
    </div>

    <div class = "form-group">
        <input class = "btn btn-primary" type = "submit" name = "update_user" value = "Update User">
    </div>

</form>