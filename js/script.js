$(document).ready(function($) {

       $(".loaders a").click(function() {
      
        $('.loaders a').removeClass('current');

        $(this).addClass('current');
    });



    $("#sections a").click(function() {
        var tab_id = $(this).attr('data-tab');

        $('.panel').removeClass('show');
        $('#sections a').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('show');
    });
$(".top").click(function () {
	$('.panel').removeClass('show');
    $('#sections a').removeClass('current');
})


$("#logo").click(function () {
  window.location.href = "/index.php";

})



//Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scroll').fadeIn();
        } else {
            $('.scroll').fadeOut();
        }
    });
    
    //Click event to scroll to top
    $('.scroll').click(function(){
        $('html, body').animate({scrollTop : 0},400);
        return false;
    });

// load templates into placeholder 
$('.loaders > a').click(function(e){
         e.preventDefault();
         var link = $(this).attr("href");
         $('#layouts').load(link,
             function() {
 $("#layouts").fadeIn(); 

               });
      });
$(".userlevels a").click(function(){
    $(".userlevels a").removeClass("current");
    $(this).addClass("current");
$(".productlist").addClass("reveal");
         var productlist = $(this).attr("data-tab");
         $(".productlist div").addClass("hidden");

$("#"+productlist).removeClass("hidden");


});

$("#whattab").addClass("current");
$("#what").addClass("show");


});


