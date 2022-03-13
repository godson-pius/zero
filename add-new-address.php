<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="author" content="Zero30">
    <meta name="description" content="Add New Address">
    <meta name="robots" content="index, follow">

    <!-- Stylesheets -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="assets/css/flickity.css">

    <title>Add New Address</title>
</head>


<body class="bg-offwhite container">

    <section id="header" class="constrain">
        <div class="navigation">
            <a href="#" class="back">
                <img class="svg" src="assets/images/icons/arrow-left.svg" height="5px" alt="Go back">
            </a>
        </div>
        <h1 class="title">Add New Address</h1>
    </section>

    <section id="add-new-address-form" class="constrain">
        <form action="">
            <div class="form-row">
                <div>
                    <input type="text" placeholder="Address name" name="address-name" required>
                </div>

                <div>
                    <div class="select">
                        <select name="location" id="location">
                            <option value="home">Home</option>
                            <option value="work">Work</option>
                        </select>
                        <!-- This is that arrow icon that comes up on a select input -->
                        <div class="chevron-icon">
                            <img class="svg" src="assets/images/icons/chevron-down.svg" height="7px" alt="Select">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div>
                    <input type="text" placeholder="Your Location" name="your-location" required>
                </div>

                <!-- i think this button helps to locate the user and automatically fills in his address in the input field above this comment. -->
                <div>
                    <button class="locate btn btn-white">
                        <img class="svg" src="assets/images/icons/locate.svg" height="14px" alt="Locate">
                    </button>
                </div>
            </div>

            <div class="form-row">
                <div>
                    <input type="text" placeholder="Name of the Consignee" name="consignee-name" required>
                </div>
            </div>

            <div class="form-row">
                <div>
                    <input type="text" placeholder="Phone number" name="phone-number" required>
                </div>
            </div>

            <div class="form-row">
                <div>
                    <input type="text" placeholder="Delivery note" name="delivery-note" required>
                </div>
            </div>

            <!-- This button submits this form. -->
            <div class="form-row">
                <button type="submit" class="btn btn-primary" name="complete">Complete</button>
            </div>
        </form>
    </section>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script> -->
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/flickity.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/smooth-scroll.js"></script>
</body>
</html>