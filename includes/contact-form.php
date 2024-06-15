<div class="offcanvas offcanvas-end" id="contact">
    <div class="offcanvas-header">
        <h2 class="offcanvas-title">How Can We Help You?</h2>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <form action="mail.php" method="POST">
            
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