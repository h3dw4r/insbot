<?php
function asw($a, $user) {
                $no = rand(1,10);
                $body = 'date=18-12-2018&username='.$user.'&type=StartApp Video Credit&points='.$no.'&';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://instantlycash.online/get/award.php");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 10);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		$headers = array ();
			$headers[] = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
			$headers[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 5.1.1; SM-J320G Build/LMY47V)";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;	}
echo " input username : ";
$user = trim(fgets(STDIN));
echo "JUMLAH   : ";
$jum = trim(fgets(STDIN));
echo "Selamat Datang ".$user."\n";
for($a=0;$a<$jum;$a++){
sleep (45);
$oce = asw($a, $user);
echo "".$oce."\n";
}
?>
