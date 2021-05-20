<?php include('./includes/headeradmin.php'); 
      include('../includes/include.php'); 
       
    
       //check if logged in
    if($_SESSION['adminloggedin']) {
        //allow
    } else {
        //redirect to the login page
        header('Location: ./adminlogin'); } 
     ?>

<main> 
       
    <div class="album py-5 bg-light">
    <center class="h1">Adminpanel</center> 
        <div class="container">
        <a href="addproduct" name="add_product" style="margin-bottom:10px;" class="btn btn-success">Voeg product toe!</a>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            
                <?php
                    $query = "SELECT * FROM product ORDER BY productid ASC";
                    $result = mysqli_query($connect, $query);
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                    ?>
                <div class="col-md-4">
                    <form method="post" action="./actions/ac_deleteproduct?id=<?php echo $row["productid"]; ?>">
                    <div style="border:2px solid #333; background-color:#f1f1f1; margin-bottom:10px;  min-height: 450px; border-radius:5px; padding:16px;" align="center">
                            <img src="<?php echo $row["image"]; ?>" width="200px" height="200px" class="img-responsive" /><br />

                            <h4 class="text"><?php echo $row["name"]; ?></h4>

                            <h5 class="text-info"><?php echo $row["description"]; ?></h5>

                            <h4 class="text-danger"><?php echo $row["price"]; ?></h4>

                            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-danger" value="Verwijder Product"/>
                        </div>
                    </form>
                </div>
                <?php
                        }
                    }
                ?>
        </div>
        </div>
    </div>
</main>


<?php include('../includes/footer.html'); ?>