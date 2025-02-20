////////////////////////
//CAMPOS CON SOLO NUMEROS
////////////////////////
function validaNumeros(ev){ // onkeydown="validaNumeros(event);"
	
	if(window.event) //IE
		var pK=event.keyCode;
	else//Firefox
		var pK = (document.all) ? ev.keyCode : ev.which;
	
	if (!((pK >= 48 && pK <= 57) || pK==8 || pK==13)){
		if (window.event) //IE
			event.returnValue = false;
		else //Firefox
			ev.preventDefault();
	}
	else{
		
	}
		
}
////////////////////////
//CAMPOS CON SOLO LETRAS
////////////////////////
function validaLetras(ev){ // onkeydown="validaLetras(event);"
	
	if(window.event) //IE
		pK=event.keyCode;
	else//Firefox
		pK = (document.all) ? ev.keyCode : ev.which;
	
	if (!((pK >= 65 && pK <= 90) || (pK >= 97 && pK <= 122) || (pK >= 160 && pK <= 165) || pK==8 || pK==13 || pK==32 || pK==192)){
		if (window.event) //IE
			event.returnValue = false;
		else //Firefox
			ev.preventDefault();
	}
	else{
		
	}
		
}
