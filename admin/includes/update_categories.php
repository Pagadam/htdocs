<form action="" method = "post">
                            <div class="form-group">
                                <label for = "cat_title"> Add Category</label>
                                <?php

                                if(isset($_GET['edit'])){
                                $cat_id = $_GET['edit'];
                                $query = "SELECT * FROM categories WHERE cat_id = $cat_id ";

                                $select_categories_id = mysqli_query($connection,$query);

                                while ($row = mysqli_fetch_assoc($select_categories_id)){

                                $cat_id =  $row['cat_id'];
                                $cat_title = $row['cat_title'];

                              
                         
                                ?>
                      <input value = "<?php if (isset($cat_title)){echo $cat_title;} ?>" type = "text" class = "form-control" name = "cat_title">

                                <?php    }  }?>



                              <?php 

                            if(isset($_POST['update_category'])){
                                $the_cat_title = $_POST['cat_title'];
                                $query = "UPDATE categories SET cat_title = '{$the_cat_title}' WHERE cat_id = {$cat_id} ";
                                $update_query = mysqli_query($connection, $query);
                                if(!$update_query){
                                    die("QUERY FAILED" . mysqli_error($connection));
                                }
                            } ?> 
 


                            </div>
                            <div class="form-group">
                                <input class = "btn btn-primary" type="submit" name="update_category" value = "update_category">
                            </div>

                        </form>

                        <!-- Update enclosing -->
