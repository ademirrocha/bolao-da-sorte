$(document).ready(function (){

// FIXA POSIÇÃO LAYER LINKS
$(window).scroll(function() {
	var position = $('#divFixa').position(); 
	if($(window).scrollTop() >= position.top){
		$('#divFixa').css('position','fixed'); 
		$('#divFixa').css('top','0');
		$('#divFixa').css('border-bottom','1px solid #0080D5');
		$('#divFixaHidden').css('display','block');
	} 
	if($(window).scrollTop() < 110){
		$('#divFixa').css('position','relative'); 
		$('#divFixa').css('top','123');
		$('#divFixa').css('border-bottom','0'); 
		$('#divFixaHidden').css('display','none');
	}
});

// LINK PARA O TOPO DA PÁGINA
$('.myLinkToTop').click(function(){
	$('html,body').animate({scrollTop:0},'slow');
	return false;
});

// LINKA PARA O TOPO
// hide #LinkToTop first
$("#LinkToTop").hide();

// fade in #LinkToTop
$(window).scroll(function () {
	if ($(this).scrollTop() > 200) {
		$('#LinkToTop').fadeIn();
	} else {
		$('#LinkToTop').fadeOut();
	}
});

// INICIA BX SLIDER
var slider = $('.ulBxSlider').bxSlider({ });
$(document).click('.bx-next, .bx-prev',function() { slider.stopAuto(); slider.startAuto(); });
$(window).resize(function(){ slider.reloadSlider(); });




});

// ATUALIZA CRÉDITOS NO SPAN
function UpdateCreditos(valCredito){
	var els = document.getElementsByClassName('spnCreditos');
	for(var i = 0; i < els.length; i++) {
		els[i].innerHTML=valCredito;
	}
}


$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
