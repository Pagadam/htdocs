<?php session_start(); ?>
<?php include "db.php"; ?>


<?php 
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        $query = "SELECT * FROM users WHERE username = '{$username}' ";
        $select_user_query = mysqli_query($connection, $query);
        if(!$select_user_query){
            die("QUERY FAILED". mysqli_error($connection));
        }

        while($row = mysqli_fetch_array($select_user_query)){
            $db_id = $row['user_id'];
            $db_username = $row['username'];
            $db_userpassword = $row['user_password'];
            $db_user_firstname = $row['user_firstname'];
            $db_user_lastname = $row['user_lastname'];
            $db_user_role = $row['user_role'];
        }


        $password = crypt($password, $db_userpassword);

        if ($username === $db_username && $password === $db_userpassword){
            $_SESSION['username'] = $db_username;
            $_SESSION['firstname'] = $db_user_firstname;
            $_SESSION['lastname'] = $db_user_lastname;
            $_SESSION['user_role'] = $db_user_role;

           
            

            //echo   $_SESSION['username'];
            //echo ("<a href = 'test.php'>Link to admnin </a>");
            echo("<script>location.href = '/admin';</script>");
        } else{
            echo("<script>location.href = '../index.php';</script>");
        }
        
    }
?>
