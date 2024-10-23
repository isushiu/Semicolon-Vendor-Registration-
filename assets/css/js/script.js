$( document ).ready(function() {
    var w = window.innerWidth;
   
    if(w > 767){
        $('#menu-jk').scrollToFixed();
    }else{
        $('#menu-jk').scrollToFixed();
    }
    
})




$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:false,
        navigation:true,
        navigationText:["",""],
        autoPlay:true
    });
});


$( document ).ready(function() {

    $('.owl-carousel').owlCarousel({
       loop:true,
       margin:0,
       nav:true,
       autoplay: true,
       dots: true,
       autoplayTimeout: 5000,
       navText:['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
       responsive:{
           0:{
               items:1
           },
           600:{
               items:1
           },
           1000:{
               items:1
           }
       }
   })


});