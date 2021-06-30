<?php
$curl = curl_init();
  $coin_name ='Name of coin to retrieve and convert e.g paytrill';
  curl_setopt_array($curl, array(
	CURLOPT_URL => "https://paytrill.com/api/charts/template/usd_converter/?coin_name=$coin_name",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
?>
