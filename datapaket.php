<?php

$ekspedisi = $_POST["ekspedisi"];
$distrik = $_POST["distrik"];
$berat = $_POST["berat"];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "origin=23&destination=$distrik&weight=$berat&courier=$ekspedisi",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded",
    "key: fa51d84a4854341c613ed603312a2ab5"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $array_response = json_decode($response, TRUE);
  $pengiriman = $array_response["rajaongkir"]["results"]["0"]["costs"];
  print_r($pengiriman);

  echo"<option value=''>-- Pilih Pengiriman --</option>";
  foreach($pengiriman as $key=>$tiap_pengiriman){
    echo"<option
    pengiriman='".$tiap_pengiriman["service"]."'
    ongkir='".$tiap_pengiriman["cost"]["0"]["value"]."'
    etd='".$tiap_pengiriman["cost"]["0"]["etd"]."'>";
    echo $tiap_pengiriman["service"]." Rp. ";
    echo number_format($tiap_pengiriman["cost"]["0"]["value"]);
    echo"</option>";
  }
}