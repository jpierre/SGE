/*Menu Acordeon*/
$(function(){
		(function($){
			
			$.fn.accordion = function(custom) {
				var defaults = {
					keepOpen: false,
					startingOpen: false
				} 
				var settings = $.extend({}, defaults, custom);
				if(settings.startingOpen){
					$(settings.startingOpen).show();
				}
			
				return this.each(function(){
					var obj = $(this);
					$('li a', obj).click(function(event){
							var elem = $(this).next();
							if(elem.is('ul')){
								event.preventDefault();
								if(!settings.keepOpen){
									obj.find('ul:visible').not(elem).not(elem.parents('ul:visible')).slideUp();
								}
								elem.slideToggle();
							}
					});
				});
			};
		})(jQuery);
		
	$('#menu').accordion({keepOpen:false, startingOpen: '#open'});
	$('#menu_ayuda').accordion({keepOpen:false, startingOpen: '#open'});
	});

/*Fin Menu Acordeon*/

/*Script Clic Derecho*/
/*
var message="Clic Derecho... INHABILITADO  : )";


function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("alert(message);return false")*/


$(document).ready(function() {
					   $("#accordion").msAccordion({defaultid:1, vertical:true, event:'mouseover'});
						   }
						   )





