<?php include "functions.php"; ?>

<div class="col-md-4">


<!-- -->





<!-- Blog Search Well -->
<div class="well">
    <h4>Blog Search</h4>
    <form action = "search.php" method = "post">
        <div class="input-group">
            <input name = "search" type="text" class="form-control">
            <span class="input-group-btn">
            <button name = "submit" class = "btn btn-default"  type= "submit">
                <!-- <button class="btn btn-default" type="button"> -->
                    <span class="glyphicon glyphicon-search"></span>
            </button>
            </span>
        </div>
   </form>
    <!-- Search form -->

    <!-- /.input-group -->
</div>

<!-- Blog Categories Well -->






<div class="well">
    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-12">
            <ul class="list-unstyled">
       


<?php 
    $query = "SELECT * FROM categories";

    $select_all_categories_query = mysqli_query($connection,$query);

    while ($row = mysqli_fetch_assoc($select_all_categories_query)){
        
        $cat_title = $row['cat_title'];
        $cat_id = $row['cat_id'];

        echo "<li><a href = 'category.php?category=$cat_id'>{$cat_title}</li>";
    }
?> 
            </ul>
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <ul class="list-unstyled">
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
            </ul>
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>






<!-- Side Widget Well -->
<?php include "widget.php"; ?>


</div>