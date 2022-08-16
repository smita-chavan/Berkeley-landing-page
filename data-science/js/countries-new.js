// country,code (w/ no '+' prefix)
// Countries
var country_arr = new Array("United States~", "Canada~", "Afghanistan~", "Albania~", "Algeria~", "American Samoa~", "Andorra~", "Angola~", "Anguilla~", "Antarctica~", "Antigua and Barbuda~", "Argentina~", "Armenia~", "Aruba~", "Australia~", "Austria~", "Azerbaijan~", "Bahamas~", "Bahrain~", "Bangladesh~", "Barbados~", "Belarus~", "Belgium~", "Belize~", "Benin~", "Bermuda~", "Bhutan~", "Bolivia~", "Bosnia and Herzegovina~", "Botswana~", "Brazil~", "British Indian Ocean Territory~", "British Virgin Islands~", "Brunei~", "Bulgaria~", "Burkina Faso~", "Burundi~", "Cambodia~", "Cameroon~", "Cape Verde~", "Cayman Islands~", "Central African Republic~", "Chad~", "Chile~", "China~", "Christmas Island~", "Cocos (Keeling) Islands~", "Colombia~", "Comoros~", "Congo~", "Cook Islands~", "Costa Rica~", "Croatia~", "Cuba~", "Curaçao~", "Cyprus~", "Czech Republic~", "Côte d'Ivoire~", "Democratic Republic of the Congo~", "Denmark~", "Djibouti~", "Dominica~", "Dominican Republic~", "Ecuador~", "Egypt~", "El Salvador~", "Equatorial Guinea~", "Eritrea~", "Estonia~", "Ethiopia~", "Falkland Islands~", "Faroe Islands~", "Fiji~", "Finland~", "France~", "French Guiana~", "French Polynesia~", "French Southern Territories~", "Gabon~", "Gambia~", "Georgia~", "Germany~", "Ghana~", "Gibraltar~", "Greece~", "Greenland~", "Grenada~", "Guadeloupe~", "Guam~", "Guatemala~", "Guernsey~", "Guinea~", "Guinea-Bissau~", "Guyana~", "Haiti~", "Honduras~", "Hong Kong S.A.R., China~", "Hungary~", "Iceland~", "India~", "Indonesia~", "Iran~", "Iraq~", "Ireland~", "Isle of Man~", "Israel~", "Italy~", "Jamaica~", "Japan~", "Jersey~", "Jordan~", "Kazakhstan~", "Kenya~", "Kiribati~", "Kuwait~", "Kyrgyzstan~", "Laos~", "Latvia~", "Lebanon~", "Lesotho~", "Liberia~", "Libya~", "Liechtenstein~", "Lithuania~", "Luxembourg~", "Macao S.A.R., China~", "Macedonia~", "Madagascar~", "Malawi~", "Malaysia~", "Maldives~", "Mali~", "Malta~", "Marshall Islands~", "Martinique~", "Mauritania~", "Mauritius~", "Mayotte~", "Mexico~", "Micronesia~", "Moldova~", "Monaco~", "Mongolia~", "Montenegro~", "Montserrat~", "Morocco~", "Mozambique~", "Myanmar~", "Namibia~", "Nauru~", "Nepal~", "Netherlands~", "New Caledonia~", "New Zealand~", "Nicaragua~", "Niger~", "Nigeria~", "Niue~", "Norfolk Island~", "North Korea~", "Northern Mariana Islands~", "Norway~", "Oman~", "Pakistan~", "Palau~", "Palestinian Territory~", "Panama~", "Papua New Guinea~", "Paraguay~", "Peru~", "Philippines~", "Pitcairn~", "Poland~", "Portugal~", "Puerto Rico~", "Qatar~", "Romania~", "Russia~", "Rwanda~", "Réunion~", "Saint Barthélemy~", "Saint Helena~", "Saint Kitts and Nevis~", "Saint Lucia~", "Saint Pierre and Miquelon~", "Saint Vincent and the Grenadines~", "Samoa~", "San Marino~", "Sao Tome and Principe~", "Saudi Arabia~", "Senegal~", "Serbia~", "Seychelles~", "Sierra Leone~", "Singapore~", "Slovakia~", "Slovenia~", "Solomon Islands~", "Somalia~", "South Africa~", "South Korea~", "South Sudan~", "Spain~", "Sri Lanka~", "Sudan~", "Suriname~", "Svalbard and Jan Mayen~", "Swaziland~", "Sweden~", "Switzerland~", "Syria~", "Taiwan~", "Tajikistan~", "Tanzania~", "Thailand~", "Timor-Leste~", "Togo~", "Tokelau~", "Tonga~", "Trinidad and Tobago~", "Tunisia~", "Turkey~", "Turkmenistan~", "Turks and Caicos Islands~", "Tuvalu~", "U.S. Virgin Islands~", "Uganda~", "Ukraine~", "United Arab Emirates~", "United Kingdom~", "United States Minor Outlying Islands~", "Uruguay~", "Uzbekistan~", "Vanuatu~", "Vatican~", "Venezuela~", "Viet Nam~", "Wallis and Futuna~", "Western Sahara~", "Yemen~", "Zambia~", "Zimbabwe~");



function populateCountryCode( countryElementId, codeElementId ,OTPElementId){
	
	var selectedCountryIndex = document.getElementById( countryElementId ).selectedIndex;
	var selectedCountryCode = document.getElementById(countryElementId).options[selectedCountryIndex].getAttribute('data-code');
	document.getElementById( codeElementId ).value = selectedCountryCode;
	
	if( OTPElementId ){
		populateOTP(OTPElementId );
	}
	
	
}

function populateCountries(countryElementId, codeElementId, OTPElementId){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	
	var countryElement = document.getElementById(countryElementId);
	countryElement.length=0;
	countryElement.options[0] = new Option('','-1');
	countryElement.selectedIndex = 0;
	for (var i=0; i<country_arr.length; i++) {
		arrCD = country_arr[i].split('~');
		
		var option = document.createElement("option");
		option.setAttribute("value", arrCD[0].trim());
		option.setAttribute("data-code", arrCD[1].trim());
		option.text = (arrCD[0].trim());
		countryElement.appendChild(option);
	}

	// Assigned all countries. Now assign event listener for the states.

	if( codeElementId ){
		countryElement.onchange = function(){
			populateCountryCode( countryElementId, codeElementId ,OTPElementId );
		};
	}
}