<?php
include '../DB/config.php';
include '../DB/add_deliveryman.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>ShopLio</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <div class="container">
        <!-- Top left -->
        <header>
            <div class="top">
                <div class="logo">
                    <h2>Hello, HR!</h2>
                </div>
            </div>

            <!-- left panel option bar -->
            <div class="sidebar">
                <a href="dashboard.html">
                    <span class="material-symbols-outlined">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="profile.php">
                    <span class="material-symbols-outlined">person</span>
                    <h3>Profile</h3>
                </a>

                <a href="employee.php">
                    <span class="material-symbols-outlined">article_person</span>
                    <h3>Employee Information</h3>
                </a>

                <a href="edit_hr.php">
                    <span class="material-symbols-outlined">person_add_disabled</span>
                    <h3>Add/Remove Employee</h3>
                </a>

                <a href="edit_accountant.php">
                    <span class="material-symbols-outlined">person_add_disabled</span>
                    <h3>Add/Remove Accountant</h3>
                </a>

                <a href="edit_deliveryman.php" class="active">
                    <span class="material-symbols-outlined">person_add_disabled</span>
                    <h3>Add/Remove Delivery Man</h3>
                </a>

                <a href="edit_customer.php">
                    <span class="material-symbols-outlined">person_add_disabled</span>
                    <h3>Add/Remove Customer</h3>
                </a>

                <a href="edit_product.php">
                    <span class="material-symbols-outlined">assessment</span>
                    <h3>Add/Remove Product</h3>
                </a>

                <a href="leave_days.php">
                    <span class="material-symbols-outlined">event</span>
                    <h3>Leave Management</h3>
                    <span class="mgs_count">5</span>
                </a>

                <a href="training.php">
                    <span class="material-symbols-outlined">cast_for_education</span>
                    <h3>Training & Development</h3>
                </a>

                <a href="logout.php">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>

        </header>

        <!-- Top center -->
        <main>
            <div class="center">
                <div class="top">
                    <h1>Add/Remove Employee</h1>

                <!-- Order Summary DB -->
                 <div class="info">
                    
                    <h1><b>Delivery Man Information</b></h1>
                    <div class="edit_employee_info">
                        <table>
                            <tr>
                                <td><b>Name:</b></td>
                                <td><input type="text" required></td>
                            </tr>
                            <tr>
                                <td><b>Email:</b></td>
                                <td><input type="email" required></td>
                            </tr>
                            <tr>
                                <td><b>Contact Number:</b></td>
                                <td><input type="number" required></td>
                            </tr>
                            <tr>
                                <td><b>Password:</b></td>
                                <td><input type="password" required></td>
                            </tr>
                            <tr>
                                <td><b>Address:</b></td>
                                <td><input type="text" required></td>
                            </tr>
                            <tr>
                                <td><b>Joining Date:</b></td>
                                <td><input type="date" required></td>
                            </tr>
                        </table>
                        <!-- <button type="submit">Add Accountant</button> -->
                    </div>
                </div>
            </div>
        </main>

        <!-- Top right -->
        <div class="right">
            <div class="top">
                <div class="theme">
                    <span class = "material-symbols-outlined">dark_mode</span>
                    <span class = "material-symbols-outlined active">light_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p><b>Naimul</b></p>
                        <p>HR</p>
                        <small class="text-muted"></small>
                    </div>
                    <div class="profile-pic">
                        <a href="profile.php"><img src="../img/HR_logo.jpg"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../JS/script.js"></script>

</body>

</html>