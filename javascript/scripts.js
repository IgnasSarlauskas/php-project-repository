// Get the modal
let modalLogin = document.querySelector("#modalLogin");
let modalRegister = document.querySelector("#modalRegister");
// Get the button that opens the modal
let btnLogin = document.querySelector("#btnLogin");
let btnRegister = document.querySelector("#btnRegister");

// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close")[0];
let spanTwo = document.getElementsByClassName("close")[1];

// When the user clicks on the button, open the modal
btnLogin.onclick = function () {
    modalLogin.style.display = "block";
};
btnRegister.onclick = function () {
    modalRegister.style.display = "block";
};
// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modalLogin.style.display = "none";
};

spanTwo.onclick = function () {
    modalRegister.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modalLogin || event.target == modalRegister) {
        modalLogin.style.display = "none";
        modalRegister.style.display = "none";
    }
};


