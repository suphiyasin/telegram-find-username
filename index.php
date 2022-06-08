<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div id="adas"></div>
<button onclick="letsgo()">Find</button>
<script>
function letsgo(){
var sa = "juststring";
{$.post('backend.php', {sa:sa}, function(response){ 
	 $("#adas").html(response)
	 
});  }
}
</script>
