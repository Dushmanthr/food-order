<?php include('partials/menu.php'); ?>

    <!-- Menu section Ends-->
    <!-- Main content section starts-->

    <div class="main-content">
        <div class="wrapper">
        <h1>Dashboard</h1>
        <br><br>
        <?php
            if(isset($_SESSION['login'])) 
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }
        ?>
        <br><br> 
        <div class="col-4 text-center">

        <?php
            $sql = "SELECT * FROM tbl_category";

            $res = mysqli_query($conn,$sql);
            $count=mysqli_num_rows($res);
        ?>
            <h1><?php echo $count;?></h1>
            Categories
            <br/>
        </div>

        <div class="col-4 text-center">
        <?php
            $sql2 = "SELECT * FROM tbl_food";

            $res2 = mysqli_query($conn,$sql2);
            $count2=mysqli_num_rows($res2);
        ?>
            <h1><?php echo $count2;?></h1>
           Foods
            <br/>
        </div>

        <div class="col-4 text-center">

        <?php
            $sql3 = "SELECT * FROM tbl_order";

            $res3 = mysqli_query($conn,$sql3);
            $count3=mysqli_num_rows($res3);
        ?>
            <h1><?php echo $count3;?></h1>
           Total Orders
            <br/>
        </div>

        <div class="col-4 text-center">

        <?php
            //agregate function in sql
        $sql4 = "SELECT SUM(total) AS Total from tbl_order WHERE status='Delivered'";

        //execute the query
        $res4 = mysqli_query($conn,$sql4);

        //et the values
        $row4 = mysqli_fetch_assoc($res4);

        //get the total revenue
        $total_revenue = $row4['Total'];
        ?>
            <h1>Rs.<?php echo $total_revenue;?></h1>
            Revenue Generated
            <br/>
        </div>

        <div class ="clearfix"></div>
        </div>
        
    </div>

    <!-- Main content section Ends-->

<?php
  include('partials/footer.php');
?>


</body>
</html>