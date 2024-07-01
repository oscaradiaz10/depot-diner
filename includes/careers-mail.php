<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form fields
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $experience = filter_var($_POST['experience'], FILTER_SANITIZE_STRING);
    $why = filter_var($_POST['why'], FILTER_SANITIZE_STRING);
    $favorite = filter_var($_POST['favorite'], FILTER_SANITIZE_STRING);
    $license = filter_var($_POST['license'], FILTER_SANITIZE_STRING);
    $commute = filter_var($_POST['commute'], FILTER_SANITIZE_STRING);
    $start = filter_var($_POST['start'], FILTER_SANITIZE_STRING);
    $meet = filter_var($_POST['meet'], FILTER_SANITIZE_STRING);
    $interest = isset($_POST['interest']) ? $_POST['interest'] : [];
    $shift = isset($_POST['shift']) ? $_POST['shift'] : [];

    if (!$name || !$email || !$phone || !$experience || !$why || !$favorite || !$license || !$commute || !$start || !$meet) {
        echo json_encode(["status" => "error", "message" => "All fields are required."]);
        exit;
    }

    $interestList = implode(", ", $interest);
    $shiftList = implode(", ", $shift);

    $to = "depotdiner@point25prop.com"; // Change to your email address
    $subject = "New Depot Diner Online Job Application from " . $name;

    $headers = "From: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    $message = "
    <html>
    <head>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .container {
            width: 88%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid rgb(171, 42, 61);
            border-radius: 10px;
            background-color: rgb(240, 239, 235);
        }
        .header {
            background-color: rgb(171, 42, 61);
            color: white;
            padding: 10px;
            text-align: left;
            border-radius: 10px 10px 0 0;
        }
        .content {
            padding: 20px;
        }
        .content p {
            margin: 0 0 10px;
        }
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
                <p><strong>Area of Interest:</strong> $interestList</p>
                <p><strong>Tell us your work experience:</strong><br />$experience</p>
                <p><strong>Why do you want to work at Depot Diner?</strong><br />$why</p>
                <p><strong>What's your favorite diner food?</strong><br />$favorite</p>
                <p><strong>Do you have a valid driver's license?</strong> $license</p>
                <p><strong>What's the distance of your commute?</strong><br />$commute</p>
                <p><strong>How soon can you start?</strong><br />$start</p>
                <p><strong>What's your shift availability?</strong> $shiftList</p>
                <p><strong>When can you meet?</strong><br />$meet</p>
            </div>
        </div>
    </body>
    </html>";

    if (mail($to, $subject, $message, $headers)) {
        echo json_encode(["status" => "success", "message" => "Your application was submitted successfully! We will get ack to you as soon as we can"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to send application.\ Please try again."]);
    }
}
?>
