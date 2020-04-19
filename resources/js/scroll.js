$(window).scroll(function() {        
    var scroll = $(window).scrollTop();    
    if (scroll >= 100) {
       $("nav").addClass("bg-white shadow-sm");   
    }else{
       $("nav").removeClass("bg-white shadow-sm");
    }
});