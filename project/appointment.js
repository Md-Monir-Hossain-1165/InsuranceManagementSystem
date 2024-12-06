document.getElementById('appointmentForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from reloading the page
    
    var formData = new FormData(this); // Get form data

    // Send the form data via AJAX
    fetch('appointment.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        // Display success or error message
        document.getElementById('appointmentDis').innerHTML = '<div class="alert alert-success">' + data + '</div>';
    })
    .catch(error => {
        document.getElementById('appointmentDis').innerHTML = '<div class="alert alert-danger">Error scheduling appointment: ' + error + '</div>';
    });
});

function displayAppointments() {
    let appointments = JSON.parse(localStorage.getItem('appointment')) || [];
    let res = '';
  
    appointments.forEach((appointment, index) => {
        res += `
            <div id="appointmentDetails" class="col-4" style="margin-top: 40px;">
                <h2 class="mb-3">Appointment Details ${index + 1}</h2>
                <p><strong>Name:</strong> ${appointment.N}</p>
                <p><strong>Number:</strong> ${appointment.C}</p>
                <p><strong>Date:</strong> ${appointment.D}</p>
                <p><strong>Time:</strong> ${appointment.T}</p>
                <p><strong>Subject:</strong> ${appointment.S}</p>
                <p><strong>Provider:</strong> ${appointment.P}</p>
                <p><strong>Location:</strong> ${appointment.L}</p>
            </div>
        `;
    });

    document.getElementById("appointmentDis").innerHTML = res;
}


