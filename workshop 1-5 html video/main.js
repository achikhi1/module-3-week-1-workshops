//knop js
const jsBtn = document.getElementById("jsBtn")
//knop php
const phpBtn = document.getElementById("phpBtn")



function myfuncion1(){
    document.getElementById("myframe").src = "fotos/js.mp4";
}//ntv
function myfuncion2(){
    document.getElementById("myframe").src = "fotos/php.mp4";
}//ntv


jsBtn.addEventListener("click",myfuncion1);

phpBtn.addEventListener("click",myfuncion2);