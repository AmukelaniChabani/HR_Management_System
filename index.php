<?php
session_start();

/* Show error message is login info is Wrong */
$errors = [
    'login' => $_SESSION['login_error'] ?? ''
];
$activeForm = $_SESSION['active_form'] ?? 'login';

function showError($error) {
  return !empty($error) ? "<p class='error-message'>" . htmlspecialchars($error, ENT_QUOTES, 'UTF-8') . "</p>" : '';
}


function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
 <!-- fav icon -->
  <link rel="icon" type="image/x-icon" href="image/logo.svg">
   <!-- link style -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
   <!-- container -->
  <div class="container">

   <!-- my form box -->
    <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">

     <!-- using post for senitive info instead of get -->
      <form action="login_register.php" method="post">
        <h2>Login</h2>
         <!-- error message -->
        <?= showError($errors['login']); ?>
        <input type="email" name="email" placeholder="Email" required>

          <!-- to show or hide password -->
        <div class="password-wrapper">
        <input type="password" name="password" placeholder="Password" id="myInput" required>
        <img src="image/eye_closed.svg"  id="togglePassword">
        </div>


        
             
        <button type="submit" name="login">Login</button>
        <p>Don't have an account? <a href="register.php">Register</a></p>
      </form>
    </div>
  </div>
   <!-- link to javaScrip -->
  <script src="main.js"></script>
</body>
</html>


