// section education content margines
const armBit = document.querySelectorAll(".educ-exper__cont_head_left")[0];
const microsoft = document.querySelectorAll(".educ-exper__cont_head_left")[1];
const college = document.querySelectorAll(".educ-exper__cont_head_left")[2];
const ugeek = document.querySelectorAll(".educ-exper__cont_head_right")[0];
const university = document.querySelectorAll(".educ-exper__cont_head_right")[1];


const armBitHeight = armBit.clientHeight;
ugeek.style["margin-top"] = armBitHeight + 30 + "px";
const ugeekHeight = ugeek.clientHeight;
microsoft.style["margin-top"] = ugeekHeight + 60 + "px";
const microHeight = microsoft.clientHeight;
university.style["margin-top"] = microHeight + 60 + "px";
const univerHeight = university.clientHeight;
college.style["margin-top"] = univerHeight + 60 + "px";







// section experience content margines
const justice = document.querySelectorAll(".educ-exper__cont_head_right")[2];
const fotonWork = document.querySelectorAll(".educ-exper__cont_head_left")[3];
const foton = document.querySelectorAll(".educ-exper__cont_head_right")[3];
const haytech = document.querySelectorAll(".educ-exper__cont_head_left")[4];
const lucky = document.querySelectorAll(".educ-exper__cont_head_right")[4];

const justiceHeight = justice.clientHeight;
fotonWork.style["margin-top"] = justiceHeight + 30 + "px";
const fotonWorkHeight = fotonWork.clientHeight;
foton.style["margin-top"] = fotonWorkHeight + 30 + "px";
const fotonHeight = foton.clientHeight;
haytech.style["margin-top"] = fotonHeight + 60 + "px";
const haytechHeight = haytech.clientHeight;
lucky.style["margin-top"] = haytechHeight + 90 + "px";







// scrollTop function
const headerLinks = document.querySelectorAll(".header__link");
const headerMobileLinks = document.querySelectorAll(".header__mobile-link");
const homeLogo = document.querySelector(".home__logo");
const homeInfoItem = document.querySelectorAll(".home__info_item");
const homeContLink = document.querySelectorAll(".home__cont_link");
const skillsTitle = document.querySelector(".skills__title");
const educationTitle = document.querySelector(".education__title");
const certificateTitle = document.querySelector(".certificate__title");
const experienceTitle = document.querySelector(".experience__title");
const projectsTitle = document.querySelector(".projects__title");
const projectsBot = document.querySelector(".projects__bot");
const projectsBack = document.querySelector(".projects-back__title");
const projectsBackItems = document.querySelectorAll(".projects-back__item");
const projectsBackBot = document.querySelector(".projects-back__bot");
const skillsItemLine = document.querySelectorAll(".skills__item_line");
const educatExpContHead = document.querySelectorAll(".educ-exper__cont_head")
const CertificProjectsItem = document.querySelectorAll(".certific-projects__item");
const educExperMobCont = document.querySelectorAll(".educ-exper-mob__cont");
const contactTitle = document.querySelector(".contact__title");
const arrInfo = ["Y", "e", "a", "r", " ", "o", "f", " ", "b", "i", "r", "t", "h", " ", "-", " ", "F", "e", "b", "r", "u", "a", "r", "y", " ", "1", "7", ".", " ", "2", "0", "0", "0", '<span class="green">.</span>'];
let indexInfo = 0;
let indexInfoBool = true;
// let homeContLinkBool = true;
let skillsTitleBool = true;
let educationTitleBool = true;
let certificateTitleBool = true;
let experienceTitleBool = true;
let projectsTitleBool = true;
let projectsBotBool = true;
let projectsBackBool = true;
let projectsBackItemsBool = true;
let projectsBackBotBool = true;
let skillsItemLineBool = true;
let educatExpContHeadBool = true;
let educatExpContHead2Bool = true;
let CertificProjectsItemBool = true;
let CertificProjectsItem2Bool = true;
let educExperMobContBool = true;
let educExperMobCont2Bool = true;
let contactTitleBool = true;
const arrEmail = ["G", "m", "a", "i", "l", " ", "-", " ", "s", "i", "m", "o", "n", "k", "a", "r", "a", "p", "e", "t", "y", "a", "n", "6", "0", "5", "@", "g", 'm', "a", "i", "l", ".", "c", "o", "m", '<span class="green">.</span>'];
let indexEmail = 0;
const arrPhone = ["P", "h", "o", "n", "e", " ", "N", "u", "m", "b", "e", "r", " ", "+", "(", "3", "7", "4", ")", "5", "5", "-", "3", "2", "-", "1", "4", "-", "1", "3", '<span class="green">.</span>'];
let indexPhone = 0;







