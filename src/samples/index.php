<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LinkageSel: Infinite Level Linkage Select</title>

<script src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>


<script src="../assets/jquery-bbq/jquery.ba-bbq.min.js"></script>
<script src="../assets/exSelect/jquery.exSelect.js"></script>
</head>

<body>

<div id="ex-select-container"></div>

<script>
$(function(){
	
	alert('JQuery loaded!');
	var options = {
        "url" : 'feed_data.php'
	};
	var $exInstance = jQuery('#ex-select-container').exSelect(options);
});
</script>


</body>
</html>
