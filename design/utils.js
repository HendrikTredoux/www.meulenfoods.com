
function onInputFocus(input){
	input.className="inputfocus";
	if(input.value==input.alt){
		input.value="";
	}
}
function onInputFocusOut(input){
	if(input.value==""){
		input.value=input.alt;
		input.className="inputinit";
	}
}

function onGetQuoteClick(){
	document.getElementById("options").style.display = "none";
	document.getElementById("contactform").style.display = "";
}

function onFormSubmitClick(){
	if(validateFields()) document.getElementById("form").submit();
}

function validateFields(){
	var returnValue = true;
	
	if((getFieldValue("name")=="")&&(getFieldValue("surname")=="")){
		if(returnValue) alert("Please provide at least your name, or lastname.")
		returnValue = false;
	}
	if((getFieldValue("name")==getFieldAlt("name"))&&(getFieldValue("surname")==getFieldAlt("surname"))){
		if(returnValue) alert("Please provide at least your name, or lastname.")
		returnValue = false;
	}
	if((getFieldValue("name")=="")&&(getFieldValue("surname")==getFieldAlt("surname"))){
		if(returnValue) alert("Please provide at least your name, or lastname.")
		returnValue = false;
	}
	if((getFieldValue("name")==getFieldAlt("name"))&&(getFieldValue("surname")=="")){
		if(returnValue) alert("Please provide at least your name, or lastname.")
		returnValue = false;
	}



	if((getFieldValue("telephone")=="")&&(getFieldValue("email")=="")){
		if(returnValue) alert("Please provide at least your telephone number, or email address.")
		returnValue = false;
	}
	if((getFieldValue("telephone")==getFieldAlt("telephone"))&&(getFieldValue("email")==getFieldAlt("email"))){
		if(returnValue) alert("Please provide at least your telephone number, or email address.")
		returnValue = false;
	}
	if((getFieldValue("telephone")=="")&&(getFieldValue("email")==getFieldAlt("email"))){
		if(returnValue) alert("Please provide at least your telephone number, or email address.")
		returnValue = false;
	}
	if((getFieldValue("telephone")==getFieldAlt("telephone"))&&(getFieldValue("email")=="")){
		if(returnValue) alert("Please provide at least your telephone number, or email address.")
		returnValue = false;
	}

	if((getFieldValue("telephone")==getFieldAlt("telephone"))&&(getFieldValue("email")=="")){
		if(returnValue) alert("Please provide at least your telephone number, or email address.")
		returnValue = false;
	}

	if(($("#contact_by_email").attr("checked"))&&(getFieldValue("email")=="")){
		if(returnValue) alert("Please provide your email address if you want to be contacted by email.")
		returnValue = false;
	}
	
	return returnValue;
}

function getFieldValue(fieldName){
	return $("input[name=" + fieldName + "]").val();
}
function getFieldAlt(fieldName){
	return $("input[name=" + fieldName + "]").attr("alt");
}