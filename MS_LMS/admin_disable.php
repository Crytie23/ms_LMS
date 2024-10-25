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
        <a href="admin.php"><i class="fa-solid fa-home fa-xl"></i> Home</a>
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
                <tr class="user-row" data-role="students">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="disable-btn" data-verified="false">Disable</button>
                    </td>
                </tr>
                <tr class="user-row" data-role="teachers">
                <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="disable-btn" data-verified="false">Disable</button>
                    </td>
                </tr>
                <tr class="user-row" data-role="students">
                <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="disable-btn" data-verified="false">Disable</button>  
                    </td>
                </tr>
                <tr class="user-row" data-role="teachers">
                <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="disable-btn" data-verified="false">Disable</button>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
    </div>
    <script src="rows_color.js"></script>
</body>
</html>
