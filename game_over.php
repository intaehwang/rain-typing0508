<?php
include_once('_header.php');
?>

<section id="game-over" class="pageContainer">

	<div class="virtual-screen">
		<div class="panel tcenter w-full">
			<img src="./img/gif/gameover.gif" style="width:188rem">
			<div class="result">
				<div class="inner">
					<div class="flex flex-middle gap5">
						<img src="img/gif/coin.gif" style="width:32rem;" class="coinfadeIn">
						<img src="img/gif/coin.gif" style="width:32rem;" class="coinfadeIn">
						<img src="img/gif/coin.gif" style="width:32rem;" class="coinfadeIn">
					</div>
					<span class="val won count_num" data-val="2500000" data-time="3"></span>
				</div>
			</div>
			<div class="result">
				<div class="inner">
					<span class="label">[랭킹]</span>
					<span class="val rank" data-val="132" data-time="3.5">00</span>
				</div>
			</div>			
		</div>
		<img src="./img/bg/outline.png">
		<div class="bg" style="opacity:0.3">
			<div class="item" style="left:5%;display:none;" data-row="0"><img src="./img/goods/img05.png" class="img05"></div>
			<div class="item" style="right:19%;display:none;" data-row="-2"><img src="./img/goods/img04.png" class="img04"></div>
			<div class="item" style="left:10%;display:none;" data-row="-4"><img src="./img/goods/img03.png" class="img03"></div>
			<div class="item" style="right:3%;display:none;" data-row="-7"><img src="./img/goods/img02.png" class="img02"></div>
			<div class="item" style="left:6%;display:none;" data-row="-9"><img src="./img/goods/img01.png" class="img01"></div>			
			<div class="item" style="right:18%;display:none;" data-row="-11"><img src="./img/goods/img06.png" class="img06"></div>
			<div class="item" style="left:12%;display:none;" data-row="-14"><img src="./img/goods/img07.png" class="img07"></div>
			<div class="item" style="right:4%;display:none;" data-row="-16"><img src="./img/goods/img08.png" class="img08"></div>
			<div class="item" style="left:35%;display:none;" data-row="-19"><img src="./img/goods/img09.png" class="img09"></div>
			<div class="item" style="right:9%;display:none;" data-row="-22"><img src="./img/goods/img10.png" class="img10"></div>
			<div class="item" style="left:20%;display:none;" data-row="-24"><img src="./img/goods/img11.png" class="img11"></div>
		</div>
	</div>

	<div class="screen-bottom">
		<img src="./img/logo/logo_gmarket.png" style="width:14%">
	</div>
	
	<div class="division-line ex"></div>

	<div class="btnSet mt20">
		<a href="ranking_save.php" class="_btn save"><span class="btn-inner">랭킹등록</span><img src="./img/txt/bubble_msg.png"></a>
		<a href="game.php" class="_btn reflesh"><span class="btn-inner">재도전</span></a>
	</div>
	
	<div class="mt25">
		<div class="border shadow-inset"><img src="./img/banner/img01.png" class="w-full"></div>
	</div>
	
	<div class="mt25">
		<a href="#" class="_btn/purple w-full"><span class="btn-inner">더 많은 상품 보러가기</span></a>
	</div>

</section>

<script>
setInterval(function() {
	$('#game-over .virtual-screen .bg .item').each(function() {
		var row = $(this).attr('data-row');
		row++;		
		if(row < 27) {
			$(this).attr('data-row', row);
			if(row > 0)
				$(this).show();
		} else {
			$(this).attr('data-row', 0);	
		}
		if(row > 13) {
			$(this).hide();
		}
	});
},900);
</script>

<?php include_once('_footer.php'); ?>