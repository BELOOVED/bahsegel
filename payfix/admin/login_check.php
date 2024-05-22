<?php
include '../inc/config.php';
$response = [];

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $db->real_escape_string($_POST['username']);
    $password = $db->real_escape_string($_POST['password']); 

    $query = "SELECT * FROM admin WHERE user = '$username' AND pass = '$password'";
    $result = $db->query($query);

    if($result && $result->num_rows > 0) {
        $_SESSION['admin_login'] = true; 
        $response['status'] = 'success';
    } else {
        $response['status'] = 'error';
    }
} else {
    $response['status'] = 'error';
}

echo json_encode($response);
?>
