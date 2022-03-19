let cards = document.querySelectorAll('.cardFT'),
    btnRight = document.getElementById('right'),
    btnLeft = document.getElementById('left')
        
btnLeft.addEventListener('click', ()=>{
    cards.forEach(card=>{
        if(card == cards[0]){
            card.style.setProperty('--i', card.style.getPropertyValue('--i') - 1)
            if(card.style.getPropertyValue('--i') == -1)
            {
                cards[0].style.setProperty('--i', 4)
            }
        }else if(card == cards[1]){
            card.style.setProperty('--i', card.style.getPropertyValue('--i') - 1)
            if(card.style.getPropertyValue('--i') == -1)
            {
                cards[1].style.setProperty('--i', 4)
            }
        }else if(card == cards[2]){
            card.style.setProperty('--i', card.style.getPropertyValue('--i') - 1)
            if(card.style.getPropertyValue('--i') == -1)
            {
                cards[2].style.setProperty('--i', 4)
            }
        }else if(card == cards[3]){
            card.style.setProperty('--i', card.style.getPropertyValue('--i') - 1)
            if(card.style.getPropertyValue('--i') == -1)
            {
                cards[3].style.setProperty('--i', 4)
            }
        }else if(card == cards[4]){
            card.style.setProperty('--i', card.style.getPropertyValue('--i') - 1)
            if(card.style.getPropertyValue('--i') == -1)
            {
                cards[4].style.setProperty('--i', 4)
            }
        }
    })
})

btnRight.addEventListener('click', ()=>{
    cards.forEach(card=>{
        if(card == cards[0]){
            card.style.setProperty('--i',  parseInt(card.style.getPropertyValue('--i')) + 1)
            console.log(typeof(parseInt(card.style.getPropertyValue('--i'))))
            if(card.style.getPropertyValue('--i') == cards.length)
            {
                cards[0].style.setProperty('--i', 0)
            }
        }else if(card == cards[1]){
            card.style.setProperty('--i', parseInt(card.style.getPropertyValue('--i')) + 1)
            if(card.style.getPropertyValue('--i') == cards.length)
            {
                cards[1].style.setProperty('--i', 0)
            }
        }else if(card == cards[2]){
            card.style.setProperty('--i', parseInt(card.style.getPropertyValue('--i')) + 1)
            if(card.style.getPropertyValue('--i') == cards.length)
            {
                cards[2].style.setProperty('--i', 0)
            }
        }else if(card == cards[3]){
            card.style.setProperty('--i', parseInt(card.style.getPropertyValue('--i')) + 1)
            if(card.style.getPropertyValue('--i') == cards.length)
            {
                cards[3].style.setProperty('--i', 0)
            }
        }else if(card == cards[4]){
            card.style.setProperty('--i', parseInt(card.style.getPropertyValue('--i')) + 1)
            if(card.style.getPropertyValue('--i') == cards.length)
            {
                cards[4].style.setProperty('--i', 0)
            }
        }
    })
})

let foto = document.querySelectorAll('.imgFT'),
    srcFoto = ['img/1.png', 'img/2.png', 'img/3.png'],
    i = 0
setInterval(() => {
    if(i <= 2){
        foto[0].src = srcFoto[i]
    }else{
        i = 0
        foto[0].src = srcFoto[i]
    }

    if(i+1 <= 2){
        foto[1].src = srcFoto[i+1]
    }else if(i+1 == 3){
        foto[1].src = srcFoto[0]
    }

    if(i+2 <= 2){
        foto[2].src = srcFoto[i+2]
    }else if(i+2 == 3){
        foto[2].src = srcFoto[0]
    }else if(i+2 == 4){
        foto[2].src = srcFoto[1]
    }

    i+=1

    
}, 2000);

// Set the date we're counting down to
var countDownDate = new Date("May 5, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    if(String(hours).length == 1){
        hours = 0 + String(hours)
    }
    if(String(days).length == 1){
        days = 0 + String(days)
    }
    if(String(minutes).length == 1){
        minutes = 0 + String(minutes)
    }
    if(String(seconds).length == 1){
        seconds = 0 + String(seconds)
    }

    // Display the result in the element with id

    document.getElementById("day").innerHTML = days
    document.getElementById("hour").innerHTML = hours
    document.getElementById("minute").innerHTML = minutes
    document.getElementById("second").innerHTML = seconds

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("day").innerHTML = "EXPIRED"
        document.getElementById("hour").innerHTML = "EXPIRED"
        document.getElementById("minute").innerHTML = "EXPIRED"
        document.getElementById("second").innerHTML = "EXPIRED"
    }
}, 1000);

let testimoni = document.querySelector('.testimoni'),
    userName = document.querySelector('.userName'),
    loc = document.querySelector('.location'),
    fotoTestimoni = document.querySelector('.fotoTestimoni'),
    dots = document.querySelector(".dots"),
    Left = document.getElementById("Left"),
    Right = document.getElementById("Right")

let things = {
    text: [ "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Posuere feugiat eleifend bibendum ac. Interdum sed scelerisque ut faucibus dolor commodo neque, libero. Tellus fames et erat cras pulvinar senectus odio nunc. Auctor vestibulum scelerisque penatibus nisi, urna, proin. Ut lectus faucibus blandit nulla. At ut montes, egestas aenean odio id porta in. ",
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, at."],
    user: [ "Andy Lambert",
            "Andy Malbert"],
    lokasi: [   "SMA Negeri 1 Padang",
                "SMA Neger 2 Padang"],
    fotoTesti: [    "img/user.png",
                    "img/user.png"]
}

if(things.text.length !== 0){
    for(let i = 0; i < things.text.length; i++){
        let dot = document.createElement('DIV')
        dot.classList.add('dot')
        dot.onclick = () => {
            showSlide(i)
        }
        dots.appendChild(dot)
    }
}

let j = 0
showSlide(j)

Left.onclick = () => {
    showSlide(j += -1)
}

Right.onclick = () => {
    showSlide(j += 1)
}

function showSlide(n){
    if(n >= things.text.length){
        testimoni.innerHTML = things.text[0]
        userName.innerHTML = things.user[0]
        loc.innerHTML = "Siswa - " + things.lokasi[0]
        fotoTestimoni.innerHTML = things.fotoTesti[0]
        j = 0
    }else if(n < 0){
        testimoni.innerHTML = things.text[things.text.length-1]
        userName.innerHTML = things.user[things.text.length-1]
        loc.innerHTML = "Siswa - " + things.lokasi[things.text.length-1]
        fotoTestimoni.innerHTML = things.fotoTesti[things.text.length-1]
        j = things.text.length-1
    }else{
        testimoni.innerHTML = things.text[n]
        userName.innerHTML = things.user[n]
        loc.innerHTML = "Siswa - " + things.lokasi[n]
        fotoTestimoni.innerHTML = things.fotoTesti[n]
    }
    console.log(j)
}
