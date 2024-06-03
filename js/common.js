function isFunction(fn){
	return typeof fn === 'function'
}
function isDefined(variable){
	return variable !== 'undefined'
}
$(".btn-checkbox").on('click', function(){
	$(this).toggleClass("checked");
});

function getChangeParams(obj){
	var rezdata = {};
	$.each(obj, function(key,value){
		if ((typeof value === "string") && (value.substr(0,1) == '#')){
			rezdata[key] = $(value).val();
			} else {
			rezdata[key] = value;
		}
	});
return rezdata;
}

function doAjaxFormSubmit(postdata){
	// send operations to the server and get result.
	if (postdata.posturl == ''){
		return '';
	}
	if ((postdata.params.call != undefined) && (postdata.params.call == 'g')){
		var urlCall = baseURL+'ajax/'+postdata.posturl;
	}else{
		var urlCall = baseURL+ajaxURL+'/ajax/'+postdata.posturl;
	}
	return $.ajax({
			type: "post",
			url: urlCall+'.ajax.php?rnd=' + Math.random(),
			dataType: "json",
			data: JSON.stringify(postdata),
			contentType: "application/json; charset=utf-8",
			error: function (jqXHR, exception) {
				var msg = '';
				if (jqXHR.status === 0) {
					msg = 'Not connect.\n Verify Network.';
				} else if (jqXHR.status == 404) {
					msg = 'Requested page not found. [404]';
				} else if (jqXHR.status == 500) {
					msg = 'Internal Server Error [500].';
				} else if (exception === 'parsererror') {
					msg = 'Requested JSON parse failed.';
				} else if (exception === 'timeout') {
					msg = 'Time out error.';
				} else if (exception === 'abort') {
					msg = 'Ajax request aborted.';
				} else {
					msg = 'Uncaught Error.\n' + jqXHR.responseText;
				}
				//showMsg(msg, "ERROR");
			}
	});	
}

var callbackRecuperareParola = function (obj){
		if((obj.code == '200-OK')&&(obj.msgcode == 'SUCCESS')){
			$("#infoModal .modal-error span").html('');
			$("#infoModal").find('.modal-error').hide();
			$('.only-edit').html(obj.data);
		}
}


function doAjaxLoadModalContent(url = '', operation = '', params = {}, modal = '', modalClassOnStart = '') {
    if (!url) {
        showMsg("Operația nu a fost definită!", "FAIL");
        return false;
    }

    const $modal = $("#" + modal);
    const $modalDialog = $modal.find('.modal-dialog');
    let rmContent = '';

    $.ajax({
        method: "POST",
        url: url,
        data: {
            "op": operation,
            "params": params
        }
    }).done(function (result, txtStatus, XHR) {
        rmContent = result || '<div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><h4 class="modal-title" id="infoModalLabel"><strong>Conținut inexistent</strong></h4></div><div class="modal-body"><p class="title">Serverul nu a întors nici un răspuns la cererea dumneavoastră.</p></div></div>';
    }).fail(function (result, txtStatus, XHR) {
        rmContent = '<div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><h4 class="modal-title" id="infoModalLabel"><strong>Eroare procesare date</strong></h4></div><div class="modal-body"><p class="title">Serverul nu a întors nici un răspuns la cererea dumneavoastră.</p></div></div>';
    }).always(function () {
        $modalDialog.html(rmContent);
        if (modalClassOnStart) {
            $modalDialog.removeClass().addClass(modalClassOnStart);
        }
        $modal.modal('show');
    });
}

