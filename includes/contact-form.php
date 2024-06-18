<div class="offcanvas offcanvas-end" id="contact">
    <div class="offcanvas-header">
        <h2 class="offcanvas-title">How Can We Help You?</h2>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <form id="contact-form" action="" method="post" role="form">
            <div class="messages"></div>
            <div class="controls">
                <div class="mb-3 mt-3">
                    <div class="form-group">
                        <label for="name">Your Name *</label>
                        <input type="text" class="form-control" id="form_name" placeholder="Enter your full name" name="name" required="required" data-error="Firstname is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <div class="form-group">
                        <label for="form_email">Email Address *</label>
                        <input type="text" class="form-control" id="form_email" placeholder="Enter a valid email address" name="email" required="required" data-error="Email address is required.">
                        <div class="help-block with-errors"></div>
                    </div> 
                </div>
                <div class="mb-3 mt-3">
                    <div class="form-group">
                        <label for="form_phone">Phone Number *</label>
                        <input type="text" class="form-control" id="form_phone" placeholder="Enter your phone number" name="phone" required="required" data-error="Phone number is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <div class="form-group">
                        <label for="form_message">Message *</label>
                        <textarea class="form-control" rows="5" id="form_message" name="message" placeholder="Add your message..." required="required" data-error="Please, add your message." style="margin-bottom: 30px;"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <button type="submit" value="Send" class="btn btn-primary" style="margin-bottom: 30px;">SUBMIT</button>
                <div class="row">
                    <div class="col-12">
                        <p class="text-muted" style="font-size: 16px;">These fields with <strong>*</strong> are required.</p>
                    </div>
                </div>
            </div>
        </form>
        <div id="success-message" style="display: none;">
        <hr />
        <div class="alert alert-success" role="alert">Thank you for your message. We will get back to you as soon as possible.</div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#contact-form').on('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        $.ajax({
            url: $(this).attr('includes/mail.php'), // The URL to send the data to
            method: $(this).attr('method'), // The HTTP method to use
            data: $(this).serialize(), // Serialize the form data
            success: function(response) {
                $('#success-message').show(); // Show the success message
                $('#contact-form')[0].reset(); // Optionally reset the form
            },
            error: function() {
                alert('There was an error sending the message.');
            }
        });
    });
});
</script>

<script src="includes/validate.js"></script>