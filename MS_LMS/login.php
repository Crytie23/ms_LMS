<?php
session_start();

include 'connect.php';
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL to fetch user
    $sql = "SELECT user_id, username, password, role, status FROM users WHERE username = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
            if ($user['status'] === 'Active') {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];
                
                if ($user['role'] === 'Admin') {
                    $_SESSION['admin_id'] = $admin_id;
                    header("Location: admin_dashboard.php");
                } else if ($user['role'] === 'Teacher') {
                    header("Location: teacher_dashboard.php");
                } else {
                    header("Location: student_dashboard.php");
                }
                exit();
            } else {
                $errorMessage = "Your account is not active. Please contact the administrator.";
            }
    } else {
        $errorMessage = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="navbar.css">

<title>Learning Modular System</title>
<style>
        .error-message{
            color: red;
        }
        .login-container {
            width: 400px;
            height: 50vh;
            margin: 20px auto;
        }
        .login-form {
            
            
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            margin-bottom: 20px;
        }
        input {
            height: 50px;
            width: calc(100% - 20px);
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        
        h2{
            text-align: center;
        }
        button {
            height: 50px;
            width: calc(100% - 20px);
            margin-top: 10px;
            padding: 8px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .signup-link {
            text-align: center;
            margin-top: 10px;
        }
        .signup-link a {
            color: #4CAF50;
            text-decoration: none;
        }
        </style>
</head>
        <body>
            
    <div class="navbar">
        <a href="about.html">About Us</a>
        <a href="Login.php">Home</a> 
     </div>
    <div class="login-container">
        <div class="login-form">
            <form method="POST">
                <h2>Login</h2>
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <div class="error-message">
                
                </div>
                <button type="submit">Login</button>
                <div class="signup-link">
                    <p>Forgot Password? <a href="change_password.php">Change Password</a></p>
                    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
                </div>
            </form>
        </div>
        
    </div>
    </body>
    </html>