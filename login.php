<?php include('./includes/header.html'); 
      include('./includes/include.php'); ?>
<br>
<main class="form-login text-center">
  <form method="post" action="./actions/ac_visitor.php">
    <h1 class="h3 mb-3 fw-normal">Please Log In</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <br>
    <input type="submit" class="w-100 btn btn-lg btn-primary" name="submit" value="Log In!" />
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>
<br><br><br><br><br><br><br><br><br>

<?php include('./includes/footer.html'); ?>