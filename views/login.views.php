<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Accountix</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <!-- added web font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="/css/login.css" />
</head>

<body>
  <div class="logo-section">
    <img src="./assets/Accountix_maxupscaled_backgroundremoved.png" />
  </div>

  <!-- //////////////////////////////////////////////Login section here! -->
  <div class="login-section">
    <div class="logointro">
      <img src="./pictures/cleaned_logo.svg " />
      <p>ccountix</p>
    </div>
    <div class="login-card">
      <h2 class="brand">Login Here!</h2>
      <!-- //////////////////////////////Form Starts from here -->
      <form>
        <div class="username">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" />
        </div>

        <div class="password">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" />
        </div>

        <div class="forget">
          <input type="checkbox" name="forgetpassword" />
          <label>Forget password</label>
        </div>
        <div class="page-buttons">
          <button type="button" id="login" class="btn btn-primary">Login</button>

          <div class="signmessage">
            <span>New to Accountix</span>
            <button id="signup">Sign up</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <script>
    document.getElementById("login").addEventListener("click", function () {
      window.location.href = "/Dashboard"; // Redirect to dashboard page
    });
  </script>
</body>

</html>