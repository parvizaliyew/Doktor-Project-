$('.home-slider').owlCarousel({
    loop:true,
    dots: true,
    margin:10,
    nav:true,
    items: 1,
	navText: ['<img src="./img/nav-left.png">','<img src="./img/nav-right.png">'],
})
$('.course-slider').owlCarousel({
    loop:true,
    dots: true,
    margin:10,
    nav:true,
    items: 3,
    navText: ['<img src="./img/nav-left.png">','<img src="./img/nav-right.png">'],
})
$('.comment-slider').owlCarousel({
    loop:true,
    dots: true,
    margin:10,
    nav:true,
    items: 2,
    navText: ['<img src="./img/nav-left.png">','<img src="./img/nav-right.png">'],
})
$('.media-slider').owlCarousel({
    loop:true,
    dots: true,
    margin:10,
    nav:true,
    items: 3,
    navText: ['<img src="./img/nav-left.png">','<img src="./img/nav-right.png">'],
})
$(".about-drop-head").click(function(){
    $(".about-drop-item").removeClass("active")
    $(this).parent().toggleClass("active")
})
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    console.log(scroll)
    if(scroll > 500){
        $(".single-form").addClass("sticky")
    }else{
        $(".single-form").removeClass("sticky")
    }
    if(scroll > 100){
        $("header").addClass("fixed")
    }else{
        $("header").removeClass("fixed")
    }
})
$("select").niceSelect()