

$(document).ready(function(){
	$('.menuc li: has(ul)').click(function(e){
		$(".menuc li ul li a").click(function (e) {
    window.location.href = $(this).attr("href");

		if($(this).hasClass('selection')){

		}else{
			$('.menuc li ul').slideUp();
			$('.menuc li').removeClass('selection');
			$(this).addClass('selection');
			$(this).children('ul').slideDown();
		}

	});
});