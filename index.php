<?php include('./includes/header.html'); 
      include('./includes/include.php'); 
      ?>

<main>
    <div class="background">
    <section class="py-5 text-center container">
        
        <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
        <p class="h1">Welcome to Spow Webshop</p>
        </div>
        </div>
    </section>
    </div>

    <div class="album py-5 bg-light">
    <h3 align="center">Products</h3><br />
    <label for="orderby">Order by:</label>
    <select name="orderby" id="orderby">
        <option value="all">All</option>
        <option value="amd">AMD</option>
        <option value="intel">Intel</option>
    </select>
        <div class="container">
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
                    <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                        <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                            <img src="images/<?php echo $row["./images/2200.png"]; ?>" class="img-responsive" /><br />

                            <h4 class="text-info"><?php echo ( isset ( $rows["name"] ) ? $rows["name"] : '' ); ?></h4>

                            <h4 class="text-danger"><?php echo ( isset ( $rows["price"] ) ? $rows["price"] : '' ); ?></h4>

                            <input type="text" name="quantity" value="1" class="form-control" />

                            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
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