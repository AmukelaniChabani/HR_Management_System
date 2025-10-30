// Toggle password visibility
const togglePasswordBtn = document.getElementById('togglePassword');
if (togglePasswordBtn) {
    togglePasswordBtn.addEventListener('click', function () {
        const passwordInput = document.getElementById('myInput');
        if (!passwordInput) return;

        const isPassword = passwordInput.type === 'password';
        passwordInput.type = isPassword ? 'text' : 'password';
        this.src = isPassword ? 'image/eye_open.svg' : 'image/eye_closed.svg';
    });
}