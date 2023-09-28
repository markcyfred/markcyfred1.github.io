    const loadEmailJs = () => {
      const emailJsScript = document.createElement('script');
      emailJsScript.src = 'https://cdn.emailjs.com/sdk/2.3.2/email.min.js';
      document.body.appendChild(emailJsScript);
      emailJsScript.onload = initializeEmailJs;
    };

    const initializeEmailJs = () => {
      emailjs.init("S5ZyT6xvtS5a0cx5m"); 
      const contactForm = document.getElementById('contact-form');
      contactForm.addEventListener('submit', sendEmail);
    };

    const displayAlert = (message, success) => {
      Swal.fire({
        text: message,
        icon: success ? 'success' : 'error',
        timer: 5000, 
        toast: true,
        position: 'top-right',
        showConfirmButton: false
      });
    };

    const sendEmail = (event) => {
      event.preventDefault();
      const sendButton = document.getElementById('send-button');
      const originalButtonText = sendButton.innerHTML;
      sendButton.innerHTML = 'Sending your message...';
        const serviceValue = document.getElementById('serviceSelect').value;
       const hearAboutValue = document.getElementById('howDidYouFindSelect').value;

  const templateParams = {
    from_name: document.getElementById('name').value,
    from_email: document.getElementById('email').value,
    phone: document.getElementById('phone').value,
    company: document.getElementById('company').value,
    service: serviceValue,
    how_did_you_find_us: hearAboutValue,
    message: document.getElementById('message').value
  };

      emailjs.send('service_iwp0t2b', 'template_fy43gyk', templateParams)
        .then(function (response) {
          displayAlert('Message sent successfully!', true);
          document.getElementById('contact-form').reset();
        })
        .catch(function (error) {
          console.error('Error sending email:', error);
          displayAlert('An error occurred while sending the email. Please try again later.', false);
        })
        .finally(() => {
          sendButton.innerHTML = originalButtonText;
        });
    };
    
    loadEmailJs();