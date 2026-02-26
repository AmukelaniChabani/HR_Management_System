
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Human Resources Page</title>
    <link rel="icon" type="image/x-icon" href="image/logo.svg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>
<body >

<div class="box">
    <h1>Welcome, <span><?=$_SESSION['name'];?></span> To the Employee Management System</h1>
    <center style="color: #fff;"> <p1>What would <span><?=$_SESSION['name'];?></span> like to do today?</p1> </center>
     
      <div class="cards">
          
         <div class="form-box " id="employee_reg">
            
                <h2><i class="fa-solid fa-circle-user"></i><br>Employee Registration</h2>
                <a href="Employee_Reg.php">
               <p><button>Go to page</button>
                </a></p> 
        </div>

        <div class="form-box " id="employee_list">
            
            <h2><i class="fa-solid fa-list"></i><br>Employee  <br> List  </h2>
            <a href="list_employee.php">
            <p>  <button>Go to page</button>
                </a></p> 
            
        </div>

          
    </div>
    <p>  <a href="logout.php"><button><i class="fa-solid fa-person-through-window"></i><br>Logout</button></a></p> 
     
    </div>
    
    
</body>
</html>

   
</body>
</html>
