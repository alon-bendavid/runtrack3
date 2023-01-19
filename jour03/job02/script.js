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

