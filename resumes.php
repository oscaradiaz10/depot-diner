<?php
session_start();

// Redirect to login page if not authenticated
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumes Submitted</title>

    <?php include ("includes/links.php"); ?>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/index.php"><img src="media/Depot Diner.png" width="210px" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">Our Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="jobs.php">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://gotab.io/loc/depotdiner/spot/to-go/order/.9bpF0diqB8wqvqMclKDFP7Bw" target="_blank">Order Online</a>
                    </li>
                </ul>
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#contact">CONTACT US</button>
            </div>
        </div>
    </nav>

    <div class="container spacer-top">
        <h1>Submitted Resumes</h1>
        <?php
        if (isset($_GET['delete'])) {
            $fileToDelete = basename($_GET['delete']);
            $filePath = 'uploads/' . $fileToDelete;

            if (file_exists($filePath)) {
                if (unlink($filePath)) {
                    echo '<div class="alert alert-success">File ' . htmlspecialchars($fileToDelete) . ' has been deleted.</div>';
                } else {
                    echo '<div class="alert alert-danger">Unable to delete file ' . htmlspecialchars($fileToDelete) . '.</div>';
                }
            } else {
                echo '<div class="alert alert-danger">File not found: ' . htmlspecialchars($fileToDelete) . '.</div>';
            }
        }
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Resume</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $directory = 'uploads/';
                if (is_dir($directory)) {
                    $files = scandir($directory);
                    foreach ($files as $file) {
                        if ($file !== '.' && $file !== '..' && !is_dir($directory . $file)) {
                            echo '<tr>';
                            echo '<td>' . htmlspecialchars($file) . '</td>';
                            echo '<td><a href="' . $directory . $file . '" download class="btn btn-primary">Download</a></td>';
                            echo '<td><a href="?delete=' . urlencode($file) . '" class="btn btn-primary" onclick="return confirm(\'Are you sure you want to delete this resume?\')">Delete Resume</a></td>';
                            echo '</tr>';
                        }
                    }
                } else {
                    echo '<tr><td colspan="3">No resumes found.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
