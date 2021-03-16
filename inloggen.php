<?php include('./includes/header.html'); 
      include('./includes/include.php'); ?>

<div class="g-signin2" data-onsuccess="onSignIn"></div>
<a href="#" onclick="signOut();">Sign out</a>

<form class="form-signin" method="POST" action="../action/ac_visitorlogin.php">
    <br>
    <h2>Login</h2>
    <h2 class="h3 mb-3 font-weight-normal">Please Sign In</h2>

    <label style=""color: black;">Email</label>
    <input type="text" name="email" class="form-control" placeholder="Email">
    
    <label style=""color: black;">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password">
<br>
    <input type="submit" name="login" class="btn btn-lg btn-primary">

</form>





<?php include('./includes/footer.html'); ?>