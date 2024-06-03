/*! npTostMsg (nptostmsg.jquery.js ) - v0.0.2
 *  Desc: Show Toast Messages.
 *  License: MIT
 */
 
function showMsg(msg, status, autoclose = true){
	if (msg == ""){
		return false;
	}
	var d = 4000;
	var color_class = "";
	var btn = '';
	
	if(status == 'SUCCESS'){
		color_class = " msg-green";
	}
	if(status == 'INFO'){
		color_class = " msg-yellow";
	}
	if(status == 'WARN'){
		color_class = " msg-yellow";
	}
	if(status == 'FAIL'){
		color_class = " msg-red";
	}
	if(status == 'ERROR'){
		color_class = " msg-red";
	}
	var $el = $('<div class="messagesBoxItem'+color_class+'">'+msg+btn+'</div>');

	if(!autoclose){
		btn = '<button type="button" class="close-button" aria-label="Close" aria-hidden="true">✖</button>';
		d *= 2;
	}
	
	$("#messagesBox").prepend($el);
	$el.delay(d).fadeOut(function(){$(this).remove();});
return true;
}

(function($){
	$("#messagesBox").on("click", ".close-button", function(e){
		//e.stopPropagation();
		$(this).closest(".messagesBoxItem").remove();
	});
	
}(jQuery));