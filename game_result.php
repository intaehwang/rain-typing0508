<?php
include_once('_header.php');

$ranking = 506; //등수
$tagColor = 'orange'; 
if($ranking < 1000) $tagColor = 'green'; 
if($ranking < 100) $tagColor = 'yellow';
?>

<section id="game-result" class="pageContainer">

	<div class="virtual-screen">
		<div class="panel tcenter w-full">
			<img src="./img/txt/txt_complete.png" style="width:194rem">
			
			<div class="characterSet">
				<div class="rank_tag <?=$tagColor?>"><?=$ranking?></div>
				<img src="./img/character/character_lg<?=rand(1,10)?>.png" class="character">
				<div class="initial">K.S.Y</div>
				<img src="./img/gif/character_deco.gif" class="character_deco">
			</div>

			<div class="result">
				<div class="inner">
					<div class="flex flex-middle gap5">
						<img src="img/gif/coin.gif" style="width:30rem;" class="coinfadeIn">
						<img src="img/gif/coin.gif" style="width:30rem;" class="coinfadeIn">
						<img src="img/gif/coin.gif" style="width:30rem;" class="coinfadeIn">
					</div>
					<span class="val won count_num" data-val="2500000" data-time="1"></span>
				</div>
			</div>			
		</div>
	</div>

	<div class="screen-bottom deco">
		<img src="./img/logo/logo_gmarket.png" style="width:14%">
	</div>
	
	<div class="division-line ex"></div>
	
	<p class="fs16rem tcenter mt20">친구에게 공유하고 실력을 겨뤄보세요</p>
	<div class="btnSet mt10">
		<a href="#" class="_btn w-full"><span class="btn-inner">G마켓 타자왕 공유하기</span></a>
	</div>
	
	<div class="mt25">
		<a href="#"><img src="./img/banner/banner03.png" class="w-full"></a>
	</div>
	
	<!--<div class="mt25">
		<a href="#" class="_btn/purple w-full"><span class="btn-inner">빅스마일데이 쿠폰받기</span></a>
	</div>-->
	<div class="mt25">
		<a href="index.php" class="_btn home w-full"><span class="btn-inner">게임 홈으로</span></a>
	</div>

</section>

<?php include_once('_footer.php'); ?>