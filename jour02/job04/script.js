


// document.getElementById("button").addEventListener("click",citation);
// function citation(){

//   var citationContent = document.getElementById("citation").innerHTML;
//   console.log(citationContent);
// }
document.addEventListener("keypress", function(event) {
  if (document.activeElement === document.getElementById("keylogger")) {
    document.getElementById("keylogger").value += event.key + event.key;
  } else {
    document.getElementById("keylogger").value += event.key;
  }
});