function formvalidate()
		{
		var name=document.forms["frmregister"]["name"].value;

	var mobile=document.forms["frmregister"]["mobile"].value;
	var password=document.forms["frmregister"]["password"].value;
	var checkemail=document.getElementById('email');
	var t=checkemail.value.indexOf('@');
	var d=checkemail.value.lastIndexOf('.');
	
		if(name=="")           <!-- first name validation  -->
		{
		document.getElementById('name').value='';
document.getElementById('name').focus();
		alert('Enter name');
	return false;
	}
	
	if(password=="" || password==" ")
	{
		document.getElementById('password').value='';
document.getElementById('password').focus();
		alert("Enter password");
	return false;
		
	}
	if(password.length<=8)
	{
document.getElementById('password').value='';
document.getElementById('password').focus();

	alert("Password too small");
	return false;
	
	}
	
		if(mobile=="" || mobile.length!=10)				<!-- mobile validation  -->
		{
			document.getElementById('mobile').value='';
document.getElementById('mobile').focus();
		alert("Incorrect mobile number");
	return false;
			
			
		}
		
		
	if(t=='-1' || d=='-1' || (t+2)>=d)
		{
			document.getElementById('email').value='';
document.getElementById('email').focus();
			alert("Email address is not valid");	
return false;
			
			
		}
		
	}
	