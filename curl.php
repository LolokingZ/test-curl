<?php 

//GET
function curl($url,$headers) {
	$ch = curl_init()
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}

$ua = array( 
	"Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:52.0) Gecko/20100101 Firefox/52.0", "Cookie:__cfduid=db96658789a10c4680ca7b6e8c0921bb61594049853; PHPSESSID=b7rkgaegns1nbldpeacrkpknn7; _ga=GA1.2.336399857.1594049861; _gid=GA1.2.221743181.1594049861; bitcoinminings_WALLET_CODE=349aCdahy4UdWJ5pfgsPNB5A5CkWngD79P; bitcoinminings_HELP-WINDOWS=1; _gat_gtag_UA_106404658_11=1; googtrans=/en/id; googtrans=/en/id; cpumin_WALLET_CODE=349aCdahy4UdWJ5pfgsPNB5A5CkWngD79P"
);
$respon = curl('https://beypazaricekici.com/cpumin/console/', $ua);


echo $respon;
