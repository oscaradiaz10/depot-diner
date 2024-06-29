
<script>
$(document).ready(function() {
    $('.myform').on('submit',function(){
         
        // Add text 'loading...' right after clicking on the submit button. 
        $('.output_message').text('Loading...'); 
         
        var form = $(this);
        $.ajax({
            url: form.attr('action'),
            method: form.attr('method'),
            data: form.serialize(),
            success: function(result){
                if (result == 'success'){
                    $('.output_message').text('Message Sent!');  
                } else {
                    $('.output_message').text('Error Sending email!');
                }
            }
        });
         
        // Prevents default submission of the form after clicking on the submit button. 
        return false;   
    });
});
</script>

<div class="offcanvas offcanvas-end" id="contact">
    <div class="offcanvas-header">
        <h2 class="offcanvas-title">How Can We Help You?</h2>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <form method="post" class="myform" action="contact-mail.php">
            <input type="text" name="name" placeholder="Your Name" required><br>
            <input type="email" name="email" placeholder="Your Email" required><br>
            <textarea rows="4" cols="20" name="message" placeholder="Your Message"></textarea><br>
            <input type="submit" name="send" value="Send"> <span class="output_message"></span>
        </form>
        <!--<form id="contact-form" action="" method="post" role="form">
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
        </div>-->
    </div>
</div>