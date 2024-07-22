document.addEventListener('DOMContentLoaded', (event) => {
    var archiveLink = document.getElementById('archive-link');

    archiveLink.addEventListener('click', function(event) {
        event.preventDefault();
        $('#login-dialog').modal('show');
    });
});
