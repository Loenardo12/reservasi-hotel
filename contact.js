$(function () {
  $("#contact").click(function () {
    $("#contactForm").fadeToggle();
  });
  $(document).mouseup(function (e) {
    var container = $("#contactForm");

    if (!container.is(e.target) && container.has(e.target).length === 0) {
      container.fadeOut();
    }
  });
});
window.onload = function myFunction() {
  alert("CLICK TOMBOL CLICK HERE!!");
};
