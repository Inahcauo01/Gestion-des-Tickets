// // part sign in & sign up

document.querySelector('#signup').onclick = function (e) {
  document.querySelector('#login').classList.remove('form-section-active')

  document.querySelector('#signup').classList.remove('form-section-active')
  document.querySelector('#signup').classList.add('form-section-active')
  document.getElementById('signupForm').classList.remove('d-none')
  document.getElementById('loginForm').classList.remove('d-none')
  document.getElementById('signupForm').classList.remove('d-none')
  document.getElementById('loginForm').classList.add('d-none')
  document.getElementById("headerForm").textContent = "Sign Up to continue"


}

document.querySelector('#login').onclick = function (e) {
  document.querySelector('#signup').classList.remove('form-section-active')
  e.target.classList.remove('form-section-active')
  e.target.classList.add('form-section-active')
  document.getElementById('signupForm').classList.remove('d-none')
  document.getElementById('loginForm').classList.remove('d-none')
  document.getElementById('signupForm').classList.add('d-none')
  document.getElementById('loginForm').classList.remove('d-none')
  document.getElementById("headerForm").textContent = "Log in to continue"

}
// signup traitement
let fisrtName = document.querySelector("#fisrt-name");
let lastName = document.querySelector("#last-name");
let telephone = document.querySelector("#telephone");
let email = document.querySelector("#signupemail");
let passWord = document.querySelector("#signuppassword");

let firstNameErreur = document.querySelector("#firstName-erreur");
let lastNameErreur = document.querySelector("#lastName-erreur");
let telephoneErreur = document.querySelector("#telephone-erreur");
let emailErreur = document.querySelector("#email-erreur");
let passwordErreur = document.querySelector("#password-erreur");
let erreurMessage = document.querySelector("#erreur-message");

// end traitemnt signup

let regexFirstname = /^[^ ][a-zA-Z ]{3,15}$/;
let regexLastname = /^[^ ][a-zA-Z ]{3,15}$/;
let regexEmail = /(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))/;
let regexPassword = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/;
let regexTelephone = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
let signupForm = document.querySelector("#signupForm");
let loginForm=document.querySelector("#loginForm");
// login traitement

let emailLogin=document.querySelector("#email-login");
let passwordLogin=document.querySelector("#password-login");

let erreurSigninpemail=document.querySelector("#erreur-signinpemail");
let erreurSigninpassword=document.querySelector("#erreur-signinpassword");

let erreurDisplaylogin=document.querySelector("#erreur-displaylogin");
// end traitment login

loginForm.addEventListener('submit',(e)=>{
  if(regexEmail.test(emailLogin.value) == false){
    erreurSigninpemail.classList.remove("d-none")
    e.preventDefault();
  }
  emailLogin.onclick=()=>{
    erreurSigninpemail.classList.add("d-none")
  }
  if(regexPassword.test(passwordLogin.value) == false){
    erreurSigninpassword.classList.remove("d-none")
    e.preventDefault();
  }
  passwordLogin.onclick=()=>{
    erreurSigninpassword.classList.add("d-none")
  }
})







signupForm.addEventListener('submit', (e) => {

  if (regexFirstname.test(fisrtName.value) == false) {
    firstNameErreur.classList.remove('d-none');
    e.preventDefault();
  }
  fisrtName.onclick=()=>{
    firstNameErreur.classList.add('d-none');
  }
  if (regexLastname.test(lastName.value) == false) {
    lastNameErreur.classList.remove('d-none');
    e.preventDefault();
  }
  lastName.onclick=()=>{
    lastNameErreur.classList.add('d-none');
  }
  if (regexTelephone.test(telephone.value) == false) {
    telephoneErreur.classList.remove('d-none');
    e.preventDefault();
  }
  telephone.onclick=()=>{
    telephoneErreur.classList.add('d-none');
  }
  if (regexEmail.test(email.value) == false) {
    emailErreur.classList.remove('d-none');
    e.preventDefault();
  }
  email.onclick=()=>{
    emailErreur.classList.add('d-none');
  }
  if (regexPassword.test(passWord.value) == false) {
    passwordErreur.classList.remove('d-none');
    e.preventDefault();
  }
  passWord.onclick=()=>{
    passwordErreur.classList.add('d-none');
  }
});
