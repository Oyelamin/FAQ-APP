jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});
});

// $(document).ready(function(){
//   $('#sideBarMenu ul li ul li a').click(function(){
//     $('#showView').hide();
//     var page= $(this).attr('href');
//     $('#showContents').load(page).fadeIn();
//       return false;
//   });
//   $('#sideBarMenu ul li #singleLink a').click(function(){
//       $('#showView').hide();
//       var page= $(this).attr('href');
//       $('#showContents').load(page).fadeIn();
//       return false;
//   });
// });
setTimeout(function() {
  $('#verify').hide('slow')
}, 5000);