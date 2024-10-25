<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learning Management System</title>

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">

    <!-- Inline Styles -->
    <style>
        body {
            background: #eee;
        }
        .navbar {
            background: #4f842a;
            border-radius: 0;
        }
        .navbar-brand,
        .dropdown-toggle,
        .check {
            color: #eee;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        #divvideo {
            box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
        }
        .alert {
            position: relative;
            margin-bottom: 1rem;
            padding: 0.75rem 1.25rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }
        /* Responsive adjustments */
        @media (max-width: 576px) {
            .fs-2 {
                font-size: 1.5rem; /* Adjust font size for smaller screens */
            }
            .fs-5 {
                font-size: 1rem; /* Adjust font size for smaller screens */
            }
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="prof_dashboard.php"><i class="fa-solid fa-chalkboard-user"></i> Learning Management System</a>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="bi bi-journal"></i> Lesson <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="prof_lesson.php"><i class="bi bi-book"></i> List of Lessons</a></li>
                        <li><a href="prof_exercise.php"><i class="bi bi-list-ul"></i> List of Exercises</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="bi bi-person-gear"></i> Manage <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="prof_student.php"><i class="bi bi-people-fill"></i> Students</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="bi bi-gear-wide-connected"></i> Settings <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="logout.php"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid px-4">
        <div class="row g-3 my-2">
            <div class="col-md-3 col-6"> <!-- Adjusted for smaller screens -->
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <p class="fs-5">Students: <span class="fs-2">15</span></p>
                    </div>
                    <a class="nav-link" href="prof_student.php">
                        <i class="fas fa-chalkboard-teacher fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <h3 class="fs-4 mb-3">Recent Students</h3>
            <div class="col">
                <table id="Students" class="table bg-white rounded shadow-sm table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Student ID</th>
                            <th scope="col">Student</th>
                            <th scope="col">Age</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Date of Register</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>

       
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if (isset($_SESSION['error'])): ?>
                        <div class='alert alert-danger' style='background:red;color:#fff'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <h4><i class='icon fa fa-warning'></i> Error!</h4><?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['success'])): ?>
                        <div class='alert alert-success' style='background:green;color:#fff'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <h4><i class='icon fa fa-check'></i> Success!</h4><?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
            $("#Students").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
</body>

</html>
