<?php include('./includes/header.php'); 
      include('./includes/include.php'); 
      ?>
<br><br>
<main class="form-login text-center">
  <form method="post" action="./actions/ac_login">
    <h1 class="h3 mb-3 fw-normal">Inloggen</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Email" required>
      <label for="floatingInput">Email Adres</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Wachtwoord" required>
      <label for="floatingPassword">Wachtwoord</label>
    </div>
    <br>
    <input type="submit" class="w-100 btn btn-lg btn-primary" name="submit" value="Log In!" />
    <div class="form-floating">
      <label for="floatingPassword">
        <?php 
          if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
          }
        ?>
      </label>
    </div>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>

<?php include('./includes/footer.html'); ?>