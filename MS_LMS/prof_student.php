<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Learning Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <style>
        #divvideo {
            box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
        }
        .dropdown-toggle,
        .navbar-brand,
        .check {
            color: #eee;
        }
        .navbar {
            border-radius: 0;
        }
        h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    </style>
</head>

<body style="background:#eee">
    <nav class="navbar" style="background: #4f842a">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="prof_dashboard.php"><i class="fa-solid fa-chalkboard-user"></i> Learning Management System</a>
            </div>
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

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div style="border-radius: 0px;padding:10px;background:#fff;" id="divvideo">
                    <h2>List of Student</h2>
                    <table id="example1" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Student</th>
                                <th>Age</th>
                                <th>Gender</th>
                            </tr>
                        </thead>
                    </table>
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
        $(document).ready(function(){
            $('.dropdown-toggle').dropdown();
        });

        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
</body>
</html>
