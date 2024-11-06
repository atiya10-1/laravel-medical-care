$(function () {
  "use strict";

  var url = window.location.href; // Get the current URL
  var path = url.replace(window.location.protocol + "//" + window.location.host + "/", "");

  // Find the sidebar item that matches the current URL and mark it as active
  var element = $("#sidebarnav a").filter(function () {
      return this.href === url || this.href === path; 
  });

  element.parentsUntil(".sidebar-nav").each(function () {
      if ($(this).is("li") && $(this).children("a").length !== 0) {
          $(this).children("a").addClass("active dark-theme");
          $(this).parent("ul#sidebarnav").length === 0
              ? $(this).addClass("active dark-theme")
              : $(this).addClass("selected dark-theme");
      } else if (!$(this).is("ul") && $(this).children("a").length === 0) {
          $(this).addClass("selected dark-theme");
      } else if ($(this).is("ul")) {
          $(this).addClass("in");
      }
  });

  // Ensure the element itself is also active
  element.addClass("active dark-theme");

  // Handle the sidebar toggle behavior
  $("#sidebarnav a").on("click", function () {
      if (!$(this).hasClass("active")) {
          $("ul", $(this).parents("ul:first")).removeClass("in");
          $("a", $(this).parents("ul:first")).removeClass("active dark-theme");

          $(this).next("ul").addClass("in");
          $(this).addClass("active dark-theme");
      } else if ($(this).hasClass("active")) {
          $(this).removeClass("active dark-theme");
          $(this).parents("ul:first").removeClass("active dark-theme");
          $(this).next("ul").removeClass("in");
      }
  });

  // Prevent the default action for links with arrow
  $("#sidebarnav >li >a.has-arrow").on("click", function (e) {
      e.preventDefault();
  });
});
