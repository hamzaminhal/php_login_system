<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login & Signup</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="form-container">
      <h2>Login</h2>
      <form action="./back_end.php" method="post">
        <label for="login-email">Userrname</label>
        <input type="username" id="login-email" name="username" required />

        <label for="login-password">Password</label>
        <input type="password" id="login-password" name="password" />

        <input type="submit" value="Login" name="lbtn" />
      </form>
      <div class="form-footer">
        <a href="./forgot.php">Forgot Password</a>
      </div>
      <div class="form-footer">
        Don't have an account? <a href="./signup.php">Sign up Here.</a>
      </div>
    </div>
  </body>
</html>
