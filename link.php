<?php
include_once('_common.lib.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>생활비 타자왕</title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="HandheldFriendly" content="true">
<meta name="format-detection" content="telephone=no">
<link rel="apple-touch-icon" href="img/favorite/favorite.png" />
<link rel="stylesheet" href="<?=get_url('css/_reset.css')?>">
<link rel="stylesheet" href="<?=get_url('css/style.css')?>">
<link rel="stylesheet" href="<?=get_url('css/_util.css')?>">
<link href="https://design01.codeidea.io/link_style.css" rel="stylesheet">
</head>
<body>
<div class="publishing-help">
	<span class="title">생활비 타자왕</span>
	<span class="label not">작업중</span>
	<span class="label popup">팝업</span>
	<span class="label change">수정</span>		
	<span class="label add">최근 추가</span>	
	<a href="css/iconfont/icomoon/index.php" target="_blank" class="pc-only">아이콘</a>	
</div>

<?php
function txtRecord($dir) {if(is_dir($dir)) {$handle  = opendir($dir);$files = array();while (false !== ($filename = readdir($handle))) {if($filename == "." || $filename == "..") continue;if(is_file($dir."/".$filename)){$files[] = $filename;}}closedir($handle);rsort($files);	if(count($files) > 0) {echo '<div class="_record rsort">';echo '<ul>';foreach($files as $f) {$name = '수정 '.preg_replace("/[^0-9]*/s", "", $f);echo '<li><a href="'.$dir.$f.'" target="_black">'.$name.'</a></li>';}echo '</ul>';echo '</div>';}}}echo txtRecord('./@record/');
?>

<div id="publishingContainer">
	
	<ul class="page-link">		
		<li><a href="index.php" target="_blank" class="change" data-date="23.04.25">홈화면</a></li>
		<li><button data-href="#pop-game-info" class="pop-inline change" data-date="23.04.25">게임설명</button></li>
		<li><button data-href="#pop-ranking" class="pop-inline change" data-date="23.04.25">오늘의 랭킹</button></li>
		<li><button data-href="#pop-giveaway_1" class="pop-inline change" data-date="23.04.26">경품 안내1</button></li>
		<li><button data-href="#pop-giveaway_2" class="pop-inline change" data-date="23.04.25">경품 안내2</button></li>
		<li><button data-href="#pop-giveaway_3" class="pop-inline change" data-date="23.04.25">경품 안내3</button></li>
		<li><button data-href="#pop-giveaway_4" class="pop-inline change" data-date="23.04.25">경품 안내4</button></li>

		<li class="mt30"><a href="game_ready.php" target="_blank" class="change" data-date="23.04.25">게임 준비</a></li>
		<li class=""><a href="game.php" target="_blank" class="change" data-date="23.04.25">게임화면</a></li>

		<li class="mt30"><a href="game_over.php" target="_blank" class="change" data-date="23.04.25">게임오버</a></li>
		<li><button data-href="#pop-notice" class="pop-inline">개인정보 수집·이용 안내</button></li>

		<li class="mt30"><a href="ranking_save.php" target="_blank" class="change" data-date="23.04.26">랭킹등록</a></li>

		<li class="mt30"><a href="game_result.php" target="_blank" class="change" data-date="23.04.25">랭킹등록완료</a></li>

		<li><button data-href="#pop-event-end" class="pop-inline add" data-date="23.04.26">이벤트 종료</button></li>
	</ul>

</div>

<?php
//html 팝업
include_once('pop-game-info.php');
include_once('pop-ranking.php');
include_once('pop-giveaway_1.php');
include_once('pop-giveaway_2.php');
include_once('pop-giveaway_3.php');
include_once('pop-giveaway_4.php');
include_once('pop-notice.php');
include_once('pop-event-end.php');
?>


<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script src='https://design01.codeidea.io/link_script.js'></script>

</body>
</html>
