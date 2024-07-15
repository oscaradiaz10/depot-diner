<!DOCTYPE html>
<html lang="en">
<head>
    <title>Depot Diner - Job Opportunities</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<?php include ("includes/links.php"); ?>

</head>

<body>

<script>
$(document).ready(function() {
    $(".careers-form").on("submit", function(e) {
        e.preventDefault(); // Prevent the default form submission

    var formData = new FormData(this); // Create a FormData object

        // AJAX request
        $.ajax({
            url: 'includes/careers-mail.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(result){
                if (result == 'success'){
                    $('.output_message').html('<div class="alert alert-success" role="alert">Thanks for your application. We will review your information and we\'ll get back to you as soon as possible!</div>');  
                } else {
                    $('.output_message').html('<div class="alert alert-warning" role="alert">There has been an error with your application. Please review all the fields and try again.</div>');
                }
            },
            error: function(xhr, status, error){
                $('.output_message').html('<div class="alert alert-danger" role="alert">There was an error processing your application. Please try again later.</div>');
            }
        });

        // Prevents default submission of the form after clicking on the submit button. 
        return false; 
    });
});
</script>

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
                        <a class="nav-link" href="#">Careers</a>
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
        <img class="image-intro" src="media/img_0121.webp" alt="DD insde" width="100%">
        <?php include ("includes/svg.php"); ?>
        <div class="image-intro-gradient"></div>
    </div>

    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-11">
                <h1>Love Where You Work</h1>
                <p>If you want to work with friendly people in a fast and fun environment, we'd love to hear from you!</p>
            </div>
        </div>
    </div>
    
    <div class="container spacer-top careers">
        <div class="row text-center">
            <h2>Currently Hiring</h3>
            <div class="col-lg-4 col-sm-6">
                <h4><i class="bi bi-arrow-right-circle"></i> Line Cooks</h4>
            </div>
            <div class="col-lg-4 col-sm-6">
                <h4><i class="bi bi-arrow-right-circle"></i> Servers</h4>
            </div>
            <div class="col-lg-4 col-sm-6">
                <h4><i class="bi bi-arrow-right-circle"></i> Dishwashers</h4>
            </div>
            <!--<div class="col-lg-3 col-sm-6">
                <h4><i class="bi bi-arrow-right-circle"></i> Hostess</h4>
            </div>-->
        </div>
    </div>

    <div class="container spacer-top">
        <div class="row">
            <hr style="margin-bottom: 5%;"/>
            <h2 style="margin-bottom: 30px;"><i class="bi bi-arrow-down-circle"></i> Apply Now!</h3>
            <div class="col">
                <form method="post" class="careers-form" action="includes/careers-mail.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-4 col-md-8 col-sm-12">
                            <div class="mb-4">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" required="required" data-error="First name is required" name="name">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-8 col-sm-12">
                            <div class="mb-4">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" required="required" data-error="Email address is required" name="email">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-8 col-sm-12">
                            <div class="mb-4">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone" required="required" data-error="Phone number is required" name="phone">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <label for="interests" class="form-label">Area of Interest <em>(Select all that apply)</em></label>
                            <div class="mb-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="interests1" value="Line Cook" name="interests[]">
                                    <label class="form-check-label" for="interests1">Line Cook</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="interests2" value="Server" name="interests[]">
                                    <label class="form-check-label" for="interests2">Server</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="interests3" value="Dishwasher" name="interests[]">
                                    <label class="form-check-label" for="interests3">Dishwasher</label>
                                </div>
                                <!--<div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="interests4" value="Hostess" name="interests[]">
                                    <label class="form-check-label" for="interests4">Hostess</label>
                                </div>-->
                            </div>
                        </div>
                        <hr style="margin: 5% 0;"/>
                        <div class="col-lg-6 col-md-12">
                            <label for="why">Why do you want to work at Depot Diner?</label>
                            <textarea class="form-control" rows="5" id="why" name="why" required="required" data-error="Please answer this question" style="margin-top: 10px; margin-bottom: 30px;"></textarea>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <label for="favorite">What's your favorite diner food?</label>
                            <textarea class="form-control" rows="5" id="favorite" name="favorite" required="required" data-error="Please answer this question" style="margin-top: 10px; margin-bottom: 30px;"></textarea>
                        </div>
                        <hr style="margin: 5% 0;"/>
                        <div class="col-lg-4">
                            <label for="license" class="form-label">Do you have a valid driver's license?</label>
                            <div class="mb-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="licenseYes" value="Yes" name="license" required>
                                    <label class="form-check-label" for="licenseYes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="licenseNo" value="No" name="license" required>
                                    <label class="form-check-label" for="licenseNo">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <label for="commute">What's the distance of your commute?</label>
                            <textarea class="form-control" rows="2" id="commute" name="commute" required="required" data-error="Please answer this question" style="margin-top: 10px; margin-bottom: 30px;"></textarea>
                        </div>
                        <hr style="margin: 5% 0;"/>
                        <div class="col-lg-4 col-md-12">
                            <label for="start">How soon can you start?</label>
                            <textarea class="form-control" rows="4" id="start" name="start" required="required" data-error="Please answer this question" style="margin-top: 10px; margin-bottom: 30px;"></textarea>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <label for="shift">What days and hours are you available to work?</label>
                            <textarea class="form-control" rows="4" id="shift" name="shift" required="required" data-error="Please answer this question" style="margin-top: 10px; margin-bottom: 30px;"></textarea>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <label for="meet">When can you meet?</label>
                            <textarea class="form-control" rows="4" id="meet" name="meet" required="required" data-error="Please answer this question" style="margin-top: 10px; margin-bottom: 30px;"></textarea>
                        </div>
                        <hr style="margin: 5% 0;"/>
                        <div class="col-lg-6 col-md-12">
                            <label for="previousJobs">Previous Jobs <em>(Location, Position, Dates of Employment, Duties)</em></label>
                            <textarea class="form-control" rows="5" id="previousJobs" name="previousJobs" required="required" data-error="Please answer this question" style="margin-top: 10px; margin-bottom: 30px;"></textarea>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <label for="education">Education <em>(School, Graduation Date)</em></label>
                            <textarea class="form-control" rows="5" id="education" name="education" required="required" data-error="Please answer this question" style="margin-top: 10px; margin-bottom: 30px;"></textarea>
                        </div>
                        <hr style="margin: 5% 0;"/>
                        <div class="col-lg-8 col-md-12">
                            <label for="references">References</label>
                            <textarea class="form-control" rows="3" id="references" name="references" required="required" data-error="Please answer this question" style="margin-top: 10px; margin-bottom: 30px;"></textarea>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <label for="resume">Attach Resume</label>
                            <input type="file" class="form-control" id="resume" required="required" data-error="A resume is required" name="resume" style="margin-top: 10px; margin-bottom: 30px;"/>
                        </div>
                    </div>                    
                    <button type="submit" value="Send" name="send" class="btn btn-primary" style="margin-bottom: 30px;">SUBMIT APPLICATION</button>
                    <div class="output_message"></div>
                </form>
            </div>
            <hr style="margin-top: 5%;"/>
        </div>    
    </div>

    <?php include "includes/footer.php"; ?>
</body>
</html>