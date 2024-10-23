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
                        <button class="verify-btn" data-verified="false">Verify</button>
                    </td>
                </tr>
                <tr class="user-row" data-role="teachers">
                <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="verify-btn" data-verified="false">Verify</button>
                    </td>
                </tr>
                <tr class="user-row" data-role="students">
                <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="verify-btn" data-verified="false">Verify</button>
                    </td>
                </tr>
                <tr class="user-row" data-role="teachers">
                <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="verify-btn" data-verified="false">Verify</button>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
    </div>
    <script src="rows_color.js"></script>
    <script>
    const verifyButtons = document.querySelectorAll('.verify-btn');
  
  verifyButtons.forEach(button => {
    button.addEventListener('click', (event) => {
      const row = event.target.closest('tr');
      const name = row.cells[0].textContent;
      const isVerified = button.getAttribute('data-verified') === 'true';

      if (!isVerified) {
        // Change the button text to "Verified" and change its color
        button.textContent = 'Verified';
        button.style.backgroundColor = '#4caf50'; // Green color for verified
        button.setAttribute('data-verified', 'true');

        // Optional: Send verification status to the server using AJAX or any other method
        // Example:
        // const email = row.cells[2].textContent;
        // sendVerificationStatusToServer(email, true); // This function would make an AJAX call

        alert(`${name} has been verified.`);
      } else {
        alert(`${name} is already verified.`);
      }
    });
  });
</script>



</body>
</html>