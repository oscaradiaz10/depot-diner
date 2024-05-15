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
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">Our Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Job Opportunities</a>
                    </li>
                </ul>
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#contact">CONTACT US</button>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <img class="image-intro" src="media/shutterstock_581655208-lr-020522-120734.webp" alt="DD insde" width="100%">
    </div>

    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-11">
                <h1>Love Where You Work</h1>
                <p>If you want to work with friendly people in a fast and fun environment, we'd love to hear from you! As a new location, we're hiring in all areas of our diner.</p>
            </div>
        </div>
    </div>
    
    <div class="container spacer-top careers">
        <div class="row text-center">
            <h2>Currently Hiring</h3>
            <div class="col-lg-3 col-sm-6">
                <h4><i class="bi bi-arrow-right-circle"></i> Line Cooks</h4>
            </div>
            <div class="col-lg-3 col-sm-6">
                <h4><i class="bi bi-arrow-right-circle"></i> Servers</h4>
            </div>
            <div class="col-lg-3 col-sm-6">
                <h4><i class="bi bi-arrow-right-circle"></i> Dishwashers</h4>
            </div>
            <div class="col-lg-3 col-sm-6">
                <h4><i class="bi bi-arrow-right-circle"></i> Hostess</h4>
            </div>
        </div>
    </div>

    <div class="container spacer-top">
        <div class="row">
            <hr>
            <h2><i class="bi bi-arrow-down-circle"></i> Apply Now!</h3>
            <div class="col">
                <form method="post" action="/includes/sendmail.php" id="contact-form">
                    <div class="row">
                        <div class="col-lg-4 col-md-8 col-sm-12">
                            <div class="mb-4">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="name" class="form-control" id="name" placeholder="Enter your full name" name="name">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-8 col-sm-12">
                            <div class="mb-4">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter a valid email" name="email">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-8 col-sm-12">
                            <div class="mb-4">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="phone" class="form-control" id="phone" placeholder="Enter a valid phone numer" name="phone">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <label for="interest" class="form-label">Area of Interest <em>(Select all that apply)</em></label>
                            <div class="mb-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Line Cook</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Server</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">Dishwasher</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                    <label class="form-check-label" for="inlineCheckbox4">Hostess</label>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="col-lg-4 col-md-12">
                            <label for="experience">Tell us your work experience:</label>
                            <textarea class="form-control" rows="3" id="experience" name="text" style="margin-top: 10px; margin-bottom: 30px;"></textarea>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <label for="why">Why do you want to work at Depot Diner?</label>
                            <textarea class="form-control" rows="3" id="why" name="text" style="margin-top: 10px; margin-bottom: 30px;"></textarea>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <label for="favorite">What's your favorite diner food?</label>
                            <textarea class="form-control" rows="3" id="favorite" name="text" style="margin-top: 10px; margin-bottom: 30px;"></textarea>
                        </div>
                        <hr/>
                        <div class="col-lg-4">
                            <label for="license" class="form-label">Do you have a valid drivers license?</em></label>
                            <div class="mb-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <label for="commute">What's the distance of your commute?</label>
                            <textarea class="form-control" rows="2" id="commute" name="text" style="margin-top: 10px; margin-bottom: 30px;"></textarea>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <label for="start">How soon can you start? </label>
                            <textarea class="form-control" rows="2" id="start" name="text" style="margin-top: 10px; margin-bottom: 30px;"></textarea>
                        </div>
                        <hr/>
                        <div class="col-lg-4 col-md-12">
                            <label for="shift" class="form-label">What's your shift availability? <em>(Select all that apply)</em></label>
                            <div class="mb-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Morning</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Noon</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                    <label class="form-check-label" for="inlineCheckbox3">Afternoon</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <label for="meet">When can you meet?</label>
                            <textarea class="form-control" rows="3" id="meet" name="text" style="margin-top: 10px; margin-bottom: 30px;"></textarea>
                        </div>
                    </div>                    
                    <button type="submit" class="btn btn-primary" style="margin-bottom: 30px;">SUBMIT FORM</button>
                </form>
            </div>
            <hr/>
        </div>    
    </div>

    <?php include "includes/footer.php"; ?>
</body>
</html>