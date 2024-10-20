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