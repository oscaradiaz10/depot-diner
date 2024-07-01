<?php
    if (isset($_REQUEST['name'],$_REQUEST['email'],$_REQUEST['phone'],$_REQUEST['message'])) {
        
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $message = $_REQUEST['message'];
        
        // Set your email address where you want to receive emails. 
        $to = 'depotdiner@point25prop.com';
        
        $subject = 'New message from Depot Diner from ' . $name;

        // Email headers for HTML email
        $headers = "From: ".$name." <".$email."> \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";

        // Email structure
        $full_message = "
        <html>
        <head>
        <style>
            body {font-family: Arial, sans-serif;
                line-height: 1.6;
            }
            .container {width: 88%;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid rgb(171, 42, 61);
                border-radius: 10px;
                background-color: rgb(240, 239, 235);
            }
            .header {background-color: rgb(171, 42, 61);
                color: white;
                padding: 10px;
                text-align: left;
                border-radius: 10px 10px 0 0;
            }
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
                <p><strong>Message:</strong><br />$message</p>
            </div>
        </div>
    </body>
    </html>";
        
        $send_email = mail($to, $subject, $full_message, $headers);
        
        echo ($send_email) ? 'success' : 'error';
    }
?>