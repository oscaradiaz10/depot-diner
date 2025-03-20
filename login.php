<?php
session_start();

// Define your password
$password = '90xa0MbOE12E!'; #your_secure_password

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['password']) && $_POST['password'] === $password) {
        $_SESSION['authenticated'] = true;
        header('Location: resumes.php');
        exit();
    } else {
        $error = 'Invalid password. Please try again.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depot Diner - Login Access</title>

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
        <h1>Admin Login</h1>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <form method="post">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="mb-4">
                        <label for="password">Enter Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
