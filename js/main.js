// Add any interactive features or validations here

// Example: Form validation for room booking
document.addEventListener('DOMContentLoaded', function() {
    const bookingForm = document.querySelector('form[action="php/add_reservation.php"]');
    
    if (bookingForm) {
        bookingForm.addEventListener('submit', function(event) {
            // Example validation
            const checkinDate = new Date(document.getElementById('checkin').value);
            const checkoutDate = new Date(document.getElementById('checkout').value);
            if (checkoutDate <= checkinDate) {
                alert('Check-Out date must be after Check-In date.');
                event.preventDefault();
            }
        });
    }
});
