


// document.getElementById("button").addEventListener("click",citation);
// function citation(){

//   var citationContent = document.getElementById("citation").innerHTML;
//   console.log(citationContent);
// }
let count = 0;
function showhide(){
  if(document.getElementById("text").innerHTML){
 count ++;
}
document.getElementById("text").innerHTML = "count= " + count;


}
document.getElementById("button").addEventListener("click",showhide);
