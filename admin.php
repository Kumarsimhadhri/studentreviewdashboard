<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/styles1.css" />
    <style>
  body {
    color: black;
  }
</style>
  </head>

  <body>
    <div class="login-form">
      <h2><U><B>LOGIN TO YOUR ACCOUNT</B></U></h2>
      <form action="php/checklogin.php" method="POST">
        <label>
          EMAIL ID
          <input type="email" id="email" placeholder="email" name="email" />
        </label>
        <br /><br />
        <label>
          PASSWORD
          <input
            type="password"
            id="password"
            placeholder="password"
            name="password"
          />
        </label>
        <br /><br />
        <div class="submit-form">
          <input type="submit" id="login" name="login" value="Login" />
        </div>
      </form>
    </div>
  </body>
</html>