$(document).ready( function() {
	//hide error msg on form edit
	$('input').keypress(function() {
		$('#frmErrorMsg').hide();
		return true;
	});

//fix modal over modal scroll issue in bootstrap
	$(".modal").on('hidden.bs.modal', function(){
		var modalShown = false;
		$('.modal').each(function(){
			var c = $(this).data('bs.modal');
			if(c && c.isShown){modalShown = true;}
		});
		if(modalShown){$('body').addClass("modal-open");}
	});

	$('.modal').on('hidden.bs.modal', function () {
		$(this).find('.modal-dialog').html("");
		if(window.to_url){
			if(window.to_url.split("_")[0] && window.to_url.split("_")[0] === 'MODULE'){
				window.location.href = window.module_url;
			}else{
				window.location.href = window.to_url;
			}
		}
	});

	$('.modal').modal({
	  keyboard: false,
	  backdrop: 'static',
	  show: false
	});

	$('#infoModal').on('show.bs.modal', function (e) {
		var modal = $(this);
		var button = $(e.relatedTarget) // Button that triggered the modal
		var rmContentSource = button.data('remotesource'); // Extract info from data-* attributes
		var rmContent = '';
		$.ajax({
			 url: baseURL+'template/content/' + rmContentSource
		}).done(function(result, txtStatus, XHR){
			rmContent = result;
			if(rmContent == ''){
				rmContent = '<div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><h4 class="modal-title" id="infoModalLabel"><strong>Conținut inexistent</strong></h4></div><div class="modal-body"><p class="title">Serverul nu a întors nici un răspuns la cererea dumneavoastră.</p></div></div>';
			}
		}).fail(function(result, txtStatus, XHR){
			rmContent = '<div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><h4 class="modal-title" id="infoModalLabel"><strong>Eroare procesare date</strong></h4></div><div class="modal-body"><p class="title">Serverul nu a întors nici un răspuns la cererea dumneavoastră.</p></div></div>';
		}).always(function(){
			modal.find('.modal-dialog').html(rmContent);
		});
	});

	$(".modal").on("submit", ".form-ajax-submit", function(e) {
		e.preventDefault();
		var e_modal_id = 'edtDgModal';
		if ($(this).closest('.modal') !== undefined) e_modal_id = $(this).closest('.modal')[0].id;
		var e_loading = $(this).data('loading');
		if (e_loading !== undefined) {
			$("#"+e_loading+"-LoadingOff").hide();
			$("#"+e_loading+"-LoadingOn").show();
		}
		var fo_beforesubmit = $(this).data('beforesubmit');
		if((fo_beforesubmit) && (typeof window[fo_beforesubmit] === "function")){
			window[fo_beforesubmit](e);
		} 
		if (typeof localVar != 'undefined'){
			var context = localVar;
		}else{
			var context = {};
		}
		var	postdata = {
							"posturl" : $(this).data('posturl'),
							"formdata" : $(this).serializeArray(),
							"callback" : $(this).data('callback'),
							"params" : getChangeParams($(this).data('params')),
							"context": context
						}; 

		$("#"+e_modal_id+" .modal-error span").html('');
		$("#"+e_modal_id).find('.modal-error').hide();

		doAjaxFormSubmit(postdata)
			.done(function(response){
				if (e_loading) {
					$("#"+e_loading+"-LoadingOn").hide();
					$("#"+e_loading+"-LoadingOff").show();
				}

				try {
					var obj = response;
					if(obj.msgdetails.location != undefined){
						if(obj.code == '500-Internal Server Error'){
							alert(obj.msgdetails.global);
						} 
						window.location.href = obj.msgdetails.location; return;
					}
					if((obj.code == '200-OK')&&(obj.msgcode == 'ERROR')){
						if ($("#"+e_modal_id+" .modal-error").length != 0){
							$("#"+e_modal_id+" .modal-error span").html(obj.msgdetails.global);
							$("#"+e_modal_id+" .modal-error").show();
							$("#"+e_modal_id).animate({ scrollTop: $(".modal-error").offset().top}, 500);
						}
					} else {
						if (obj.msgdetails.close === 0) {
							showMsg(obj.msgdetails.global, obj.msgcode, false);
						} else {
							showMsg(obj.msgdetails.global, obj.msgcode);
						}
					}
				}
				catch(e) {
					alert("02 Malformed server answer. Try again or notify the site admin! Thank you.");
				}
				if((postdata.callback) && (typeof window[postdata.callback] === "function")){
					window[postdata.callback](obj, postdata.params);
				}
			})
			.fail(function(response, txtStatus, XHR){
				if (e_loading) {
					$("#"+e_loading+"-LoadingOn").hide();
					$("#"+e_loading+"-LoadingOff").show();
				}
				if (response.status == 403){
					var errMsg = JSON.parse(response.responseText);
					showMsg("Eroare: "+errMsg.error, "ERROR");
				}else{
					showMsg("Eroare "+txtStatus, "ERROR");
				}
			});
	});

});