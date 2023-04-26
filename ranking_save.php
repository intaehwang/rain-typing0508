<?php
include_once('_header.php');
?>

<section id="game-over" class="pageContainer">
	
	<div class="division-line ex"></div>	

	<form name="" method="" action="" >	
	<div class="formContainer">
		<p class="form-label">
			랭킹에 보여질<br>
			이니셜 3글자를 입력해주세요
		</p>

		<p class="inputContainer"><input type="email" name="" id="inp_initial" maxLength="3" placeholder="_" style="text-transform: uppercase;"/><span class="icon_form_check"></span></p>

		<p class="form-label mt25">
			본인의 이름을 입력해주세요<br>
			<span class="fs12rem color-blue">(해당 정보는 랭킹에 노출되지 않습니다)</span>
		</p>
		<p class="inputContainer"><input type="text" name="" id="inp_name" placeholder="_" style="ime-mode:active;"><span class="icon_form_check"></span></p>


		
		<p class="form-label mt25">
			휴대폰 번호를 입력해 주세요
			<span class="fs12rem color-blue">(본인 명의 필수)</span>
		</p>
		<p class="inputContainer"><input type="tel" name="" id="inp_phone" placeholder="_" maxLength="11"><span class="icon_form_check"></span></p>
		<p class="help-block color-red text-deco" data-text-head="※">경품 응모를 위해 본인의 이름 및 휴대폰 번호를 입력해주세요<br>본인의 정보가 아닐 경우 경품 지급에서 제외될 수 있습니다</p>


		<div class="mt30 flex column flex-top">

			<label class="labelCheckbox flex-top"><input type="checkbox" name="agree" id="agree" value="1"><span></span><div style="line-height:1em">(필수) 개인정보 수집·이용동의</div></label>

			<span data-href="#pop-notice" class="pop-inline color-red" style="font-size:10rem;display:inline-block;margin-left:45px;margin-top:-10px">[개인정보 수집이용 내역 및 위탁업무 자세히 보기]</span>
		</div>

		
		<div class="division-line ex mt45"></div>
		<div class="noto ex p-15" style="background:#D3D3D3;">
			<div class="txt-deco1 fs12rem noto500 mt15">[이벤트 참여 유의사항]</div>
			<p class=" mt20">
				- 본 이벤트는 개인정보 수집 및 이용에 동의한 분들에 한하여 참여 가능합니다.<br><br>
				- 본 이벤트는 만 14세 이상에 한하여 참여가 가능하며, 만 14세 미만의 경우 이벤트 참여 및 경품 수령이 불가합니다.<br><br>
				- 본 이벤트는 모바일 전용 이벤트이며, 모바일 키패드가 아닌 PC, 태블릿, 외부입력 키보드, 기타 프로그램 사용 및 비정상적인 방법으로 참여할 경우 랭킹 무효 처리 및 경품 당첨 대상에서 제외되며, 추후에도 경품 지급이 취소될 수 있습니다.<br><br>
				- 본 이벤트 참여는 무제한으로 가능하나, 경품은 1인 1회만 제공되며 중복 당첨이 불가합니다.
			</p>
			
			<div class="division-line mt25 mb25" style="border:0;height:1px;"></div>
			
			<div class="txt-deco1 fs12rem noto500">[경품 관련 유의사항]</div>

			<p class="color-red mt20">
				※ 경품은 전체 이벤트 기간 (5월 8일 ~ 19일) 동안 1인 1회만 제공되며 중복 당첨이 불가합니다 .<br><br>
			</p>
			<p class="color-red">
				예) 1차, 2차 기간 모두 랭킹 50 위 안에 들었을 경우, 1차 기간 랭킹에 해당되는 경품만 제공됩니다. 2차 기간 랭킹 경품은 후순위 랭커에게 제공됩니다.<br><br>
			</p>
			<p class="color-red">
				최종 랭킹 경품 당첨자 및 추첨 경품 당점차는 5월 24일 G마켓 홈페이지 > 고객센터 > 공지사항에 서 확인할 수 있습니다.<br><br>
			</p>
			<p>
				- 랭킹별 경품 대상자 및 당첨 경품 대상자는 등록하신 휴대폰번호로 5월 이내 경품운영대행사인 ㈜클락워크에서 개별 연락을 드립니다.<br><br>
				- 등록하신 이름 및 휴대폰 번호가 본인정보가 아닐 경우, 경품 대상자의 잘못된 개인정보 입력으로 연락이 불가한 경우, MM S수신 불가, 스팸등록으로 인한 정보 수신불가, 해피콜 기간 중 2회 이상 부재, 7일 이내 연락이 불가할 경우 당첨이 취소됩니다. <br><br>
				- 경품은 G마켓 회원으로 등록된 참여자에게만 제공됩니다.<br><br>
				- 경품이벤트 페이지 등록된 경품 이미지와 실제 경품은 차이가 있을 수 있습니다.<br><br>
				- 본 이벤트 경품은 상황에 따라 사전 고지 없이 변경, 대체될 수 있습니다.
			</p>
			
		</div>
		
		<div class="btnSet mt25">
			<button type="button" class="_btn w-full" id="submit"><span class="btn-inner color-gray">랭킹등록하기</span></button><!--입력폼이 완료되면 class=color-gray 제거 (버튼 활성화 컬러) -->
		</div>
	</div>
	</form>

