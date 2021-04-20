<?php include('./includes/headeradmin.html'); 
      include('./includes/include.php'); ?>
<br><br>
<main class="form-login text-center">
  <form method="post" action="./actions/ac_adminlogin.php" onsubmit="return(validate());">
    <h1 class="h3 mb-3 fw-normal">Admin Log In</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>
    <br>
    <input type="submit" class="w-100 btn btn-lg btn-primary" name="submit" value="Log In!" />
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>

<?php include('./includes/footer.html'); ?>