// home SIMON kARAPETYAN spans event
const spanLetter = document.querySelectorAll(".span__letter");
const homeTitleLink = document.querySelector(".home__title_link");
let spanLettersBool = true;
let m = {};
let randomLettersArr = [];

for (let i = 0; i < 14; ++i) {
    let r = Math.floor(Math.random() * (14 - i));
    randomLettersArr.push(((r in m) ? m[r] : r) + 1);
    let l = 14 - i - 1;
    m[r] = (l in m) ? m[l] : l;
}

homeTitleLink.addEventListener("mouseenter", () => {
    if (spanLettersBool) {
        spanLettersBool = false;
        let i = 0;
        let setIntervalLetters = setInterval(() => {
            spanLetter[randomLettersArr[i]].classList.add("green");
            if (i === 13) {
                clearInterval(setIntervalLetters);
            }
            i++;
        }, 50)
    }
})
homeTitleLink.addEventListener("mouseleave", () => {
    if (!spanLettersBool) {
        spanLettersBool = true;
        let i = 0;
        let setIntervalLetters = setInterval(() => {
            if (spanLetter[randomLettersArr[i]].classList.contains("green")) {
                spanLetter[randomLettersArr[i]].classList.remove("green");
            }
            if (i === 13) {
                clearInterval(setIntervalLetters);
            }
            i++;

        }, 50)
    }
})








// home resume download
homeContLink[1].addEventListener("click", () => {
    homeContLink[1].style.display = 'none';
})







// home canvas ball
const canvas = document.querySelector("#canvas");
const ctx = canvas.getContext("2d");
let gameBall = true;
let gravity = 1.3;
let bounce = 0.7;
let xFriction = 0.1;

homeLogo.addEventListener("click", () => game(localStorage.getItem("mainColor")));

function game(ballColor) {
    let vx = 7;
    let vy;

    function init() {
        vy = (Math.random() * -15) + -5;
        ball = { x: canvas.width / 2, y: 100, radius: 30, color: ballColor };
        setInterval(draw, 1000 / 35);
        gameBall = false;
    }
    if (gameBall) {
        init()
    }
    else {
        vx = 7;
        ball = {
            x: Math.floor(Math.random() * canvas.width) - (ball.radius / 2),
            y: 10,
            radius: 30,
            color: ballColor
        };
    }
    function draw() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.beginPath();
        ctx.arc(ball.x, ball.y, ball.radius, 0, Math.PI * 2, false);
        ctx.fillStyle = ball.color;
        ctx.fill();
        ctx.closePath();

        ballMovement();
    }
    function ballMovement() {
        ball.x += vx;
        ball.y += vy;
        vy += gravity;
        if (ball.x + ball.radius > canvas.width || ball.x - ball.radius < 0) {
            vx *= -1;
        }
        if (ball.y + ball.radius > canvas.height) {
            ball.y = canvas.height - ball.radius;
            vy *= -bounce;
            if (vy < 0 && vy > -6) {
                vy = 0;
            }
            if (Math.abs(vx) < 1.1) {
                vx = 0;
            }
            xF();
        }
    }
    function xF() {
        if (vx > 0)
            vx = vx - xFriction;
        if (vx < 0)
            vx = vx + xFriction;
    }
}







