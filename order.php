<?php include 'includes/header.php'; ?>
<?php include 'includes/shapes.php'; ?>
<section class="th-order-area space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="th-order-form">
                    <h2 class="sec-title text-center">Your Orders</h2>
                    <p class="text-center" style="color: green; font-style: italic;">
                        You won't be charged yet until the order is confirmed. We will contact you first for order
                        confirmation, then send an invoice on how to make payments.
                    </p>
                    <form id="order-form" class="th-order-form-wrap">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="order-name">Order Name:</label>
                                    <input style="color: green; font-weight: bold;" type="text" id="order-name" class="form-control" value="" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="order-price">Order Price:</label>
                                    <input style="color: green;font-weight:bold ;" type="text" id="order-price" class="form-control" value="" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Your Name:</label>
                                    <input type="text" id="name" class="form-control" placeholder="Enter your name">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required> <i class="fal fa-envelope"></i>
                                <div id="email-feedback" style="color: red;"></div>
                                <script>
                                    var emailInput = document.querySelector("#email");
                                    var emailFeedback = document.querySelector("#email-feedback");

                                    emailInput.addEventListener("input", function() {
                                        if (emailInput.validity.valid || emailInput.value === "") {
                                            emailFeedback.textContent = ""; // Clear error message when input is valid or empty
                                        } else {
                                            emailFeedback.textContent = "Your email is invalid. Please enter a valid email.";
                                        }
                                    });
                                </script>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
                                <div id="phone-code" style="color: blue;display: none;"></div>
                                <div id="phone-feedback" style="color: red;"></div>
                            </div>

                            <script>
                                var input = document.querySelector("#phone");
                                var phoneCodeDisplay = document.querySelector("#phone-code");
                                var phoneFeedback = document.querySelector("#phone-feedback");
                                var iti = window.intlTelInput(input, {
                                    separateDialCode: true,
                                    excludeCountries: ["in", "il"],
                                    preferredCountries: ["ke"]
                                });

                                // Function to update the phone number with the country code and ensure the correct number of digits
                                function updatePhoneNumber() {
                                    var countryData = iti.getSelectedCountryData();
                                    var dialCode = countryData.dialCode;
                                    var phoneNumber = input.value.replace(/\D/g, ''); // Remove non-digit characters

                                    // Display the phone code
                                    phoneCodeDisplay.textContent = "+" + dialCode;

                                    // Ensure the phone number conforms to the selected country's requirements
                                    if (phoneNumber.startsWith(dialCode)) {
                                        phoneNumber = phoneNumber.slice(dialCode.length); // Remove the dial code
                                    }

                                    // Update the phone number with the country code
                                    input.value = phoneNumber;

                                    // Provide live feedback on the phone number format
                                    if (phoneNumber.length !== 9) {
                                        phoneFeedback.textContent = "Your format is incorrect. Number should have 9 digits.";
                                    } else {
                                        phoneFeedback.textContent = "";
                                    }
                                }

                                // Listen for changes in the selected country
                                input.addEventListener("countrychange", updatePhoneNumber);

                                // Listen for input events to provide live feedback
                                input.addEventListener("input", updatePhoneNumber);
                            </script>

                            <div class="col-md-12">
                                <div class="form-group text-center">
                                    <button id="submitBtn" type="submit" class="btn btn-primary">Submit
                                        Order</button>
                                    <div id="loadingIcon" style="display: none;">Sending...</div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Retrieve parameters from URL
        const urlParams = new URLSearchParams(window.location.search);
        const orderName = urlParams.get('name');
        const orderPrice = urlParams.get('price');

        // Set values to form fields
        document.getElementById('order-name').value = orderName;
        document.getElementById('order-price').value = orderPrice;
    });

    // Initialize EmailJS with your user ID
    emailjs.init('FhXIz0zUnDqf0loBW');

    // Add event listener to the form submission
    document.getElementById('submitBtn').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Show loading icon
        document.getElementById('loadingIcon').style.display = 'block';

        // Get the form data
        const formData = {
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            phone: document.getElementById('phone').value,
            orderName: document.getElementById('order-name').value,
            orderPrice: document.getElementById('order-price').value
        };

        // Modify the phone number format to include the country code and spaces
        var selectedCountryData = iti.getSelectedCountryData();
        var dialCode = selectedCountryData.dialCode;
        var phoneNumber = document.getElementById('phone').value.replace(/\D/g, ''); // Remove non-digit characters
        phoneNumber = phoneNumber.replace(/(\d{3})(\d{3})(\d{3})/, "$1 $2 $3"); // Add spaces
        formData.phone = "+" + dialCode + " " + phoneNumber;

        // Send the form data using EmailJS
        emailjs.send('service_xfuei5t', 'template_pvopkgh', formData)
            .then(function(response) {
                console.log('Email sent successfully', response);
                // Use SweetAlert for success message
                swal({
                    title: 'Success!',
                    text: 'Your order has been submitted successfully!',
                    icon: 'success',
                    button: 'OK',
                    className: 'sweet-alert-custom',
                });
            })
            .catch(function(error) {
                console.error('Email sending failed', error);
                // Use SweetAlert for error message
                swal({
                    title: 'Error!',
                    text: 'There was an error submitting your order. Please try again later.',
                    icon: 'error',
                    button: 'OK',
                    className: 'sweet-alert-custom',
                });
            })
            .finally(function() {
                // Hide loading icon regardless of success or failure
                document.getElementById('loadingIcon').style.display = 'none';
            });
    });
</script>

<style>
    .sweet-alert-custom {
        font-family: Arial, sans-serif;
    }

    .sweet-alert-custom .swal-title {
        color: #333;
        font-size: 22px;
    }

    .sweet-alert-custom .swal-text {
        color: #555;
        font-size: 16px;
    }

    .sweet-alert-custom .swal-button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .sweet-alert-custom .swal-button:hover {
        background-color: #0056b3;
    }
</style>
<?php include 'includes/footer.php'; ?>