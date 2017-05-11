<!DOCTYPE html>
<html>
<head>
	<title>Ajax example</title>
</head>
<body>
<h1>The XMLHttpRequest Object</h1>
<p id="demo">Let AJAX change this text.</p>
<button type="button"  onclick="loadDoc()">Change Content</button>
<script>
	function loadDoc(){
		var xhttp;
		if(window.XMLHttpRequest){
			//Code for moder browsers
			xhttp = new XMLHttpRequest();
		}else{
			//Code for IE6, IE5
			xhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				document.getElementById('demo').innerHTML = this.responseText;
			}
		};
		xhttp.open("GET", "ajax_info.txt", true);
		xhttp.send();
	}
</script>
</body>
</html>