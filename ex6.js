function modif_paragraphe(){

    var p1=document.getElementById("para");
    var p2=p1.innerHTML;
    var pm=p2.replace("original","<i>corrige</i>");
    p1.innerHTML=pm;

}

function centrage_h1(){
var h1=document.getElementsByTagName("h1");
var h2 = h1[0];
h2.setAttribute("align","center");
}