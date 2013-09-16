function createRequestObject()
{ var xmlhttp = false;
        try
        {xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e)
         {try
                {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                  }
                catch (E)
                {
                        xmlhttp = false;
                }
         }
        if (!xmlhttp && typeof XMLHttpRequest!='undefined')
        {
                xmlhttp = new XMLHttpRequest();
        }
        return xmlhttp;
}

function check_availability()
{	
	var req = createRequestObject();
	req.open("POST", 'user_avail.php?user=' + document.getElementById('user').value, true);
	req.onreadystatechange = function()
	{
		if(req.readyState == 4)
		{
			var response = req.responseText;
			alert(response);
		}
	}

	req.send(null);
}

function getImg()
{
	var r=Math.random();
	img=document.getElementById('secImg');
	if (r>0.75) 
	{
		img.name="patterns/D6V5Y.gif";
	}
	else if (r>0.5)
	{
		img.name="patterns/K7H5P.gif";
	}
	else if (r>.25)
	{
		img.name="patterns/Q5R3W.gif";
	}
	else
	{
		img.name="patterns/Z3X5E.gif";
	}
	img.src=img.name;
}

function checkTeamName()
{
	var req = createRequestObject();
	req.open("GET",'team_check.php?tname=' + document.getElementById('team').value + '&tpass=' + document.getElementById('tpass').value, true);
	req.onreadystatechange = function()
	{
		if(req.readyState == 4)
		{
			var response = req.responseText;
			alert(response);
		}
	}
	req.send(null);
}

//////////////////////////////////////////no more ajax//////////////////////////////////////////




function validate(id1,id2,id3,id4,id5,id6,id7,id8)
{
	if(document.getElementById(id1).value == "" || document.getElementById(id2).value == "" || document.getElementById(id3).value == "" || document.getElementById(id4).value == "" || document.getElementById(id5).value == "" || document.getElementById(id6).value == "" || document.getElementById(id7).value == "" || document.getElementById(id8).value == "")
	{
		alert("Please fill in all the required fields");
		return false;
	}
	else
	{	
		return (passwdmatch() && verifyEmail(document.getElementById('mail').value) && checkImg());
	}
}

function passwdmatch()
{
	if(!(document.getElementById('pass').value == document.getElementById('repass').value))
	{
		alert("Your User Passwords do not match");
		document.getElementById('pass').focus();
		return false;
	}
	if(!(document.getElementById('tpass').value == document.getElementById('trepass').value))	
	{
		alert("Your Team Passwords do not match");
		document.getElementById('tpass').focus();
		return false;
	}
	return true;
}

function verifyEmail(email)
{
	var okay=true;
	if(!(email.indexOf(".")>0) || !(email.indexOf("@")>5))
	{
		okay=false;
	}
	if( ((email.lastIndexOf(".") - email.indexOf("@")) <2) || ((email.indexOf("@") - email.indexOf("."))==1) || !(((email.charAt(0) >="A") && (email.charAt(0) <="Z")) || ((email.charAt(0) >="a") && (email.charAt(0) <="z"))) )
	{
		okay=false;
	}
	if(!okay)
	{
		alert("Your email id doesn't seem to be valid!");
		document.getElementById('mail').focus(); 
	}
	return okay;
}

function checkImg()
{	
	imgname=document.getElementById('secImg').name.toUpperCase();
	imgtxt="patterns/" + document.getElementById('imgNo').value + ".gif";
	imgtxt=imgtxt.toUpperCase();
	if (imgname == imgtxt)
	{
		return true;
	}
	else
	{
		alert("Letters do not match the image!");
		document.getElementById('imgNo').focus();
		return false;
	}
}
