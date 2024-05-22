<?php
include '../inc/config.php';

$response = [];

if(isset($_POST['id'])) {
    $userId = $_POST['id'];

    $query = "DELETE FROM users WHERE id = '$userId'";

    if($db->query($query)) {
        $response['status'] = 'success';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Veritabanı hatası: ' . $db->error;
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Kullanıcı ID alınamadı!';
}

echo json_encode($response);
?>
