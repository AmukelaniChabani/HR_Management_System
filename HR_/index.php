<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  

<div class="container">
    <H1>Welcome</H1>
    <div   class="form-box ">
      <div class="ad">
        <img src="image/viktor-forgacs-0JokpSkuBeU-unsplash.jpg" alt="" srcset="">
      </div>
    </div>
  </div>

  <div class="container">
    <div  class="form-box2 ">
      <form action="login_register.php" method="post">
        <h2>Login</h2>
        <input type="email" name="email" placeholder="Email" required>
        <div class="password-wrapper">
        <input type="password" name="password" placeholder="Password" id="myInput" required>
        <img src="image/eye_closed.svg"  id="togglePassword">
        </div>
        <button type="submit" name="login">Login</button>
        <p>Don't have an account? <a href="register.php">Register</a></p>
      </form>
    </div>
  </div>
 
  <script src="main.js"></script>




</body>
</html>