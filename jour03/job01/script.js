$(document).ready(function() {
    $("#text").click(function() {
      $("#textContainer").append("<p>This is some text</p>");
    //   $("#textContainer").append("<button id='deleteButton'>Delete Text</button>");
      $("#delText").click(function() {
        $("#textContainer p").remove();
        // $("#deleteButton").remove();
      });
    });
  });
  