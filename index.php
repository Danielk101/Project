<?php include('./includes/header.php'); 
      include('./includes/include.php'); 
      ?>

<main>
    <div class="background">
    <section class="py-5 text-center container">
        
        <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
        <br><br>
        </div>
        </div>
    </section>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">
        <div class="form-floating">
                <label for="floatingPassword">
                    <div class="success">
                    <?php 
                        if (isset($_SESSION['success'])) {
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        }
                    ?>
                    </div>
                </label>
            </div>
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
                    <form method="post" action="./shoppingcart?action=add&id=<?php echo $row["productid"]; ?>">
                        <div style="border:2px solid #333; background-color:#f1f1f1; margin-bottom:10px;  min-height: 450px; border-radius:5px; padding:16px;" align="center">
                            <img src="<?php echo $row["image"]; ?>" width="200px" height="200px" class="img-responsive" /><br />

                            <h4 class="text"><?php echo $row["name"]; ?></h4>

                            <h5 class="text-info"><?php echo $row["description"]; ?></h5>

                            <h4 class="text-danger"><?php echo $row["price"]; ?></h4>

                            <input type="number" class="form-control" id="quantity" value="1" name="quantity" min="1" max="5" width="">

                            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Voeg toe" />
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

<?php include('./includes/footer.html'); ?>