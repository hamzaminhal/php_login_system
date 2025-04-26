<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
      <h2>Search User</h2>
      <form action="./back_end.php" method="post">
        <label for="login-email">Userrname</label>
        <input type="username" id="login-email" name="username" required />

        <input type="submit" value="Search User" name="fbtn" />
      </form>

      <div class="form-footer">
        <a href="./signup.php">Login Here.</a>
      </div>
    </div>
</body>
</html>