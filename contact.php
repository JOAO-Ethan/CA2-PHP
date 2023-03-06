<?php include "templates/header.php";
$counties = ["Carlow",
    "Cavan",
    "Clare",
    "Cork",
    "Donegal",
    "Dublin",
    "Dún Laoghaire–Rathdown",
    "Fingal",
    "South Dublin",
    "Galway",
    "Kildare",
    "Kilkenny",
    "Laois",
    "Leitrim",
    "Limerick",
    "Longford",
    "Louth",
    "Mayo",
    "Meath",
    "Monaghan",
    "Offaly",
    "Roscommon",
    "Sligo",
    "Tipperary",
    "Waterford",
    "Westmeath",
    "Wexford",
    "Wicklow"];
?>
    <main class="container">
        <h1 class="text-center">Please Contact us</h1>
        <p class="text-center mb-3">Any issue regarding the website ? You want some more information about a mineral ?
            Join us ?
            Contact us right nom !</p>

        <p class="text-danger">
            <?php
            if (!empty($errors)) {
                echo nl2br($errors);
            }
            ?>
        </p>
        <form method="POST" name="contactform" action="contact-form-handler.php">
            <div class="row mb-1">
                <label class="col-sm-2 col-form-label" for='name' >Your Name<span class="text-danger">*</span></label>
                <div class="col-sm-10"><input class="form-control" type="text" name="name" required></div>
            </div>
            <div class="row mb-1">
                <label class="col-sm-2 col-form-label" for='email'>Email Address<span class="text-danger">*</span></label>
                <div class="col-sm-10"><input class="form-control" type="text" name="email" required></div>
            </div>
            <div class="row mb-1">
                <label class="col-sm-2 col-form-label" for="phone">Phone number<span class="text-danger">*</span></label>
                <div class="col-sm-10"><input class="form-control" type="tel" name="phone"
                                              pattern="0[0-9]{2} [0-9]{3} [0-9]{4}" required></div>
            </div>
            <div class="row mb-1">
                <label class="col-sm-2 col-form-label" for="request">Request<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline p-0">
                        <input type="radio" name="request" id="issue" value="issue" required>
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
                    <div class="form-check form-check-inline">
                        <input type="radio" name="request" id="asso" value="association">
                        <label class="form-check-label" for="asso">
                            Join the association
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mb-1">
                <label class="col-sm-2 col-form-label" for="address">Address</label>
                <div class="col-sm-10 p-lg-4">
                    <div class="row mb-1">
                        <label class="col-sm-2" for="county">County<span class="text-danger">*</span></label>
                        <select class="col form-control" name="county">
                            <option value="" selected>--Select a County--</option>
                            <?php
                            foreach($counties as $county){
                                echo "<option value=strtolower($county)>$county</option>";
                            }
                            ?>
                        </select>
                        <label class="col-sm-2 text-center" for="city">City<span class="text-danger">*</span></label>
                        <input class="col form-control" type="text" name="city" required>
                    </div>
                    <div class="row">
                        <label class="col-3" for="street">Street name & number<span class="text-danger">*</span></label>
                        <input class="col form-control" type="text" name="street" required>
                        <label class="col-sm-2" for="pc">Postal Code<span class="text-danger">*</span></label>
                        <input class="col form-control" type="text" name="pc" pattern="[A-Z][0-9]{2} [A-Z0-9]{4}" required>
                    </div>
                </div>
            </div>
            <div class="mb-1">
                <label for='message'>Message<span class="text-danger">*</span></label> <br>
                <textarea class="form-control" name="message" rows="10" required></textarea>
            </div>
            <div class="mx-auto text-center">
                <input type="submit" class="btn btn-success" value="Submit">
            </div>
        </form>


    </main>
<?php include "templates/footer.php"; ?>