// function for change main color
const mainColorGreen = document.querySelector(".main__color_green");
const mainColorAqua = document.querySelector(".main__color_aqua");
const mainColorPink = document.querySelector(".main__color_pink");
const mainColorYello = document.querySelector(".main__color_yello");
const homeSvgLetter = document.querySelector(".home__svg_letter").querySelector("path");
const homeSvgBorder = document.querySelector(".home__svg_border").querySelector("path");

if(!localStorage.getItem("mainColor")){
    localStorage.setItem("mainColor", "#00D646");
}
if (localStorage.getItem("mainColor")) {
    html.style.setProperty("--green", localStorage.getItem("mainColor"));
    html.style.setProperty("--green-hover", localStorage.getItem("mainColor"));
    homeSvgLetter.setAttribute('fill', localStorage.getItem("mainColor"));
    homeSvgBorder.setAttribute('stroke', localStorage.getItem("mainColor"));
    logoSvg.setAttribute('fill', localStorage.getItem("mainColor"));
    logoSvgBorder.setAttribute('stroke', localStorage.getItem("mainColor"));
    logoSvg1.setAttribute('fill', localStorage.getItem("mainColor"));
    logoSvgBorder1.setAttribute('stroke', localStorage.getItem("mainColor"));
}
let mainColorChange = (color, colorHov) => {
    html.style.setProperty("--green", color);
    html.style.setProperty("--green-hover", colorHov);
    homeSvgLetter.setAttribute('fill', color);
    homeSvgBorder.setAttribute('stroke', color);
    logoSvg.setAttribute('fill', color);
    logoSvgBorder.setAttribute('stroke', color);
    logoSvg1.setAttribute('fill', color);
    logoSvgBorder1.setAttribute('stroke', color);

    localStorage.setItem("mainColor", color);
}

mainColorGreen.addEventListener("click", () => mainColorChange("#00D646", "#00FF57"));
mainColorAqua.addEventListener("click", () => mainColorChange("#80FAFF", "#77f9fd"));
mainColorPink.addEventListener("click", () => mainColorChange("#DC378A", "#df3e8e"));
mainColorYello.addEventListener("click", () => mainColorChange("#CCE32E", "#cce435"));





function headerColors(num){
    for (let i = 0; i < headerLinks.length; i++) {
        headerLinks[i].style.color = "rgb(160, 183, 202)";
        headerMobileLinks[i].style.color = "rgb(160, 183, 202)";
    }
    headerLinks[num].style.color = "var(--green)";
    headerMobileLinks[num].style.color = "var(--green)";
}
function showItemBool(bool, item){
    if (bool) {
        bool = false;
        item.classList.add("show");
    }
}
function showItem(item, time){
    setTimeout(() => {
        item.classList.add("show");
    }, time)
}




