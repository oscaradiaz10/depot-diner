<div class="offcanvas offcanvas-end" id="contact">
    <div class="offcanvas-header">
        <h2 class="offcanvas-title">How Can We Serve You?</h2>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <form action="/action_page.php">
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
            <label for="comment">Comments:</label>
            <textarea class="form-control" rows="5" id="comment" name="text" style="margin-bottom: 30px;"></textarea>
            <button type="submit" class="btn btn-primary">SUBMIT</button>
        </form>
    </div>
</div>