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
    
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
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
                        <a class="nav-link" href="/menu.php">Our Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jobs.php">Job Opportunities</a>
                    </li>
                </ul>
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#contact">CONTACT US</button>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <img class="image-intro" src="media/img_0121-020522-121320.webp" alt="DD insde" width="100%">
    </div>

    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-xl-11 col-md-12">
                <h1>This isn't your typical family-owned restaurant </h1>
                <p>The Depot Diner is a family-owned restaurant that offers a 1960s dining experience in one of the most unique spots on Table Rock Lake. Located next to Table Rock Airport, the diner sits just 200 feet from an airstrip that was originally built in 1962.</p>
                <p>When Carol and Chuck Leininger, owners of the Depot Diner, bought a home near Lake Point Landing, they were inspired to not only bring the runway back to life but also open a quality restaurant and event center. Originally from Lincoln, Nebraska, the Leiningers love local places where friends meet and neighbors gather for a great meal and conversation. That's exactly what the Depot Diner brings to Golden, Missouri.</p>
            </div>
        </div>       
    </div>

    <div class="spacer-top"></div>
    
    <!-- THE DESIGN INSPIRATION -->
    <div class="container-fluid about-sections">
        <div class="row">
            <div class="col-12">
                <img class="about-img" src="media/img_2603.webp" alt="Inspiration">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <h3>The Design Inspiration</h3>
                            <p>A neighbor at Lake Point Landing is credited for sketching the concept of this nostalgic diner. And when a friend of the Leiningers had access to an East Coast vintage dining car, the full design inspiration for the Depot Diner was born. The diner is an open concept restaurant, where customers can sit at the counter or in a booth and watch the cooks grill up a great meal while catching up with friends.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="spacer-top"></div>
    
    <!-- HANGAR AT POINT 25 -->
    <div class="container-fluid about-sections">
        <div class="row">
            <div class="col-12">
                <img class="about-img" src="media/ariel-1.webp" alt="Hangar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <h3>Hangar at Point 25</h3>
                            <p>Since the diner is located right next to the airport, it came with a hangar that's perfect for private events and meetings. Hangar at Point 25 has become the home to beloved local events such as Chiggerfest, and hosting 4th of July concerts has become a new tradition. It will be available to rent soon. <strong>Stay posted for details!</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="spacer-top"></div>

    <!-- FRESH FOOD AND SERVICE WITH A SMILE -->
    <div class="container-fluid about-sections">
        <div class="row">
            <div class="col-12">
                <img class="about-img" src="media/shutterstock_581655208-lr.webp" alt="Hangar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <h3>Fresh Food & Service with a Smile</h3>
                            <p>We offer a great meal made with the freshest ingredients, served in a casual atmosphere. So, gather your friends and let us treat you like family.</p>
                            <button class="btn btn-primary" type="button"><a href="/menu.php">SEE OUR MENU</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="spacer-top"></div>
    
    <!-- A GREAT PLACE TO WORK -->
    <div class="container-fluid about-sections">
        <div class="row">
            <div class="col-12">
                <img class="about-img" src="media/img_0123.webp" alt="Hangar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <h3>A Great Place to Work</h3>
                            <p>If you're looking for a job working with friendly people in a fast and fun environment, we'd love to hear from you! As a new location, we're hiring in all areas of our diner, including line cooks, servers, and dishwashers.</p>
                            <button class="btn btn-primary" type="button"><a href="/jobs.php">APPLY HERE</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php"; ?>
</body>
</html>