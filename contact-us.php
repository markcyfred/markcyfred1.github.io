<?php include 'includes/header.php'; ?>
<?php include 'includes/shapes.php'; ?>
<div style="margin-top: -70px;margin-bottom: -70px;" class="space responsive-sec" id="responsive">
    <div class="responsive-shape"></div>
    <div class="container">
        <div class="responsive-area">
            <div class="device-ml">
                <div class="mockup">
                    <img src="assets/img/responsive/device-ml.png" alt="Mockup">
                </div>
                <div class="slider-ml">
                    <div class="responsive-slider th-carousel" data-slide-show="1" data-autoplay-speed="3000">
                        <div>
                            <img src="assets/img/responsive/M1.png" alt="Demo">
                        </div>
                        <div>
                            <img src="assets/img/responsive/M1a.png" alt="Demo">
                        </div>
                        <div>
                            <img src="assets/img/responsive/l1.png" alt="Demo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="device-xl">
                <div class="mockup">
                    <img src="assets/img/responsive/device-xl.png" alt="Mockup">
                </div>
                <div class="slider-xl">
                    <div class="responsive-slider th-carousel" data-slide-show="1" data-autoplay-speed="3000">
                        <div>
                            <img src="assets/img/responsive/M2.png" alt="Demo">
                        </div>
                        <div>
                            <img src="assets/img/responsive/M1b.png" alt="Demo">
                        </div>
                        <div>
                            <img src="assets/img/responsive/l2.png" alt="Demo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="device-lg">
                <div class="mockup">
                    <img src="assets/img/responsive/device-lg.png" alt="Mockup">
                </div>
                <div class="slider-lg">
                    <div class="responsive-slider th-carousel" data-slide-show="1" data-autoplay-speed="3000">
                        <div>
                            <img src="assets/img/responsive/M3.png" alt="Demo">
                        </div>
                        <div>
                            <img src="assets/img/responsive/M1c.png" alt="Demo">
                        </div>
                        <div>
                            <img src="assets/img/responsive/l3.png" alt="Demo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="device-xs">
                <div class="mockup">
                    <img src="assets/img/responsive/device-xs.png" alt="Mockup">
                </div>
                <div class="slider-xs">
                    <div class="responsive-slider th-carousel" data-slide-show="1" data-autoplay-speed="3000">
                        <div>
                            <img src="assets/img/responsive/M4.png" alt="Demo">
                        </div>
                        <div>
                            <img src="assets/img/responsive/M1d.png" alt="Demo">
                        </div>
                        <div>
                            <img src="assets/img/responsive/l4.png" alt="Demo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="responsive-tab-area">
            <span class="tab-text">Get Your</span>
            <div class="responsive-tab" data-asnavfor=".responsive-slider">
                <div class="tab-btn active">
                    <img src="assets/img/responsive/M1.png" alt="thumb">
                </div>
                <div class="tab-btn">
                    <img src="assets/img/responsive/M1a.png" alt="thumb">
                </div>
                <div class="tab-btn">
                    <img src="assets/img/responsive/l1.png" alt="thumb">
                </div>
            </div>
            <span class="tab-text">Customised Design</span>
        </div>
    </div>
