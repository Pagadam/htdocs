<?php include "includes/admin_header.php" ?>
<?php include "functions.php" ?>


<div id = "wrapper">
    <!-- Navigation -->

<?php include "includes/admin_navigation.php" ?>


<div id = "page-wrapper">

<div class = "container-fluid">

    <div class = "container-fluid">
        <!-- Page Heading -->
        <div class = "row">
            <div class = "col-lg-12">
                <h1 class = "page-header">
                    Welcome  to admin
                    <small>Author </small>
                </h1>

                <div class = "col-xs-6">
                
                <?php insert_catetgories(); ?>
        <form action = "" method = "post">
            <div class = "form-group">
                <label for = "cat-title"> Add category</label>
                <input type = "text" class = "form-control" name = "cat_title">
            </div>
            <div class = "form-group">
                <input class = "btn btn-primary" type = "submit" name = "submit" value = "Add Category">
            </div>
        </form>

        <?php //Update and include query

        if(isset($_GET['edit'])){
            $cat_id = $_GET['edit'];
            
            include "includes/update_categories.php";
        }
        ?>
        </div> <!-- Add Category Form -->
           <div class = "col-xs-6">
               <table class = "table table-bordered table-hover">
                   <thead>
                       <tr>
                           <th>ID</th>
                           <th>Category Title</th>
                       </tr>
                   </thead>
                   <tbody>
                       <?php findAllCategories(); ?>

                       <?php deletecategory(); ?>
                   </tbody>
               </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    <?php include "includes/admin_footer.php" ?>



