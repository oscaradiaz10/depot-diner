
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
                    $('.output_message').html('<div class="alert alert-success" role="alert">Thank you for your message. We will get back to you as soon as possible!</div>');  
                } else {
                    $('.output_message').html('<div class="alert alert-warning" role="alert">There has been an error with your information. Please try again.</div>');
                }
            },
            error: function(){
                $('.output_message').html('<div class="alert alert-danger" role="alert">There was an error processing your request. Please try again later.</div>');
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
        <form method="post" class="myform" action="includes/contact-mail.php">
            <div class="controls">
                <div class="mb-3 mt-3">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="form_name" name="name" required="required" data-error="First name is required.">
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <div class="form-group">
                        <label for="form_email">Email Address</label>
                        <input type="text" class="form-control" id="form_email" name="email" required="required" data-error="Email address is required.">
                    </div> 
                </div>
                <div class="mb-3 mt-3">
                    <div class="form-group">
                        <label for="form_phone">Phone Number</label>
                        <input type="text" class="form-control" id="form_phone" name="phone" required="required" data-error="Phone number is required.">
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <div class="form-group">
                        <label for="form_message">Message</label>
                        <textarea class="form-control" rows="5" id="form_message" name="message" required="required" data-error="Please, add your message."></textarea>
                    </div>
                </div>
                <button type="submit" value="Send" name="send" class="btn btn-primary" style="margin-bottom: 30px;">SEND MESSAGE</button>
                <div class="output_message"></div>
            </div>
        </form>
    </div>
</div>