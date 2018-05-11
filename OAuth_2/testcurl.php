<?php
  $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://sandbox.api.intuit.com/v2/company/123146057504139/account/1",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Accept: application/json",
    "authorization: client_id = \"Q0i1fPYLMH28GivZTRPxKrQG4OSkrqzi1KAwMiLWw5yFawwIi8\", client_secret = \"zADHboOn5CMCqVOZvSNSvhkbry8fHg6OqTDvCIBZ\"",
    "cache-control: no-cache",
    "intuit_tid: idg-jjlpbychvirema2bwykwepzh-3767771",
    "User-Agent: APIExplorer",
  ),
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
