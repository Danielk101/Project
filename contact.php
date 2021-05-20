<?php include('./includes/header.php'); 
      include('./includes/include.php');
      include('./actions/mailer.php'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contact Ons.
                </div>
                <div class="card-body">
                  <form action="#" method="POST">
                  <?= $output; ?>
                        <div class="form-group">
                            <label for="name">Naam</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Naam" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Adres</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" required>
                            <small id="emailHelp" class="form-text text-muted">We sturen nooit gegevens naar anderen!</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Bericht</label>
                            <textarea class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto"><br>
                        <button type="submit" class="btn btn-primary text-right">Stuur</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Adres</div>
                <div class="card-body">
                    <p>Utrechtseweg 230,</p>
                    <p> 3818 ET Amersfoort</p>
                    <p>The Netherlands</p>
                    <p>Email : info@hoornbeeck.nl</p>
                    <p>Tel. +31854838000</p>

                </div>

            </div>
        </div>
    </div>
</div>
  <br>

<?php include('./includes/footer.html'); ?>