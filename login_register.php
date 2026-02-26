<?php

session_start();
require_once 'config.php';

// Redirect to index if not logged in//
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    // Validate inputs//
    if ($role != 'Human Resources') {
        $_SESSION['register_error'] = 'Please select a valid role.';
        $_SESSION['active_form'] = 'register';
    } else {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
        // Check if email already exists//
        $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        // If email exists, set error message//
        if ($stmt->num_rows > 0) {
            $_SESSION['register_error'] = 'Email already registered!';
            $_SESSION['active_form'] = 'register';
        // If email does not exist, insert new user//
        } else {
            $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $email, $password, $role);
            $stmt->execute();
               
            // succeful//
            $_SESSION['register_error'] = "<p style='color: green;'> Registered successfully!</p>";
            $_SESSION['active_form'] = 'register';
        }
        $stmt->close();
    }

    header("Location: register.php");
    exit();
}

 // Handle login request//
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
// Validate inputs//
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists and verify password//
    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            
            // Set user role in session//
            if ($user['role'] === '') {
                header("Location: register.php");
            } else {
                header("Location: HumanResources_page.php");
            }
            exit();
        }
    }

    $_SESSION['login_error'] = 'Incorrect email or password';
    $_SESSION['active_form'] = 'login';
    header("Location: index.php");
    exit();
}

?>
