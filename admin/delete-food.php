<?php

    //Include constants page
    include('../config/constants.php');
    //echo "Delete Food Page";

    if(isset($_GET['id']) && isset($_GET['image_name'])) //Either use '&&' or 'AND'
    {
        //Process to Delete
        echo "Process to Delete";
    }
    else
    {
        //Redirect to Manage Food Page
        //echo "Redirect";
        $_SESSION['delete'] = "<div class = 'error'>Unauthorized Access.</div>";
        header('location:'.SITEURL.'admin/manage-food.php');
    }

?>