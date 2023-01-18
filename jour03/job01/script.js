$(document).ready(function() {
    $("#text").click(function() {
      $("#textContainer").append("<p>Hello jquery </p>");
      $("#delText").click(function() {
        $("#textContainer p").remove();
      });
    });
  });
  