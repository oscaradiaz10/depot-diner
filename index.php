<!DOCTYPE html>
<html lang="en">
<head>
    <title>Depot Diner at Table Rock Lake</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-expand-md bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="media/Depot Diner.png" width="210px" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Job Opportunities</a>
                    </li>
                </ul>
                <button class="btn btn-primary" type="button">Contact Us</button>
            </div>
        </div>
    </nav>

    <?php include ("includes/gallery.php"); ?>

    <div class="container spacer-top text-center">
        <h1>Welcome to the Depot Diner</h1>
        <p>We're a 1960s-inspired dining destination on Table Rock Lake. Located next to the Hangar at Point 25 and just 200 feet from a newly renovated runway, the Depot Diner is a fun spot to grab a great meal and watch small planes come and go.</p>

        <p>We serve classic breakfast items, steaks, burgers, gourmet pizza, ice cream, and a delicious menu of desserts. So, stop on in. We'll be waiting with a hot grill, cold drinks, and friendly faces.</p>
    </div>

    <div class="d-flex spacer-top">
        <div class="p-2 flex-fill">

        </div>
        <div class="p-2 flex-fill">
            
        </div>
        <div class="p-2 flex-fill">
            
        </div>
    </div>

    <div class="container">
        <div class="row">  
            <div class="col">
                <img src="media/img_6898_jpg-crop-020522-120734.webp" width="100%" alt="side view">
            </div>
        </div>
    </div>

    <?php include ("includes/footer.php"); ?>

</body>
</html>
