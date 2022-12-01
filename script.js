document.querySelector('#login').onclick = function(e){
        e.preventDefault()
        console.log(e.target.classList)
    
}

document.querySelector('#signup').onclick = function(e){
    document.querySelector('#login').classList.remove('form-section-active')

    document.querySelector('#signup').classList.remove('form-section-active')
    document.querySelector('#signup').classList.add('form-section-active')
    document.getElementById('signupForm').classList.remove('d-none')
    document.getElementById('loginForm').classList.remove('d-none')
    document.getElementById('signupForm').classList.remove('d-none')
    document.getElementById('loginForm').classList.add('d-none')
    document.getElementById("headerForm").textContent = "Sign Up to continue"


}

document.querySelector('#login').onclick = function(e){
    document.querySelector('#signup').classList.remove('form-section-active')
    e.target.classList.remove('form-section-active')
    e.target.classList.add('form-section-active')
    document.getElementById('signupForm').classList.remove('d-none')
    document.getElementById('loginForm').classList.remove('d-none')
    document.getElementById('signupForm').classList.add('d-none')
    document.getElementById('loginForm').classList.remove('d-none')
    document.getElementById("headerForm").textContent = "Log in to continue"

}