// window scroll event
window.addEventListener("scroll", (e) => {
    const position = window.innerHeight / 1.10;
    if (homeInfoItem[0].getBoundingClientRect().top < window.innerHeight) {
        if (indexInfoBool) {
            indexInfoBool = false;
            setTimeout(() => {
                const infoInterval = setInterval(() => {
                    homeInfoItem[0].innerHTML += arrInfo[indexInfo++];
                    if (indexInfo === arrInfo.length) {
                        clearInterval(infoInterval)
                    }
                }, 70);
                setTimeout(() => {
                    const emailInterval = setInterval(() => {
                        homeInfoItem[1].innerHTML += arrEmail[indexEmail++];
                        if (indexEmail === arrEmail.length) {
                            clearInterval(emailInterval)
                        }
                    }, 70);
                    setTimeout(() => {
                        const phoneInterval = setInterval(() => {
                            homeInfoItem[2].innerHTML += arrPhone[indexPhone++];
                            if (indexPhone === arrPhone.length) {
                                clearInterval(phoneInterval)
                            }
                        }, 70);
                    }, 3000);
                }, 2500);
            }, 100)
        }
    }



    if (homeLogo.getBoundingClientRect().top < position) {
        headerColors(0);
    }
    if (homeContLink[0].getBoundingClientRect().top < position) {
        showItem(homeContLink[0], 0);
        showItem(homeContLink[1], 50);
    }
    if (skillsTitle.getBoundingClientRect().top < position) {
        showItemBool(skillsTitleBool, skillsTitle);
        headerColors(1);
    }
    if (educationTitle.getBoundingClientRect().top < position) {
        showItemBool(educationTitleBool, educationTitle);
        headerColors(2);
    }
    if (certificateTitle.getBoundingClientRect().top < position) {
        showItemBool(certificateTitleBool, certificateTitle);
        headerColors(3);
    }
    if (experienceTitle.getBoundingClientRect().top < position) {
        showItemBool(experienceTitleBool, experienceTitle);
        headerColors(4);
    }
    if (projectsTitle.getBoundingClientRect().top < position) {
        showItemBool(projectsTitleBool, projectsTitle);
        headerColors(5);
    }
    if (projectsBot.getBoundingClientRect().top < position) {
        showItemBool(projectsBotBool, projectsBot);
    }
    if (projectsBack.getBoundingClientRect().top < position) {
        showItemBool(projectsBackBool, projectsBack);
        headerColors(6);
    }
    if (projectsBackItems[0].getBoundingClientRect().top < position) {
        if (projectsBackItemsBool) {
            projectsBackItemsBool = false;
            projectsBackItems[0].classList.add("show");
            showItem(projectsBackItems[1], 50);
            showItem(projectsBackItems[2], 100);
            showItem(projectsBackItems[3], 150);
        }
    }
    if (projectsBackBot.getBoundingClientRect().top < position) {
        showItemBool(projectsBackBotBool, projectsBackBot);
    }
    if (skillsItemLine[0].getBoundingClientRect().top < position) {
        if (skillsItemLineBool) {
            skillsItemLineBool = false;
            let percentTime = 0;
            skillsItemLine.forEach(item => {
                setTimeout(() => {
                    item.style.width = `${item.getAttribute('data-percent')}%`;
                }, percentTime)
                percentTime += 50;
            });
        }
    }

    if (educatExpContHead[0].getBoundingClientRect().top < position) {
        if (educatExpContHeadBool) {
            educatExpContHeadBool = false;
            educatExpContHead[0].classList.add("show");
            showItem(educatExpContHead[2], 50);
            showItem(educatExpContHead[1], 100);
            showItem(educatExpContHead[3], 150);
            showItem(educatExpContHead[4], 200);
        }
    }
    if (educatExpContHead[5].getBoundingClientRect().top < position) {
        if (educatExpContHead2Bool) {
            educatExpContHead2Bool = false;
            educatExpContHead[5].classList.add("show");
            showItem(educatExpContHead[7], 50);
            showItem(educatExpContHead[6], 100);
            showItem(educatExpContHead[8], 150);
            showItem(educatExpContHead[9], 200);
        }
    }
    if (CertificProjectsItem[0].getBoundingClientRect().top < position) {
        if (CertificProjectsItemBool) {
            CertificProjectsItemBool = false;
            CertificProjectsItem[0].classList.add("show");
            showItem(CertificProjectsItem[1], 50);
            showItem(CertificProjectsItem[2], 100);
            showItem(CertificProjectsItem[3], 150);
        }
    }
    if (CertificProjectsItem[4].getBoundingClientRect().top < position) {
        if (CertificProjectsItem2Bool) {
            CertificProjectsItem2Bool = false;
            CertificProjectsItem[4].classList.add("show");
            showItem(CertificProjectsItem[5], 50);
            showItem(CertificProjectsItem[6], 100);
            showItem(CertificProjectsItem[7], 150);
        }
    }
    if (educExperMobCont[0].getBoundingClientRect().top < position) {
        showItemBool(educExperMobContBool, educExperMobCont[0]);
    }

    if (educExperMobCont[1].getBoundingClientRect().top < position) {
        showItemBool(educExperMobCont2Bool, educExperMobCont[1]);
    }


    if (contactTitle.getBoundingClientRect().top < position) {
        if(contactTitleBool){
            contactTitle.classList.add("show");
        }
        headerColors(7);
    }
})





