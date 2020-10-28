let header = document.querySelector("header")
let headerBtn = document.querySelector(".header-btn")
let celSwapLogo = document.querySelector(".celswap-logo")

let prevScrollpos = window.pageYOffset
window.addEventListener("scroll", function () {
    let currentScrollPos = window.pageYOffset
    if (currentScrollPos > 50) {
        header.style.paddingTop = "0";
        header.style.background = "#fff";
        header.style.transition = ".5s";

        headerBtn.style.background = "#0f1e6c";
        headerBtn.style.color = "#fff";
        headerBtn.style.transition = ".5s";

        celSwapLogo.classList.remove("celswap-logo");
        celSwapLogo.classList.add("celswap-logo-onscroll");
    }
    else {
        header.style.paddingTop = "47px";
        header.style.background = "transparent";

        headerBtn.style.background = "transparent";
        headerBtn.style.color = "#0f1e6c";

        celSwapLogo.classList.add("celswap-logo");
        celSwapLogo.classList.remove("celswap-logo-onscroll");
    }
})

let voteBtn = document.querySelector(".vote-btn")

let voteBtnFire = document.querySelector(".vote-btn-fire")
let voteBtnActive = document.querySelector(".vote-btn-fire-active")
let votedBox = document.querySelector(".voted")

voteBtn.addEventListener("click", function () {
    voteBtn.style.background = "linear-gradient(45deg, #3228b5 0%, #151a76 100%)";
    voteBtn.style.transition = ".7s";


    voteBtnFire.classList.remove("vote-btn-fire");
    voteBtnFire.classList.add("vote-btn-fire-active");
})


// Mobile burger

const burger = document.querySelector('.burger')
const navMobile = document.querySelector('.nav-mobile-modal')


burger.onclick = function () {
    header.classList.toggle("flex-end");
    navMobile.classList.toggle("nav-mobile-active");
    celSwapLogo.classList.toggle("hidden");
    burger.classList.toggle("open");
}



slider = document.querySelector(".prices-slider");
slide = document.querySelectorAll(".slide");


// button hover
document.querySelectorAll(".btn")[0].onmousemove = e => {
    const x = e.pageX - e.target.offsetLeft;
    const y = e.pageY - e.target.offsetTop;

    e.target.style.setProperty("--x", `${x}px`);
    e.target.style.setProperty("--y", `${y}px`);
};

document.querySelectorAll(".btn-rates")[0].onmousemove = e => {
    const x = e.pageX - e.target.offsetLeft;
    const y = e.pageY - e.target.offsetTop;

    e.target.style.setProperty("--x", `${x}px`);
    e.target.style.setProperty("--y", `${y}px`);
};

document.querySelectorAll(".btn-rates")[1].onmousemove = e => {
    const x = e.pageX - e.target.offsetLeft;
    const y = e.pageY - e.target.offsetTop;

    e.target.style.setProperty("--x", `${x}px`);
    e.target.style.setProperty("--y", `${y}px`);
};


// Trim number to 2 decimals
function upto2Decimal(num) {
    if (num > 0)
        return Math.floor(num * 100) / 100;
    else
        return Math.ceil(num * 100) / 100;
}


// API
fetch("https://api.celsius.network/api/v3/web/supported_currencies?fbclid=IwAR3T4QbarmtKZIKLdmrlqmXAup2j6b6OlE9hOPv6dbZzRnFgwgRIRCQkMo0")
    .then(result => result.json()).then(data => {
        let output = '';
        let i = 0;
        const ratesSlideHeading = document.querySelectorAll(".rates-slide-heading");
        const ratesSlideImg = document.querySelectorAll(".carousel-slide-img");
        const celPercentage = document.querySelectorAll(".rates-value-cel-percentage");
        const inKindPercentage = document.querySelectorAll(".rates-value-in-kind-percentage");
        const ratesSlide = document.querySelectorAll(".carousel-content");
        data.forEach(function (crypto) {
            if (crypto.name == "BTC" || crypto.name == "ETH" || crypto.name == "USDC" || crypto.name == "CEL" || crypto.name == "SNX" || crypto.name == "BUSD" || crypto.name == "UNI" || crypto.name == "TUSD") {
                ratesSlideHeading[i].innerHTML = crypto.name;
                ratesSlideImg[i].innerHTML = `<img src='assets/images/coins/${crypto.name}-icon.png'>`;
                celPercentage[i].innerHTML = upto2Decimal((Math.pow(1 + (1 + 0.3) * crypto.interestRate / 52, 52) - 1) * 100) + "%";
                inKindPercentage[i].innerHTML = upto2Decimal((Math.pow(1 + (1 + 0) * crypto.interestRate / 52, 52) - 1) * 100) + "%";

                console.log(crypto.name + "\n" + crypto.interestRate);
                i++;
            }
            if (crypto.name == "CEL") {
                document.querySelector("#cel-price").innerHTML = upto2Decimal(crypto.usd) + " USD";
            }
        });
    })
    .catch(err => {
        console.log(err);
    });



