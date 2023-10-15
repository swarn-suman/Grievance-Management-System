function myfun()
	{
		
		var ch1=false,ch2=false,ch3=false,ch4=false,ch5=false,ch6=false;
		var uname=document.getElementById("uname").value;
		var chkuname=document.getElementById("chkuser");
		if(uname=="")
		{
			chkuname.style.display='inline-block';
		}
		else
		{
			ch6=true;
			chkuname.style.display='none';
		}
	
		var fname=document.getElementById("fname").value;
		var chkfname=document.getElementById("chkfname");
		var str=new RegExp(/[0-9]/);
		var forfname=str.test(fname);
		if(forfname==true)
		{
			chkfname.innerHTML="*Only alphabets allowed.";
			chkfname.style.display='inline-block';
		}
		else if(fname=="")
		{
			chkfname.innerHTML="*Fill First Name";
			chkfname.style.display='inline-block';
		}
		else
		{
			ch1=true;
			chkfname.style.display='none';
		}
	
	//////////////////////////////////////////////////////////////////////////////////////////////////////
		var lname=document.getElementById("lname").value;
		var chklname=document.getElementById("chklname");
		var str2=new RegExp(/[0-9]/);
		var forlname=str2.test(lname);
		if(forlname==true)
		{
			chklname.innerHTML="*Only alphabets allowed.";
			chklname.style.display='inline-block';
		}
		else if(lname=="")
		{
			chklname.style.display='inline-block';
		}	
		else 
		{
			ch2=true;
			chklname.style.display='none';
		}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		var mail=document.getElementById("mail").value;
		var chkmail=document.getElementById("chkmail");
		var formail =new RegExp(/^[a-zA-Z0-9]+@+[a-zA-Z]+\.+[a-z]+$/);
		var cme=formail.test(mail);
		if(cme!=true)
		{
			chkmail.innerHTML="*Enter Correct syntax of email(abc@xyz.xz)";
			chkmail.style.display='inline-block';
		}
		else if(mail=="")
		{
			chkmail.innerHTML="*Fill Email ";
			chkmail.style.display='inline-block';
		}	
		else 
		{
			ch3=true;
			chkmail.style.display='none';
		}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		var pn=document.getElementById("pn").value;
		var chkpn=document.getElementById("chkpn");
		var forpn= new RegExp (/(^[0-9]{3})+([0-9]{8})+$/);
		var seeme=forpn.test(pn);
		if(seeme!=true)
		{
			chkpn.innerHTML="Enter Phone Number (0xxxyyyyyyy)";
			chkpn.style.display='inline-block';
		}else if(pn=="")
		{
			chkpn.innerHTML="*Fill Phone Number";
			chkpn.style.display='inline-block';
		}
		else 
		{
			ch4=true;
			chkpn.style.display='none';
		}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		var pass=document.getElementById("pass").value;
		var cpass=document.getElementById("cpass").value;
		var spass=document.getElementById("match");
		if(pass=="")
		{
			
			spass.innerHTML="*Fill password";
			spass.style.display='inline-block';
		}
		else
		{
		if(pass==cpass)
		{
			ch5=true;
			spass.style.display='inline-block';
			spass.innerHTML="*password matched";
		}
		else
		{
			spass.style.display='inline-block';
			spass.innerHTML="*password NOT matched";
		}
		}
		if(ch1==true&&ch2==true&&ch3==true&&ch4==true&&ch5==true&&ch6==true){
		document.getElementById("reg").submit();
		
		}
		
	}