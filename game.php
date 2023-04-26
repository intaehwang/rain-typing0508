<?php
include_once('_header.php');
?>

<section id="game" class="pageContainer">

	<div class="virtual-screen">
		<div class="inner">
			<div id="screen-header">
				<div class="area">
					<div id="life-state">
						<img src="./img/icon/life.svg">
						<img src="./img/icon/life.svg">
						<img src="./img/icon/life.svg">
					</div>
					<div id="effect-info">
						<!--<span class="effect-name twink">숨바꼭질</span>
						<span class="effect-name twink">뒤집기</span>
						<span class="effect-name twink">얼음</span>
						<span class="effect-name twink">빠르게</span>
						<span class="effect-name twink">느리게</span>
						<span class="effect-name twink">지우개</span>-->
					</div>
				</div>
				<div class="area">
					<p class="score"><img src="./img/icon/coin.png" style="width:19rem">20,000,000점</p>
				</div>
			</div>
			<div class="panel">
				<div class="item" style="right:10%;display:none;" data-score="200" data-row="0"><span class="word">다크레드자몽</span><span class="score">200원</span></div>
				<div class="item event" style="left:10%;display:none;" data-score="300" data-row="-3"><span class="word">빅스마일데이</span><span class="score">1400원X3</span></div>
				<div class="item" style="left:20%;display:none;" data-score="400" data-row="-6"><span class="word">에코백스 로봇청소기</span><span class="score">400원</span></div>
				<div class="item" style="right:18%;display:none;" data-score="200" data-row="-9"><span class="word">생활비 타자왕</span><span class="score">200원</span></div>
				<div class="item" style="left:13%;display:none;" data-score="300" data-row="-12"><span class="word">지마켓</span><span class="score">300원</span></div>
				<div class="item" style="right:15%;display:none;" data-score="200" data-row="-15"><span class="word">공기청정기</span><span class="score">200원</span></div>
				<div class="item" style="left:20%;display:none;" data-score="400" data-row="-19"><span class="word">카푸치노</span><span class="score">400원</span></div>
				<!--
				세로 칸수는 12칸 -> data-row가 1씩 증가..
				-->
			</div>
			<div class="inputContainer">
				<input type="text" id="text-input" inputmode="none" placeholder="텍스트 입력">
			</div>
		</div>
	</div>
	
	<?php include_once('_virtual_keyboardContainer.php'); ?>

</section>



<script type="text/javascript">
///////////////////////////////////////////////////////
//임시 애니메이션 스크립트
///////////////////////////////////////////////////////

//1.3s 마다 .item의 data-row를 1만큼 증가
setInterval(function() {
	$('#game .virtual-screen .panel .item').each(function() {
		var row = $(this).attr('data-row');
		row++;
		if($(this).hasClass('clear') || $(this).hasClass('stop')) {
		} else {
			if(row < 13) {
				$(this).attr('data-row', row);
				if(row > 0)
					$(this).show();
			} else if(row >= 13) {
				$(this).remove();
			}
		}
	});
}, 1300);



//얼음 효과
setTimeout(function() {
   $('#game .virtual-screen .panel .item').addClass('stop');
   $('#game .virtual-screen #screen-header #effect-info').html('<span class="effect-name twink">얼음</span>');   
}, 1500 * 5);
setTimeout(function() {
   $('#game .virtual-screen .panel .item').removeClass('stop');
   $('#game .virtual-screen #screen-header #effect-info').empty();
}, 1500 * 7.2);

//뒤집기 효과
setTimeout(function() {
   $('#game .virtual-screen .panel .item').addClass('rev');
   $('#game .virtual-screen #screen-header #effect-info').html('<span class="effect-name twink">뒤집기</span>');   
}, 1500 * 10.5);
setTimeout(function() {
   $('#game .virtual-screen .panel .item').removeClass('rev');
   $('#game .virtual-screen #screen-header #effect-info').empty();
}, 1500 * 12.8);

//숨바꼭질 효과
setTimeout(function() {
   $('#game .virtual-screen .panel .item').addClass('seek');
   $('#game .virtual-screen #screen-header #effect-info').html('<span class="effect-name twink">숨바꼭질</span>');   
}, 1500 * 15);
setTimeout(function() {
   $('#game .virtual-screen .panel .item').removeClass('seek');
   $('#game .virtual-screen #screen-header #effect-info').empty();
}, 1500 * 17.2);



setTimeout(function() {
	var el = $('#game .virtual-screen .panel .item:nth-child(1)');
	el.addClass('clear');	
}, 1500 * 7.8);
setTimeout(function() {
	var el = $('#game .virtual-screen .panel .item:nth-child(2)');
	el.addClass('clear');	
}, 1500 * 8.8);
setTimeout(function() {
	var el = $('#game .virtual-screen .panel .item:nth-child(3)');
	el.addClass('clear');	
}, 1500 * 14.2);
</script>


<?php include_once('_footer.php'); ?>