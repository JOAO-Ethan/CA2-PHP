<?php include "templates/header.php"; ?>
    <main class="container">
        <h1>Please Contact us</h1>
        <form method="POST" name="contactform" action="contact-form/contact-form-handler.php">
            <div class="row">
                <label class="col-sm-2 col-form-label" for='name'>Your Name:</label>
                <div class="col-sm-10"><input class="form-control" type="text" name="name"></div>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label" for='email'>Email Address:</label>
                <div class="col-sm-10"><input class="form-control" type="text" name="email"></div>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label" for="phone">Phone number:</label>
                <div class="col-sm-10"><input class="form-control" type="tel" name="phone" placeholder="0xx xxx xxxx"
                                              pattern="0[0-9]{2} [0-9]{3} [0-9]{4}"></div>
            </div>
            <div>
                <label for='message'>Message:</label> <br>
                <textarea class="form-control" name="message"></textarea>
            </div>
            <div class="mx-auto">
            <input type="submit" class="btn btn-success" value="Submit">
            </div>
        </form>


    </main><!-- /.container -->
<?php include "templates/footer.php"; ?>