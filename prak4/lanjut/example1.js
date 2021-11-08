function myfunc1() {
    document.getElementById("coba1").innerHTML = "<p onclick='myfunc2()'>Kamu Telah Mengeklik Ku</p>";
}
function myfunc2() {
    document.getElementById("coba1").innerHTML = "<p onclick='myfunc1()'>Click Me</p>";
}
function myfunc3() {
    var x = document.getElementById("mySelect").value;
    document.getElementById("coba2").innerHTML = "Kamu memilih : " + x;
}
function mouseOver() {
    document.getElementById("coba3").style.color = "red";
}
function mouseOut() {
    document.getElementById("coba3").style.color = "blue";
}
function myfunc4() {
    var inputText = document.getElementById("masuk").value;
    document.getElementById("tulis").innerHTML = inputText;
}
function myfunc5() {
    alert("Pagenya Barusan di Loaded");
}