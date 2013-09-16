<script type="text/javascript">
function update_online_users()
{
	var xmlhttp;    
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("online").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("POST","online_users.php",true);
	xmlhttp.send();
}
var int=self.setInterval("update_online_users()",1000);
</script>
	 
<div class="leftwidget">
	<table class="online" id="online"></table>
</div>
