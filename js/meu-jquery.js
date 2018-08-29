
$(document).ready(function(){

	/*$('').click(function(){

		$('').slideToggle();

	});*/

	$("#modal1").modal({backdrop:false,keyboard:false}); // backdrop:false desaparece fundo preto da tela quando usado, keyboard:false apertando esc não fecha a janela
	$("#modal1").modal("show");

	setTimeout(function(){
		$("#modal1").modal("hide");
	},3000);

	setTimeout(function(){
		$("#carousel1");
	},3000);

	$(".pv").popover({
		animation: false,
		delay: {show:500, hide:500},
		trigger: 'hover focus'
	});
    


/*$( "." ).mouseenter(function() {
  $( "" ).animate({ "height": "+=50px" }, "slow" );
});
 
$( "" ).mouseleave(function(){
  $( "" ).animate({ "height": "-=50px" }, "slow" );
});*/


});



