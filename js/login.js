$(document).ready( function() {

	//submit forma login	
	$("#frmVerCnp").on("submit", function( event ){
	  event.preventDefault();
	  //$('#submit-form').prop('disabled', true); //TO DISABLED
	  var form = $('#frmVerCnp');
	  $("input[name='type']").val($("input[name='inputType']:checked").val());
		$.ajax({
		  type: "POST",
		  url: baseURL+"api/ver_user.json.php",
		  data: form.serialize(),
		  error: function() {
				alert("Communication error. Try again or notify the site admin! Thank you.");
				$('#submit-form').prop('disabled', false); //TO DISABLED
			},
		  success: function(response) {
			try{
				obj = JSON.parse(response);
				if(obj.code == '200-OK'){
					
					var oPageInfo = {
									"stateObj": {},
									"title":"Preînscriere UCV",
									"url":"#home"
									}
					var doUpdateURL = false;
				
					if(obj.msgcode!=''){
						$("#frmErrorMsg span").html(obj.msgcode);
						$("#frmErrorMsg").show();
					}
					if(obj.next_action == "pass") {

						$(".only-cnp").hide();
						if (obj.type.length > 1){
							var valType = $("input[name='type']").val() || 1;
							$("input[name='inputType'][value="+valType+"]").prop("checked", true);
							$("#divType").show();
						} else {
							$("input[name='inputType'][value="+obj.type[0]+"]").prop("checked", true);
							$("#divType").hide();
						}
						$(".only-pass").show();
						$("input[name='step']").val(obj.next_action);
						oPageInfo.url = "#pass";
					}
					if(obj.next_action == "dashboard") {
						$("#wrapper-connect").hide();
						$("#wrapper-dashboard").show();
						if(obj.to_url != ''){
							window.location.href = obj.to_url;
						}
					}
					if (doUpdateURL) {
						history.pushState(oPageInfo.stateObj, oPageInfo.title, oPageInfo.url);
						bUpdateURL = false;
					}
				}
			}
			catch(e){
				alert("Malformed server answer. Try again or notify the site admin! Thank you.");
			}
		  }
		});
	});	
});