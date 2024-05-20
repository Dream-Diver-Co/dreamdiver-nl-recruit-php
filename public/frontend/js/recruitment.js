
function openModal(modalId) {
    document.getElementById(modalId).style.display = "block";
}
function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
}
window.onclick = function(event) {
    const modalDreamJobs = document.getElementById('modalDreamJobs');
    const modalPerfectEmploy = document.getElementById('modalPerfectEmploy');
    if (event.target === modalDreamJobs) {
        closeModal('modalDreamJobs');
    } else if (event.target === modalPerfectEmploy) {
        closeModal('modalPerfectEmploy');
    }
}


