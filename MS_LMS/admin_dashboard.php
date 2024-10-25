<?php
include 'connect.php';

// Get total counts of active students
$student_count = 0;
$teacher_count = 0;
$total_count = 0;

// Fetch active students count
$student_query = "SELECT COUNT(*) AS total FROM users WHERE role = 'Student' AND (status = 'Active' OR status = 'Disabled')";
if ($result = $conn->query($student_query)) {
    $row = $result->fetch_assoc();
    $student_count = $row['total'];
}

// Fetch active teachers count
$teacher_query = "SELECT COUNT(*) AS total FROM users WHERE role = 'Teacher' AND (status = 'Active' OR status = 'Disabled')";
if ($result = $conn->query($teacher_query)) {
    $row = $result->fetch_assoc();
    $teacher_count = $row['total'];
}

// Calculate total active users
$total_count = $student_count + $teacher_count;

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

        .card {
            background-color: #f1f1f1;
            width: 250px;
            height: 100px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
            margin: 5px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card h3 {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .card p {
            font-size: 36px;
            font-weight: bold;
            color: #148a0c;
        }
        .filter-container{
            align-content: center;

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
            
            <div class="card">
                <h3>Total Students</h3>
                <p><?php echo $student_count; ?></p>
            </div>
            <div class="card">
                <h3>Total Teachers</h3>
                <p><?php echo $teacher_count; ?></p>
            </div>
            <div class="card">
                <h3>Total Users</h3>
                <p><?php echo $total_count; ?></p>
            </div>

        </div>
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
                </tr>
            </thead>
            <tbody>
                <?php
                // Fetch all active and disabled users
                $user_query = "SELECT user_id, first_name, last_name, gender, role, status FROM users WHERE status = 'Active' OR status = 'Disabled'";
                if ($result = $conn->query($user_query)) {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['user_id'] . "</td>";
                            echo "<td>" . $row['first_name'] . "</td>";
                            echo "<td>" . $row['last_name'] . "</td>";
                            echo "<td>" . $row['gender'] . "</td>";
                            echo "<td>" . $row['role'] . "</td>";
                            echo "<td>" . $row['status'] . "</td>";
                            echo "</tr>";
                        }
                    } 
                } 
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
