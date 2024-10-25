<?php
include 'connect.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $first_name = $_POST['Firstname'];
    $last_name = $_POST['Lastname'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Set the default status to 'pending'
    if ($role === 'Admin') {
        $status = 'Active';
    } else {
        $status = 'Pending';
    }

    // Prepare the SQL statement to insert into the users table
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, gender, username, password, role, status) 
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $first_name, $last_name, $gender, $username, $hashed_password, $role, $status);

    // Execute the statement and handle the result
    if ($stmt->execute()) {
        echo "Signup successful! Your account is pending verification.";
        header("Location: login.php");
        exit();
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <title>Learning Modular System</title>
    <style>
       .signup-form {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            margin-bottom: 20px;
        }
        input, select, button {
            height: 50px;
            width: calc(100% - 20px);
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 18px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
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
        .login-link {
            text-align: center;
            margin-top: 10px;
        }
        .login-link a {
            color: #4CAF50; 
            text-decoration: none;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>
<div class="navbar">
        <a href="about.html">About Us</a>
        <a href="Login.php">Home</a> 
     </div>
     <div class="signup-form">
<form method="POST">
        <h2>Signup</h2>
        <input type="text" name="Firstname" placeholder="Firstname" required>
        <input type="text" name="Lastname" placeholder="Lastname" required>
        
        <select name="gender" required>
            <option value="" disabled selected hidden>Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>

        <select name="role" required>
            <option value="" disabled selected hidden>Select Role</option>
            <option value="Student">Student</option>
            <option value="Teacher">Teacher</option>
            <option value="Admin">Admin</option>
        </select>

        <button type="submit">Signup</button>
        <div class="login-link">
            <p>Already have an account? <a href="login.php">Go to Login</a></p>
        </div>
    </form>
    </div>
</body>
</html>
