$(function(){
  $(".menu-trigger").on('click',function(){
      $(this).toggleClass("active");
      $(".menuWindow").toggleClass("active");
  });
});
