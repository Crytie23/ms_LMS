<?php
include 'connect.php';
session_start(); // Ensure session is started

// Fetch pending users
$sql = "SELECT user_id, first_name, last_name, gender, role FROM users WHERE status = 'Pending'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="tables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Learning Modular System - Verify Accounts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="usercontainer">
            <div class="userpicture"><i class="fa-solid fa-circle-user fa-xl white-icon"></i></div>
            <div class="userdata">
                <span class="username fw-bold"></span>
            </div>
        </div>
        <div class="space"></div>
        <a href="admin_dashboard.php"><i class="fa-solid fa-home fa-xl"></i> Home</a>
        <a href="admin_verify.php"><i class="fa-solid fa-user-check fa-xl" style="color: #ffffff;"></i> Verify Accounts</a>
        <a href="admin_disable.php"><i class="fa-solid fa-user-slash fa-xl" style="color: #ffffff;"></i> Disable Accounts</a>
        <a href="logout.php"><i class="fa-solid fa-right-from-bracket fa-xl"></i> Logout</a>
    </div>

    <div class="main-container">
        <div class="main-content">
            <div class="filter-container">
                <label for="user-filter">Filter by user type:</label>
                <select id="user-filter">
                    <option value="all">All Users</option>
                    <option value="students">Students</option>
                    <option value="teachers">Teachers</option>
                </select>
            </div>

            <table id="user-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                    <tr class="user-row" data-role="<?= strtolower($row['role']) ?>">
                        <td><?= $row['user_id'] ?></td>
                        <td><?= $row['first_name'] ?></td>
                        <td><?= $row['last_name'] ?></td>
                        <td><?= $row['gender'] ?></td>
                        <td><?= $row['role'] ?></td>
                        <td>
                            <form method="POST" action="admin_verify_action.php">
                                <input type="hidden" name="user_id" value="<?= $row['user_id'] ?>">
                                <button type="submit" class="verify-btn">Verify</button>
                            </form>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
