document.addEventListener('DOMContentLoaded', () => {

    const logoutLinks = document.querySelectorAll('.logout-link');

    if (!logoutLinks) return;

    logoutLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            const formId = this.dataset.logoutForm;
            const redirectUrl = this.dataset.logoutRedirect;

            if (!formId) {
                console.error('Logout form ID not specified in data-logout-form attribute.');
                return;
            }

            const logoutForm = document.getElementById(formId);
            if (!logoutForm) {
                console.error(`Logout form with ID "${formId}" not found.`);
                return;
            }

            swal.fire({
                title: 'Confirm Logout',
                text: 'Are you sure you want to log out from your account?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#0c8040',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, logout!'
            }).then((result) => {
                if (result.isConfirmed) {

                    axios.post(logoutForm.action)
                        .then(() => {
                            swal.fire({
                                title: 'Logged out!',
                                icon: 'success',
                                timer: 1500,
                                showConfirmButton: false,
                            }).then(() => {
                                window.location.href = redirectUrl || '/login';
                            });
                        })
                        .catch(() => {
                            swal.fire({
                                title: 'Logout failed',
                                text: 'Please try again later.',
                                icon: 'error',
                            });
                        });
                }
            });
        });
    });
});
