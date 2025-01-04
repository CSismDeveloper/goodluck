<!-- Modal HTML -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contact Form -->
                <form class="contact-form-wrapper form-style" id="contact-form" action="insertcontact.php" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" type="text" name="con_name" placeholder="Name*" oninput="validateName(this)" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" type="email" name="con_email" placeholder="Email*" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" type="text" name="con_phone" placeholder="Phone Number" oninput="validatePhoneNumber(this)">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-0">
                                <textarea class="form-control textarea" name="con_message" placeholder="How can we help?" oninput="validateMessage(this)" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-0">
                                <button class="btn btn-theme btn-black" type="submit">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- End of Contact Form -->
            </div>
        </div>
    </div>
</div>

<!-- Include SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    // Form submission handling with SweetAlert
    document.getElementById('contact-form').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        // Show loading alert
        Swal.fire({
            title: 'Submitting...',
            text: 'Please wait while your inquiry is being submitted.',
            icon: 'info',
            allowOutsideClick: false,
            showConfirmButton: false,
            willOpen: () => {
                Swal.showLoading();
            }
        });

        // Create a FormData object
        const formData = new FormData(this);

        // Send the form data using fetch
        fetch('insertcontact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            Swal.close(); // Close the loading alert

            if (data.success) {
                // Close the modal
                const contactModal = bootstrap.Modal.getInstance(document.getElementById('contactModal'));
                contactModal.hide();

                // Show success message
                Swal.fire({
                    icon: 'success',
                    title: 'Message Sent',
                    text: 'We will contact you soon!',
                    timer: 2000,
                    showConfirmButton: false
                });
                // Reset the form
                document.getElementById('contact-form').reset();
            } else {
                // Show error message
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: data.error || 'Something went wrong. Please try again.',
                    timer: 2000,
                    showConfirmButton: false
                });
            }
        })
        .catch(error => {
            Swal.close(); // Close the loading alert
            console.error('Error:', error);
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'An unexpected error occurred.',
                timer: 2000,
                showConfirmButton: false
            });
        });
    });

    // Input validation functions
    function validatePhoneNumber(input) {
        input.value = input.value.replace(/[^0-9]/g, '').slice(0, 10);
    }

    function validateName(input) {
        input.value = input.value.replace(/[^0-9a-zA-Z,. ]/g, '');
    }

    function validateMessage(input) {
        input.value = input.value.replace(/[^0-9a-zA-Z,. ]/g, '');
    }
</script>

<!-- Bootstrap and JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript to Trigger Modal Automatically -->
<script>
    // Trigger the modal 5 seconds after page load
    document.addEventListener('DOMContentLoaded', () => {
        setTimeout(() => {
            const contactModal = new bootstrap.Modal(document.getElementById('contactModal'));
            contactModal.show();
        }, 5000); // 5000ms = 5 seconds
    });
</script>
