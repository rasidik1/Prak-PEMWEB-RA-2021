function gantitema(){
    let change = document.getElementById("thema").value;
    if (change == "Dark"){
        darkMode();
    }else if (change == "Grey"){
        greyMode();
    } else {
        lightMode();
    }
}

function lightMode(){
    let lightMode = document.getElementById("body");
    lightMode.style.background = "white";
    lightMode.style.color = "black";
}

function darkMode(){
    let darkMode = document.getElementById("body");
    darkMode.style.background = "black";
    darkMode.style.color = "white";
}
function greyMode(){
    let greyMode = document.getElementById("body");
    greyMode.style.background = "grey";
    greyMode.style.color = "white";
}

function FindKeyWord(){
    let key = document.getElementById("keyword").value;
    if (key == "CSS"){
        document.getElementById("p1").innerHTML = "CSS adalah kepanjangaan dari Cascading Style Sheets yang berguna untuk menyederhanakan proses pembuatan website dengan mengatur elemen yang tertulis di bahasa markup. CSS dipakai untuk mendesain halaman depan atau tampilan website (front end). CSS menangani tampilan dan ‘rasa’ dari halaman website";
    }else if (key == "JavaScript"){
        document.getElementById("p1").innerHTML = "JavaScript adalah bahasa pemrograman yang digunakan dalam pengembangan website agar lebih dinamis dan interaktif. Kalau sebelumnya kamu hanya mengenal HTML dan CSS, nah sekarang kamu jadi tahu bahwa JavaScript dapat meningkatkan fungsionalitas pada halaman web. Bahkan dengan JavaScript ini kamu bisa membuat aplikasi, tools, atau bahkan game pada web";
    }else if (key == "HTML"){
        document.getElementById("p1").innerHTML = "Hypertext Markup Language atau HTML adalah bahasa markup yang digunakan untuk membuat struktur halaman website. HTML terdiri dari kombinasi teks dan simbol yang disimpan dalam sebuah file. Dalam membuat file HTML, terdapat standar atau format khusus yang harus diikuti. Format tersebut telah tertuang dalam standar kode internasional atau ASCII (American Standard Code for Information Interchange)";
    } else {
        document.getElementById("p1").innerHTML = "Defini Akan ditampilkan disini...";
    }
}

function faktorial(){
    let number = document.getElementById("bilangan").value;
    let result = 1;

    for (let k = 1; k <= number; k++){
        result = result * k;
    }
    document.getElementById("p2").innerHTML = "Faktorial Dari " + number + " Adalah " + result;
}