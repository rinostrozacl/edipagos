<?php
 header('Access-Control-Allow-Origin: *'); 
 header("Access-Control-Allow-Credentials: true");
 header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
 header('Access-Control-Max-Age: 1000');
 header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://webpay3gint.transbank.cl/rswebpaytransaction/api/webpay/v1.0/transactions',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "buy_order": "OrdenCompra84213",
  "session_id": "sesion1234564",
  "amount": 1000,
  "return_url": "http://"
}',
  CURLOPT_HTTPHEADER => array(
    'Tbk-Api-Key-Secret: 579B532A7440BB0C9079DED94D31EA1615BACEB56610332264630D42D0A36B1C',
    'Content-Type: application/json',
    'Tbk-Api-Key-Id: 597055555532',
    'Cookie: cookie_webpay3g_certificacion=!gBoJSR5WMlBozYdI30JLr8Fx4h8cVFmN16lUTsTIEmY0wU0NZBxkjnn3Ih4NZi8aPWBxy0fhHWf6/yw='
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;