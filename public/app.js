let timeout;
let password = document.getElementById('passwordCheck');
let strengthBar = document.getElementById('strengthBar');
let testing = document.getElementById('progress');
let strengthInfo = document.getElementById('strengthInfo');
 
let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})');
let mediumPassword = new RegExp('((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,}))|((?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])(?=.{8,}))');

function checkPasswordStrength(PasswordParameter) {
    if(strongPassword.test(PasswordParameter)) {
         testing.innerHTML = '<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>';
         strengthBar.textContent = 'PASSWORD STRENGTH: STRONG';
         strengthInfo.textContent = '';
    } else if(mediumPassword.test(PasswordParameter)) {
         testing.innerHTML = '<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>';
         strengthBar.textContent = 'PASSWORD STRENGTH: MEDIUM';
         strengthInfo.textContent = 'It must contain one uppercase uppercase letter, one lowercase letter and a digit';
    } else {
         testing.innerHTML = '<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
         strengthBar.textContent = 'PASSWORD STRENGTH: WEAK';
         strengthInfo.textContent = 'It must be at least eight characters long';
    }
}

password.addEventListener("input", ()=> {
    clearTimeout(timeout);
    timeout = setTimeout(()=> checkPasswordStrength(password.value), 300);
});