// education experience mobile slide
const education = document.querySelector('.education');
const educExper = education.querySelectorAll(".educ-exper-mob__item_title");
const educExperInside = education.querySelectorAll(".educ-exper-mob__item_inside");
const educExperArrow = education.querySelectorAll(".educ-exper-mob__item_arrow");
const educExperIcon = education.querySelectorAll(".educ-exper-mob__item_icon");
const educItemCount = education.querySelectorAll('.educ-exper-mob__cont_item').length;
let selectedElem = null;

// for education
for (let i = 0; i < educItemCount; i++) {
    educExper[i].addEventListener("click", (e) => {
        e.stopPropagation();
        for (let j = 0; j < educItemCount; j++) {
            if (i !== j) {
                educExperInside[j].style.height = "0";
                educExper[j].style.backgroundColor = "var(--inside-item)";
                educExperArrow[j].style.backgroundColor = "var(--responseColor)";
                educExperIcon[j].style.transform = "rotate(0deg)";
            } else {
                educExperInside[i].style.height = "110px";
                educExper[i].style.backgroundColor = "var(--responseColor)";
                educExperArrow[i].style.backgroundColor = "var(--inside-item)";
                educExperIcon[i].style.transform = "rotate(180deg)";
            }
        }
        if (selectedElem === educExper[i]) {
            educExperInside[i].style.height = "0";
            educExper[i].style.backgroundColor = "var(--inside-item)";
            educExperArrow[i].style.backgroundColor = "var(--responseColor)";
            educExperIcon[i].style.transform = "rotate(0deg)";
            selectedElem = null;
        } else {
            selectedElem = educExper[i];
        }
    })
}

// for experience
const experience = document.querySelector('.experience');
const exper = experience.querySelectorAll(".educ-exper-mob__item_title");
const experInside = experience.querySelectorAll(".educ-exper-mob__item_inside");
const experArrow = experience.querySelectorAll(".educ-exper-mob__item_arrow");
const experIcon = experience.querySelectorAll(".educ-exper-mob__item_icon");
const experItemCount = experience.querySelectorAll('.educ-exper-mob__cont_item').length;
let selectedElem2 = null;
for (let i = 0; i < experItemCount; i++) {
    exper[i].addEventListener("click", (e) => {
        e.stopPropagation()
        for (let j = 0; j < experItemCount; j++) {
            if (i !== j) {
                experInside[j].style.height = "0";
                exper[j].style.backgroundColor = "var(--inside-item)";
                experArrow[j].style.backgroundColor = "var(--responseColor)";
                experIcon[j].style.transform = "rotate(0deg)";
            }
            else {
                experInside[i].style.height = "110px";
                exper[i].style.backgroundColor = "var(--responseColor)";
                experArrow[i].style.backgroundColor = "var(--inside-item)";
                experIcon[i].style.transform = "rotate(180deg)";
            }
        }
        if (selectedElem2 === exper[i]) {
            experInside[i].style.height = "0";
            exper[i].style.backgroundColor = "var(--inside-item)";
            experArrow[i].style.backgroundColor = "var(--responseColor)";
            experIcon[i].style.transform = "rotate(0deg)";
            selectedElem2 = null;
        } else {
            selectedElem2 = exper[i];
        }
    })
}


