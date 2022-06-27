// registration validation
const data = {
    name: {
        value: "",
        valid: false,
        touched: false,
    },
    lastName: {
        value: "",
        valid: false,
        touched: false,
    },
    email: {
        value: "",
        valid: false,
        touched: false,
    },
    login: {
        value: "",
        valid: false,
        touched: false,
    },
    password: {
        value: "",
        valid: false,
        touched: false,
    },
    confirmPassword: {
        value: "",
        valid: false,
        touched: false,
    },
}
function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}



const form = document.querySelector(".registration__form");
const fields = form.querySelectorAll('.form__input');
const formBtn = document.querySelector(".registartion__btn");



function validete(field) {
    switch (field.name) {
        case "name":
            return field.value.length > 0;
        case "lastName":
            return field.value.length > 0;
        case "email":
            return validateEmail(field.value);
        case "login":
            return `${field.value.length}` > 3;
        case "password":
            return field.value.length > 4;
        case "confirmPassword":
            return field.value == data.password.value;
    }
}


fields.forEach((field) => {
    field.addEventListener('input', (e) => {
        data[e.target.name].value = e.target.value;
        if (data[e.target.name].touched === false) {
            data[e.target.name].touched = true;
        }
        data[e.target.name].valid = validete(e.target);
    });
});


fields.forEach((field, i) => {
    field.addEventListener("input", (e) => {
        if (data[field.name].touched) {
            if (data[field.name].valid === false) {
                field.style["border-bottom"] = "3px inset red";
            }
            else {
                field.style["border-bottom"] = "3px inset #00D646";
            }
        }
        if (data.name.valid && data.lastName.valid && data.email.valid && data.login.valid && data.password.valid && data.confirmPassword.valid) {
            formBtn.removeAttribute("disabled", "false")
        }
        else {
            formBtn.setAttribute("disabled", "true")
        }
    })
})





const sessionMessageCont = document.querySelector(".register__session_message_cont");
const sessionMessageClose = document.querySelector(".register__session_message_close");

if(sessionMessageClose){
    sessionMessageClose.addEventListener("click", () => {
        sessionMessageCont.style.display = "none";
    })
}