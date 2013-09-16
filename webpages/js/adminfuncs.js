function createRequestObject()
{
        var xmlhttp = false;
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

function tsearch()
{
        var req = createRequestObject();
	req.open("GET", 'tsearch.php?key=' + document.getElementById('tkey').value + '&ms=' + new Date().getTime(), true);
	req.onreadystatechange = function()
	{
		if(req.readyState == 4)
		{
			var response = req.responseText;
			response=response+"<input type=\"button\" onClick=\"reset('tdetails')\" value=\"Close\"/>";
			document.getElementById("tdetails").innerHTML=response;
		}
	}
        document.getElementById('tkey').value="";
	req.send(null);
}
function usearch()
{
        var req = createRequestObject();
	req.open("GET", 'usearch.php?key=' + document.getElementById('ukey').value + '&ms=' + new Date().getTime(), true);
	req.onreadystatechange = function()
	{
		if(req.readyState == 4)
		{
			var response = req.responseText;
			response=response+"<input type=\"button\" onClick=\"reset('udetails')\" value=\"Close\"/>";
			document.getElementById("udetails").innerHTML=response;
		}
	}
        document.getElementById('ukey').value="";
	req.send(null);
}
function tdelconfirm()
{
	var req = createRequestObject();
	req.open("GET", 'tsearch.php?key=' + document.getElementById('team').value + '&ms=' + new Date().getTime(), true);
	req.onreadystatechange = function()
	{
		if(req.readyState == 4)
		{
			var response = req.responseText;
			response="The following teams will be deleted from the database:<br/>" + response + "<br/>Are you sure?&nbsp;&nbsp; <input type=\"button\" onClick=\"tdel()\" value=\"Delete\"/>&nbsp;&nbsp;<input type=\"button\" onClick=\"reset('tdelList')\" value=\"Cancel\"/>";
			document.getElementById("tdelList").innerHTML=response;
		}
	}

	req.send(null);
}
function udelconfirm()
{
        var req = createRequestObject();
	req.open("GET", 'usearch.php?key=' + document.getElementById('username').value + '&ms=' + new Date().getTime(), true);
	req.onreadystatechange = function()
	{
		if(req.readyState == 4)
		{
			var response = req.responseText;
			response="The following users will be deleted from the database:<br/>" + response + "<br/>Are you sure?&nbsp;&nbsp; <input type=\"button\" onClick=\"udel()\" value=\"Delete\"/>&nbsp;&nbsp;<input type=\"button\" onClick=\"reset('udelList')\" value=\"Cancel\"/>";
			document.getElementById("udelList").innerHTML=response;
		}
	}

	req.send(null);
}

function tdel()
{
         var req = createRequestObject();
         req.open("GET", 'tdel.php?key=' + document.getElementById('team').value + '&ms=' + new Date().getTime(), true);
         req.onreadystatechange = function()
         {
                 if(req.readyState == 4)
                 {
                         var response = req.responseText;
                         response=response+"<input type=\"button\" onClick=\"reset('tdelList')\" value=\"Close\"/>";
                         document.getElementById("tdelList").innerHTML=response;
                 }
         }
         document.getElementById('team').value="";
         req.send(null);
}

function udel()
{
         var req = createRequestObject();
         req.open("GET", 'udel.php?key=' + document.getElementById('username').value + '&ms=' + new Date().getTime(), true);
         req.onreadystatechange = function()
         {
                 if(req.readyState == 4)
                 {
                         var response = req.responseText;
                         response=response+"<input type=\"button\" onClick=\"reset('udelList')\" value=\"Close\"/>";
                         document.getElementById("udelList").innerHTML=response;
                 }
         }
         document.getElementById('username').value="";
         req.send(null);
}

function updtscr()
{
         var opval=(document.getElementById('opertn').checked)?"decrease":"increase";
         var req = createRequestObject();
         req.open("GET", 'updtscr.php?team=' + document.getElementById('teamname').value + '&amt=' + document.getElementById('score').value + '&op=' + opval + '&ms=' + new Date().getTime(), true);
         req.onreadystatechange = function()
         {
                 if(req.readyState == 4)
                 {
                         var response = req.responseText;
                         response=response+"<input type=\"button\" onClick=\"reset('scoredetails')\" value=\"Close\"/>";
                         document.getElementById('scoredetails').innerHTML=response;
                 }
         }
         document.getElementById('score').value="";
         document.getElementById('teamname').value="";
         req.send(null);
}

function reset(id1)
{
         //alert("called rset");
         
         document.getElementById(id1).innerHTML="";
}
