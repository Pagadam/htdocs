
<?php if(isset($_POST['create_post'])){
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_role = $_POST['user_role'];
    $username= $_POST['username'];
    $user_email = $_POST['user_email'];
    $user_password= $_POST['user_password'];


    // $post_image = $_FILES['image']['name'];
    // $post_image_temp = $_FILES['image']['tmp_name'];

    // $post_tags = $_POST['post_tags'];
    // $post_content = $_POST['post_content'];
    // $post_date = date('d-m-y');
    // $post_comment_count = 0;


    // move_uploaded_file($post_image_temp, "../images/$post_image" );

    $query = "INSERT INTO users(username, user_password, user_firstname, user_lastname, user_email, user_role) ";
    $query .= "VALUES('{$username}', '{$user_password}', '{$user_firstname}', '{$user_lastname}', '{$user_email}', '{$user_role}' ) ";

    $create_post_query = mysqli_query($connection, $query);
    confirm($create_post_query);


}
?>

<form action ="" method = "post"  enctype="multipart/form-data">
  
    <div class = "form-group">
        <label for = "user_firstname">Firstname</label>
        <input type = "text" class = "form-control" name = "user_firstname">
    </div>

    <div class = "form-group">
        <label for = "user_lastname">Lastname</label>
        <input type= "text" class = "form-control" name = "user_lastname">
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
        <input type = "text" class = "form-control" name = "username">
    </div>


    <div class= "form-group">
        <label for = "email"> Email</label>
        <input type = "text" class = "form-control" name = "user_email">
    </div>

    <div class = "form-group">
        <label for = "password"> Password</label>
        <input type = "text" class = "form-control" name = "user_password">
     
    </div>

    <div class = "form-group">
        <input class = "btn btn-primary" type = "submit" name = "create_post" value = "Add User">
    </div>

</form>