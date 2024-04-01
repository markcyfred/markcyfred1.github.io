<?php include 'includes/header.php'; ?>
<?php include 'includes/shapes.php'; ?>
 <!--page under mantainance--> 
 
 <section class="page-under-maintenance">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 text-center">
                <img src="assets/img/error.png" alt="Under Maintenance" class="img-fluid mb-4">
            </div>
            <div class="col-md-6">
                <div class="page-under-maintenance-content text-center text-md-left">
                    <h1 class="display-4">Page Under Maintenance</h1>
                    <p class="lead">We're currently working on this page to enhance your experience. Please check back soon!</p>
                </div>
            </div>
        </div>
    </div>
</section>

 <!--page under mantainance-->

    <script>
        document.addEventListener("DOMContentLoaded", function () {
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
        document.getElementById('submitBtn').addEventListener('click', function (event) {
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
                .then(function (response) {
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
                .catch(function (error) {
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
                .finally(function () {
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