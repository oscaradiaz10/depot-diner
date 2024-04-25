<!DOCTYPE html>
<html lang="en">
<head>
    <title>Depot Diner - About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include ("includes/links.php"); ?>
</head>
<body>

    <nav class="navbar navbar-expand-md bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/index.php"><img src="media/Depot Diner.png" width="210px" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
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

    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12 round-right">
                <img class="image-contain" src="media/img_2603.webp" alt="Inspiration">
            </div>
            <div class="col-md-5 col-sm-12 justify-content-end">
                <h2>The Design Inspiration</h2>
                <p>A neighbor at Lake Point Landing is credited for sketching the concept of this nostalgic diner. And when a friend of the Leiningers had access to an East Coast vintage dining car, the full design inspiration for the Depot Diner was born. The diner is an open concept restaurant, where customers can sit at the counter or in a booth and watch the cooks grill up a great meal while catching up with friends.</p>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php"; ?>
</body>
</html>