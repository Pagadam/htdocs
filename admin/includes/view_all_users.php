<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>User_id</th>
            <th>Username</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Role</th>
            <th>Admin</th>
            <th>Subscriber</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>

        <?php 
                    $query = "SELECT * FROM users";
                    $select_users = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($select_users)){
                        $user_id = $row['user_id'];
                        $username = $row['username'];
                        $user_password = $row['user_password'];
                        $user_firstname = $row['user_firstname'];
                        $user_lastname = $row['user_lastname'];
                        $user_email = $row['user_email'];
                        // $user_image = $row['user_image'];
                        $user_role = $row['user_role'];
                      

                    

                        echo "<tr>";
                        echo "<td>$user_id</td>";
                        echo "<td>$username </td>";
                        echo "<td>$user_firstname</td>";
                        echo "<td>$user_lastname</td>";
                        echo "<td>$user_email</td>";
                        echo "<td>$user_role</td>";
                      
                        //echo "<td>$comment_status</td>";
                        // $query = "SELECT * FROM posts WHERE post_id = $comment_post_id";
                        // $select_post_id_query = mysqli_query($connection, $query);

                        // while($row = mysqli_fetch_assoc($select_post_id_query)){
                        //     $post_id = $row['post_id'];
                        //     $post_title = $row['post_title'];

                        //     echo "<td><a href = '../post.php?p_id=$post_id'>$post_title</a></td>";

                        // }
                     
                        // echo "<td>$comment_date</td>";
                   
                      

                        // $query = "SELECT * FROM comments";

                        // $select_categories_id = mysqli_query($connection,$query);

                        // while ($row = mysqli_fetch_assoc($select_categories_id)){

                        // $cat_id =  $row['cat_id'];
                        // $cat_title = $row['cat_title'];}

                        echo "<td><a href = 'users.php?admin={$user_id}'>Admin</a></td>";
                        echo "<td><a href = 'users.php?subscriber={$user_id}'>Subscriber</a></td>";
        echo "<td><a href = 'users.php?source=edit_user&userid={$user_id}'>Edit</a></td>";
                        echo "<td><a href = 'users.php?delete={$user_id}'>delete</a></td>";
                        echo  "</tr>";

                    }


                    ?>
    </tbody>

</table>

<?php  
if(isset($_GET['admin'])){
    $the_user_id = $_GET['admin'];

    $query = "UPDATE users SET user_role = 'Admin' WHERE user_id = $the_user_id ";
    $update_user_role_status = mysqli_query($connection, $query);
    echo("<script>location.href = 'users.php';</script>");
    // header("Location: comments.php");
}

if(isset($_GET['subscriber'])){
    $the_user_id = $_GET['subscriber'];

    $query = "UPDATE users SET user_role = 'Subscriber' WHERE user_id = $the_user_id ";
    $update_user_role_status= mysqli_query($connection, $query);
    echo("<script>location.href = 'users.php';</script>");
    // header("Location: comments.php");
}











if(isset($_GET['delete'])){
    $the_user_id = $_GET['delete'];
    $query = "DELETE FROM users WHERE user_id = {$the_user_id} ";
    $delete_query = mysqli_query($connection, $query);
    echo("<script>location.href = 'users.php';</script>");
    // header("Location: comments.php");
}
?>