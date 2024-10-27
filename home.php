<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .wrapper {
            display: flex;
        }
        #sidebar {
            width: 250px;
            height: 100vh;
            background: #343a40;
            color: #fff;
        }
        #sidebar ul {
            list-style: none;
            padding: 0;
        }
        #sidebar ul li {
            padding: 15px;
            font-size: 18px;
        }
        #sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
        }
        #sidebar ul li:hover {
            background: #495057;
        }
        #content {
            width: 100%;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="applications.php">Applications</a></li>
                <li><a href="vacancy.php">Vacancy</a></li>
                <li><a href="status.php">Status</a></li>
                <li><a href="category.php">Category</a></li>
                <li><a href="users.php">Users</a></li>
                <li><a href="settings.php">Settings</a></li>
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="content">
            <h2>Dashboard</h2>
            <p>Welcome to your dashboard. This is where you can manage applications, view vacancies, and change settings.</p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