// document
document.addEventListener("click", () => {
    for (let i = 0; i < educExper.length; i++) {
        educExper[i].style.backgroundColor = "var(--inside-item)";
        educExperInside[i].style.height = "0";
        educExperArrow[i].style.backgroundColor = "var(--responseColor)";
        educExperIcon[i].style.transform = "rotate(0deg)";

        exper[i].style.backgroundColor = "var(--inside-item)";
        experInside[i].style.height = "0";
        experArrow[i].style.backgroundColor = "var(--responseColor)";
        experIcon[i].style.transform = "rotate(0deg)";
    }
    selectedElem = null;
    selectedElem2 = null;
})









// form validation 
const data = {
    name: {
        value: "",
        valid: false,
        touched: false,
    },
    email: {
        value: "",
        valid: false,
        touched: false,
    },
    message: {
        value: "",
        valid: false,
        touched: false,
    },
}

function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

const form = document.querySelector('.form');
const fields = form.querySelectorAll('.form__input');
const formBtn = document.querySelector(".form__btn");

function validete(field) {
    switch (field.name) {
        case "name":
            return field.value.length > 0;
        case "email":
            return validateEmail(field.value);
        case "message":
            return 0 < field.value.length && field.value.length < 300;
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
                field.style["border-bottom"] = "5px inset red";
            }
            else {
                field.style["border-bottom"] = "5px inset var(--green)";
            }
        }
        if (data.name.valid && data.email.valid && data.message.valid) {
            formBtn.setAttribute("class", "form__btn adjective")
            formBtn.removeAttribute("disabled", "false")
        }
        else {
            formBtn.setAttribute("class", "form__btn disabled")
            formBtn.setAttribute("disabled", "true")
        }
    })
})






// paralax mouse move
const dots = document.querySelectorAll(".home__cont_img");
document.addEventListener("mousemove", (e) => {
    dots.forEach(layer => {
        const speed = layer.getAttribute("data-speed");

        const x = (window.innerWidth - e.pageX * speed) / 120;
        const y = (window.innerHeight - e.pageY * speed) / 120;

        layer.style.transform = `translate(${x}px, ${y}px)`
    })
})











// header navigation button
const headerBtn = document.querySelector(".header__btn_voice");
const recognizer = new webkitSpeechRecognition();
recognizer.interimResults = true;
recognizer.lang = 'en-US';
let all = "";
const synth = window.speechSynthesis;


recognizer.onresult = function (event) {
    let result = event.results[event.resultIndex];
    all = result[0].transcript;
    if (result.isFinal) {
        if (result[0].transcript == "Home" || result[0].transcript == "home" || result[0].transcript == "HOME") {
            document.querySelector(".home__title").scrollIntoView()
        }
        else if (result[0].transcript == "Skills" || result[0].transcript == "skills" || result[0].transcript == "kids" || result[0].transcript == "he's" || result[0].transcript == "Chiefs" || result[0].transcript == "keys" || result[0].transcript == "cheese" || result[0].transcript == "chief" || result[0].transcript == "Kansas" || result[0].transcript == "cuse" || result[0].transcript == "excuse") {
            skillsTitle.scrollIntoView()
        }
        else if (result[0].transcript == "education" || result[0].transcript == "Education") {
            educationTitle.scrollIntoView()
        }
        else if (result[0].transcript == "certificate" || result[0].transcript == "Certificate" || result[0].transcript == "certification") {
            certificateTitle.scrollIntoView()
        }
        else if (result[0].transcript == "experience" || result[0].transcript == "Experience" || result[0].transcript == "aspasians") {
            experienceTitle.scrollIntoView()
        }
        else if (result[0].transcript == "projects" || result[0].transcript == "Projects" || result[0].transcript == "project") {
            projectsTitle.scrollIntoView()
        }
        else if (result[0].transcript == "project back" || result[0].transcript == "Projects Back" || result[0].transcript == "projects back") {
            projectsBack.scrollIntoView()
        }
        else if (result[0].transcript == "contact" || result[0].transcript == "Contact" || result[0].transcript == "contacts") {
            contactTitle.scrollIntoView()
        }
        else {
            const utterance1 = new SpeechSynthesisUtterance(`sorry you say ${all}`);
            synth.speak(utterance1);
        }
    }
    else {
        console.log('result ', result[0].transcript);
    }
};
headerBtn.addEventListener("click", () => {
    recognizer.start();
})






