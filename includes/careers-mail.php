<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and validate input
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone');
    $interests = isset($_POST['interests']) ? implode(", ", $_POST['interests']) : 'None';
    $why = filter_input(INPUT_POST, 'why');
    $favorite = filter_input(INPUT_POST, 'favorite');
    $license = filter_input(INPUT_POST, 'license');
    $commute = filter_input(INPUT_POST, 'commute');
    $start = filter_input(INPUT_POST, 'start');
    $shift = filter_input(INPUT_POST, 'shift');
    $meet = filter_input(INPUT_POST, 'meet');
    $previousJobs = filter_input(INPUT_POST, 'previousJobs');
    $education = filter_input(INPUT_POST, 'education');
    $references = filter_input(INPUT_POST, 'references');
    
    // File upload handling
    $resumeUploaded = false;
    $resumeLink = '';
    $uploadError = '';

    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == UPLOAD_ERR_OK) {
        $uploadDir = '../uploads/';
        $originalFileName = basename($_FILES['resume']['name']);
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        
        // Sanitize name for use in filename
        $sanitizedName = preg_replace('/[^a-zA-Z0-9_-]/', '-', strtolower($name));
        $currentDate = date('m-d-y'); // Format: mm-dd-yy

        // Create new filename
        $newFileName = 'resume-' . $sanitizedName . '-' . $currentDate . '.' . $fileExtension; //concatenate file name
        $uploadFile = $uploadDir . $newFileName;

        // Create the uploads directory if it does not exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        
        if (move_uploaded_file($_FILES['resume']['tmp_name'], $uploadFile)) {
            $resumeUploaded = true;
            $resumeLink = $_SERVER['HTTP_ORIGIN'] . '/' . $uploadFile; // Create a link to the uploaded file
        }
    }
    // Email details
    $to = "oscar.di@me.com, depotdiner@point25prop.com";
    $subject = "New Online Job Application from " . $name;
    $headers = "From: careers@point25prop.com\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";

    // Construct email message
    $body = "
        <html>
        <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; }
            .container { width: 88%; margin: 0 auto; padding: 20px; border: 1px solid rgb(171, 42, 61); border-radius: 15px; background-color: rgb(240, 239, 235); }
            .header { background-color: rgb(171, 42, 61); color: white; padding: 10px; text-align: left; border-radius: 10px 10px 0 0; }
            .content { padding: 20px; }
            .content p { margin: 0 0 10px; }
        </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <img src='https://point25prop.com/media/Depot%20Diner.png' width='210px' alt='logo'>
                </div>
                <div class='content'>
                    <p><strong>Name:</strong> $name</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Phone:</strong> $phone</p>
                    <p><strong>Area of Interest:</strong> $interests</p>
                    <hr />
                    <p><strong>Why do you want to work at Depot Diner?</strong><br />$why</p>
                    <p><strong>What's your favorite diner food?</strong><br />$favorite</p>
                    <p><strong>Do you have a valid driver's license?</strong><br /> $license</p>
                    <p><strong>What's the distance of your commute?</strong><br />$commute</p>
                    <p><strong>How soon can you start?</strong><br />$start</p>
                    <p><strong>What's your shift availability?</strong><br/>$shift</p>
                    <p><strong>When can you meet?</strong><br />$meet</p>
                    <p><strong>Previous Jobs:</strong><br />$previousJobs</p>
                    <p><strong>Education:</strong><br />$education</p>
                    <p><strong>References:</strong><br />$references</p>
                    <hr />
                    <p><strong>View resume here:</strong> $resumeLink</p>
                </div>
            </div>
        </body>
        </html>";

    // Send email

    $send_email = mail($to, $subject, $body, $headers);
        
    echo ($send_email) ? 'success' : 'error';
}
?>