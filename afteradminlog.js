
			function callsh()
			{
				if(document.getElementById("sh_menu").style.display=='block')
				{
					document.getElementById("sh_menu").style.display='none';
				}
				else {
					document.getElementById("sh_menu").style.display='block';
				}
			}
			function comp()
			{
				var p=document.getElementById("p_comp");
				var f=document.getElementById("f_comp");
				var i=document.getElementById("i_comp");
				if(document.getElementById('ccomp').style.display=='block')
				{
					p.style.display='none';
					document.getElementById('ccomp').style.display='none';
					f.style.display='none';
					i.style.display='none';
					
				}
				else
				{
					p.style.display='block';
					document.getElementById('ccomp').style.display='block';
					f.style.display='block';
					i.style.display='block';
					
				}
			}
			function manageuser(){
				var l=document.getElementById("l_user");
				if(l.style.display=='none')
				{
					l.style.display='block';
					document.getElementById('a_user').style.display='block';
				}
				else
				{
					l.style.display='none';
					document.getElementById('a_user').style.display='none';
					
				}
			}
			function dashboard()
			{
				var dash=document.getElementById('dashboard');
				var luser=document.getElementById('logindata');
				var auser=document.getElementById('alluser');
				var full=document.getElementById('fullhistory');
				var inpro=document.getElementById('inprocomp');
				var comp=document.getElementById('complcomp');
				var pend=document.getElementById('pending');
				if(dash.style.display=='block')
				{
					luser.style.display='none';
					auser.style.display='none';
					full.style.display='none';
					inpro.style.display='none';
					comp.style.display='none';
					pend.style.display='none';
				}
				else
				{
					dash.style.display='block';
					luser.style.display='none';
					auser.style.display='none';
					full.style.display='none';
					inpro.style.display='none';
					comp.style.display='none';
					pend.style.display='none';
				}
			}
			function pending()
			{
				var pend=document.getElementById('pending');
				var dash=document.getElementById('dashboard');
				var luser=document.getElementById('logindata');
				var auser=document.getElementById('alluser');
				var full=document.getElementById('fullhistory');
				var inpro=document.getElementById('inprocomp');
				var comp=document.getElementById('complcomp');
				if(pend.style.display=='block')
				{
					dash.style.display='none';
					luser.style.display='none';
					auser.style.display='none';
					full.style.display='none';
					inpro.style.display='none';
					comp.style.display='none';
				}
				else
				{
					
					pend.style.display='block';
					dash.style.display='none';
					luser.style.display='none';
					auser.style.display='none';
					full.style.display='none';
					inpro.style.display='none';
					comp.style.display='none';
				}
				
			}
				function complcomp()
			{
				var comp=document.getElementById('complcomp');
				var pend=document.getElementById('pending');
				var dash=document.getElementById('dashboard');
				var luser=document.getElementById('logindata');
				var auser=document.getElementById('alluser');
				var full=document.getElementById('fullhistory');
				var inpro=document.getElementById('inprocomp');
				if(comp.style.display=='block')
				{
					dash.style.display='none';
					luser.style.display='none';
					auser.style.display='none';
					full.style.display='none';
					inpro.style.display='none';
					pend.style.display='none';
				}
				else
				{
					
					comp.style.display='block';
					dash.style.display='none';
					luser.style.display='none';
					auser.style.display='none';
					full.style.display='none';
					inpro.style.display='none';
					pend.style.display='none';
				}
				
			}	
			function inpro()
			{
				var inpro=document.getElementById('inprocomp');
				var comp=document.getElementById('complcomp');
				var pend=document.getElementById('pending');
				var dash=document.getElementById('dashboard');
				var luser=document.getElementById('logindata');
				var auser=document.getElementById('alluser');
				var full=document.getElementById('fullhistory');
				if(inpro.style.display=='block')
				{
					dash.style.display='none';
					luser.style.display='none';
					auser.style.display='none';
					full.style.display='none';
					pend.style.display='none';
					comp.style.display='none';
				}
				else
				{
					
					inpro.style.display='block';
					dash.style.display='none';
					luser.style.display='none';
					auser.style.display='none';
					full.style.display='none';
					pend.style.display='none';
					comp.style.display='none';
				}
				
			}
				
			function full()
			{
				var full=document.getElementById('fullhistory');
				var inpro=document.getElementById('inprocomp');
				var comp=document.getElementById('complcomp');
				var pend=document.getElementById('pending');
				var dash=document.getElementById('dashboard');
				var luser=document.getElementById('logindata');
				var auser=document.getElementById('alluser');
				if(full.style.display=='block')
				{
					dash.style.display='none';
					luser.style.display='none';
					auser.style.display='none';
					pend.style.display='none';
					inpro.style.display='none';
					comp.style.display='none';
				}
				else
				{
					
					full.style.display='block';
					dash.style.display='none';
					luser.style.display='none';
					auser.style.display='none';
					pend.style.display='none';
					inpro.style.display='none';
					comp.style.display='none';
				}
				
			}
			function auser()
			{
				var auser=document.getElementById('alluser');
					var full=document.getElementById('fullhistory');
				var inpro=document.getElementById('inprocomp');
				var comp=document.getElementById('complcomp');
				var pend=document.getElementById('pending');
				var dash=document.getElementById('dashboard');
				var luser=document.getElementById('logindata');
				if(auser.style.display=='block')
				{
					
					dash.style.display='none';
					luser.style.display='none';
					full.style.display='none';
					pend.style.display='none';
					inpro.style.display='none';
					comp.style.display='none';
				}
				else
				{
					auser.style.display='block';
					dash.style.display='none';
					luser.style.display='none';
					full.style.display='none';
					pend.style.display='none';
					inpro.style.display='none';
					comp.style.display='none';
				}
				
			}function luser()
			{
				var luser=document.getElementById('logindata');
				var full=document.getElementById('fullhistory');
				var inpro=document.getElementById('inprocomp');
				var auser=document.getElementById('alluser');
				var comp=document.getElementById('complcomp');
				var pend=document.getElementById('pending');
				var dash=document.getElementById('dashboard');
				if(luser.style.display=='none')
				{
					dash.style.display='none';
					full.style.display='none';
					pend.style.display='none';
					inpro.style.display='none';
					auser.style.display='none';
					comp.style.display='none';
					
					document.getElementById("logindata").style.display="block";
				}
				else
				{
					
					document.getElementById("logindata").style.display="block";
					
					dash.style.display='none';
					auser.style.display='none';
					full.style.display='none';
					pend.style.display='none';
					inpro.style.display='none';
					comp.style.display='none';
				}
				
			}
