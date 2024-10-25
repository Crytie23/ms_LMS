<?php
include 'connect.php';

// Handle the disabling of a user when the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];

    // Update user status to 'Disabled'
    $disable_user_sql = "UPDATE users SET status = 'Disabled' WHERE user_id = ?";
    if ($stmt = $conn->prepare($disable_user_sql)) {
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $stmt->close();
    }
}

// Fetch activated users from the database
$activated_users_sql = "SELECT user_id, first_name, last_name, gender, role, status FROM users WHERE status = 'Active'";
$activated_users = $conn->query($activated_users_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="sidebar.css">
<link rel="stylesheet" href="tables.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<title>Learning Modular System</title>
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
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($activated_users->num_rows > 0) {
                        while ($row = $activated_users->fetch_assoc()) {
                            echo "<tr class='user-row' data-role='{$row['role']}'>";
                            echo "<td>{$row['user_id']}</td>";
                            echo "<td>{$row['first_name']}</td>";
                            echo "<td>{$row['last_name']}</td>";
                            echo "<td>{$row['gender']}</td>";
                            echo "<td>{$row['role']}</td>";
                            echo "<td>{$row['status']}</td>";
                            echo "<td>
                                    <form action='' method='POST' style='display:inline;'>
                                        <input type='hidden' name='user_id' value='{$row['user_id']}'>
                                        <button type='submit' class='disable-btn'>Disable</button>
                                    </form>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>No activated users found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="rows_color.js"></script>
</body>
</html>
