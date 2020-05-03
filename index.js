const id = x=>document.getElementById(x)

const lottery = () => { 
    
    const win  = 4
    const picParam =250

    const luckyDip = Math.ceil(Math.random() * 6)

    if(luckyDip === win){
        id('msg').innerHTML= "<p><img src='img/won.jpg' alt='Smiley face' width="+picParam +"height"+picParam +"></img><br> <div class='alert alert-success' role='alert'>YOU HAVE WON</div></p>"
        id('msg').style.color =  'green'
        setTimeout(reset, 3000)

    } else{
        id('msg').innerHTML= "<p><img src='img/lost.jpg' alt='Sad face' width="+picParam +" height="+picParam +"></img><br> <div class='alert alert-warning' role='alert'>TRY AGAIN</div></p>"
        id('msg').style.color = 'red'
    }   

    id('dice').innerHTML = luckyDip

    // get the dice image

    id('diceImg').innerHTML = `<img src='img/dice/dice-${luckyDip}.png' alt='There is a error with our code please try again later or contact our email, oolutobs@gmail.com, thank you for your service.' width=${picParam} height=${picParam}></img>`

}
//this is to call the function
let count  = 0

const counter = ()=> {
    count++
    console.log(count)
    if(count > 3) {

        reset()
        alert("GAME OVER")
    
    }
}

const reset = () => {
    id('msg').innerHTML = ''
    id('diceImg').innerHTML = ''
    id('dice').innerHTML = ''
    count = 0
}

id('button').addEventListener('click', ()=>{
    lottery()
    counter()
})

id('reset').addEventListener('click', reset)

// if(count == 3) {

//     reset()
//     alert("GAME OVER")

// }


// limit game rounds to 5
//player 1 player2 and button 2 reset
//so do 