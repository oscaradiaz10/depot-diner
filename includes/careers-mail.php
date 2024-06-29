<?php
if (
    isset($_REQUEST['name'], $_REQUEST['email'], $_REQUEST['phone'], $_REQUEST['message'], $_REQUEST['interest'], 
    $_REQUEST['experience'], $_REQUEST['why'], $_REQUEST['favorite'], $_REQUEST['license'], $_REQUEST['commute'], 
    $_REQUEST['start'], $_REQUEST['shift'], $_REQUEST['meet'])
) {

    // Validate each input
    $errors = array();

    // Example validation (you can customize based on your specific requirements)
    if (empty($_REQUEST['name'])) {
        $errors[] = 'Name is required.';
    }
    if (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format.';
    }

     // If there are validation errors, output them
     if (!empty($errors)) {
        echo json_encode(array('status' => 'error', 'message' => implode('<br>', $errors)));
        exit;
    }

    // Sanitize inputs (example)
    $name = htmlspecialchars($_REQUEST['name']);
    $email = filter_var($_REQUEST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_REQUEST['phone']);
    $interest = htmlspecialchars(implode(', ', $_REQUEST['interest'])); // If 'interest' is an array
    $experience = htmlspecialchars($_REQUEST['experience']);
    $why = htmlspecialchars($_REQUEST['why']);
    $favorite = htmlspecialchars($_REQUEST['favorite']);
    $license = htmlspecialchars($_REQUEST['license']);
    $commute = htmlspecialchars($_REQUEST['commute']);
    $start = htmlspecialchars($_REQUEST['start']);
    $shift = htmlspecialchars(implode(', ', $_REQUEST['shift'])); // If 'shift' is an array
    $meet = htmlspecialchars($_REQUEST['meet']);

    // Set your email address where you want to receive emails.
    $to = 'oscar.di@me.com';
    
    $subject = 'New Depot Diner Online Application from ' . $name;

    // Email headers for HTML email
    $headers = "From: " . $name . " <" . $email . "> \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    // Email structure
    $full_message = "
    <html>
    <head>
    <style>
        body {font-family: Arial, sans-serif; line-height: 1.6;}
        .container {width: 92%; margin: 0 auto; padding: 20px; border: 1px solid rgb(171, 42, 61); border-radius: 10px; background-color: rgb(240, 239, 235);}
        .header {background-color: rgb(171, 42, 61); color: white; padding: 10px; text-align: left; border-radius: 10px 10px 0 0;}
        .content {padding: 20px;}
        .content p {margin: 0 0 10px;}
    </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <img src='https://oec.hsj.mybluehost.me/media/Depot%20Diner.png' width='210px' alt='logo'>
            </div>
            <div class='content'>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Area of Interest:</strong> $interest</p>
                <p><strong>Tell us your work experience!</strong><br />$experience</p>
                <p><strong>Why do you want to work at Depot Diner?</strong><br />$why</p>
                <p><strong>What's your favorite diner food?</strong><br />$favorite</p>
                <p><strong>Do you have a valid driver's license?</strong> $license</p>
                <p><strong>What's the distance of your commute?</strong><br />$commute</p>
                <p><strong>How soon can you start?</strong><br />$start</p>
                <p><strong>What's your shift availability?</strong> $shift</p>
                <p><strong>When can you meet?</strong><br />$meet</p>
            </div>
        </div>
    </body>
    </html>";
    
    $send_email = mail($to, $subject, $full_message, $headers);
    
    if ($send_email) {
        echo 'success';
    } else {
    echo json_encode(array('status' => 'error', 'message' => 'Missing required fields.'));
    }
}
?>
