<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="form-container">
      <h2>Signup</h2>
      <form action="./back_end.php" method="post">
        <!-- <label for="signup-name">Full Name</label>
        <input type="text" id="signup-name" name="name" required /> -->
        <label for="signup-email">Username</label>
        <input type="text" id="signup-email" name="username" required />

        <label for="signup-password">Password</label>
        <input type="password" id="signup-password" name="password" required />

        <input type="submit" value="Sign Up" name="sbtn" />
      </form>
      <div class="form-footer">
        Already have an account? <a href="./index.php">Login Here.</a>
      </div>
    </div>
  </body>
</html>
