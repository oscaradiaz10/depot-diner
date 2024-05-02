<!DOCTYPE html>
<html lang="en">
<head>
    <title>Depot Diner - About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include ("includes/links.php"); ?>
</head>
<body>
    <?php include ("includes/contact-form.php"); ?>
    
    <nav class="navbar navbar-expand-md bg-light sticky-top">
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
                        <a class="nav-link" href="#">Job Opportunities</a>
                    </li>
                </ul>
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#contact">Contact Us</button>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <img class="image-intro" src="media/shutterstock_581655208-lr-020522-120734.webp" alt="DD insde" width="100%">
    </div>

    <div class="container spacer-top text-center">
        <div class="row justify-content-center">
            <div class="col-11">
                <h1>Love Where You Work</h1>
                <p>If you want to work with friendly people in a fast and fun environment, we'd love to hear from you! As a new location, we're hiring in all areas of our diner.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <h3>Currently Hiring:</h3>
            <div class="campaign-line-wrapper">
                <svg class="position-absolute campaign-line" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 728.4 77.7" xml:space="preserve">
                    <path fill="currentColor" d="M0 37.5c8.1-4.6 15.1-7.9 20.3-10.1 10.3-4.4 18.5-6.8 28.2-9.7 5-1.5 11.3-3.3 19.8-5.3C74.4 11 85 8.6 99.1 7.1c11.2-1.2 19.7-1.3 24.7-1.3 13.8-.1 24.5.8 29.5 1.3 10.6 1.1 18.6 2.5 21.6 3.1 5.3 1 5.9 1.3 23.3 5.3 10.1 2.3 15.2 3.5 19.8 4.4 6.2 1.2 10.8 2 19.8 3.5 6.1 1 13.1 2.2 22.5 3.5 8.1 1.2 14.4 1.9 16.7 2.2 6 .7 15 1.8 26 2.6 10 .8 16.9 1.3 26 1.3 17.2 0 30.6-1.9 35.7-2.6 10.3-1.6 17.4-3.4 31.3-7 14.4-3.7 15.1-4.5 32.6-9.2 11-3 19.2-5.2 30.4-7.5 7.5-1.5 16.6-3.4 28.6-4.8 16.4-2 29.2-2 39.5-1.9 13.7.1 24.2 1 34.3 1.8 11 .9 19.2 1.8 26.4 2.6 8 .9 21.6 2.6 38.8 5.3 18.4 2.9 31.8 5.5 46.2 8.4 14.8 2.9 33.6 6.8 55.5 11.9v47.7H0V37.5z" id="curve"></path>
                    <text x="0" class="d-block d-xl-none">
                        <textPath xlink:href="#curve" startOffset="100%">
                            <animate attributeName="startOffset" from="0%" to="-10%" begin="0s" dur="10s" repeatCount="indefinite"></animate>
                            LINE COOKS ● SERVERS ● DISHWASHERS ● HOSTESS
                        </textPath>
                    </text>
                    <text x="0" class="d-none d-xl-block">
                        <textPath xlink:href="#curve" startOffset="100%">
                            <animate attributeName="startOffset" from="50%" to="-30%" begin="0s" dur="10s" repeatCount="indefinite"></animate>
                            LINE COOKS ● SERVERS ● DISHWASHERS ● HOSTESS
                        </textPath>
                    </text>
                </svg>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php"; ?>
</body>
</html>