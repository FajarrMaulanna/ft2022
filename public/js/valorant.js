// Logo
let logoT = document.getElementById("logoT"),
    logoTim = document.getElementById("logoTim"),
    spanLogo = document.querySelector(".logoT span"),
    trashLogo = document.querySelector(".logoT .bx-trash"),
    file

logoT.onclick = () =>{
    logoTim.click()
}

logoTim.addEventListener("change", function(){
    file = this.files[0]
    spanLogo.innerHTML = encodeURI(file.name)
    logoT.classList.replace("d-block", "d-none")
    spanLogo.parentElement.classList.replace("d-none", "d-flex")
})

trashLogo.onclick = () =>{
    logoTim.value = ""
    spanLogo.innerHTML = ""
    logoT.classList.replace("d-none", "d-block")
    spanLogo.parentElement.classList.replace("d-flex", "d-none")
}

// Foto ketua
let fotoK = document.getElementById("fotoK"),
    fotoKetua = document.getElementById("fotoKetua"),
    spanKetua = document.querySelector(".fotoK span"),
    trashKetua = document.querySelector(".fotoK .bx-trash")

fotoK.onclick = () =>{
    fotoKetua.click()
}

fotoKetua.addEventListener("change", function(){
    file = this.files[0]
    spanKetua.innerHTML = encodeURI(file.name)
    fotoK.classList.replace("d-block", "d-none")
    spanKetua.parentElement.classList.replace("d-none", "d-flex")
})

trashKetua.onclick = () =>{
    fotoKetua.value = ""
    spanKetua.innerHTML = ""
    fotoK.classList.replace("d-none", "d-block")
    spanKetua.parentElement.classList.replace("d-flex", "d-none")
}

// Foto Anggota 1
let fotoM1 = document.getElementById("fotoM1"),
    fotoMember1 = document.getElementById("fotoMember1"),
    spanM1 = document.querySelector(".fotoM1 span"),
    trashM1 = document.querySelector(".fotoM1 .bx-trash")

fotoM1.onclick = () =>{
    fotoMember1.click()
}

fotoMember1.addEventListener("change", function(){
    file = this.files[0]
    spanM1.innerHTML = encodeURI(file.name)
    fotoM1.classList.replace("d-block", "d-none")
    spanM1.parentElement.classList.replace("d-none", "d-flex")
})

trashM1.onclick = () =>{
    fotoMember1.value = ""
    spanM1.innerHTML = ""
    fotoM1.classList.replace("d-none", "d-block")
    spanM1.parentElement.classList.replace("d-flex", "d-none")
}

// Foto Anggota 2
let fotoM2 = document.getElementById("fotoM2"),
    fotoMember2 = document.getElementById("fotoMember2"),
    spanM2 = document.querySelector(".fotoM2 span"),
    trashM2 = document.querySelector(".fotoM2 .bx-trash")

fotoM2.onclick = () =>{
    fotoMember2.click()
}

fotoMember2.addEventListener("change", function(){
    file = this.files[0]
    spanM2.innerHTML = encodeURI(file.name)
    fotoM2.classList.replace("d-block", "d-none")
    spanM2.parentElement.classList.replace("d-none", "d-flex")
})

trashM2.onclick = () =>{
    fotoMember2.value = ""
    spanM2.innerHTML = ""
    fotoM2.classList.replace("d-none", "d-block")
    spanM2.parentElement.classList.replace("d-flex", "d-none")
}

// Foto Anggota 3
let fotoM3 = document.getElementById("fotoM3"),
    fotoMember3 = document.getElementById("fotoMember3"),
    spanM3 = document.querySelector(".fotoM3 span"),
    trashM3 = document.querySelector(".fotoM3 .bx-trash")

fotoM3.onclick = () =>{
    fotoMember3.click()
}

fotoMember3.addEventListener("change", function(){
    file = this.files[0]
    spanM3.innerHTML = encodeURI(file.name)
    fotoM3.classList.replace("d-block", "d-none")
    spanM3.parentElement.classList.replace("d-none", "d-flex")
})

trashM3.onclick = () =>{
    fotoMember3.value = ""
    spanM3.innerHTML = ""
    fotoM3.classList.replace("d-none", "d-block")
    spanM3.parentElement.classList.replace("d-flex", "d-none")
}

// Foto Anggota 4
let fotoM4 = document.getElementById("fotoM4"),
    fotoMember4 = document.getElementById("fotoMember4"),
    spanM4 = document.querySelector(".fotoM4 span"),
    trashM4 = document.querySelector(".fotoM4 .bx-trash")

fotoM4.onclick = () =>{
    fotoMember4.click()
}

fotoMember4.addEventListener("change", function(){
    file = this.files[0]
    spanM4.innerHTML = encodeURI(file.name)
    fotoM4.classList.replace("d-block", "d-none")
    spanM4.parentElement.classList.replace("d-none", "d-flex")
})

trashM4.onclick = () =>{
    fotoMember4.value = ""
    spanM4.innerHTML = ""
    fotoM4.classList.replace("d-none", "d-block")
    spanM4.parentElement.classList.replace("d-flex", "d-none")
}