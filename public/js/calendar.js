let hariIni = new Date()
let bulanSekarang = hariIni.getMonth()
let tahunSekarang = hariIni.getFullYear()
let bulan = [
    "Januari",
    "Februari", 
    "Maret", 
    "April", 
    "Mei", 
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember"
]

let judulKalender = document.getElementById("judul-kalender")

showCalender(bulanSekarang, tahunSekarang)

let next = document.getElementById("next")
let previous = document.getElementById("previous")

next.onclick = () =>{
    tahunSekarang = (bulanSekarang === 11)? tahunSekarang + 1 : tahunSekarang
    bulanSekarang = (bulanSekarang + 1) % 12
    showCalender(bulanSekarang, tahunSekarang)
}

previous.onclick = () =>{
    tahunSekarang = (bulanSekarang === 0)? tahunSekarang - 1 : tahunSekarang
    bulanSekarang = (bulanSekarang === 0)? 11 : bulanSekarang - 1
    showCalender(bulanSekarang, tahunSekarang)
}

function showCalender(month, year){
    let hariPertama = (new Date(year, month)).getDay()
    if(hariPertama === 0){
        hariPertama = hariPertama + 6
    }else{
        hariPertama = hariPertama - 1
    }
    let totalHari = 32 - new Date(year, month, 32).getDate()
    let tbl = document.getElementById("isi-kalender")

    tbl.innerHTML = ""
    judulKalender.innerHTML = bulan[month]

    let tanggal = 1
    for(let i = 0; i < 6; i++){
        let tr = document.createElement("TR")
        for(let j = 0; j < 7; j++){
            if(i === 0 && j < hariPertama){
                let td = document.createElement("TD")
                td.innerHTML = ""
                td.classList.add("td")
                tr.appendChild(td)
            }else if(tanggal > totalHari){
                break
            }else{
                let td = document.createElement("TD")
                
                let p = document.createElement("P")
                p.classList.add("d-block", "mb-0", "text-center")
                p.style.margin = "auto"
                p.style.width = "32px"
                p.style.height = "32px"
                p.style.lineHeight = "32px"
                p.innerHTML = tanggal
                if(tanggal === hariIni.getDate() && year === hariIni.getFullYear() && month === hariIni.getMonth()){
                    p.classList.add("border")
                    p.style.background = "#2BBBFA"
                    p.style.borderRadius = "10px"
                }
                td.appendChild(p)
                tr.appendChild(td)
                tanggal++
            }
        }
        tbl.appendChild(tr)
    }
}