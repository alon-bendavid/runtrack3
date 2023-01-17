


// document.getElementById("button").addEventListener("click",citation);
// function citation(){

//   var citationContent = document.getElementById("citation").innerHTML;
//   console.log(citationContent);
// }
function showhide(){
  if(document.getElementById("text").innerHTML){

    document.getElementById("text").innerHTML = "";
  }else {
    document.getElementById("text").innerHTML = "L'important n'est pas la chute, mais l'atterrissage.";

  }
  

}
document.getElementById("button").addEventListener("click",showhide);
