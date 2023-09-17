let preloader = true

$("body").css('overflow','hidden')

$(document).ready(function () {
    setTimeout(() => {
        $('.preloader').slideUp('fast')
        preloader = false
        $("body").css('overflow','')
    }, 6000);
});

window.addEventListener('scroll', e => {
    if (preloader){
        window.scrollTo({top: 0})
    }
})

$(document).scroll(function (){
    if (window.pageYOffset >= $(".video-bg").height()){
        $(".header-logo img").css({
            "width": "70px"
        })
        $("header").css("background","rgba(255,255,255,0.3)")
        $(".header-logo img").css("transform","rotate(360deg)")
    }
    else{
        $(".header-logo img").css({
            "width": "140px",
            "transform": "rotate(0deg)"
        })
        $("header").css("background","rgba(255,255,255,1)")
    }
})

// slider

const swiper = new Swiper('.swiper', {
    // Optional parameters
    autoplay: {
        delay: 2500,
    },
    parallax: true,
    freeMode: {
        enabled: true,
        sticky: true,
    },
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },
});

// observer

let options = {
    threshold: 0.5
}

function entry(entry){
    entry.forEach(change => {
        if (change.isIntersecting && change.target.classList.contains("observe")) {
            change.target.classList.add("arrive")
        }
        if (change.isIntersecting && change.target.classList.contains("observe-rp") && window.innerWidth <= 1025){
            change.target.classList.add("show-rp")
        }
        else{
            change.target.classList.remove("show-rp")
        }
    })
}

let observator = new IntersectionObserver(entry, options)


const elem = document.querySelectorAll(".observe")
observator.observe(elem[0])
observator.observe(elem[1])
observator.observe(elem[2])

const recipes = document.querySelectorAll(".observe-rp")
recipes.forEach(recipe => {
    observator.observe(recipe)
    console.log(window.innerWidth)
})


// animation h1
setInterval(() =>{
    animatetitle()
},500)
function animatetitle(){
    let randomSymbol = Math.floor(Math.random() * 5)

    $("h1 text span").eq(randomSymbol).css({
        "color": "#FAD768",
        "border-bottom": "1px dashed #FAD768",
        "margin-bottom": "5px"
    })

    setTimeout(() =>{
        $("h1 text span").eq(randomSymbol).css({
            "color": "#fff",
            "border-bottom": "none",
            "margin-bottom": "0"
        })
    },400)
}

// popup`s

$(".popup-close").click(function(){
    $(".overlay").hide()
    $(".popup").hide()
})

$(".nav-tel").click(function(){
    $(".overlay").show(300)
    $(".popup__tel").show(320)
})



