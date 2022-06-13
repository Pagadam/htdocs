<?php include "includes/db.php";?>



<?php 

function categories(){

    Global $connection;

    $query = "SELECT * FROM categories";

    $select_all_categories_query = mysqli_query($connection,$query);

    while ($row = mysqli_fetch_assoc($select_all_categories_query)){
        
        $cat_title = $row['cat_title'];
        echo $cat_title; 
    }

    
}
   
?>