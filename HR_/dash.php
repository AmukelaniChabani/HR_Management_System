<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRM Dashboard</title>
    <link rel="stylesheet" href="2nd.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h2><i class="fas fa-user-cog"></i> HRM</h2>
            <button id="closeSidebar"><i class="fas fa-times"></i></button>
        </div>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="#"><i class="fas fa-user"></i> Employees</a></li>
            <li><a href="#"><i class="fas fa-calendar-check"></i> Attendance</a></li>
            <li><a href="#"><i class="fas fa-file-invoice-dollar"></i> Payroll</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
        </ul>
    </div>

    <!-- Header -->
    <header>
        <button id="menuBtn"><i class="fas fa-bars"></i></button>
        <h1>Welcome User to the HRM</h1>
        <div class="user-info">
            <i class="fas fa-bell"></i>
            <i class="fas fa-user-circle"></i>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <p>What would you like to do today?</p>

        <div class="form-box">
            <p>Example form area — add your content here.</p>
        </div>
    </div>

    <script src="main.js"></script>
</body>
</html>
