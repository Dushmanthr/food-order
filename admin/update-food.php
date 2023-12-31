<?php include('partials/menu.php');?>

<?php
        //check wheather id is check or not
        if(isset($_GET['id'])){
            //get all the details
            $id = $_GET['id'];

            //sql query to get the selected food
            $sql2 = "SELECT * from tbl_food WHERE id = $id";

            //execute the query
            $res2 = mysqli_query($conn,$sql2);

            //get the value based on query executed
            $row2 = mysqli_fetch_assoc($res2);

            //Get the individual value of selected food

            $title = $row2['title'];
            $description = $row2['description'];
            $price = $row2['price'];
            $current_image = $row2['image_name'];
            $current_category = $row2['category_id'];
            $featured = $row2['featured'];
            $active = $row2['active'];


        }
        else{
            //redirect to manage food

            header('location:'.SITEURL.'admin/manage-food.php');
        }
?>


 <div class="main-content">
     <div class="wrapper">
         <h1>Update Food</h1>

         <br><br>

         <form action = "" method="POSt" enctype = "multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td>
                    <input type="text" name="title" value="<?php echo $title;?>">
                    </td>
                </tr>

                <tr>
                    <td>Description:</td>
                    <td>
                        <textarea name="description" cols="30" rows="5" value="<?php echo $description;?>"></textarea>
                    </td>
                </tr>

                <tr>
                    <td>Price:</td>
                    <td>
                        <input type="number" name="price" value="<?php echo $price;?>">
                    </td>
                </tr>

                <tr>
                    <td>Current Image:</td>
                    <td>
                        <?php
                            if($current_image==""){
                                //image not available
                                echo "<div class='error'>Image not available</div>";

                            }
                            else{
                                //image available
                                ?>
                                    <img src="<?php echo SITEURL;?>images/food/<?php echo $current_image;?>" width="150px" >
                                <?php

                            }
                        
                        ?>
                    </td>
                </tr>

                <td>Select New Image:</td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>

                <tr>
                    <td>Category: </td>
                    <td>
                        <select name="category">

                        <?php
                                //Create PHP Code to display categories from Database
                                //1. Create SQL to get all active categories from database
                                $sql = "SELECT * FROM tbl_category WHERE active = 'Yes'";

                                //Executing query
                                $res = mysqli_query($conn, $sql);

                                //Count Rows to check whether we have categories or not
                                $count = mysqli_num_rows($res);

                                //If count is greater than zeri, we have categories elase we don't have categories
                                if($count>0)
                                {
                                    //We have categories
                                    while($row = mysqli_fetch_assoc($res))
                                    {
                                        //get the details of categories
                                        $category_id = $row['id'];
                                        $category_title = $row['title'];
                                        ?>

                                        <option <?php if($current_category==$category_id){echo 'Selected'; }?>value="<?php echo $category_id; ?>"><?php echo $category_title; ?></option>
                                        <?php
                                    }
                                }
                                else
                                {
                                    //We do not have categories
                                    ?>
                                    <option value="0">No category Food</option>
                                    <?php
                                }

                                //2. Display on Dropdown
                            ?>

                            <option value="0">Test Category</option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td>Featured: </td>
                    <td>
                        <input <?php if($featured == 'Yes'){echo 'checked';} ?> type="radio" name="featured" value="Yes">Yes
                        <input <?php if($featured == 'No'){echo 'checked';} ?>type="radio" name="featured" value="No">No
                    </td>
                </tr>

                <tr>
                    <td>Active: </td>
                    <td>
                        <input <?php if($active == 'Yes'){echo 'checked';} ?>type="radio" name="active" value="Yes">Yes
                        <input <?php if($active == 'No'){echo 'checked';} ?>type="radio" name="active" value="No">No
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="current_image" value="<?php echo $current_image;?>">
                        <input type="hidden" name="id" value = "<?php  echo $id;?>">
                        <input type="submit" name="submit" value="Update Food" class="btn-secondary">
                    </td>
                </tr>

            </table>
        </form>

        <?php
            if(isset($_POST['submit'])){
                //echo "clicked";

                //get all the details from the form
                $id = $_POST['id'];
                $title = $_POST['title'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $current_image = $_POST['current_image'];
                $featured=$_POST['featured'];
                $active = $_POST['active'];

                //upload the image if selected
                //check wheather the upload button is clicked or not
                if(isset($_FILES['image']['name'])){
                    //upload button clicked
                    $image_name = $_FILES['image']['name'];

                    //check wheather the file is available or not
                    if($image_name !=""){
                        //image available
                        //upload the new image

                         //Auto rename our image
                       //Get the extension of our image (.jpg,png,gif etc)eg: food1.jpg
                       $ext = end(explode('.', $image_name));

                       //Rename the image
                       $image_name = "Food_category_".rand(000, 999).'.'.$ext; //e.g: food_category_834.jpg

                       //get the source path to destination path
                       $source_path = $_FILES['image']['tmp_name'];
                      $destination_path = "../images/food/".$image_name;

                      //finaly upload the image
                      $upload = move_uploaded_file($source_path,$destination_path);

                       //check wheather the image is upload or not
                      //and if the image is not uploaded then we will stop the process and redirect with error msg
                      if($upload==false){
                        //set message
                        $_SESSION['upload'] = "<div class='error'>Failed to Upload Image</div>";

                        //redirect to add category page
                        header('location:'. SITEURL.'admin/manage-food.php');

                        //stop the process
                        die();
                    
                     }
                       //remove the image if new image is updated and current image exist

                     //remove current image if available
                     if($current_image!=""){
                         //current image is available
                         //remove the image
                         $remove_path = "../images/food/".$current_image;

                         $remove = unlink($remove_path);

                         //check wheather the image is removed or not
                         if($remove ==false){
                             //failed to remove current image
                             $_SESSION['remove-failed'] = "<div class='error'>Failed to remove current image</div>";
                             header("location:". SITEURL."admin/manage-category.php");
                                die(); //stop the process
                         }
                     }


                    }
                    else{
                        $image_name= $current_image; //default image when image is not selected
                    }
                }
                else{
                    $image_name= $current_image;//default image when image is not selected
                }

              

                //update the food in database
                $sql3 = "UPDATE tbl_food SET 
                    title = '$title',
                    description = '$description',
                    price = '$price',
                    image_name = '$image_name',
                    category_id = '$category_id', 
                    featured = '$featured',
                    active = '$active'
                    WHERE id=$id
                ";

                //execute the sql query
                $res3 = mysqli_query($conn,$sql3);

                //check wheather the query is executed or not
                if($res3 ==true){
                    //query executed and food updated
                    $_SESSION['update'] = "<div class='success'>Food updated successfully</div>";
                    header("location:". SITEURL.'admin/manage-food.php');
                }
                else{
                    //failed to update food
                    $_SESSION['update'] = "<div class='error'>Food updated Failed</div>";
                    header("location:". SITEURL.'admin/manage-food.php');
                }

                
            }
            ?>
     </div>
 </div>


<?php include('partials/footer.php');?>