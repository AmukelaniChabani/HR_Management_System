<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit;
}
 // Connect to the database//
$conn = new mysqli('localhost', 'root', '', 'users_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize user variable//
$user = null;
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("SELECT * FROM emp_table WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><i class="fa-solid fa-circle-user"></i><br>Employee Profile</title>
    <link rel="icon" type="image/x-icon" href="image/logo.svg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
     <!-- as the div says its a container -->
    <div class="container">
        <div class="form-box">
            <h2><i class="fa-solid fa-circle-user"></i><br>Employee Profile</h2>
            <?php if ($user): ?>
                <p1><strong>Name:</strong> <?= htmlspecialchars($user['name']); ?></p1><br>
                <p1><strong>Surname:</strong> <?= htmlspecialchars($user['surname']); ?></p1><br>
                <p1><strong>Email:</strong> <?= htmlspecialchars($user['email']); ?></p1><br>
                <p1><strong>Position:</strong> <?= htmlspecialchars($user['position']); ?></p1><br>
                <p1><strong>Start Date:</strong> <?= htmlspecialchars($user['date']); ?></p1><br>
                <p1><strong>Department:</strong> <?= htmlspecialchars($user['department']); ?></p1><br>
            <?php else: ?>
                <p1>User not found.</p1>
            <?php endif; ?>
            <br><a href="list_employee.php"><button>Back to Employee List</button></a>
            <p>Go back to Home Page? <a href="HumanResources_page.php">Back</a></p>
            <p><a href="logout.php">Logout</a></p>
        </div>
    </div>
</body>
</html>

