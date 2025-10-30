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

//// Sidebar toggle functionality
document.getElementById("menuBtn").addEventListener("click", function() {
    document.getElementById("sidebar").classList.add("active");
});

document.getElementById("closeSidebar").addEventListener("click", function() {
    document.getElementById("sidebar").classList.remove("active");
});