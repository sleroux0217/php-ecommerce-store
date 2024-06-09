<?php
session_start();
include('server/connection.php');

if (isset($_SESSION['logged_in'])) {
  header('location: account.php');
  exit;
}

if (isset($_POST['login_btn'])) {

  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $stmt = $conn->prepare("SELECT user_id,user_name, user_email, user_password FROM users WHERE user_email = ? AND user_password = ? LIMIT 1");

  $stmt->bind_param('ss', $email, $password);

  if ($stmt->execute()) {
    $stmt->bind_result($user_id, $user_name, $user_email, $user_password);
    $stmt->store_result();

    if ($stmt->num_rows() == 1) {
      $stmt->fetch();

      $_SESSION['user_id'] = $user_id;
      $_SESSION['user_name'] = $user_name;
      $_SESSION['user_email'] = $user_email;
      $_SESSION['logged_in'] = true;

      header('location: account.php?login_success=logged in successfully');
    } else {
      header('location: login.php?error=could not verify your account');
    }
  } else {
    //error
    header('location: login.php?error=something went wrong');
  }
}
?>

<?php include('layouts/header.php'); ?>

<!--Login-->
<section class="my-5 py-5">
  <div class="container text-center mt-3 pt-5">
    <h2 class="font-weight-bold">Login</h2>
    <hr class="mx-auto w-25">
  </div>
  <div class="container">
    <form id="login-form" method="POST" action="login.php" class="mx-auto">
      <p class="text-danger text-center">
        <?php if (isset($_GET['error'])) { echo $_GET['error']; } ?>
      </p>
      <div class="form-group mb-3">
        <label for="login-email">Email</label>
        <input type="text" class="form-control" id="login-email" name="email" placeholder="Email" required />
      </div>
      <div class="form-group mb-4">
        <label for="login-password">Password</label>
        <input type="password" class="form-control" id="login-password" name="password" placeholder="Password" required />
      </div>
      <div class="form-group mb-3">
        <input type="submit" class="btn btn-primary btn-lg w-100" id="login-btn" name="login_btn" value="Login" />
      </div>
      <div class="form-group">
        <a id="register-url" href="register.php" class="btn btn-link w-100">Don't have an account? Register</a>
      </div>
    </form>
  </div>
</section>

<?php include('layouts/footer.php'); ?>