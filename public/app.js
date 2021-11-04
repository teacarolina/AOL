let timeout;
let password = document.getElementById('passwordCheck');
let strengthBar = document.getElementById('strengthBar');
let testing = document.getElementById('progress');
let strengthInfo = document.getElementById('strengthInfo');
 
let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})');
let mediumPassword = new RegExp('((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,}))|((?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])(?=.{8,}))');

function checkPasswordStrength(PasswordParameter) {
    if(strongPassword.test(PasswordParameter)) {
       /*  strengthBar.style.backgroundColor = "green";  */
         testing.innerHTML = '<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>';
         strengthBar.textContent = 'PASSWORD STRENGTH: STRONG';
         strengthInfo.textContent = '';
    } else if(mediumPassword.test(PasswordParameter)) {
       /*  strengthBar.style.backgroundColor = "orange"; */
        testing.innerHTML = '<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>';
         strengthBar.textContent = 'PASSWORD STRENGTH: MEDIUM';
         strengthInfo.textContent = 'It must contain one uppercase uppercase letter, one lowercase letter and a digit';
    } else {
       /*  strengthBar.style.backgroundColor = "red"; */
         testing.innerHTML = '<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';
         strengthBar.textContent = 'PASSWORD STRENGTH: WEAK';
         strengthInfo.textContent = 'It must be at least eight characters long';
    }
}

password.addEventListener("input", ()=> {
    /*strengthBar.style.display = 'block';
     testing.innerHTML = '<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>';*/
    clearTimeout(timeout);
    timeout = setTimeout(()=> checkPasswordStrength(password.value), 300);
    if(password.value.length !== 0) {
        /*strengthBar.style.display != 'block';*/
    } else {
        /*strengthBar.style.display = 'none';*/
    } 
});

{/* <div class="progress">
<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div> */}