fetch("https://api.coingecko.com/api/v3/coins/celsius-degree-token")
    .then(data => data.json()).then(result => {
        document.querySelector("#cel-price-change").innerHTML = upto2Decimal(result.market_data.price_change_24h) + " %";
        if (Number(result.market_data.price_change_24h) <= -0.01) {
            document.querySelector("#cel-price-change").style.color = "#f44336";
        }
    })
    .catch(err => {
        console.log(err);
    });


// fetch("https://api.celsius.network/api/v3/web/supported_currencies?fbclid=IwAR3T4QbarmtKZIKLdmrlqmXAup2j6b6OlE9hOPv6dbZzRnFgwgRIRCQkMo0")
//     .then(data => data.json()).then(result => result.forEach(function (user) {
//         console.log(user.custodianTickerSymbol);
//     }))
//     .catch(err => {
//         console.log(err);
//     });


// fetch("https://api.celsius.network/api/v3/web/supported_currencies?fbclid=IwAR3T4QbarmtKZIKLdmrlqmXAup2j6b6OlE9hOPv6dbZzRnFgwgRIRCQkMo0")
//     .then(result => result.json()).then(data => {
//         let output = '';
//         let cryptoNames = [];
//         let aprValues = [];
//         data.forEach(function (crypto) {
//             if (crypto.name == "BTC" || crypto.name == "ETH" || crypto.name == "CEL" || crypto.name == "SNX") {
//                 cryptoNames.push(crypto.name);
//                 aprValues.push(crypto.interestRate);
//             }
//         });
//         for (let i = 0; i < cryptoNames.length; i++) {
//             document.querySelectorAll(".rates-slide-heading")[i].innerHTML = cryptoNames[i];
//             console.log(cryptoNames.length);
//         }
//     })
//     .catch(err => {
//         console.log(err);
//     });




//BACKUP SLIDER CRYPTO

// fetch("https://api.celsius.network/api/v3/web/supported_currencies?fbclid=IwAR3T4QbarmtKZIKLdmrlqmXAup2j6b6OlE9hOPv6dbZzRnFgwgRIRCQkMo0")
//     .then(result => result.json()).then(data => {
//         let output = '';
//         let i = 0;
//         const ratesSlide = document.querySelectorAll(".rates-li-slide");
//         data.forEach(function (crypto) {
//             if (crypto.name == "BTC" || crypto.name == "ETH" || crypto.name == "CEL" || crypto.name == "SNX" || crypto.name == "BUSD" || crypto.name == "UNI" || crypto.name == "DAI" || crypto.name == "USDT" || crypto.name == "USDC") {
//                 output = `
//                             <div class="rates-slide">
//                             <div class="rates-slide-logo">
//                                 <img src="assets/images/coins/${crypto.name}-icon.png">
//                                 <span class="rates-slide-heading btc-heading">${crypto.name}</span>
//                             </div>
//                             <div class="rates-slide-value">
//                                 <div class="rates-value-cel">
//                                     <span class="rates-value-cel-percentage">${upto2Decimal((Math.pow(1 + (1 + 0.3) * crypto.interestRate / 52, 52) - 1) * 100) + "%"}</span>
//                                     <span class="in-cel">in CEL</span>
//                                 </div>
//                                 <div class="rates-value-in-kind">
//                                 <span class="rates-value-in-kind-percentage">${upto2Decimal((Math.pow(1 + (1 + 0) * crypto.interestRate / 52, 52) - 1) * 100) + "%"}</span>
//                                     <span class="in-kind">in-kind</span>
//                                 </div>
//                             </div>
//                         </div>
//                `;
//                 ratesSlide[i].innerHTML = output;
//                 i++;
//             }
//         });
//     })
//     .catch(err => {
//         console.log(err);
//     });
