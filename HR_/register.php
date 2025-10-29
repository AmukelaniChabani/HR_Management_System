<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  

<div class="container">
    <div class="form-box " id="register-form">
      <form action="login_register.php" method="post">
        <h2>Register</h2>
        
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="surname" placeholder="surname" required >
        <input type="email" name="email" placeholder="Email" required>
        
        <div class="password-wrapper">
        <input type="password" name="password" placeholder="Password" id="myInput" required>
        <img src="image/eye_closed.svg" id="togglePassword">
        </div>

        <select name="role" required>
          <option disabled selected>--Select Role--</option>
          <option value="Admin">Admin</option>
          <option value="Human Resources">Human Resources</option>
        </select>
        <button type="submit" name="register">Register</button>
        <p>Already have an account? <a href="index.php">Login</a></p>
      </form>
    </div>
  </div>
 
  <script src="main.js"></script>




</body>
</html>