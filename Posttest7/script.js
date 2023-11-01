var button = document.getElementById("toggleDark");

button.addEventListener("click", function() {
    this.classList.toggle('fa-moon')
    this.classList.toggle('fa-sun')

    document.querySelector("body").classList.toggle("dark");
    var img = document.querySelector(".land > img");
    if (img.src.endsWith("Landing.png")) {
        img.src = "asset/log2.png";
    } else {
        img.src = "asset/Landing.png";
    }
    }
)

document.getElementById("contact").addEventListener("click", function() {
    alert("@ayruszy ON Social Media // Quotes : Jangan Lupa Makan ")
})

const biografi = document.getElementById("Biodata");
document.getElementById("bio-button").addEventListener("click", function () {

    if (biografi.innerHTML == ""){
        document.getElementById("Biodata").innerHTML = "Nama : Surya Abdi Febrianto <br> Nim : 2209106074 <br> Kelas : Informatika B22 <br> Prodi : Informatika <br> Fakultas : Teknik <br> Alamat : Perum PKL BLok B RT 12 <br> Kota : Samarinda <br> Negara : Indonesia"
    }
    else{
    document.getElementById("Biodata").innerHTML = "";
    }
})
