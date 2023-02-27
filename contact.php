<?php include "templates/header.php"; ?>
    <main class="container">
        <h1 class="text-center">Please Contact us</h1>
        <p class="text-center mb-3">Any issue regarding the website ? You want some more information about a mineral ?
            Contact us right nom !</p>
        <form method="POST" name="contactform" action="contact-form/contact-form-handler.php">
            <div class="row mb-1">
                <label class="col-sm-2 col-form-label" for='name'>Your Name</label>
                <div class="col-sm-10"><input class="form-control" type="text" name="name"></div>
            </div>
            <div class="row mb-1">
                <label class="col-sm-2 col-form-label" for='email'>Email Address</label>
                <div class="col-sm-10"><input class="form-control" type="text" name="email"></div>
            </div>
            <div class="row mb-1">
                <label class="col-sm-2 col-form-label" for="phone">Phone number</label>
                <div class="col-sm-10"><input class="form-control" type="tel" name="phone"></div>
            </div>
            <div class="row mb-1">
                <label class="col-sm-2 col-form-label" for="request">Request</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline p-0">
                        <input type="radio" name="request" id="issue" value="issue">
                        <label class="form-check-label" for="issue">
                            Issue
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="request" id="question" value="question">
                        <label class="form-check-label" for="question">
                            Question
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mb-1">
                <label class="col-sm-2 col-form-label" for="address">Address</label>
                <div class="col-sm-10 p-lg-4">
                    <div class="row mb-1">
                        <label class="col-sm-2" for="pc">Postal Code</label>
                        <input class="col  form-control" type="text" name="pc">
                        <label class="col-sm-2 text-center" for="city">City</label>
                        <input class="col form-control" type="text" name="city">
                    </div>
                    <div class="row">
                            <label class="col-3" for="street">Street name & number</label>
                            <input class="col form-control" type="text" name="street">

                    </div>
                </div>
            </div>
            <div class="mb-1">
                <label for='message'>Message :</label> <br>
                <textarea class="form-control" name="message" rows="5"></textarea>
            </div>
            <div class="mx-auto">
                <input type="submit" class="btn btn-success" value="Submit">
            </div>
        </form>


    </main>
<?php include "templates/footer.php"; ?>