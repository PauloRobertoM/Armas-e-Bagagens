(function($, window) {
	$('#owl-blog').owlCarousel({
        loop: true,
        autoplay: true,
        margin:0,
        nav:true,
        navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
        dots: false,
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
    });
    //jqfloat.js script
    $('.barco').each(function() {
        $(this).jqFloat({
            width:Math.floor(Math.random()*10)*10,
            height:10,
            speed:Math.floor(Math.random()*10)*100 + 1000
        });
    });
    $(function(){
        //using jquery to loop each li element and automatically add an arrow span if the element contains a child of ul list
        $('#category-menu ul li').each(function(){
            if ($(this).find('ul').length > 0)
            {
                $(this).addClass("has-child");
                $(this).prepend("<span class='arrow'></span>");
            }
        });
        
        //bind an event to the li link that contains a child of ul list.
        $('#category-menu ul > li.has-child a').on("click", function(event){
            var currentArrow = $(this).parent().find(" > span");
            if($(currentArrow).length > 0){
                if($(currentArrow).attr("class").indexOf("arrow-up") > 0){
                    $(currentArrow).removeClass("arrow-up");
                    $(currentArrow).parent().find(" > ul").slideUp();
                }else{
                    $(currentArrow).addClass("arrow-up");
                    $(currentArrow).parent().find(" > ul").slideDown();
                }
            }
        });
    });
})(jQuery, window);