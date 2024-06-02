<div class="offcanvas offcanvas-end" id="contact">
    
    <?php
    $errors = [];
    $errorMessage = '';

    if (!empty($_POST)) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

    if (empty($name)) {
        $errors[] = 'The name field is empty';
    }

    if (empty($email)) {
        $errors[] = 'The email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Your email is invalid';
    }

    if (empty($phone)) {
        $errors[] = 'The phone field is empty';
    }
    
    if (empty($message)) {
        $errors[] = 'The message field is empty';
    }

    if (empty($errors)) {
       $toEmail = 'oscar.di@me.com';
       $emailSubject = 'New email from your contact form';
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       $bodyParagraphs = (' <div>
                            <p>"Name: {$name}",</p>
                            <p>"Email: {$email}",</p>
                            <p>"Phone: {$phone}",</p>
                            <p>"Message: {$message}"</p>
                            </div>
                            ');
       $body = join(PHP_EOL, $bodyParagraphs);

       if (mail($toEmail, $emailSubject, $body, $headers)) {
           $successMessage = ('<div class="alert alert-success" role="alert">Thank you for your message. We will get back to you as soon as possible!</div>');
       } else {
           $errorMessage = ('<div class="alert alert-warning" role="alert">Something went wrong. Please try again!d</div>');
       }

    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
}

?>
    <div class="offcanvas-header">
        <h2 class="offcanvas-title">How Can We Help You?</h2>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <form  method="post" id="contact-form">
            
            <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
            
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your full name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email Address:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter a valid email address" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="phone" class="form-label">Phone Number:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter your phone number" name="phone">
            </div>
            <label for="message">Comments:</label>
            <textarea class="form-control" rows="5" id="message" name="message" style="margin-bottom: 30px;"></textarea>
            <button type="submit" value="Send" class="btn btn-primary">SUBMIT</button>
        </form>

 <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
 <script>


     const constraints = {
         name: {
             presence: { allowEmpty: false }
         },
         email: {
             presence: { allowEmpty: false },
             email: true
         },
         phone: {
             presence: { allowEmpty: false },
             phone: true
         },
         message: {
             presence: { allowEmpty: false }
         }
     };

     const form = document.getElementById('contact-form');
     form.addEventListener('submit', function (event) {

         const formValues = {
             name: form.elements.name.value,
             email: form.elements.email.value,
             phone: form.elements.phone.value,
             message: form.elements.message.value
         };


         const errors = validate(formValues, constraints);
         if (errors) {
             event.preventDefault();
             const errorMessage = Object
                 .values(errors)
                 .map(function (fieldValues) {
                     return fieldValues.join(', ')
                 })
                 .join("\n");

             alert(errorMessage);
         }
     }, false);
 </script>

    </div>
</div>

<!--<div class="offcanvas offcanvas-end" id="contact">
    <div class="offcanvas-header">
        <h2 class="offcan6jvas-title">How Can We Help  You?</h2>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <form method="post" action="/includes/sendmail.php" id="contactForm" novalidate>
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="name" class="form-control" id="name" placeholder="Enter your full name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter a valid email" name="email">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number:</label>
                <input type="phone" class="form-control" id="phone" placeholder="Enter a valid phone numer" name="phone">
            </div>
            <label for="message">Comments:</label>
            <textarea class="form-control" rows="5" id="message" name="text" style="margin-bottom: 30px;"></textarea>
            <button type="submit" value="Send" class="btn btn-primary">SUBMIT</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
-->