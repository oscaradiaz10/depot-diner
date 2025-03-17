<!DOCTYPE html>
<html lang="en">
<head>
    <title>Depot Diner - Our Menu</title>
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
                        <a class="nav-link" href="/about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jobs.php">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://gotab.io/loc/depotdiner/spot/to-go/order/.9bpF0diqB8wqvqMclKDFP7Bw" target="_blank">Order Online</a>
                    </li>
                </ul>
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#contact">CONTACT US</button>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <img class="image-intro" src="media/IMG_4490.jpg" alt="DD insde" width="100%">
        <?php include ("includes/svg.php"); ?>
        <div class="image-intro-gradient"></div>
    </div>

    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-11">
                <h1>Depot Diner Specialties</h1>
                <p>Our location and menu were designed hand-in-hand to give you a nostalgic, 1960s-style dining experience. We're serving some of the best breakfast plates this side of Table Rock Lake, as well as grilled Certified Angus Beef burgers that are always fresh, never frozen. We also have gourmet pizza, ice cream, and a delicious assortment of homemade desserts.</p>
                <p>Around here, we treat you like family, which is why we use the highest quality ingredients, served with a smile.</p>
            </div>
            <hr style="margin: 5% 0;"/>
            <div class="col-12">
                <div class="menu-container">
                    <iframe class="responsive-menu" src="/media/Menu_v13_new.pdf" frameborder="0"></iframe>
                </div>
            </div>
        </div>       
    </div>

    <?php include ("includes/footer.php"); ?>

</body>
</html>
