let countTimes = $('svg line[stroke-width=2]')
let countSteps = $('svg line[stroke-width=3]')
const circle = $('svg circle')
const slogan = $('svg path')
let startColor = 199
let index = 0
let step = 0
let speedFire = 110

// // rgb 255 189 0
// for (let index = 0; index < countTimes.length; index++) {
//     countTimes.eq(index).attr('stroke',`rgb(255,${startColor},0)`)

//     startColor -= 10
// }

let inter = setInterval(fillLines, speedFire)

function fillLines(){
    if (index % 9 == 0 || step == 0 && step <= 5 ) {
        countSteps.eq(step).css('stroke',`rgb(255,${startColor},0)`)
        step++
    }
    else{
        countTimes.eq(index - step).css('stroke',`rgb(255,${startColor},0)`)
        startColor -= 5
    }

    if (index >= (countTimes.length + step)) {
        clearInterval(inter)
    }

    circle.css('fill',`rgb(255,${startColor},0)`)
    slogan.css('fill',`rgb(255,${startColor},0)`)
    index++
}

