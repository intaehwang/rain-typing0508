
<div class="layer-popup" id="pop-ranking">
	

	<div class="popContainer">
		
		<div class="pop-inner">
			<header class="pop-header">
				<button class="arrow-left">이전</button>
				<span class="color-orange">[1차]</span> 랭킹
				<button class="arrow-right mr20">다음</button>
				<span class="pop-closer">팝업닫기</span>
			</header>
			<div class="popCon-head">
				<p class="fs12rem tcenter mt15 mb15">
					<span class="color-red">[1차 기간] 종료까지 HH : MM : SS</span><br>
					기간 : 5월 8일 ~ 5월 10일
				</p>
				<div class="division-line"></div>
				<div class="light-box p-20 flex flex-bottom flex-center gap15 fs12rem">
					<div class="medal_2">
						<div class="circle"><img src="./img/character/character_lg1.png" class="character"></div>
						<div class="fs12rem">
							<div class="fs16rem flex flex-middle">KSY <span class="fs11rem">[*456]</span></div>
							0,000,000점
						</div>
					</div>
					<div class="medal_1">
						<div class="circle"><img src="./img/character/character_lg10.png" class="character"></div>
						<div class="fs12rem">
							<div class="fs16rem flex flex-middle">KSY <span class="fs11rem">[*456]</span></div>
							0,000,000점
						</div>
					</div>
					<div class="medal_3">
						<div class="circle"><img src="./img/character/character_lg3.png" class="character"></div>
						<div class="fs12rem">
							<div class="fs16rem flex flex-middle">KSY <span class="fs11rem">[*456]</span></div>
							0,000,000점
						</div>
					</div>
				</div>
				<div class="division-line"></div>
			</div>
			<div class="popCon">				
				 <table class="tbl-rank w-full">
					<tbody class="tcenter">
						<?php for($i=4; $i<40; $i++) { ?>
						<tr class="rank1">
							<td class="tcenter pl-10 pr-10"><span class="rank"><?=$i?></span></td>
							<td class="tcenter"><div class="circle"><img src="./img/character/character_<?=rand(1,10)?>.png" class="character"></div></td>
							<td class="tcenter">BNF</td>
							<td class="tcenter">*236</td>
							<td class="tright pr-10">1,000,000점</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="pop-bg"></div>
</div>