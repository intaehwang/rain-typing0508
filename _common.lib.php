<?php
//캐시 없이 파일로드 (임시)
function get_url( $url ) {
    if(empty($url)) return $url;
	$url = $url."?ver=".rand(1,999999);
    return $url;
}