const scrollTopLink = document.querySelector(".scroll-top__link");
const scrollTopArrow = document.querySelector(".scroll-top__arrow");
function light() {
    sections[0].setAttribute("data-image-src", "/media/img/bg/lightMode/2.png");
    sections[1].setAttribute("data-image-src", "/media/img/bg/lightMode/1.png");
    sections[2].setAttribute("data-image-src", "/media/img/bg/lightMode/4.png");
    sections[3].setAttribute("data-image-src", "/media/img/bg/lightMode/3.png");
    sections[4].setAttribute("data-image-src", "/media/img/bg/lightMode/6.png");
    sections[5].setAttribute("data-image-src", "/media/img/bg/lightMode/5.png");
    sections[6].setAttribute("data-image-src", "/media/img/bg/lightMode/7.png");
    sections[7].setAttribute("data-image-src", "/media/img/bg/lightMode/8.png");
    html.style.setProperty("--dark-gray", "#ffffff");
    html.style.setProperty("--gray-hover", "#cccccc");
    html.style.setProperty("--inside-item", "#979797");
    html.style.setProperty("--responseColor", "#a8a8a8");
    educExperArrow.forEach((item, i) => {
        item.style.backgroundColor = "#ffffff";
        educExperIcon[i].style.color = "--inside-item";
    })
    footerInside.style["background-image"] = "linear-gradient(to right, var(--green), var(--green) 49%, var(--inside-item) 50%)";
    scrollTopLink.style.opacity = "0.6";
    scrollTopArrow.style.color = "var(--green)";
}
function dark() {
    sections[0].setAttribute("data-image-src", "/media/img/bg/2.jpg");
    sections[1].setAttribute("data-image-src", "/media/img/bg/4.jpg");
    sections[2].setAttribute("data-image-src", "/media/img/bg/7.jpg");
    sections[3].setAttribute("data-image-src", "/media/img/bg/3.jpg");
    sections[4].setAttribute("data-image-src", "/media/img/bg/9.jpg");
    sections[5].setAttribute("data-image-src", "/media/img/bg/1.jpg");
    sections[6].setAttribute("data-image-src", "/media/img/bg/8.jpg");
    sections[7].setAttribute("data-image-src", "/media/img/bg/6.jpg");
    html.style.setProperty("--dark-gray", "#46484A");
    html.style.setProperty("--gray-hover", "#565758");
    html.style.setProperty("--inside-item", "#3e4144");
    educExperArrow.forEach((item) => {
        item.style.backgroundColor = "var(--responseColor) !important";
    });
}

if (headerLight) {
    headerLight.addEventListener("click", () => {
        loader.style.opacity = "1";
        loader.style.display = "flex";
        document.querySelector(".loader__infinity").style.display = "block";
        if (headerLightBool) {
            headerLightIcon.setAttribute("class", "header__light_icon fas fa-moon");
            localStorage.setItem("portfolioLight", "moon");
            light();
        }
        else {
            headerLightIcon.setAttribute("class", "header__light_icon fas fa-sun");
            localStorage.setItem("portfolioLight", "sun");
            dark();
        }
        headerLightBool = !headerLightBool;
        location.reload();
    })
}

if (localStorage.getItem("portfolioLight") == "sun") {
    headerLightIcon.setAttribute("class", "header__light_icon fas fa-sun");
    headerLightBool = true;
    dark();
}
else if (localStorage.getItem("portfolioLight") == "moon") {
    headerLightIcon.setAttribute("class", "header__light_icon fas fa-moon");
    headerLightBool = false;
    light();
}