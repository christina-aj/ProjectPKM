const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

const togglePassword1 = document.querySelector('#togglePassword1');
const password1 = document.querySelector('#password1');

togglePassword.addEventListener('click', () => {
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    
    // Toggle the class for the eye icon
    togglePassword.classList.toggle('fa-eye');
    // Toggle the class for the slash icon
    togglePassword.classList.toggle('fa-eye-slash');
});

togglePassword1.addEventListener('click', () => {
    const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
    password1.setAttribute('type', type);
    
    // Toggle the class for the eye icon
    togglePassword1.classList.toggle('fa-eye');
    // Toggle the class for the slash icon
    togglePassword1.classList.toggle('fa-eye-slash');
});