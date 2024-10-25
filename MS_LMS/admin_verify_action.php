<?php
include 'connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $admin_id = $_SESSION['admin_id'];

    // Update user status to 'Active'
    $update_status_sql = "UPDATE users SET status = 'Active' WHERE user_id = ?";
    if ($stmt = $conn->prepare($update_status_sql)) {
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $stmt->close(); // Close the statement
    }

    // Get user's role and insert into the respective table
    $role_query_sql = "SELECT role FROM users WHERE user_id = ?";
    if ($stmt = $conn->prepare($role_query_sql)) {
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $stmt->bind_result($role);
        $stmt->fetch();
        $stmt->close(); // Close the statement after fetching
    }

    // Initialize the table variable
    $table = '';

    // Determine the appropriate table based on the user's role
    if ($role === 'Student') {
        $table = 'students';
    } elseif ($role === 'Teacher') {
        $table = 'teachers';
    }

    // Prepare the insert query
    $insertQuery = "INSERT INTO $table (user_id) VALUES (?)";
    if ($stmt = $conn->prepare($insertQuery)) {
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        $stmt->close(); // Close the statement after executing
    }

    // Redirect back to the verification page after success
    header('Location: admin_verify.php');
    exit();
}
?>
