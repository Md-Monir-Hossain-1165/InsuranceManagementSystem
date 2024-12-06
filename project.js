function home() {
    window.location.href = "index.html";
}




function toggleDashboard() {
    const policyDashboard = document.getElementById('policyDashboard');
    const currentDisplay = policyDashboard.style.display;

    // Toggle visibility based on the current state
    policyDashboard.style.display = currentDisplay === 'none' ? 'block' : 'none';
}
