document.getElementById('reservation-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;
    const seats = document.getElementById('seats').value;

    // save reservation data (WIP)
    alert(`Reservation confirmed for ${name} on ${date} at ${time} for ${seats} seats.`);
});

