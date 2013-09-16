<?php
include "authenticate.php";
include "header.php";
include "retrieve.php";
$t=time();
?>
<style type="text/css">
		body { padding-left:40px; background: #FFFFFF; font-family:arial;}
		input, textarea 	{ font-family: arial; color:white; background:#57767F; font-size: 14px; }
		#content {
			width:800px;
			text-align:left;	
		}

		#chatwindow 		{ border:1px solid #aaaaaa; padding:4px; background:gray; color:white;  width:725px; height:auto; font-family:courier new;}
		#chatnick 		{ border: none; border-bottom:1px solid #aaaaaa; padding:4px; background:#57767F;}
		#chatmsg 		{ border: none; border-bottom:1px solid #aaaaaa; padding:4px; background:#57767F; }

		#info 			{ text-align:left; padding-left:0px; font-family:arial; }
		#info td 		{ font-size:12px; padding-right:10px; color:#DFDFDF;  }
		#info .small 		{ font-size:12px; padding-left:10px; padding-right:0px;}

		#info a 		{ text-decoration:none; color:white; }
		#info a:hover 		{ text-decoration:underline; color:#CF9700;}
		.style1 {
		color: #414141;
		font-weight: bold;
		}
		.style2 {
		font-size: xx-large;
		color: #E90A5E;
		}
</style>

<div class="main_content">
	<?php include "leftwidget.php"; ?>
	<div class="center">
	<script type="text/javascript">
		document.title=document.title + " | Chat Room";
	</script>
	<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.scrollTo-min.js"></script>
	<table>
	<tr>
	<td>
    <div id="content">
			<div id="chatwindow" style="height:400px; overflow : auto;"> </div>	
<!--			<textarea id="chatwindow" rows="19" cols="95" readonly></textarea><br> -->

			<input id="chatnick" type="text" size="9" maxlength="9" value="<?php echo $tname; ?>" readonly="readonly" >&nbsp;
			<input id="chatmsg" type="text" size="60" maxlength="80"  onkeyup="keyup(event.keyCode);"> 
			<input type="button" value="add" onClick="submit_msg();" style="cursor:pointer;border:1px solid gray;"><br><br>
			<br>
	  </div>
	  </td>
	  </tr>
	  </table>
	<div><input name="back" type="button" onClick="self.history.back()" value="Back"><br><br>

	</div>
	</div>
</div>	
<?php include "footer.php"; ?> 
</body>
</html>

<script type="text/javascript">
	 
/* Settings you might want to define */
	var waittime=800;		

/* Internal Variables & Stuff */
	
	document.getElementById("chatwindow").innerHTML = "loading...";

	var xmlhttp = false;
	var xmlhttp2 = false;


/* Request for Reading the Chat Content */
function ajax_read(url) {
	
	if(window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
		if(xmlhttp.overrideMimeType){
			xmlhttp.overrideMimeType('text/xml');
		}
	} else if(window.ActiveXObject){
		try{
			xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
		} catch(e) {
			try{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			} catch(e){
			}
		}
	}

	if(!xmlhttp) {
		alert('Giving up :( Cannot create an XMLHTTP instance');
		return false;
	}

	xmlhttp.onreadystatechange = function() {
	if (xmlhttp.readyState==4) {
		document.getElementById("chatwindow").innerHTML = xmlhttp.responseText;
		$('div#chatwindow').scrollTo('+=10000px');
		zeit = new Date(); 
		ms = (zeit.getHours() * 24 * 60 * 1000) + (zeit.getMinutes() * 60 * 1000) + (zeit.getSeconds() * 1000) + zeit.getMilliseconds(); 
		intUpdate = setTimeout("ajax_read('chat.txt?x=" + ms + "')", waittime)
		}
	}

	xmlhttp.open('GET',url,true);
	xmlhttp.send(null);
}

/* Request for Writing the Message */
function ajax_write(url){
	if(window.XMLHttpRequest){
		xmlhttp2=new XMLHttpRequest();
		if(xmlhttp2.overrideMimeType){
			xmlhttp2.overrideMimeType('text/xml');
		}
	} else if(window.ActiveXObject){
		try{
			xmlhttp2=new ActiveXObject("Msxml2.XMLHTTP");
		} catch(e) {
			try{
				xmlhttp2=new ActiveXObject("Microsoft.XMLHTTP");
			} catch(e){
			}
		}
	}

	if(!xmlhttp2) {
		alert('Giving up :( Cannot create an XMLHTTP instance');
		return false;
	}

	xmlhttp2.open('GET',url,true);
	xmlhttp2.send(null);
}

/* Submit the Message */
function submit_msg(){
	nick = document.getElementById("chatnick").value;
	msg = document.getElementById("chatmsg").value;

	if (nick == "") { 
		check = prompt("please enter username:"); 
		if (check === null) return 0; 
		if (check == "") check = "anonymous"; 
		document.getElementById("chatnick").value = check;
		nick = check;
	} 

	document.getElementById("chatmsg").value = "";
	ajax_write("w.php?m=" + msg + "&n=" + nick);
}

/* Check if Enter is pressed */
function keyup(arg1) { 
	if (arg1 == 13) submit_msg(); 
}

/* Start the Requests! ;) */
var intUpdate = setTimeout("ajax_read('chat.txt')", waittime);

</script>

