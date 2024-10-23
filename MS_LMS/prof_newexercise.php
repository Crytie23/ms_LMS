<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Management System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            background: #eee;
        }

        .navbar {
            background: #2c3e50;
        }

        .navbar-brand {
            color: #fff;
        }

        .form-label {
            font-weight: bold;
        }

        .dropdown-toggle,
        .navbar-brand,
        .check {
            color: #eee;
        }

        .navbar {
            border-radius: 0;
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
        <h1>Create New Exercise</h1>
        <form id="lessonForm">
        <div class="form-group">
                <label for="lesson" class="form-label">Lesson:</label>
                <select id="text" name="lesson" class="form-control" required>
                </select>
            </div>
            <div class="form-group">
                <label for="question" class="form-label">Question:</label>
                <input type="text" id="question" name="question" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="selectfile" class="form-label">Select File Type:</label>
                <select id="selectfile" name="selectfile" class="form-control" required>
                    <option value="document">Document</option>
                    <option value="video">Video</option>
                </select>
            </div>
            <div class="form-group">
                <label for="file" class="form-label">Upload File:</label>
                <input type="file" id="file" name="file" class="form-control" accept=".pdf, .doc, .docx, .mp4, .mov" required>
                <small class="form-text text-muted">Accepted formats: PDF, DOC, DOCX, MP4, MOV.</small>
            </div>

            <button type="submit" id="uploadbtn" class="btn btn-primary"> Save </button>
        </form>
    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  
</body>

</html>
