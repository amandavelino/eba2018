var 		home 		= 	"body",
			body  		= 	$("html, body"),
			top 		= 	$(window).scrollTop(),
			duration 	=	'800';

$(document).ready(function(){

	//navegacao
    $('#nav-principal a').click(function(e) {

    	if($(this).closest('.navbar-collapse').hasClass('in'))
    	{
    		$(this).closest('.navbar-collapse').removeClass('in');
    	}
        
        var div = $(this).attr("href"),
            sessao = $(div).offset().top - 120;

        if ($('.ativo').hasClass('ativo')) {
            $('.ativo').removeClass('ativo');
        }

        $(this).addClass('ativo');
        
        if(div == "#o-evento"){
        	sessao = 0;
        }//endif

        body.stop().animate({
            scrollTop: sessao
        }, '700', "swing", function() {});
        
        if(!$(this).hasClass("refresh")){
        	return false;
        }
        
    
    });// 

    $('.navbar-brand, .btn-inscricao, .btn-delegacao').click(function(e) {

    	var goto;

    	if($(this).attr("href") == "#home"){
    		goto = 0;
    	}else{
    		goto =  $($(this).attr("href")).offset().top - 200;
    	}

		body.stop().animate({
	        scrollTop: goto
	    }, '700', "swing", function() {});

	    return false;

    });//

	//Depoimentos
	$('.owl-depoimentos').owlCarousel({
		items: 1,
		autoHeight: true,
	    loop: true,
	    margin: 10,
	    nav: false,
	    dots: true,
	    autoplay: true,
	    autoplayTimeout: 8000,
	    autoplayHoverPause: true
	});

	$('.owl-ebaeuvou').owlCarousel({
		items: 1,
	    loop: true,
	    margin: 0,
	    center: true,
	    nav: true,
	    navText: ["<i class='fa fa-chevron-left' aria-hidden='true'></i>", "<i class='fa fa-chevron-right' aria-hidden='true'></i>"],
	    dots: false,
	    autoplay: true,
	    autoplayTimeout: 10000,
	    autoplayHoverPause: true
	});

	//Telefone
	$(".fone").maskbrphone({useDdd:!0,useDddParenthesis:!0,dddSeparator:" ",numberSeparator:"-"});

});//