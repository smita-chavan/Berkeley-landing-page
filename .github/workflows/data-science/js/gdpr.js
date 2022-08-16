var excludeCountry = ['Austria', 'Belgium', 'Bulgaria', 'Croatia', 'Cyprus', 'Czech Republic', 'Czeck Republic', 'Denmark', 'Estonia', 'Finland', 'France', 'Germany', 'Greece', 'Hungary', 'Ireland', 'Italy', 'Latvia', 'Lithuania', 'Luxembourg', 'Malta', 'Netherlands', 'Poland', 'Portugal', 'Romania', 'Romainia', 'Slovakia', 'Slovenia', 'Spain', 'Sweden', 'United Kingdom', 'UK']

$("#country").change(function(){
	if ($(this).val() != "" && $(this).val() != -1) 
	{
		var checkFlg = excludeCountry.indexOf($(this).val());
		$('#agree').prop('checked', false); 
		if(checkFlg != -1)
		{
			$('#gdpr-consent').show();
		}
		else{
			$('#gdpr-consent').hide();
		}
	}

});

$("#country1").change(function(){
	if ($(this).val() != "" && $(this).val() != -1) 
	{
		var checkFlg = excludeCountry.indexOf($(this).val());
		$('#agree1').prop('checked', false); 
		if(checkFlg != -1)
		{
			$('#gdpr-consent1').show();
		}
		else{
			$('#gdpr-consent1').hide();
		}
	}

});