</section>

<script>
//입력폼 완료 채크
function form_complete(msg=false) {
	var complete = true;
	if(!$("#inp_initial").next('.icon_form_check').hasClass('active')) {
		var complete = false;
		if(msg) {
			alert('이니셜 3글자를 입력해주세요');
			$("#inp_initial").focus();
			return false;
		}
	}
	if(!$("#inp_name").next('.icon_form_check').hasClass('active')) {
		var complete = false;
		if(msg) {
			alert('이름을 입력해주세요');
			$("#inp_name").focus();
			return false;
		}
	}
	if(!$("#inp_phone").next('.icon_form_check').hasClass('active')) {
		var complete = false;
		if(msg) {
			alert('휴대폰번호를 입력해주세요');
			$("#inp_phone").focus();
			return false;
		}
	}
	if(!$("#agree").is(':checked')) {
		var complete = false;
		if(msg) {
			alert('개인정보 수집·이용동의란에 채크해주세요.');
			$("#agree").focus();
			return false;
		}
	}

	if(complete) {
		$('#submit .btn-inner').removeClass('color-gray');
	} else {
		$('#submit .btn-inner').addClass('color-gray');
	}

}

//이니셜
$("#inp_initial").bind("keyup", function() {
	var nc = $(this).val().length;
	if(nc==3) {
		$(this).next('.icon_form_check').addClass('active');
	} else {
		$(this).next('.icon_form_check').removeClass('active');
	}
	$(this).val($(this).val().replace(/\,/g, '').replace(/[^A-Z]/ig, ''));
	form_complete();
});

//이름
$("#inp_name").bind("keyup", function() {
	var nc = $(this).val().length;
	if(nc>1) {
		$(this).next('.icon_form_check').addClass('active');
	} else {
		$(this).next('.icon_form_check').removeClass('active');
	}
	form_complete();
});

//전화번호
$("#inp_phone").bind("keyup", function(event) {
	var nc = $(this).val().length;
	if(nc==11||nc==10) {
		$(this).next('.icon_form_check').addClass('active');
	} else {
		$(this).next('.icon_form_check').removeClass('active');
	}
	form_complete();
});

//개인정보 수집·이용동의
$('#agree').click(function(){
	form_complete();
});

//등록버튼
$('#submit').click(function(){
	form_complete(true);
});
</script>

<?php
include_once('pop-notice.php');
?>

<?php include_once('_footer.php'); ?>