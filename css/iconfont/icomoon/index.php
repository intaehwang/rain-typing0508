<?php 
function get_url( $url ) {
	$url .= "?ver=".date("Ymdhis",filemtime($url)); 
    return $url;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>생활비타자 아이콘</title>
    <link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="<?=get_url('./styles.css')?>">
	<link rel="stylesheet" href="<?=get_url('./css/bootstrap-select.css')?>">
	<link rel="stylesheet" href="<?=get_url('./index.css')?>">
    
    

	<link href="http://fonts.googleapis.com/earlyaccess/nanumgothic.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="favorite.png">
  </head>
  <body>

<script src="js/clipboard/clipboard.min.js"></script>
<script>
var clipboard = new ClipboardJS('.all-icons span',{
	text: function(trigger) {
		return trigger.innerText;
    }
});
/*var clipboard = new ClipboardJS('.all-icons li',{
	text: function(trigger) {
		return trigger.getAttribute('.code').innerText;
    }
});*/
clipboard.on('success', function(e) { console.log(e); });
clipboard.on('error', function(e) { console.log(e); });
</script>


<section id="font_options_bar">
	<nav id="nav">
		<div class="container">
			<div class="size_select">
				<select class="selectpicker">
				<option>free</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="16">16</option>
				<option value="18">18</option>
				<option value="20">20</option>
				<option value="22">22</option>
				<option value="32">32</option>
				<option value="48">48</option>
				<option value="64">64</option>
				<option value="80">80</option>
				<option value="96">96</option>
				<option value="112">112</option>
				<option value="128">128</option>
				</select>
			</div>
		</ul>
		<span class="bg-switch pull-right">
			<input id="s1" type="checkbox" class="sw">
			<label for="s1" class="switch"><span class="bg_circle"></span></label>
		</span>
	</nav>
</section>


<div class="all-icons">

	<ul class="small"><!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		
<li><i class="icon-icomoon-01"></i><span class="code">e900</span><li>
<li><i class="icon-icomoon-02"></i><span class="code">e901</span><li>
<li><i class="icon-icomoon-03"></i><span class="code">e902</span><li>
<li><i class="icon-icomoon-04"></i><span class="code">e903</span><li>
<li><i class="icon-icomoon-05"></i><span class="code">e904</span><li>
<li><i class="icon-icomoon-06"></i><span class="code">e905</span><li>

	</ul>


</div>


<!-- Scripts -->
<script type="text/javascript" src="js/lib/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/lib/bootstrap.min.js"></script>
<script type="text/javascript" src="js/lib/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?=get_url('js/lib/main.js')?>"></script>

<script>
$('li i').each(function() {
	var thisClass = $(this).attr('class');
	//var thisText = $(this).data('text');
	//$(this).after('<span class="name">' + thisClass + '</span>');
});
$('span.code').each(function() {
	var thisText = $(this).text();
	$(this).after('<span class="unicode">&amp;#x' + thisText + '</span>');
});
</script>
</body>
</html>