</div>
<div class="space">
    <div class="container">
        <div class="row gy-4">
            <div class="col-xl-4 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon"><i class="fas fa-location-dot"></i></div>
                    <div class="media-body">
                        <h4 class="box-title">Our Office Address</h4><span class="contact-info_text">Kenya-fedha<br>Nairobi</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon"><i class="fas fa-phone"></i></div>
                    <div class="media-body">
                        <h4 class="box-title">Call Us Anytime</h4><span class="contact-info_text"><a href="tel:+65485965789">+254 792 966 620</a></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon"><i class="fas fa-envelope"></i></div>
                    <div class="media-body">
                        <h4 class="box-title">Send An Email</h4><span class="contact-info_text"><a href="mailto:mywebmarktechnologies@gmail.com" style="font-size: 12px;">mywebmarktechnologies@gmail.com</a> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<div class="bg-smoke space" data-bg-src="assets/img/bg/contact_bg_1.png">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="title-area mb-35 text-xl-start text-center"><span class="sub-title">
                        <div class="icon-masking me-2"><span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span> <img src="assets/img/theme-img/title_shape_2.svg" alt="shape"></div>contact with us!
                    </span>
                    <h2 class="sec-title">Have Any Questions?</h2>
                    <p class="sec-text">
                        We are here to help you with any questions you may have. Reach out to us and we will get
                        back
                        to you as soon as possible.
                    </p>
                </div>
                <form id="contact-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input style="background-color: white!important;" type="text" class="form-control" name="name" id="name" placeholder="Your Name" required> <i class="fal fa-user"></i>
                        </div>
                        <div class="form-group col-md-6">
                            <input style="background-color: white!important;" type="email" class="form-control" name="email" id="email" placeholder="Email Address" required> <i class="fal fa-envelope"></i>
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

                        <div class="form-group col-md-6">
                            <select style="background-color: white!important;" name="service" id="serviceSelect" class="form-select" required>
                                <option value="" disabled selected hidden>Select Service</option>
                                <option value="Web Development">&#128187; Web Development</option>
                                <option value="Brand Marketing">&#128293; Brand Marketing</option>
                                <option value="UI/UX Designing">&#128640; UI/UX Designing</option>
                                <option value="Digital Marketing">&#128249; Digital Marketing</option>
                                <option value="SEO">&#128273; SEO</option>
                                <option value="Content Writing">&#9997; Content Writing</option>
                                <option value="App Development">&#128241; App Development</option>
                                <option value="E-commerce">&#128722; E-commerce</option>
                                <option value="Other">&#128712; Other Services</option>
                            </select>
                        </div>

                        <div class="form-group col-6">
                            <select style="background-color: white!important;" class="form-select" name="how_heard" id="howHeard" required>
                                <option value="" disabled selected>How did you hear about-us</option>
                                <option value="Google">&#128269; GoogleSearch</option>
                                <option value="Bing">&#128347; Bing</option>
                                <option value="Yahoo">&#128512; Yahoo</option>
                                <option value="Facebook">&#128247; Facebook</option>
                                <option value="Twitter">&#128640; Twitter</option>
                                <option value="Instagram">&#127988; Instagram</option>
                                <option value="LinkedIn">&#128100; LinkedIn</option>
                                <option value="TikTok">&#127916; TikTok</option>
                                <option value="Word of mouth">&#128101; Word of mouth</option>
                                <option value=" Online">&#127760; Online</option>
                                <option value=" TV">&#128250; TV</option>
                                <option value=" Radio">&#127911; Radio</option>
                                <option value=" Print">&#128240; Print</option>
                                <option value="Other">&#128712; Other</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <input style="background-color: white !important; width: 100%;" type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
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


                        <div class="form-group col-12">
                            <textarea style="background-color: white!important;" name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message" required></textarea> <i class="fal fa-comment"></i>
                        </div>
                        <div class="form-btn text-xl-start text-center col-12">
                            <button id="send-button" class="th-btn">Send Message<i class="fa-regular fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
<script>
    (function() {
        emailjs.init('FhXIz0zUnDqf0loBW');
    })();

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('send-button').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            // Change button text to "Sending..."
            document.getElementById('send-button').innerHTML = 'Sending...';

            // Get the form data
            var formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                service: document.getElementById('serviceSelect').value,
                how_heard: document.getElementById('howHeard').value,
                message: document.getElementById('message').value
            };


            // Modify the phone number format to include the country code and spaces
            var selectedCountryData = iti.getSelectedCountryData();
            var dialCode = selectedCountryData.dialCode;
            var phoneNumber = document.getElementById('phone').value.replace(/\D/g, ''); // Remove non-digit characters
            phoneNumber = phoneNumber.replace(/(\d{3})(\d{3})(\d{3})/, "$1 $2 $3"); // Add spaces
            formData.phone = "+" + dialCode + " " + phoneNumber;

            // Send the email
            emailjs.send('service_yhpy2pa', 'template_a0kkw7j', formData)
                .then(function(response) {
                    console.log('Email sent successfully', response);
                    // Change button text back to original
                    document.getElementById('send-button').innerHTML = 'Send Message<i class="fa-regular fa-arrow-right ms-2"></i>';
                    // Sweet alert
                    Swal.fire({
                        icon: 'success',
                        title: 'Message Sent!',
                        text: 'Thank you for contacting us, we will get back to you soon!',
                    });

                }, function(error) {
                    console.error('Email sending failed', error);
                    // Change button text back to original
                    document.getElementById('send-button').innerHTML = 'Send Message<i class="fa-regular fa-arrow-right ms-2"></i>';
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong! Please try again later.',
                    });
                });
        });
    });
</script>
<?php include 'includes/footer.php'; ?>