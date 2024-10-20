
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
     <div class=" signup-form">
<form method="POST">
        <h2>Signup</h2>
        <input type="text" name="Firstname" placeholder="Firstname" required>
        <input type="text" name="Lastname" placeholder="Lastname" required>
        <select name="gender" required>
            <option value="" disabled selected hidden>Select Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>

        <select name="role" required>
            <option value="" disabled selected hidden>Select Role</option>
            <option value="student">Student</option>
            <option value="parent">Parent</option>
            <option value="teacher">Teacher</option>
        </select>

        <button type="submit">Signup</button>
        <div class="login-link">
            <p>Already have an account? <a href="login.php">Go to Login</a></p>
        </div>
    </form>
    </div>
</body>
</html>
