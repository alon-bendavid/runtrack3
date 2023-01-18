// $(document).ready(function() {
//     $("#text").click(function() {
//       $("#textContainer").append("<p>Hello jquery </p>");
//       $("#delText").click(function() {
//         $("#textContainer p").remove();
//       });
//     });
//   });
  
$(document).ready(function(){
    $("#1").draggable({ containment: "#boundary-div" });
    $("#2").draggable({ containment: "#boundary-div" });
    $("#3").draggable({ containment: "#boundary-div" });
    $("#4").draggable({ containment: "#boundary-div" });
    $("#5").draggable({ containment: "#boundary-div" });
    $("#6").draggable({ containment: "#boundary-div" });
    $("#shuffle-button").click(function(){
      let parent = $('#boundary-div');
      let divs = parent.children();
      divs.sort(function(){
            return (Math.round(Math.random())-0.5);
        }).appendTo(parent);
    });
});
function checkForWin() {
    var win = true;
    var images = $("#boundary-div img");
    var desiredPositions = ["#1", "#2", "#3", "#4", "#5", "#6"];
    images.each(function(index) {
      var currentId = $(this).attr("id");
      var desiredId = desiredPositions[index];
      if (currentId !== desiredId) {
        win = false;
        return false;
      }
    });
    if (win) {
      alert("You win!");
    }
  }
  
