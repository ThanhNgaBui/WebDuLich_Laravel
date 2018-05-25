function CheckForm(){
 	var ok=1;
 	if(document.forms[0].so_cho_ngoi.value !=0 && document.forms[0].so_cho_ngoi.value !=1
 		&& document.forms[0].so_cho_ngoi.value !=2 && document.forms[0].so_cho_ngoi.value !=3
 		&& document.forms[0].so_cho_ngoi.value !=4 && document.forms[0].so_cho_ngoi.value !=5
 		&& document.forms[0].so_cho_ngoi.value !=6 && document.forms[0].so_cho_ngoi.value !=7
 		&& document.forms[0].so_cho_ngoi.value !=8 && document.forms[0].so_cho_ngoi.value !=9)
	{
		document.getElementById("so_cho").innerHTML = "Dữ liệu không đúng";
		ok =0;
	}
	else
	{
	    document.getElementById("so_cho").innerHTML = "";
	}
	
	if(ok==1)
		document.forms[0].submit();		

}