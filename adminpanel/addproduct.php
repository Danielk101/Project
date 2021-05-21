<?php include('./includes/headeradmin.php'); 
      include('./includes/include.php'); 
      ?>

    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <form method="post" action="./actions/ac_addproduct.php">
                <div class="card-body">
                    <h4 class="information">Product Toevoegen</h4>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name">Product Naam</label>  
                                <input class="form-control" name="name" type="text" placeholder="Product Naam" required> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name">Beschrijving</label>  
                                <input class="form-control" name="description" type="text" placeholder="Beschrijving" required> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name">Prijs</label>  
                                <input class="form-control" name="price" type="number" placeholder="Prijs" required> 
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Product Foto</label>
                            <input type="file" class="form-control-file" name="image" id="image" required>
                        </div>
                    <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> <small class="agree-text">Copyright &copy; 2021 All Rights Reserved by </small> <a href="#" class="terms">Terms & Conditions</a> </div> 

                    <input type="submit" class="btn btn-primary btn-block confirm-button" name="submit" value="Voeg Toe!" />
                </div>
            </form>    
        </div>
    </div>

<?php include('./includes/footer.html'); ?>