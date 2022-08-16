
$("#custom-form").validate({ 
		rules: {
			'custom_form_entry[first_name]': {
				required: true,
				specialChar:true
			},
			'custom_form_entry[last_name]': {
				required: true,
				specialChar:true
			},
			'custom_form_entry[country]':{
				required: true,
				notEqual: "-1"
			},
			'custom_form_entry[work_experience]': {
				required: true,
			},
			'custom_form_entry[email]':{
				required: true,
				email:true,
				customemail:true
			},
			'custom_form_entry[phone]': {
				required: true,
				digits: true,
				rangelength:  function(element){
					if($("#custom_form_entry_country").val()=='IN'){
						return [10, 10];
					}
					else{
						return [5, 20];
					}
				},			
			}
		}, 
		messages: {
			'custom_form_entry[first_name]': {
				required: "Please provide your first name",
				specialChar:"Please provide only alphanumeric values",
			},
			'custom_form_entry[last_name]': {
				required: "Please provide your last name",
				specialChar:"Please provide only alphanumeric values",
			},
			'custom_form_entry[country]':{
				required: "Please provide country name",
				notEqual: "Please provide country name",
			},
			'custom_form_entry[work_experience]': {
				required: "Please provide work exp",
			},
			'custom_form_entry[email]':{
				required: "Please provide your email",
				email: "Please provide valid email",
				customemail: "Please provide valid email",
			},
			'custom_form_entry[phone]': {
				required: "Please provide your phone no",
				digits: "Please provide only digits (0 - 9) in phone no",
				rangelength: "Please provide valid phone no",			
			}			
		},
		 errorPlacement: function(error, element){
			error.appendTo( element.siblings(".wpcf7-not-valid-tip") );;
		},
		submitHandler: function(form){
			/*form success event*/	
			window.VWO = window.VWO || [];
			window.VWO.push(['nls.formAnalysis.markSuccess', $('#custom-form'), 1]);
			/*form success event over*/
			
			var btn = $('#custom_form_entry_submit');
			btn.val("Processing...");
			btn.attr("disabled",true);
			
			//event.preventDefault()
			 var postUrl = $(form).attr("action");
			 var requestMethod = $(form).attr("method");
			 var formData = $(form).serialize();
			 $.ajax({
				 url : postUrl,
				 type: requestMethod,
				 data : formData,
				 dataType: "json",
				 xhrFields: {
					withCredentials: true
				 },
				 success: function(data) {
					trackAmplitude('submit lead form','individual','','','');
					// Do your stuff here on success
					console.log(data);
					window.location.href = data['https://berkeleyonlineprograms.com/data-science/thankyou.php'];
					
					$('#apiform-validation-errors').html('');
					$('#apiform-validation-errors').hide();
				 },
				 error: function(error) {
					 // Do your stuff here on error
					 console.log(error);
					 
					$('#apiform-validation-errors').html('Some error occured, please try again later.');
					$('#apiform-validation-errors').show(); 
					
					 btn.val("Download Brochure");
					 btn.attr("disabled",false);
				}
			 });
			 //return false;
			//form.submit();
			
		}
	});